<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    //Relationship with images
    public function images(){
        return $this->hasMany(Image::class, 'product_id_fk');
    }

    //Relationship with reviews
    public function reviews(){
        return $this->hasMany(Review::class, 'product_id_fk');
    }

    //Relationship with cart
    public function cart(){
        return $this->hasMany(Cart::class, 'product_id_fk');
    }

    //Relationship with cart
    public function wishlist(){
        return $this->hasMany(Wishlist::class, 'product_id_fk');
    }
}
