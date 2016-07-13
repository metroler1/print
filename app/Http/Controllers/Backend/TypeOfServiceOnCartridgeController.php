<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Backend\TypeOfServiceOnCartridge;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TypeOfServiceOnCartridgeController extends Controller
{
    public function index()
    {
        $data = TypeOfServiceOnCartridge::all();

        return view('backend.TypeOfServiceOnCartridge.index', compact('data'));
    }

    public function store(Request $request)
    {
        TypeOfServiceOnCartridge::create($request->all());

        return redirect('/manager/cartridge/service');
    }



}
