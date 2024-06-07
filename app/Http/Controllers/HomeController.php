<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\InstagramService;

class HomeController extends Controller
{
    protected $instagramService;

    public function __construct(InstagramService $instagramService)
    {
        $this->instagramService = $instagramService;
    }

    //Show Home Page
    public function index(){
        
        $userId = $this->instagramService->getUserId(); // Buraya Instagram kullanıcı ID'sini ekleyin
        $posts = $this->instagramService->getRecentPosts($userId);
        $products = Product::with('images');
        return view('home',  [
            'products' => $products->get(),
            'randomProducts' => $products->inRandomOrder()->take(3)->get(),
            'canvasproduct' =>$products->find(21),
            'instagramPosts' => $posts
            
        ]);
    }
}
