<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Models\Catridge;
use App\Models\Backend\Manifacture;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CatridgesRequest as CatridgesRequest;
use App\Helpers\PoolObj;

class CartridgeController extends Controller
{
    public function index()
    {
        $car = new Catridge();

        $catridges = $car->getCartridge();

        return view('backend.cartridge.index', compact('catridges'));
    }

    public function create()
    {
        $manifactures = PoolObj::getSome('manifactureObj')->lists('manifacture', 'id');
        $type = PoolObj::getSome('typeObj')->lists('type', 'id');
        $masters = PoolObj::getSome('masterObj')->lists('master_name', 'id');

        $office_name = DB::table('office')->select('office_name')->lists('office_name', 'office_name');

        $cartModel = PoolObj::getSome('$cartModelObj')->lists('model', 'id');

        return view('backend.cartridge.add', compact('manifactures', 'type', 'masters', 'office_name', 'cartModel'));
    }

    public function edit($id)
    {
        $catridges = Catridge::findOrFail($id);


        $masters = PoolObj::getSome('masterObj')->lists('master_name', 'id');

        $type = PoolObj::getSome('typeObj')->lists('type', 'id');

        $cartModel = PoolObj::getSome('$cartModelObj')->lists('model', 'id');


        $manifactures = PoolObj::getSome('manifactureObj')->lists('manifacture', 'id');
        $office_name = PoolObj::getSome('officeObj')->lists('office_name', 'office_name');

//        $office_name = DB::table('office')->select('office_name')->lists('office_name', 'office_name');


        return view('backend.cartridge.edit', compact('catridges', 'masters', 'type', 'manifactures', 'office_name', 'cartModel'));
    }

    public function update($id, CatridgesRequest $request)
    {
        $catridges = Catridge::findOrFail($id);

        $catridges->update($request->all());

        return redirect('/manager/cartridge');

    }


    public function store(Request $request)
    {
        Catridge::create($request->all());

        return redirect('/manager/cartridge');
    }

}
