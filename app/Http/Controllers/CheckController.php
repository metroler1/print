<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests;
use App\Models\Check;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CheckRequest as CheckRequest;
use Psy\Util\Json;

class CheckController extends Controller
{

    public function index()
	{
		$checkCreate = Check::billListsMaksim()->get();
		$checkCreateSecondMaster = Check::billListsVladimir()->get();

		
		return view('frontend.check.index', compact('checkCreate', 'checkCreateSecondMaster'));
	}

	public function add()
	{
        $masters = DB::table('master')->select('master_name')->lists('master_name', 'master_name');
        $office_name = Db::table('office')->select('office_name')->lists('office_name', 'office_name');

		return view('frontend.check.add', compact('office_name', 'masters'));

	}

	public function show($influence)
	{
		if (isset($influence)) 
		{
			$checks = Check::find($influence);
			$checkData = Check::showCheckId($influence)->get();

			return view('frontend.check.show', compact('checks', 'checkData'));
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
		$check->master = $request->master;
        $check->office = $request->office;
		$check->influence = strtotime($request->influence);
		$check->type_of_repair = $request->type_of_repair;
		
		$check->save();

        return response()->json(['response' => "answer"]);

	}

	public function giveData()
	{
        //отдаем список офисов в js для рендинга
        $office_name = Db::table('office')->select('office_name')->lists('office_name');

        $cartridge_service = DB::table('type_of_service_on_cartridges')->select('name')->lists('name');


        $data = [$office_name, $cartridge_service];
        

        return response()->json($data);

	}
    
}
