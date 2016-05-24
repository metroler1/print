<?php

namespace App\Http\Controllers;

use App\Models\Catridge;
use App\Models\Manifacture;
use App\Models\Type;
use App\Models\Master;
use App\Models\Bill;
use App\Models\StorageLocationCatridges;
use App\Http\Requests;
use App\Http\Requests\CatridgesRequest as CatridgesRequest;
use Carbon\Carbon;
use Illuminate\Support\Facades\Request;

class CatridgeController extends Controller
{
	public function index(CatridgesRequest $request)
	{

        $sort = $request->sort;
//        $flag = $request->flag;
        $sortType = $request->sortType;
        if (isset($sort) && isset($sortType))
        {
         $catridges = Catridge::orderBy($sortType, $sort)->get();

//            return view('frontend.cartridge.index', ['catridges' => $catridges]);
        }else{
            $catridges = Catridge::orderBy('current_id', 'desc')->get();


        }
        return view('frontend.catridge.index', ['catridges' => $catridges]);
	}

	public function show($id)
	{

		$catridges = Catridge::findOrFail($id);

		$storageLocationCatridges = StorageLocationCatridges::all();

		return view('frontend.catridge.show', compact('catridges', 'storageLocationCatridges'));


	}

	public function edit($id)
	{
		$catridges = Catridge::findOrFail($id);

		return view('frontend.cartridge.edit', compact('catridges'));
	}

	public function update($id, CatridgesRequest $request)
	{
		$catridges = Catridge::findOrFail($id);

		$catridges->update($request->all());

		return redirect('cartridge/show');

	}

//	public function store(CatridgesRequest $request)
//	{
//		$catridge = new Catridge;
//		$catridge->current_id = $request->current_id;
//		$catridge->manifacture = $request->manifacture;
//		$catridge->model = $request->model;
//		$catridge->type = $request->type;
//		$catridge->location = $request->location;
//		$catridge->master = $request->master;
//		$catridge->auxiliary = $request->auxiliary;
//		$catridge->save();
//
//		return redirect('/manager/addcatridge');
//	}

	public function getCatridgesFromMaster(CatridgesRequest $request)
	{

		$master = $request->master;
		$flag = $request->flag;


		if($flag == '1')
		{
			$catridges = Catridge::toMaster($master);


			return redirect('cartridge/show');

		}elseif($flag == '0')
		{
			Catridge::fromMaster($master)->update(['location' => 'Склад']);

//			$check = new Bill;
//
//			$check->catridge_model = $master;
//
//			$check->save();

			return redirect('cartridge/show');
		}
	}


}
