<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Check;

class CheckController extends Controller
{
	public function index()
	{
		return view('frontend.check.index');
	}

	public function add()
	{
		return view('frontend.check.add');
	}

	public function store(Request $request)
	{
		$catridgeModel = [];
		$catridgeModel = $
		$check = new Check;
		$check->catridge_model = $request->catridge_model;
		$check->price = $request->price;
		$check->master = $request->master;

		$check->save();

		return redirect('/catridge/check');
	}
}
