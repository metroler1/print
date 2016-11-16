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

        $car = new Catridge();

        $catridges = $car->getCartridge();
//
//
//
//        $sort = $request->sort;
////        $flag = $request->flag;
//        $sortType = $request->sortType;
//        if (isset($sort) && isset($sortType))
//        {
//         $catridges = Catridge::orderBy($sortType, $sort)->get();
//
////            return view('frontend.cartridge.index', ['catridges' => $catridges]);
//        }else{
//            $catridges = Catridge::orderBy('current_id', 'desc')->get();
//
//
//        }
//        return view('frontend.catridge.index', ['catridges' => $catridges]);

        return view('frontend.catridge.index', compact('catridges'));
	}

	public function show($id)
	{

		$catridges = Catridge::findOrFail($id);

		$storageLocationCatridges = StorageLocationCatridges::all();

		return view('frontend.catridge.show', compact('catridges', 'storageLocationCatridges'));
	}



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
