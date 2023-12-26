<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DailyAttendanceController extends Controller
{
    public function index()
    {
    return view('attendance');
    }

    public function search()
    {
    return view('attendance');
    }
}
