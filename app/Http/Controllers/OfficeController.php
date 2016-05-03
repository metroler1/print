<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Office;

class OfficeController extends Controller
{
    public function index()
    {
        $offices = Office::all();
        return view('backend.office.index', compact('offices'));
    }

    public function add()
    {

        return view('backend.office.add');
    }

    public function store(Request $request)
    {
//        $file = $request->file('image_path');
//        $filename = $file->getClientOriginalName();
        $office = new Office;
//        $filename = 'fsdfsfsf';
//        $request['image_path'] = $filename;
        $imageFile = $request->image_path;
//        $filename = $imageFile->getClientOriginalName();
        $request->file('image_path')->move(public_path('thumb'), $request->file('image_path')->getClientOriginalName());
        $data = $request->except(['image_path']);
        $data['image_path'] = '/thumb/' . $request->file('image_path')->getClientOriginalName();
        $office->image_path = $data['image_path'];
        $office->save();
    //        Office::create($request->all());

        return redirect('/manager/office/add');
    }
}
