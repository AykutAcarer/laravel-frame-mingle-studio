<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    //Show Account Page
    public function index(){
        return view('account');
    }
}
