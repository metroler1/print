<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Models\Backend\Manifacture;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ManifactureController extends Controller
{
    public function index()
    {
        $data = Manifacture::all();

        return view('backend.manifacture.index', compact('data'));
    }

    public function add()
    {
        return view('backend.manifacture.add');
    }

    public function store(Request $request)
    {
        Manifacture::create($request->all());

        return redirect('/manager/manifacture');
    }
}
