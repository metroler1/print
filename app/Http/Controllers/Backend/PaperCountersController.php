<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Backend\PaperCounter;
use App\Models\Printer;
use App\Http\Requests\Backend\PaperCountersRequest as PaperCountersRequest;


class PaperCountersController extends Controller
{
    public function index()
    {

        return view('backend.paper.index');
    }

    public function add()
    {
        $printeres = Printer::printerWithIp()->get();

        return view('backend.paper.add', compact('printeres'));
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
}
