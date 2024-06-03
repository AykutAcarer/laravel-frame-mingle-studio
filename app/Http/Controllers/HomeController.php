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
        
        return view('home',  [
            'products' => Product::with('images')->get(),
            'instagramPosts' => $posts
            
        ]);
    }
}
