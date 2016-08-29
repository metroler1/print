<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Backend\User;

class UserController extends Controller
{
    public function index()
    {
        $user_obj = new User();

        $users = $user_obj->all();

        return view('backend.user.index', compact('users'));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('backend.user.edit', compact('users'));
    }

    public function update($id, Request $request)
    {
        $users = User::findOrFail($id);

        $users->update($request->all());

        return redirect('/manager/users');
    }

    public function create()
    {
        return view('backend.user.create');
    }

    public function store(Request $request)
    {

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);

        $user->save();

        return redirect('/manager/users');
    }
}
