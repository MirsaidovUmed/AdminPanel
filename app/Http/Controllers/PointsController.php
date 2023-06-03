<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PointsController extends Controller
{
    

    public function index()
    {
        $users = Users::all();

        return view('points' , compact('users'));

    }
}
