<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;
use App\Http\Requests;

class TypeController extends Controller
{
    public function add()
	{
		return view('backend.type.add');
	}

	public function store(Request $request)
	{
		Type::create($request->all());

		return redirect('/manager/add');
	}
}
