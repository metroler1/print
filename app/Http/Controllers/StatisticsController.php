<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Master;

class StatisticsController extends Controller
{
    public function index()
    {


        return view('frontend.statistics.index');
    }
}
