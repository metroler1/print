<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WifiController extends Controller
{
    public function index()
    {
        return view('frontend.wifi.index');
    }
}
