<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function registered()
    {
        $users = User::all()->where('usertype' , '=' ,'user');

        return view('admin.register')->with('users' , $users);
    }

    public function registeredit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('admin.register-edit')->with('users', $users);
    }
    public function registerupdate(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('username');
        $users->phone = $request->input('phone');
        $users->days = $request->input('days');
        $users->level = $request->input('level');
        $users->time = $request->input('time');
        $users->birthdate = $request->input('birthdate');
        $users->usertype = $request->input('usertype');
        $users->update();

        return redirect('/role-register')->with('status' , 'Your Data is Updated');
    }
    public function registerdelete($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/role-register')->with('status' , 'Your Data is Deleted');
    }
}
