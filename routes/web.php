<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;

//Home Page
Route::get('/', function () {
    return view('home', [
        'products' => Product::all()
        
    ]);
});

//About Page
Route::get('/about', function(){
    return view('about');
});


//Products page - All Products
Route::get('/products', function () {
    return view('products', [
        'products' => Product::all()
        
    ]);
});

//Single Product Page
Route::get('/products/{id}', function($id){
    return view('product',[
        'product'=>Product::find($id)
    ]);
});

//Contact Page
Route::get('/contact', function(){
    return view('contact');
});

//Login Page
Route::get('/login', function(){
    return view('login');
});

//Register Page
Route::get('/register', function(){
    return view('register');
});

//Cart Page
Route::get('/cart', function(){
    return view('cart');
});