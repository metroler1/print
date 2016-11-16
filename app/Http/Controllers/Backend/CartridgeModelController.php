<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Backend\CartidgeModel;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class CartridgeModelController extends Controller
{
    public function index()
    {
        $carModelObj = new CartidgeModel();

        $carModel =  $carModelObj->getList();

        return view('backend.cartridge.model.index', compact('carModel'));
    }

    public function store(Request $request)
    {
        CartidgeModel::create($request->all());

        return redirect('/manager/cartridge/models');
    }

}
