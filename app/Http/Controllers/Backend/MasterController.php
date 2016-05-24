<?php

namespace App\Http\Controllers\Backend;

use App\Models\Master;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MasterController extends Controller
{
    public function index()
    {
        $data = Master::all();

        return view('backend.master.index', compact('data'));
    }

    public function store(Request $request)
    {
        Master::create($request->all());

        return redirect('/manager/master');
    }

    public function update($id, Request $request)
    {
        $data = Master::findOrFail($id);

        $data->update($request->all());

        return redirect('/manager/master');

    }

    public function destroy($id)
    {

        $data = Master::findOrFail($id);

        $data->delete();

        return redirect('/manager/master');

    }
}
