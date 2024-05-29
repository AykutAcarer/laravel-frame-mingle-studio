<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;

//Show Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

//Show About Page
Route::get('/about', [AboutController::class, 'index'])->name('about') ;

//Show Products page and Get All Products
Route::get('/products', [ProductController::class, 'showAll'])->name('products');

//Show Single Product Page and get Data for Product
Route::get('/products/{product}', [ProductController::class, 'showSingle'])->name('show');

//Show Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//Show Login Page
Route::get('/login', [UserController::class, 'showLogin'])->name('login');

//Show Register Page
Route::get('/register', [UserController::class, 'showRegister'])->name('register');

//Create New User
Route::post('/users', [UserController::class, 'create'])->name('users');

//Show Cart Page
Route::get('/cart', [CartController::class, 'index'])->name('cart');

//Show Account Page
Route::get('/account', [AccountController::class, 'index'])->name('account');