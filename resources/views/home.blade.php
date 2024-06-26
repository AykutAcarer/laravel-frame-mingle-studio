@extends('components/layout')

@section('content')

<!-- Start Slider -->
    <!-- <img src="https://i.etsystatic.com/isbl/5876f1/67581128/isbl_1349x480.67581128_rb605aca.jpg?version=0"> -->
    <div id="slides-shop" class="cover-slides">
        <ul class="slides-container">
            <li class="text-center">
                <img src="https://i.etsystatic.com/isbl/5876f1/67581128/isbl_1349x480.67581128_rb605aca.jpg?version=0" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <!-- <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1> -->
                            <!-- <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p> -->
                            <!-- <p><a class="btn hvr-hover" href="#">Shop New</a></p> -->
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="https://i.etsystatic.com/isbl/5876f1/67581128/isbl_1349x480.67581128_rb605aca.jpg?version=0" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p> --}}
                        </div>
                    </div>
                </div>
            </li>
            <li class="text-center">
                <img src="https://i.etsystatic.com/isbl/5876f1/67581128/isbl_1349x480.67581128_rb605aca.jpg?version=0" alt="">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            {{-- <h1 class="m-b-20"><strong>Welcome To <br> Freshshop</strong></h1>
                            <p class="m-b-40">See how your users experience your website in realtime or view <br> trends to see any changes in performance over time.</p>
                            <p><a class="btn hvr-hover" href="#">Shop New</a></p> --}}
                        </div>
                    </div>
                </div>
            </li>
        </ul>
        <!-- <div class="slides-navigation" >
            <a href="#" class="next" style="background-color: #ed6f21"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
            <a href="#" class="prev" style="background-color: #ed6f21"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
        </div> -->
    </div>
    <!-- End Slider -->

    <!-- Start Categories  -->
    <div class="categories-shop">
        <div class="container">
            <div class="row">
                
                @foreach($randomProducts as $randomProduct_item)
                    {{-- //get just first image of each products in order to show product list --}}
                    @php
                     $firstImageUrl = isset($randomProduct_item['images'][0]['images_url']) ? $randomProduct_item['images'][0]['images_url'] : null;   
                    @endphp
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="shop-cat-box">
                            <img class="img-fluid" src={{$firstImageUrl}} alt="" />
                            <a class="btn hvr-hover" href={{route('products')}}{{'/'.$randomProduct_item->id}}>{{$randomProduct_item->product_name}}</a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Categories -->
	
	<div class="box-add-products">
		<div class="container">
			<div class="row">
               
                    {{-- //get just first image of each products in order to show product list --}}
                    @php
                     $firstImageUrl = isset($canvasproduct['images'][4]['images_url']) ? $canvasproduct['images'][4]['images_url'] : null;   
                    @endphp
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<a href={{route('products')}}{{'/'.$canvasproduct->id}} ><img class="img-fluid" src={{ $firstImageUrl}} alt="" /></a>
					</div>
				</div>
                
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="offer-box-products">
						<a href={{route('products')}}{{'/'.$canvasproduct->id}} ><img class="img-fluid" src={{ $firstImageUrl}} alt="" /></a>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Products</h1>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p> --}}
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
                                       <h5>${{$product_item->product_preis_now}}</h5>
                                   </div>
                               </div>
                           </div>
                                
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Products  -->

    <!-- Start Blog  -->
    {{-- <div class="latest-blog">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>latest blog</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed sit amet lacus enim.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src={{asset('images/blog-img.jpg')}} alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src={{asset('images/blog-img-01.jpg')}} alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="blog-box">
                        <div class="blog-img">
                            <img class="img-fluid" src={{asset('images/blog-img-02.jpg')}} alt="" />
                        </div>
                        <div class="blog-content">
                            <div class="title-blog">
                                <h3>Fusce in augue non nisi fringilla</h3>
                                <p>Nulla ut urna egestas, porta libero id, suscipit orci. Quisque in lectus sit amet urna dignissim feugiat. Mauris molestie egestas pharetra. Ut finibus cursus nunc sed mollis. Praesent laoreet lacinia elit id lobortis.</p>
                            </div>
                            <ul class="option-blog">
                                <li><a href="#"><i class="far fa-heart"></i></a></li>
                                <li><a href="#"><i class="fas fa-eye"></i></a></li>
                                <li><a href="#"><i class="far fa-comments"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- End Blog  -->

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