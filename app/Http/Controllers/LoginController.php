<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    public function auth(Request $request)
    {
        $credential = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:6'
        ]);

        if(Auth::attempt($credential)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'email' => 'Email Anda Tidak Terdaftar',
            'password' => 'Password Salah',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/login');
    }
}
