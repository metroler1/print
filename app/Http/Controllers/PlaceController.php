<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;
use App\Http\Requests;

class PlaceController extends Controller
{
    public function index()
	{

	}

	public function add()
	{
		return view('backend.place.add');
	}

	public function store(Request $request)
	{
		Place::create($request->all());

		return redirect('/manager/place/add');
	}
}
