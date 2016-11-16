<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Office;
use App\Models\Backend\OfficeImage;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;


class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::all();
        return view('backend.office.index', compact('offices'));
    }

    public function edit($id)
    {
        $office = Office::findOrFail($id);

        $officeImgObj = new OfficeImage();

        $officeImg = $officeImgObj->getImageList($id);

        return view('backend.office.edit', compact('office', 'officeImg'));
    }

    public function update($id, Request $request)
    {

        if(Input::hasFile('fileMulti')) {
            //upload an image to the /img/tmp directory and return the filepath.
            $files = Input::file('fileMulti');
           foreach ($files as $key => $file)
           {
               $tmpFilePath = '/img/user_image/' . \Auth::user()->name;
               $tmpFileName = time() . '-' . $file->getClientOriginalName();
//               $filenameFileLocal = iconv("UTF-8","WINDOWS-1251",$tmpFileName);
               $file = $file->move(public_path() . $tmpFilePath, $tmpFileName);
               $path = $tmpFilePath . '/' . $tmpFileName;
               $data[] = ['path' =>$path, 'office_id' => $id];
           }

                DB::table('office_images')->insert($data);
                return redirect('/');
            } else {
                echo 'Файлы отсутствуют';
            }
    }

    public function show($id)
    {
        $office = Office::findOrFail($id);

        return view('backend.office.show', compact('office'));
    }

    public function add()
    {

        return view('backend.office.add');
    }


    public function store(Request $request)
    {
        Office::create($request->all());

        return redirect('/manager/office');
    }
}
