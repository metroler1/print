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
        $flag = $request->flag;
        if (isset($sort))
        {
         $catridges = Catridge::orderBy('current_id', $sort)->get();

            return view('frontend.catridge.index', ['catridges' => $catridges]);
        }else{
            $catridges = Catridge::orderBy('current_id', 'asc')->get();

            return view('frontend.catridge.index', ['catridges' => $catridges]);
        }

        return view('frontend.catridge.index', ['catridges' => $catridges]);

	}

    public function add()
	{
		$manifactures = Manifacture::all();
		$types = Type::all();
		$masters = Master::all();

		return view('backend.catridge.add', [
			'manifactures' => $manifactures,
			'types' => $types,
			'masters' => $masters
		]);
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

		return view('frontend.catridge.edit', compact('catridges'));
	}

	public function update($id, CatridgesRequest $request)
	{
		$catridges = Catridge::findOrFail($id);

		$catridges->update($request->all());

		return redirect('catridge/show');

	}

	public function store(CatridgesRequest $request)
	{
		$catridge = new Catridge;
		$catridge->current_id = $request->current_id;
		$catridge->manifacture = $request->manifacture;
		$catridge->model = $request->model;
		$catridge->type = $request->type;
		$catridge->printer_has = $request->printer_has;
		$catridge->master = $request->master;
		$catridge->auxiliary = $request->auxiliary;
		$catridge->save();

		return redirect('/addcatridge');
	}

	public function getCatridgesFromMaster(CatridgesRequest $request)
	{

		$master = $request->master;
		$flag = $request->flag;


		if($flag == '1')
		{
			$catridges = Catridge::toMaster($master);


			return redirect('catridge/show');

		}elseif($flag == '0')
		{
			Catridge::fromMaster($master)->update(['location' => 'Склад']);

//			$check = new Bill;
//
//			$check->catridge_model = $master;
//
//			$check->save();

			return redirect('catridge/show');
		}
	}


}
