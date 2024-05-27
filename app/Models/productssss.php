<?php

Class Product    
{
    function product_list() 
    {
        $DB = new Database();
    
        $query = "SELECT * FROM dt_products p
                    LEFT JOIN 
                    dt_images i ON p.product_id = i.product_id_fk
                    LEFT JOIN 
                    dt_reviews r ON p.product_id = r.product_id_fk
                    ";
                                                   
        
        $data = $DB->read($query, $arr=[]);
        $product_items = array();

        foreach ($data as $product) {
            // Check if product exists in the result array
            if (!isset($product_items[$product->product_id])) {
                // Initialize product details
                $product_items[$product->product_id] = array(
                    'product_id' => $product->product_id,
                    'product_name' => $product->product_name,
                    'product_description' => $product->product_description,
                    'product_type' => $product->product_type,
                    'product_size' => $product->product_size,
                    'product_category' => $product->product_category,
                    'product_preis_from' => $product->product_preis_from,
                    'product_preis_now' => $product->product_preis_now,
                    'images' => array(),
                    'reviews' => array()
                );
            }
    
            // Add image to product's images array if it's not already added
        if (!empty($product->images_url) && !in_array($product->images_id, array_column($product_items[$product->product_id]['images'], 'images_id'))) {
            $product_items[$product->product_id]['images'][] = array(
                'images_id' => $product->images_id,
                'images_url' => $product->images_url,
                'product_id_fk' =>$product->product_id_fk,
                'images_created_at' => $product->images_created_at,
                'images_updated_at' => $product->images_updated_at
            );
        }
    
            // Add review to product's reviews array if it's not already added
            if (!empty($product->reviews_text) && !in_array($product->reviews_id, array_column($product_items[$product->product_id]['reviews'], 'reviews_id'))) {
                $product_items[$product->product_id]['reviews'][] = array(
                    'reviews_id' => $product->reviews_id,
                    'reviews_text' => $product->reviews_text,
                    'create_at' => $product->create_at,
                    'update_at' => $product->update_at
                );
            }
        }
    
        return $product_items;
        
    }
    
   
    function addCart($product_id)
    {

        $DB = new Database();
        $_SESSION['error'];

        if((isset($_SESSION['user_id']) && isset($_SESSION['user_url'])))
        {  
           if(!isset($_SESSION['cart_list'][$product_id])){
                if($product_id !== '') 
                {
                
                    $arr['product_id_fk'] = $product_id;
                    $arr['user_id_fk'] = $_SESSION['user_id'];
                    $arr['cart_created_at'] = date("Y-m-d H:i:s");
                    
                    $query = "insert into dt_cart (user_id_fk, product_id_fk,cart_created_at) values (:user_id_fk,:product_id_fk,:cart_created_at)";
                    
                    $data = $DB -> write($query,$arr);
                   

                    if($data)
                    {
                        //After adding cart goes to product page
                        header("Location:". ROOT ."products");     
                    }   
                    
                }else{
                    $_SESSION['error'] = "The Page is not found";
                }
           }else{
                header("Location:". ROOT ."products"); 
           }
            
        }else{
            header("Location:". ROOT ."login");
        }
       
    }

    function cart_list($user_id) 
    {
        
        $DB = new Database();
    
        $query = "SELECT * FROM dt_products p
                    LEFT JOIN 
                        dt_images i ON p.product_id = i.product_id_fk
                    JOIN 
                        dt_cart c ON p.product_id = c.product_id_fk
                    WHERE 
                        c.user_id_fk = $user_id
                    ";
                                                   
        
        $data = $DB->read($query, $arr=[]);
        
        $product_items = array();
        $_SESSION['cart_list'] = array();
        foreach ($data as $product) 
        {
            // Check if product exists in the result array
            if (!isset($product_items[$product->product_id])) {
                // Initialize product details
                $product_items[$product->product_id] = array(
                    'product_id' => $product->product_id,
                    'product_name' => $product->product_name,
                    'product_description' => $product->product_description,
                    'product_type' => $product->product_type,
                    'product_size' => $product->product_size,
                    'product_category' => $product->product_category,
                    'product_preis_from' => $product->product_preis_from,
                    'product_preis_now' => $product->product_preis_now,
                    'images' => array()
                );
            }
    
                // Add image to product's images array if it's not already added
            if (!empty($product->images_url) && !in_array($product->images_id, array_column($product_items[$product->product_id]['images'], 'images_id'))) {
                $product_items[$product->product_id]['images'][] = array(
                    'images_id' => $product->images_id,
                    'images_url' => $product->images_url,
                    'product_id_fk' =>$product->product_id_fk,
                    'images_created_at' => $product->images_created_at,
                    'images_updated_at' => $product->images_updated_at
                );
            }

            
            $_SESSION['cart_list'][$product->product_id] = $product->product_id;
           
        }
    
        return $product_items;
        
    }

    function deleteCart($product_id)
    {

        $DB = new Database();

        $query = "DELETE FROM dt_cart WHERE product_id_fk = $product_id";

        show($query);
        $DB->delete($query);

        unset($_SESSION['cart_list'][$product_id]);

        header("Location:". ROOT ."cart/?product_id=newCart");
        die;
    }
    
    function addReview($product_id, $POST){

        $DB = new Database();
        $_SESSION['error'];
        if(isset($POST['fullname']) && isset($POST['review']))
        {
        
            $arr['review_posted_by'] = $POST['fullname'];
            $arr['reviews_text'] = $POST['review'];
            $arr['product_id_fk'] = $product_id;
            $arr['create_at'] = date("Y-m-d H:i:s");
            $arr['update_at'] = date("Y-m-d H:i:s");
            
            $query = "insert into dt_reviews (product_id_fk, reviews_text,review_posted_by,create_at,update_at) values (:product_id_fk,:reviews_text,:review_posted_by,:create_at,:update_at)";
            
            show($query);
            $data = $DB -> write($query,$arr);
           

            if($data)
            {
                //After adding cart goes to product page
                header("Location:". ROOT ."productdetail/?product_id=$product_id");  
                die;   
            }   
            
        }
    }
}    
    
?>