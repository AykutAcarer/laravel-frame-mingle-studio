<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class WishlistController extends Controller
{
     //Show and Add Product in WishList
     public function addList($id){

        if($id == 'all'){
           
            $user_id = auth()->id();

            $wishlist_product_ids = Wishlist::all()->where('user_id_fk', $user_id);

            $wishlist_product=array();

            foreach($wishlist_product_ids as $wishlist_product_id){
            
                $arr[] = Product::with('images')->find($wishlist_product_id->product_id_fk);

                $wishlist_product = $arr;
            }

            // dd('cart',[
            //     'products' => $cart_product
            // ]);

            return view('wishlist',[
                'products' => $wishlist_product
            ]);
            
        }
        else{

            $user_id = auth()->id();

            //Control, if product is already added to cart
            $existingList = Wishlist::where('user_id_fk', $user_id)
            ->where('product_id_fk', $id)
            ->first();

            if($existingList){
                return back()->with('message', 'This product is already in your wish list');
            }else{
                
                $cart = [];
                $cart['user_id_fk'] =  $user_id;
                $cart['product_id_fk'] = $id;
    
                Wishlist::create($cart);
    
                return back()->with('message', 'You have added to wish list');

            }
            

        }
    }

    //Delete Product from Wishlist
    public function delete($id){

        $user_id = auth()->id();

        $wishlist_product = Wishlist::where('user_id_fk', $user_id)
        ->where('product_id_fk', $id);

        $wishlist_product->delete();

        return redirect('/wishlist/all')->with('message', 'Product removed from Wish List');
    }
}
