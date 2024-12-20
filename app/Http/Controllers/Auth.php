<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Auth extends Controller
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

    function logoutuser(){
        return "user logout";
    }
}