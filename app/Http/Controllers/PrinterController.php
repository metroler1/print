<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Printer;
use App\Models\Type;
use App\Models\Manifacture;
use App\Models\Place;
use App\Models\Master;
use App\Http\Requests\StorePrintersPostRequest as StorePrintersPostRequest;
use Illuminate\HttpResponse;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;


class PrinterController extends Controller
{
	public function index(StorePrintersPostRequest $request)
	{
        $print = new Printer();

        $printer = $print->getPrinterList();
        

		return view('frontend.printer.index', compact('printer'));
	}

	public function show($id)
	{
		$printeres = Printer::findOrFail($id);

		return view('frontend.printer.show', compact('printeres'));

	}

}
