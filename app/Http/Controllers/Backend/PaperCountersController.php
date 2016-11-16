<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Item;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Backend\PaperCounter;
use App\Models\Printer;
use DB;
use Excel;
use App\Http\Requests\Backend\PaperCountersRequest as PaperCountersRequest;
use Illuminate\Pagination\PaginationServiceProvider;


class PaperCountersController extends Controller
{
    public function index()
    {
//        $data = PaperCounter::getFullData()->get();
        $paperCount = new PaperCounter();

//        $data = $paperCount->getWholeData();
        $data = $paperCount->dta()->paginate(20);

        return view('backend.paper.index', compact('data'));
    }


    public function create()
    {
        $printeres = Printer::printerWithIp()->get();

        return view('backend.paper.add', compact('printeres'));
    }

    public function show($id)
    {

    }

    public function store(PaperCountersRequest $request)
    {
//        PaperCountersRequest
        $paperCounter = new PaperCounter;

        $paperCounter->device_name = $request->device_name;
        $paperCounter->number_of = $request->number_of;
        $paperCounter->influence = $request->influence;

        $paperCounter->save();

//        PaperCounter::create($request->all());

        return redirect('manager/papers');
    }

    public function importExport()
    {
        $printserver = DB::table('print_serveres')->select('name', 'id')->lists('name', 'id');



        return view('backend.paper.xml', compact('printserver'));
    }

    private function isValue($var_name, $val, $start_iter)
    {

    }

    public function importExcel(Request $request)
    {

        $paperCounter = new PaperCounter;
//        проверяем на существование файла
       if(Input::hasFile('import_file')) {

//           получаем его путь
           $path = Input::file('import_file')->getRealPath();

//           получаем массив не отсортированных данных
           $homepage = file($path);


            //делаем выборку из базы
           $date_dispatch = PaperCounter::getDispatchDate()->lists('date_dispatch');
           $date_dispatch = $date_dispatch->toArray();

           $computer_name = PaperCounter::getComputerName()->lists('computer_name');
           $computer_name = $computer_name->toArray();



//           count($homepage) -- кол-во элементов массив &&  начинаем перебор со второго элемента в начале идут не нужные данные
           for($i = 2; $i < count($homepage); $i++)
           {
               //получаем разбиваем строку на индексированный массив с разделителем пробел
               $str = explode(" ", $homepage[$i]);
               //убираем постые элементы
               $new_array = array_diff($str, array(''));
//               заново индексируем
               list($keys, $values) = array_divide($new_array);

//              цифра 7 взята, чтобы исключить массивы только с одним элеметом в других используется 7 и более
                if (count($values) >= 7)
                {
                    $timestamp = $values[3] . ' ' . $values[4];

                    if(!empty($values[7]) && !empty($values[6]))
                    {
                        $printer = $values[6] . ' ' . $values[7];
//                        var_dump($printer);
                    }else{
                        $printer = $values[6];
                    }

                    $k = 7;
                    while (isset($values[$k]))
                    {
                        $printer = $printer . ' ' . $values[$k];
                        echo $values[$k];
                        $k++;
                    }

                    //преобразуем время в unix-time
                    $timestamp = strtotime($timestamp);
//                    попадаются путсые ячейки с типом булин => не записываем их в базу
                    if (gettype($timestamp) != 'boolean')
                    {
//                        если в базе таких значений нет формируем массив для записи в бд
                        $search_result_time = array_search($timestamp, $date_dispatch);
                        $search_result_comp = array_search($values[5], $computer_name);

                        if (!$search_result_time || !$search_result_comp)
                        {
                            $data[$i] = [
                                'user_name' => $values[0],
                                'pages' => $values[1],
                                'copies' => $values[2],
                                'date_dispatch' => $timestamp,
                                'computer_name' => $values[5],
                                'printer_name' => $printer,
                                'printserver_id' => $request->printserver

                            ];
                        }else{
                            dd('Эти данные уже есть в базе');
                        }
                    }
                }
           }

           if(!empty($data)){

//               dd($data);
               DB::table('paper_counters')->insert($data);
               return redirect('/manager/papers');
           }


       }

    }

}
