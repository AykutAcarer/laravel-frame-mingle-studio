<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Services\InstagramService;

class ProductController extends Controller
{
    protected $instagramService;

    public function __construct(InstagramService $instagramService)
    {
        $this->instagramService = $instagramService;
    }

    //Show products Page and Get All Products
    public function showAll(){
        
        $userId = $this->instagramService->getUserId(); // Buraya Instagram kullanıcı ID'sini ekleyin
        $posts = $this->instagramService->getRecentPosts($userId);

        // Filtreleri request'ten al ve varsayılan olarak boş bir dizi kullan
        $filters = request()->only(['search']) ?: [];

        $productsQuery = Product::with('images')->latest()->filter($filters);
        $products = $productsQuery->paginate(9);
        
        $totalProducts = $productsQuery->count();

        return view('products', [
            'products' => $products,
            'totalProducts' => $totalProducts,
            'instagramPosts' => $posts
            
        ]);

        // dd('products', [
        //     'products' => Product::with('images')->get()
            
        // ]);
    }

    //Show Page and Get single Product Data
    public function showSingle(Product $product){
        
        $userId = $this->instagramService->getUserId(); // Buraya Instagram kullanıcı ID'sini ekleyin
        $posts = $this->instagramService->getRecentPosts($userId);
        
        return view('show',[
            'product'=> Product::with('images','reviews')->find($product),
            'product_id' => $product->id,
            'products' => Product::all(),
            'instagramPosts' => $posts
        ]);

        // dd('show',[
        //     'product'=> Product::with('images','reviews')->find($product)
        // ]);
    }



   

    
}
