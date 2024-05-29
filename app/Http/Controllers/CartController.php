<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    //Show Cart Page
    public function index(){
        return view('cart');
    }
}
