<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Backend\PrintServer;

class PrintServerController extends Controller
{
    public function index()
    {
        $data = PrintServer::all();

        return view('backend.PrintServer.index', compact('data'));
    }

    public function store(Request $request)
    {
        PrintServer::create($request->all());

        return redirect('/manager/printserver');
    }

}
