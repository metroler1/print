<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Catridge;
use App\Models\Backend\Manifacture;
use App\Models\Type;
use App\Models\Master;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartridgeController extends Controller
{
    public function index()
    {
        $catridges = Catridge::all();

        return view('backend.cartridge.index', compact('catridges'));
    }

    public function create()
    {
        $manifactures = Manifacture::all();
        $types = Type::all();
        $masters = Master::all();

        return view('backend.cartridge.add', [
            'manifactures' => $manifactures,
            'types' => $types,
            'masters' => $masters
        ]);
    }

    public function store(Request $request)
    {
        Catridge::create($request->all());

        return redirect('/manager/cartridge');
    }

}
