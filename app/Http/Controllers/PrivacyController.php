<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrivacyController extends Controller
{

    //Show Privacy Policy Page
    public function index(){
        
        return view('privacy');
    }
}
