<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Tambahkan ini
use Illuminate\Support\Facades\DB;

class AuthControllers extends Controller
{
    function index(){
       return view('auth.login');
    }

    function register(){
        return view('auth.register');
    }

    function loginuser(){
        return "user auth ";
    }
    function registeruser(){
        return "user register";
    }    
    function logoutuser(){
        return "user logout";
    }
    function userLogin(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email'],
            'password' => ['required', 'string'],
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('dashboard');
        };
        return back()->withErrors([
            'email' => 'email tidak ditemukan',
            'password' => 'password salah',
        ])->onlyInput('email','password');
        }
        public function logout(Request $request){
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect()->intended('login');
        }
        function dataUser(){
            $pengguna = DB::table('users')->get();
            $nomor = 1;
             return view('auth.user', compact('pengguna','nomor'));
        }
}