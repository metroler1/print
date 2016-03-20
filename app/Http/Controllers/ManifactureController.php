<?php

namespace App\Http\Controllers;

use App\Models\Manifacture;
use Illuminate\Http\Request;
use App\Http\Requests;

class ManifactureController extends Controller
{
    public function add()
	{
		return view('backend.manifacture.add');
	}

	public function store(Request $request)
	{
		Manifacture::create($request->all());

		return redirect('/manager/addmanifacture');
	}
}
