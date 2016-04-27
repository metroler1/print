<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Backend\PaperCounter;

class PaperCountersController extends Controller
{
    public function index()
    {
        return view('backend.paper.index');
    }

    public function add()
    {

        return view('backend.paper.add');
    }

    public function store(Request $request)
    {
        $paperCounter = new PaperCounter;

        $paperCounter->device_name = $request->device_name;
        $paperCounter->number_of = $request->number_of;

        $paperCounter->save();

        return redirect('manager/papers');
    }
}
