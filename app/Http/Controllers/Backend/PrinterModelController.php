<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Backend\PrinterModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PrinterModelController extends Controller
{
    public function index()
    {
        $priModelObj = new PrinterModel();

        $priModel =  $priModelObj->getList();

        return view('backend.printer.model.index', compact('priModel'));
    }

    public function store(Request $request)
    {
        PrinterModel::create($request->all());

        return redirect('/manager/printer/models');
    }
}
