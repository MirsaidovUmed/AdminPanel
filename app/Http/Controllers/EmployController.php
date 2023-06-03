<?php

namespace App\Http\Controllers;

use App\employ;
use App\User;
use Illuminate\Http\Request;

class EmployController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('employ' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $users = new User;

        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->course = $request->input('course');
        $users->time = $request->input('time');
        $users->password = $request->input('phone');
        $users->save();
        return redirect('employ')->with('status','Data Added for Users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function show(employ $employ)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\employ $employ
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $users = User::where('id' ,'=', $id);
        return view('profile' , compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, employ $employ)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\employ  $employ
     * @return \Illuminate\Http\Response
     */
    public function destroy(employ $employ)
    {
        //
    }
}
