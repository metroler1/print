<?php

namespace App\Http\Controllers;

use App\Models\Backend\CartidgeModel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\Check;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CheckRequest as CheckRequest;
use App\Helpers\PoolObj;

class CheckController extends Controller
{

    public function index()
	{

        $check = new Check();

//		$checkCreate = Check::billListsMaksim()->get();

        $checkCreate =  $check->bill(1);
        $checkCreateSecondMaster = $check->bill(2);

		return view('frontend.check.index', compact('checkCreate', 'checkCreateSecondMaster'));
        
	}

	public function add()
	{
        $masters = PoolObj::getSome('masterObj')->lists('master_name', 'id');


//        $office_name = Db::table('office')->select('office_name')->lists('office_name', 'office_name');

		return view('frontend.check.add', compact('masters'));

	}


	public function show($influence, $master)
	{
        $sessiya = \Session::get('_token');

        $check  = new Check();


		if (isset($influence) && isset($master))
		{

            $checkData = $check->getDetailBill($influence, $master);

//           подсчет суммы
            $total = number_format($check->sum($checkData), 2);

            return view('frontend.check.show', compact('checkData', 'total'));
		}
		
	}

	public function store(CheckRequest $request)
	{
//        ищем в цене запятую если есть заменяем на точку
        if (strripos($request->price, ','))
        {
            $request->price = str_replace(',', '.', $request->price);
        }


		$check = new Check();
		$check->catridge_model = $request->catridge_model;
		$check->catridge_current_id = $request->catridge_current_id;
		$check->price = $request->price;
        $check->manifacture_id = $request->manifact;
		$check->master_id = $request->master;
        $check->office_id = $request->office;
		$check->influence = strtotime($request->influence);
		$check->type_of_repair_id = $request->type_of_repair;

		$check->save();

        return response()->json(['response' => strtotime($request->influence) . 'R' . \Session::get('_token')]);

	}

	public function giveData()
	{
        //отдаем список офисов в js для рендинга
        $office_name = Db::table('office')->select('office_name', 'id')->lists('office_name', 'id');

        $cartridge_service = DB::table('type_of_service_on_cartridges')->select('name', 'id')->lists('name', 'id');


        $carModelObj = new CartidgeModel();

        $cartridge_model = DB::table('cartridge_models')->select('model')->lists('model');

        $manifacture = DB::table('manifacture')->select('manifacture', 'id')->lists('manifacture', 'id');


        $data = [$office_name, $cartridge_service, $cartridge_model, $manifacture];
        
        return response()->json($data);
	}
    
}
