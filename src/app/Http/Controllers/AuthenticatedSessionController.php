<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\LoginRequest;
use App\Models\User;


class AuthenticatedSessionController extends Controller
{


    public function login()
    {
        $users = User::all();
        return view("auth.login", ['users' => $users]);
    }


    public function store(LoginRequest $request)
    {
        // $user = $request->validate([
        //     'email' => ['required', 'email'],
        //     'password' => ['required'],
        // ]);


        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('work');
        } else {
            return redirect()->route('auth.login')->withInput()->withErrors(['loginError' => 'メールアドレスまたはパスワードが正しくありません。']);
        }



        //         $user = [
        //             "email" => $request->input("email"),
        //             "password" => Hash::make($request->input("password")),
        //         ];

        //          // ログインに成功したとき
        //         if (Auth::attempt($user)) {

        //         $request->session()->regenerate();
        //         return redirect()->route('work');
        //         } else {
        //         // ログインに失敗した場合のログ出力など
        //         return redirect()->route('auth.login')->withInput()->withErrors(['loginError' => 'メールアドレスまたはパスワードが正しくありません。']);
        //         //\Log::error('ログインに失敗しました。');
        // }

        //          // 上記のif文でログインに成功した人以外(=ログインに失敗した人)がここに来る
        //         return redirect()->route('auth.login')->withInput();
    }




    public function logout()
    {
        Auth::logout();

        return redirect(route('auth.login'));
    }
}
