<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\User;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('department' , compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
        return redirect('department')->with('status','Data Added for Users');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department $grade
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $grade
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $users = User::findOrFail($id);
        return view('department')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $grade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $users = User::find($id);
        $users->name = $request->input('name');
        $users->phone = $request->input('phone');
        $users->days = $request->input('course');
        $users->time = $request->input('time');
        $users->update();

        return redirect('department')->with('status' , 'Your Data is Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $grade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('/department')->with('status' , 'Your Data is Deleted');
    }


    /*
     * Assign Subjects to Grade
     *
     * @return \Illuminate\Http\Response
     */

}
