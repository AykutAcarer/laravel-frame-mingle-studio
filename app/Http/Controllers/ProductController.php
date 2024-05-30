<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Show products Page and Get All Products
    public function showAll(){
        return view('products', [
            'products' => Product::with('images')->get()
            
        ]);

        // dd('products', [
        //     'products' => Product::with('images')->get()
            
        // ]);
    }

    //Show Page and Get single Product Data
    public function showSingle(Product $product){
        
        return view('show',[
            'product'=> Product::with('images','reviews')->find($product),
            'products' => Product::all()
        ]);

        // dd('show',[
        //     'product'=> Product::with('images','reviews')->find($product)
        // ]);
    }

    
}
