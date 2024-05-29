<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //Show About Page
    public function index(){
        return view('about');
    }
}
