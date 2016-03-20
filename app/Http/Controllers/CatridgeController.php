<?php

namespace App\Http\Controllers;

use App\Models\Catridge;
use App\Models\Manifacture;
use App\Models\Type;
use App\Models\Master;
use Illuminate\Http\Request;
use App\Http\Requests;

class CatridgeController extends Controller
{
    public function add()
	{
		$manifactures = Manifacture::all();
		$types = Type::all();
		$masters = Master::all();

		return view('backend.catridge.add', [
			'manifactures' => $manifactures,
			'types' => $types,
			'masters' => $masters
		]);
	}

	public function store(Request $request)
	{
		$catridge = new Catridge;
		$catridge->current_id = $request->current_id;
		$catridge->manifacture = $request->manifacture;
		$catridge->model = $request->model;
		$catridge->type = $request->type;
		$catridge->printer_has = $request->printer_has;
		$catridge->master = $request->master;
		$catridge->auxiliary = $request->auxiliary;
		$catridge->save();

		return redirect('/addcatridge');
	}
}
