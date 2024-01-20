<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WorkRequest;
use App\Models\User;
use App\Models\Work;
// use Illuminate\Support\Facades\DB;

class DailyAttendanceController extends Controller
{
    public function index(Request $request)
    {
        // $users = DB::table('users')->paginate(5);
        // $works = DB::table('works')->paginate(5);

        // return view('attendance', [
        //     'users' => $users,
        //     'works' => $works,
        // ]);




        $users = User::simplePaginate(5);
        return view('attendance', ['users' => $users]);

        $works = Work::simplePaginate(5);
        return view('attendance', ['works' => $works]);
    }


    public function search(Request $request)
    {
        return view('attendance');
    }
}
