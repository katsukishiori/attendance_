<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class RegisteredUserController extends Controller
{

    public function index()
    {
        $users = User::all();
        return view('login', ['users' => $users]);
        
    }

    public function create()
    {
        return view('auth.register');
    }

    public function store(RegisterRequest $request)
    {
        $user = User::create([
            "name" => $request->input("name"),
            "email" => $request->input("email"),
            "password" => Hash::make($request->input("password")),
        ]);
        //$users = $request->only(['name', 'email', 'password', 'password_confirmation']);
       // "password"=>Hash::make($req->input("password")),
        //User::create($user);
       
        return redirect('/login');

    }
}


