<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //Show and Add Product in Cart
    public function addCart($id){

        if($id == 'all'){
           
            $user_id = auth()->id();

            $cart_product_ids = Cart::all()->where('user_id_fk', $user_id);

            $cart_product=array();

            foreach($cart_product_ids as $cart_product_id){
            
                $arr[] = Product::with('images')->find($cart_product_id->product_id_fk);

                $cart_product = $arr;
            }

            // dd('cart',[
            //     'products' => $cart_product
            // ]);

            return view('cart',[
                'products' => $cart_product
            ]);
            
        }
        else{

            $user_id = auth()->id();

            //Control, if product is already added to cart
            $existingCart = Cart::where('user_id_fk', $user_id)
            ->where('product_id_fk', $id)
            ->first();

            if($existingCart){
                return back()->with('message', 'This product is already in your cart');
            }else{
                
                $cart = [];
                $cart['user_id_fk'] =  $user_id;
                $cart['product_id_fk'] = $id;
    
                Cart::create($cart);
    
                return back()->with('message', 'You have added to Cart');

            }
            

        }
    }

    //Delete Product from Cart
    public function delete($id){

        $user_id = auth()->id();

        $cart_product = Cart::where('user_id_fk', $user_id)
        ->where('product_id_fk', $id);

        $cart_product->delete();

        return redirect('/cart/all')->with('message', 'Product removed from Cart');
    }
   

}
