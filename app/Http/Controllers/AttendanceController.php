<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attendance = Attendance::all();
        return view('attendance');
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
        $attendance = new Attendance;

        $attendance->department_id = $request->input('department_id');
        $attendance->student_id = $request->input('user_id');
        $attendance->date = $request->input('date');
        $attendance->attendance = $request->input('attendance');

        $attendance->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $attendance = Attendance::findOrFail($id);
        return view('attendance');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function update (Request $request, $id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->department_id = $request->input('department_id');
        $attendance->student_id = $request->input('user_id');
        $attendance->date = $request->input('date');
        $attendance->attendance = $request->input('attendance');
        $attendance->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $attendance = Attendance::findOrFail($id);
        $attendance->delete();
    }
}
