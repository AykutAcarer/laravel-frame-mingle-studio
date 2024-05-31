<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function addReview(Request $request){

        $formFields = $request->validate([

            'name'=>'required', 
            'reviews_text'=>'required',
            'product_id_fk' => 'required'
            
        ]);

        Review::create($formFields);

        // message
        return back()->with('message', 'Thank you for your support');

        
        
    }
}
