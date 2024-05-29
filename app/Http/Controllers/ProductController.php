<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //Show products Page and Get All Products
    public function showAll(){
        return view('products', [
            'products' => Product::all()
            
        ]);
    }

    //Show Page and Get single Product Data
    public function showSingle(Product $product){
        return view('show',[
            'product'=> $product
        ]);
    }
}
