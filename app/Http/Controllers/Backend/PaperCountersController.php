<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Backend\PaperCounter;
use App\Models\Printer;
use DB;
use Excel;
use App\Http\Requests\Backend\PaperCountersRequest as PaperCountersRequest;


class PaperCountersController extends Controller
{
    public function index()
    {
        $data = PaperCounter::getDataDate()->get();
        return view('backend.paper.index', compact('data'));
    }

//    public function add()
//    {
//        $printeres = Printer::printerWithIp()->get();
//
//        return view('backend.paper.add', compact('printeres'));
//
//    }

    public function create()
    {
        $printeres = Printer::printerWithIp()->get();

        return view('backend.paper.add', compact('printeres'));
    }

    public function show($id)
    {

    }

    public function store(PaperCountersRequest $request)
    {
//        PaperCountersRequest
        $paperCounter = new PaperCounter;

        $paperCounter->device_name = $request->device_name;
        $paperCounter->number_of = $request->number_of;
        $paperCounter->influence = $request->influence;

        $paperCounter->save();

//        PaperCounter::create($request->all());

        return redirect('manager/papers');
    }

    public function importExport()
    {        
        return view('backend.paper.xml');
    }

    public function importExcel()
    {
//        if(Input::hasFile('import_file')){
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function($reader) {
            })->get();
            if(!empty($data) && $data->count()){
                foreach ($data as $key => $value) {
                    $insert[] = ['title' => $value->title, 'description' => $value->description];
                }
                if(!empty($insert)){
                    DB::table('item')->insert($insert);
                    dd('Insert Record successfully.');
                }
            }
//        }else{
//            dd('fsfsd');
//        }
        return back();
    }

}
