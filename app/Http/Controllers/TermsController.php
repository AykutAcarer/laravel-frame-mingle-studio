<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\InstagramService;

class TermsController extends Controller
{

    //Show Terms&Condition Page
    public function index(){

        return view('terms');
    }
}
