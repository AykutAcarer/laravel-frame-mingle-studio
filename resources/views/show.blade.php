@extends('components/layout2')

@section('content')
   
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Product Detail</h2>
                    
                    <!-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Shop Detail </li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->
    
    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            
                            @foreach($product as $product_item)
                                
                                
                                {{-- //get just first image of each products in order to show product list --}}
                                @php
                                    $firstImageUrl = isset($product_item['images'][0]['images_url']) ? $product_item['images'][0]['images_url'] : null;   
                                @endphp
    
                                <div class="carousel-item active"> <img class="d-block w-100" src={{asset($firstImageUrl)}} alt="First slide"> </div>';
                                
                                @for($i=1; $i< count($product_item['images']); $i++)
                                
                                    <div class="carousel-item"> <img class="d-block w-100" src={{asset($product_item['images'][$i]['images_url'])}} alt="Second slide"> </div>';
                                
                                @endfor
                                
                            @endforeach
                        </div>
                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev"> 
                        <i class="fa fa-angle-left" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span> 
                    </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next"> 
                        <i class="fa fa-angle-right" aria-hidden="true"></i> 
                        <span class="sr-only">Next</span> 
                    </a>
                        <ol class="carousel-indicators">
                        
                        @foreach($product as $product_item)
                        
                         
                            @for($i=0; $i< count($product_item['images']); $i++)
                            
                                
                                <li data-target="#carousel-example-1" data-slide-to="0" class="active">
                                    <img class="d-block w-100 img-fluid" src={{asset($product_item['images'][$i]['images_url'])}} alt="" />
                                </li>
                                
                            @endfor
                            
                        @endforeach
                        
                        </ol>
                    </div>
                </div>
                @foreach ($product as $product_item)
                
                   
                        
                    <div class="col-xl-7 col-lg-7 col-md-6">
                        <div class="single-product-details">
                            <h2>{{$product_item->product_name}}</h2>
                            <h5> <del>${{$product_item->product_preis_from}}</del>${{$product_item->product_preis_now}}</h5>
                            <p class="available-stock">Add your personalization <p>
                            <p>{{$product_item->product_personalization}}</p>
                            <form class="mt-1 review-form-box" id="formReview" method="POST" action="">
                            @csrf
                            <div class="form-row ">
                                <div class="form-group col-lg-12 col-md-6 ">
                                    <input type="text" name="personalization_text" id="review" class="form-control mb-1 w-100"  placeholder="">
                                    <input type="hidden" name="product_id_fk" value={{$product_id}}>
                                </div>
                            </div>
                            </form> 
                            <div class="price-box-bar">
                                <div class="cart-and-bay-btn">
                                    <!-- <a class="btn hvr-hover" data-fancybox-close="" href="#">Buy New</a> -->
                                    @auth
                                    <a class="btn hvr-hover" data-fancybox-close="" href={{route('cart',['id'=>$product_item->id])}}>Add to cart</a>
                                    @else
                                    <a class="btn hvr-hover" data-fancybox-close="" href={{route('login')}}>Add to cart</a>
                                    @endauth
                                </div>
                            </div>
                            <div class="add-to-btn">
                                <div class="add-comp">
                                    @auth
                                    <a class="btn hvr-hover" href={{route('wishlist',['id'=>$product_item->id])}}><i class="fas fa-heart"></i> Add to wishlist</a>
                                    @else
                                    <a class="btn hvr-hover" href={{route('login')}}><i class="fas fa-heart"></i> Add to wishlist</a>
                                    @endauth
                                    <!-- <a class="btn hvr-hover" href="#"><i class="fas fa-sync-alt"></i> Add to Compare</a> -->

                                </div>
                                {{-- <div class="share-bar">
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
                                    <a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
                                </div> --}}
                            </div>
                            
                            <div style="display: inline-block; width: 100%;">
                                <h4>Product Description:</h4>
                                <p>{{$product_item->product_description}}</p>
                            </div>
                            <div class="list-group list-group-collapse" id="list-group-men" data-children=".sub-men">
                                <div class="list-group-collapse sub-men">
                                    <a type="btn" class="" href="#sub-men1" style="font-size:larger; color:#ed6f21" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Read more...
                                    </a>
    
                                
                                    <div class="collapse" id="sub-men1" data-parent="#list-group-men">
                                        <h4>Digital File:</h4>
                                        <ul>
                                            <li>1. High-Resolution 300 DPI JPG File Delivered</li>
                                            <li>2. No Physical Product Shipping Required</li>
                                            <li>3. Print It at Home or Through Your Preferred Printing Service</li>
                                        </ul>
                                        
                                        <h4>Unframed Poster:</h4>
                                        <ul>
                                            <li>1. Premium Semi-Glossy 200 gsm Paper</li>
                                            <li>2. Securely Packaged for Safe Delivery</li>
                                        </ul>
                                        
                                        <h4>Poster (Wooden):</h4>
                                        <ul>
                                            <li>1. Premium Semi-Glossy 200 gsm Paper</li>
                                            <li>2. Off-White Paper Color</li>
                                            <li>3. Shatterproof Plexiglass</li>
                                            <li>4. Includes Hanging Kit for Both Portrait and Landscape Display</li>
                                            <li>5. Designed for Indoor Use</li>
                                            <li>6. Ready-to-Hang</li>
                                        </ul>
                                        
                                        <h4>How to Order:</h4>
                                        <ul>
                                            <li>1. Select your preferred digital or printed option and dimensions.</li>
                                            <li>2. Provide your personalization details.</li>
                                            <li>3. Add the item to your cart and complete the purchase.</li>
                                            <li>4. Fill in your payment information.</li>
                                            <li>5. Expect a preview within 1-2 business days for your approval.</li>
                                        </ul>
                                        
                                        <h4>Delivery:</h4>
                                        <ul>
                                            <li>Happiness Guarantee</li>
                                            <li>You'll receive a preview for confirmation before production begins.</li>
                                            <li>Once the preview is approved, you'll receive your digital file via email.</li>
                                            <li>We'll initiate the printing process and provide you with a shipping tracking number.</li>
                                        </ul>
                                    
                                        <p>Please note that while we strive to ensure our designs match what you see in the listing pictures, 
                                            the printed colors may vary slightly from what you see on your computer screen due to variations in monitor displays.</p>
                                    </div>
                                </div> 
                            </div>
                                
                            
                            
                            
                            
                            {{-- <ul>
                                <li>
                                    <div class="form-group quantity-box">
                                        <label class="control-label">Quantity</label>
                                        <input class="form-control" value="0" min="0" max="20" type="number">
                                    </div>
                                </li>
                            </ul> --}}
    
                            
    
                            
                        </div>
                        
                            
                        
                    </div>
                    
                   
                @endforeach
            </div>
            
            <div class="row my-5">
                <div class="card card-outline-secondary my-4 w-100">
                    <div class="card-header">
                        <h2>Product Reviews</h2>
                    </div>
                    <div class="card-body">
                            <!-- For Each Start -->
                            @foreach ($product as $product_item)
                             
                                @foreach($product_item->reviews as $review)
                                    
                                    <div class="media mb-3">
                                        <div class="mr-2"> 
                                            <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                                        </div>
                                        <div class="media-body">
                                            <p>{{$review->reviews_text}}</p>
                                            <small class="text-muted">Posted by Anonymous on 3/1/18</small>
                                        </div>
                                        <hr>
                                    </div>
                                @endforeach
                                
                            @endforeach
                        <hr>
                        <form class="mt-3 review-form-box" id="formReview" method="POST" action={{route('reviews')}}>
                            @csrf
                            <div class="form-row ">
                                <div class="form-group col-lg-12 col-md-6 ">
                                    <label for="name">Full Name</label>
                                    <input type="text"  name="name" class="form-control mb-3 w-100" placeholder="Type your name">
                                    <label for="reviews_text">Review</label>
                                    <input type="text" name="reviews_text" id="review" class="form-control mb-3 w-100" placeholder="Type your reviews about product">
                                    <input type="hidden" name="product_id_fk" value={{$product_id}}>
                                    <button class="btn hvr-hover">Leave a Review</button>
                                </div>
                            </div>
                        </form> 
                    </div>
                </div>
            </div>
    
            <div class="row my-5">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Featured Products</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                    <div class="featured-products-box owl-carousel owl-theme">
                        @foreach ($products as $product_item)
     
                           {{-- //get just first image of each products in order to show product list --}}
                           @php
                               $firstImageUrl = isset($product_item['images'][0]['images_url']) ? $product_item['images'][0]['images_url'] : null;   
                           @endphp
   
                           <div class="item">
                               <div class="products-single fix">
                                   <div class="box-img-hover">
                                       <img src={{asset($firstImageUrl)}} class="img-fluid" alt="Image">
                                       <div class="mask-icon">
                                           <ul>
                                               <li><a href={{route('products')}}{{'/'.$product_item->id}} data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                               @auth
                                               <li><a href={{route('wishlist',['id'=>$product_item->id])}} data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                               @else
                                               <li><a href={{route('login')}} data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                               @endauth
                                            </ul>
                                           @auth
                                           <a class="cart" href={{route('cart',['id'=>$product_item->id])}}>Add to Cart</a>
                                           @else
                                           <a class="cart" href={{route('login')}}>Add to Cart</a>
                                           @endauth
                                       </div>
                                   </div>
                                   <div class="why-text">
                                       <h4>{{$product_item->product_name}}</h4>
                                       <h5>{{$product_item->product_preis_now}}</h5>
                                   </div>
                               </div>
                           </div>
                                
                        @endforeach
                    </div>
                </div>
            </div>
    
        </div>
    </div>
    <!-- End Cart -->

    <!-- Start Instagram Feed  -->
    <div class="instagram-box">
        <div class="main-instagram owl-carousel owl-theme">
           
            @foreach ($instagramPosts as $post)
                @if ($post['media_type'] === 'IMAGE' || $post['media_type'] === 'CAROUSEL_ALBUM')
                <div class="item">
                    <div class="ins-inner-box">
                        <img src={{ $post['media_url'] }} alt="" />
                        <div class="hov-in">
                            <a href="{{ $post['permalink'] }}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
                @endif
            @endforeach
           
        </div>
    </div>
    <!-- End Instagram Feed  -->

@endsection



