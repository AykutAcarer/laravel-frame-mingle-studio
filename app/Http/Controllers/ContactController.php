<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //Show Contact Page
    public function index(){
        return view('contact');
    }
}
