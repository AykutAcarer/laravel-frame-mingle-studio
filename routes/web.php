<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

//Home Page
Route::get('/', function () {
    return view('home', [
        'products' => Product::all()
        
    ]);
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