<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Check;
use App\Http\Requests\CheckRequest as CheckRequest;

class CheckController extends Controller
{
	public function index()
	{
		$checkCreate = Check::where('master', 'Максим')
							->groupBy('influence')
							->having('influence', '>', '0')
							->get();
//		$checkCreate = date('Y-m-d');
		return view('frontend.check.index', compact('checkCreate'));
	}

	public function add()
	{
		return view('frontend.check.add');
	}

	public function store(CheckRequest $request)
	{
//		$catridgeModel = [];
//
//		$check = new Check;
//		$check->catridge_model = $request->catridge_model;
//		$check->price = $request->price;
//		$check->master = $request->master;
//
//		$check->save();
//
//		return redirect('/catridge/check');

//		Check::create($request->all());


//
		$check = new Check;
		$check->catridge_model = $request->catridge_model;
		$check->price = $request->price;
		$check->master = $request->master;
		$check->influence = $request->influence;
		$check->save();
		$response = array(
			'status' => 'success',
			'msg' => 'Setting created successfully',
		);
//		return \Response::json($response);
		return redirect('/catridge/check');
	}
}
