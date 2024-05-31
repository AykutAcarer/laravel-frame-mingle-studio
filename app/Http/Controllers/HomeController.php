<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Show Home Page
    public function index(){
        return view('home',  [
            'products' => Product::with('images')->get()
            
        ]);
    }
}
