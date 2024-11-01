<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Admin;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLogin()
    {
        if(Auth::check()){
            return redirect('/')->with(['error' => 'Anda sedang Login']);
        }else {
            return view('login');
        }
    }
    public function actionLogin(Request $request)
    {
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if(Auth::Attempt($data)) {
            return redirect('/')->with(['succes' => 'Login Berhasil']);
        } else {
            return redirect('/login')->with(['error' => 'Email atau Password salah']);
        }
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/login')->with(['success' => 'Anda berhasil keluar']);
    }
}
