<?php

use App\Models\Product;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TermsController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\InstagramController;
use App\Http\Controllers\PrivacyController;

//Show Home Page
Route::get('/', [HomeController::class, 'index'])->name('home');

//Show About Page
Route::get('/about', [AboutController::class, 'index'])->name('about') ;

//Show Products page and Get All Products
Route::get('/products', [ProductController::class, 'showAll'])->name('products');

//Show Single Product Page and get Data for Product
Route::get('/products/{product}', [ProductController::class, 'showSingle'])->name('/products/{product}');

//Show Contact Page
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

//Show Login Page
Route::get('/login', [UserController::class, 'showLogin'])->name('login');

//Login
Route::post('/users/login', [UserController::class, 'login'])->name('users/login');

//Show Register Page
Route::get('/register', [UserController::class, 'showRegister'])->name('register');

//Create New User
Route::post('/users', [UserController::class, 'register'])->name('users');

//Show Cart Page
// Route::get('/cart', [CartController::class, 'index'])->name('cart');

//Show and Add Product to Cart
Route::get('/cart/{id}', [CartController::class, 'addCart'])->name('cart');

//Delete Product From Cart
Route::delete('/cart/{id}', [CartController::class, 'delete']);

//Show and Add Product to Wish List
Route::get('/wishlist/{id}', [WishlistController::class, 'addList'])->name('wishlist');

//Delete Product From Wish List
Route::delete('/wishlist/{id}', [WishlistController::class, 'delete']);

//Add Review for a Product
Route::post('/reviews', [ReviewController::class, 'addReview'])->name('reviews');

//Show Account Page
Route::get('/account', [AccountController::class, 'index'])->name('account');

//Logout
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Get Instagram Feeds using API
Route::get('/instagram', [InstagramController::class, 'index']);

//Show Terms&Conditiona page
Route::get('/terms', [TermsController::class, 'index'])->name('terms');

//Show Privacy Policy page
Route::get('/privacy', [PrivacyController::class, 'index'])->name('privacy');




