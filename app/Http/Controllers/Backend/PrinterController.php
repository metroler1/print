<?php

namespace App\Http\Controllers\Backend;

use App\Models\Printer;
use Illuminate\Http\Request;
use App\Models\Place;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Helpers\PoolObj;

class PrinterController extends Controller
{
    public function index()
    {
        $printer = Printer::all();

        return view('backend.printer.index', compact('printer'));
    }

    public function store(Request $request)
    {
        Printer::create($request->all());

        return redirect('/manager/printer');
    }

    public function create()
    {

        $places = Place::all();

        $masters = PoolObj::getSome('masterObj')->lists('master_name', 'id');

        $office_name = PoolObj::getSome('officeObj')->lists('office_name', 'office_name');

        $type = PoolObj::getSome('typeObj')->lists('type', 'id');


        $manifactures = PoolObj::getSome('manifactureObj')->lists('manifacture', 'id');


        return view('backend.printer.add', ['type' => $type,
            'manifactures' => $manifactures,
            'places' => $places,
            'masters' => $masters,
            'office_name' => $office_name
        ]);
        
    }

    public function edit($id)
    {
        $printeres = Printer::findOrFail($id);
        
        

        $printer = Db::table('printers')->select('room')->lists('room', 'room');
        $person = Db::table('printers')->select('person')->lists('person', 'person');



        $manifactures = PoolObj::getSome('manifactureObj')->lists('manifacture', 'id');
        $type = PoolObj::getSome('typeObj')->lists('type', 'id');
        $office_name = PoolObj::getSome('officeObj')->lists('office_name', 'id');
        $masters = PoolObj::getSome('masterObj')->lists('master_name', 'id');




        return view('backend.printer.edit', compact('printeres', 'manifactures', 'type', 'office_name', 'masters', 'place', 'printer', 'person'));
    }

    public function update($id, Request $request)
    {
        $printeres = Printer::findOrFail($id);

        $printeres->update($request->all());

        return redirect('printer/show');
    }

}
