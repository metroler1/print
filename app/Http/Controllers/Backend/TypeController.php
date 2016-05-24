<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Type;
use App\Http\Requests\Backend\TypeRequest as TypeRequest;

class TypeController extends Controller
{
    public function index()
    {
        $data = Type::all();

        return view('backend.type.index', compact('data'));
    } 

    public function store(TypeRequest $request)
    {
        Type::create($request->all());

        return redirect('/manager/type');
    }
    
    public function update($id, TypeRequest $request)
    {
        $type = Type::findOrFail($id);

        $type->update($request->all());

        return redirect('/manager/type');

    }

    public function destroy($id)
    {
        $type = Type::findOrFail($id);

        $type->delete();

        return redirect('/manager/type');
    }

}
