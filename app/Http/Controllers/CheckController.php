<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\Check;
use App\Http\Requests\CheckRequest as CheckRequest;

class CheckController extends Controller
{
	public function index()
	{
		$checkCreate = Check::billListsMaksim()->get();
		$checkCreateSecondMaster = Check::billListsVladimir()->get();

		
		return view('frontend.check.index', compact('checkCreate', 'checkCreateSecondMaster'));
	}

	public function add()
	{
		return view('frontend.check.add');
	}

	public function show($influence)
	{
		if (isset($influence)) 
		{
			$checks = Check::find($influence);
			$checkData = Check::showCheckId($influence)->get();

			return view('frontend.check.show', compact('checks', 'checkData'));
		}
		
	}

	public function store(CheckRequest $request)
	{

		$check = new Check;
		$check->catridge_model = $request->catridge_model;
		$check->catridge_current_id = $request->catridge_current_id;
		$check->price = $request->price;
		$check->master = $request->master;
		$check->influence = $request->influence;
		$check->type_of_repair = $request->type_of_repair;
		
		$check->save();
		// $response = array(
		// 	'status' => 'success',
		// 	'msg' => 'Setting created successfully',
		// );
//		return \Response::json($response);
		// return redirect('/cartridge/check');
	}

	public function giveData()
	{

		$data = Check::all();
		
		return $data;
		

	}

}
