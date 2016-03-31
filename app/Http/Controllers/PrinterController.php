<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Printer;
use App\Models\Type;
use App\Models\Manifacture;
use App\Models\Place;
use App\Models\Master;
use App\Http\Requests\StorePrintersPostRequest as StorePrintersPostRequest;
use Illuminate\HttpResponse;
use App\Http\Requests;




class PrinterController extends Controller
{
	public function index()
	{
		$printer = Printer::all();
		return view('frontend.printer.index', ['printer' => $printer]);
	}

    public function add()
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
	public function show($id)
	{
		$printeres = Printer::findOrFail($id);

		return view('frontend.printer.show', compact('printeres'));

	}

	public function edit($id)
	{
		$printeres = Printer::findOrFail($id);

		return view('frontend.printer.edit', compact('printeres'));
	}

	public function update($id, StorePrintersPostRequest $request)
	{
		$printeres = Printer::findOrFail($id);

		$printeres->update($request->all());

		return redirect('printer/show');
	}

	public function store(StorePrintersPostRequest $request)
	{
		$printer = new Printer;

		$printer->current_id = $request->current_id;
		$printer->manifacture = $request->manifacture;
		$printer->model = $request->model;
		$printer->type = $request->type;
		$printer->place = $request->place;
		$printer->catridge_has = $request->catridge_has;
		$printer->master = $request->master;
		$printer->auxiliary = $request->auxiliary;
		$printer->save();

//		if($request->ajax()){
//			return response()->json();
//		}

		return redirect('/manager/addprinter');
	}


}
