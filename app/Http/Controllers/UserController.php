<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //Show Register Page
    public function showRegister(){
        return view('users.register');
    }

    //Show Login Page
    public function showLogin(){
        return view('users.login');
    }
}
