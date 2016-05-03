<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Master;
use App\Models\Backend\PaperCounter;
use App\Models\Check;
use App\Models\Printer;
use App\Models\Catridge;
use DB;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {
            $type_of_repair = [$request->refil, $request->recover, $request->repair];

            $master = [$request->maksim, $request->vladimir];


            $checks = Check::whereIn('type_of_repair', $type_of_repair)
                            ->whereBetween('influence', array(strtotime($request->datepickerfrom), strtotime($request->datepickerto)))
                            ->whereIn('master', $master)
                            ->get();


            //используется для вывода чекбоксов
            $printeres = Printer::printerWithIp()->get();

//            $paper_counters = DB::table('paper_counters')
//                                ->whereBetween('influence', array(strtotime($request->datepickerfrom), strtotime($request->datepickerto)))
//
//                                ->get();


            $datepickerfrom = strtotime($request->datepickerfrom);
            $datepickerto = strtotime($request->datepickerto);

            $paper_counters = DB::select(
                                "SELECT device_name, SUM(number_of) as number_of, influence FROM paper_counters WHERE influence BETWEEN ? AND ? group by device_name", array($datepickerfrom, $datepickerto));


        return view('frontend.statistics.index', compact('checks', 'printeres', 'paper_counters'));
    }
}
