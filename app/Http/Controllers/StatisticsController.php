<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Master;
use App\Models\Statistics;
use App\Models\Backend\PaperCounter;
use App\Models\Check;
use App\Models\Printer;
use App\Models\Catridge;
use DB;

class StatisticsController extends Controller
{
    public function index(Request $request)
    {



//            $type_of_repair = [$request->refil, $request->recover, $request->repair];
////
//            $master = [$request->maksim, $request->vladimir];
////
////
//            $checks = Check::whereIn('type_of_repair', $type_of_repair)
//                            ->whereBetween('influence', array(strtotime($request->datepickerfrom), strtotime($request->datepickerto)))
//                            ->whereIn('master', $master)
//                            ->get();


            //используется для вывода чекбоксов
            $printeres = Printer::printerWithIp()->get();
//
//            $paper_counters = DB::table('paper_counters')
//                                ->whereBetween('influence', array(strtotime($request->datepickerfrom), strtotime($request->datepickerto)))
//                                ->get();
//
//            $datepickerfrom = strtotime($request->datepickerfrom);
//            $datepickerto = strtotime($request->datepickerto);
           

//            $paper_counters = DB::select(
//                                "SELECT device_name, SUM(number_of) as number_of, influence FROM paper_counters WHERE influence BETWEEN ? AND ? group by device_name", array($datepickerfrom, $datepickerto));


            return view('frontend.statistics.index', compact('printeres'));
    }

    public function priceIndex()
    {
        $statistics = new Statistics();

        $filters = $statistics->getFilterPrice();

        $statPrice = $statistics->priceStatistic();




        return view('frontend.statistics.price.index', compact('filters', 'statPrice'));

    }

    public function api()
    {
        $statistics = new Statistics();
        $statPrice = $statistics->priceStatistic();
//        return Check::all();
        return $statPrice;
    }

    public function paperIndex()
    {
        $statistics = new Statistics();

        $filters1 = $statistics->getPaperFilter1();
        $filters2 = $statistics->getPaperFilter2();

        $statPaper = $statistics->paperStatistic();

        

        return view('frontend.statistics.paper.index', compact('filters1', 'filters2', 'statPaper'));
    }

    public function store(Request $request)
    {
        $obj = new Statistics();

        $st = $obj->getFilterPrice();



        foreach ($st as $value)
        {
            $arr[] = $value->master_name;

        }
        
        



    }

}
