@extends('components/layout')

@section('content')



{{-- @unless(count($products)==0)

@foreach($products as $product)
<h2>
    <a href="products/{{$product['id']}}">{{$product['product_name']}}</a> 
</h2>
    <p>
        {{$product['product_description']}}
    </p>
@endforeach

@else
   <p>No Product found</p> 
@endunless --}}




    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Products</h2>
                    <!-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Shop</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Page  -->
    <div class="shop-box-inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">
                        <div class="product-item-filter row">
                            <div class="col-12 col-sm-8 text-center text-sm-left">
                                <div class="toolbar-sorter-right">
                                    <span>Sort by </span>
                                    <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
									<option data-display="Select">Nothing</option>
									<option value="1">Popularity</option>
									<option value="2">High Price → High Price</option>
									<option value="3">Low Price → High Price</option>
									<option value="4">Best Selling</option>
								</select>
                                </div>
                                <p>Showing {{count($products)}} of {{$totalProducts}} results</p>
                            </div>
                            
                            <div class="col-12 col-sm-4 text-center text-sm-right">
                                
                                <ul class="nav nav-tabs ml-auto">
                                    <li>
                                        <a class="nav-link active" href="#grid-view" data-toggle="tab"> <i class="fa fa-th"></i> </a>
                                    </li>
                                    <li>
                                        <a class="nav-link" href="#list-view" data-toggle="tab"> <i class="fa fa-list-ul"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">

                                        <!-- For Each Start -->
                                        @foreach($products as $product)
                                            {{-- //get just first image each products in order to show product list  --}}
                                            @php
                                                $firstImageUrl = isset($product['images'][0]['images_url']) ? $product['images'][0]['images_url'] : null;
                                            @endphp
                                
                                            <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                <div class="products-single fix">
                                                    <div class="box-img-hover">
                                                        <div class="type-lb">
                                                            {{-- <p class="sale">Sale</p> --}}
                                                        </div>
                                                        <img src={{asset($firstImageUrl)}} class="img-fluid" alt="Image">
                                                        <div class="mask-icon">
                                                            <ul>
                                                                <li><a href={{route('products')}}{{'/'.$product->id}} data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                @auth
                                                                    <li><a href={{route('wishlist',['id'=>$product->id])}} data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                                @else
                                                                    <li><a href={{route('login')}} data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                                @endauth
                                                            </ul>
                                                                @auth
                                                                <a class="cart" href={{route('cart',['id'=>$product->id])}} >Add to Cart</a>
                                                                @else
                                                                <a class="cart" href={{route('login')}}>Add to Cart</a>
                                                                @endauth
                                                        </div>
                                                    </div>
                                                    <div class="why-text">
                                                        <h4>{{$product->product_name}}</h4>
                                                        <h5>${{$product->product_preis_now}}</h5>
                                                    </div>
                                                </div>
                                            </div>

                                        @endforeach
                                        <!-- For Each Ende -->

                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="list-view">
                                    <!-- For Each Start -->
                                    @foreach($products as $product)
                                    
                                        {{-- //get just first image each products in order to show product list --}}
                                        @php
                                            $firstImageUrl = isset($product['images'][0]['images_url']) ? $product['images'][0]['images_url'] : null;
                                        @endphp                                        
                                            <div class="list-view-box">
                                                <div class="row">
                                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-4">
                                                        <div class="products-single fix">
                                                            <div class="box-img-hover">
                                                                <div class="type-lb">
                                                                    {{-- <p class="new">New</p> --}}
                                                                </div>
                                                                <img src={{asset($firstImageUrl)}} class="img-fluid" alt="Image">
                                                                <div class="mask-icon">
                                                                    <ul>
                                                                        <li><a href="products/{{$product->id}}" data-toggle="tooltip" data-placement="right" title="View"><i class="fas fa-eye"></i></a></li>
                                                                        @auth
                                                                        <li><a href={{route('wishlist',['id'=>$product->id])}} data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                                        @else
                                                                        <li><a href={{route('login')}} data-toggle="tooltip" data-placement="right" title="Add to Wishlist"><i class="far fa-heart"></i></a></li>
                                                                        @endauth
                                                                    </ul>
                                                                        @auth
                                                                        <a class="cart" href={{route('cart',['id'=>$product->id])}}>Add to Cart</a>
                                                                        @else
                                                                        <a class="cart" href={{route('login')}}>Add to Cart</a>
                                                                        @endauth

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6 col-md-6 col-lg-8 col-xl-8">
                                                        <div class="why-text full-width">
                                                            <h4>{{$product->product_name}}</h4>
                                                            <h5 style="color: aliceblue"> <del>${{$product->product_preis_from}}</del> ${{$product->product_preis_now}}</h5>
                                                            <p>{{$product['product_description']}}</p>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                                                          
                                    @endforeach
                                    <!-- For Each Ende -->
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>{{$products->links()}}</div>                    
                </div>
				<div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">
                        <div class="search-product">
                            <form action="{{route('products')}}" method="GET">
                                <input class="form-control" placeholder="Search here..."name="search" type="text">
                                <button type="submit"> <i class="fa fa-search"></i> </button>
                            </form>
                        </div>
                        <div class="filter-sidebar-left">
                            <div class="title-left">
                                <h3>Categories</h3>
                            </div>
                            <div class="list-group list-group-collapse list-group-sm list-group-tree" id="list-group-men" data-children=".sub-men">
                                {{-- <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men1" data-toggle="collapse" aria-expanded="true" aria-controls="sub-men1">Fruits & Drinks <small class="text-muted">(100)</small>
								</a>
                                    <div class="collapse show" id="sub-men1" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">Fruits 1 <small class="text-muted">(50)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Fruits 2 <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Fruits 3 <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Fruits 4 <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Fruits 5 <small class="text-muted">(20)</small></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="list-group-collapse sub-men">
                                    <a class="list-group-item list-group-item-action" href="#sub-men2" data-toggle="collapse" aria-expanded="false" aria-controls="sub-men2">Vegetables 
								<small class="text-muted">(50)</small>
								</a>
                                    <div class="collapse" id="sub-men2" data-parent="#list-group-men">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action">Vegetables 1 <small class="text-muted">(10)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Vegetables 2 <small class="text-muted">(20)</small></a>
                                            <a href="#" class="list-group-item list-group-item-action">Vegetables 3 <small class="text-muted">(20)</small></a>
                                        </div>
                                    </div>
                                </div> --}}
                                <a href="{{route('products',['search' => ''])}}" class="list-group-item list-group-item-action"> All </a>
                                <a href="{{route('products',['search' => 'planners'])}}" class="list-group-item list-group-item-action"> Planners </a>
                                <a href="{{route('products',['search' => 'collage'])}}" class="list-group-item list-group-item-action"> Photo Collage</a>
                                <a href="{{route('products',['search' => 'sport'])}}" class="list-group-item list-group-item-action"> Sports Photo Collage </a>
                                <a href="{{route('products',['search' => 'map'])}}" class="list-group-item list-group-item-action"> City Map </a>
                                <a href="{{route('products',['search' => 'lyric'])}}" class="list-group-item list-group-item-action"> Lyric Art</a>
                                <a href="{{route('products',['search' => 'canvas'])}}" class="list-group-item list-group-item-action"> Canvas</a>
                            </div>
                        </div>
                        {{-- <div class="filter-price-left">
                            <div class="title-left">
                                <h3>Price</h3>
                            </div>
                            <div class="price-box-slider">
                                <div id="slider-range"></div>
                                <p>
                                    <input type="text" id="amount" readonly style="border:0; color:#fbb714; font-weight:bold;">
                                    <button class="btn hvr-hover" type="submit">Filter</button>
                                </p>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    


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