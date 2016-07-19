<?php

namespace App\Http\Controllers\Backend;

use App\Models\Printer;
use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Backend\Manifacture;
use App\Models\Place;
use App\Models\Master;
use App\Http\Requests;
use App\Http\Controllers\Controller;

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
        $printer = Type::all();
        $manifactures = Manifacture::all();
        $places = Place::all();
        $masters = Master::all();
        return view('backend.printer.add', ['printer' => $printer,
            'manifactures' => $manifactures,
            'places' => $places,
            'masters' => $masters
        ]);
    }


}
