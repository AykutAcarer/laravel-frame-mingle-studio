<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

//Home Page
Route::get('/', function () {
    return view('home', [
        'products' => Product::all()
        
    ]);
});

Route::get('/about', function(){
    return view('about');
});

//All Products
Route::get('/products', function () {
    return view('products', [
        'products' => Product::all()
        
    ]);
});

//Single product
Route::get('/products/{id}', function($id){
    return view('product',[
        'product'=>Product::find($id)
    ]);
});