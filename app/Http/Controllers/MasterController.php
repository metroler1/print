<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master;
use App\Http\Requests;

class MasterController extends Controller
{
	public function index()
	{

	}

    public function add()
	{
		return view('backend.master.add');
	}

	public function store(Request $request)
	{
		Master::create($request->all());

		return redirect('/manager/master/add');
	}
}
