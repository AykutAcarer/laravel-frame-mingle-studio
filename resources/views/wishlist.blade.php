
@extends('components/layout2')

@section('content')

    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Wishlist</h2>
                    {{-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Wishlist</li>
                    </ul> --}}
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Wishlist  -->
    <div class="wishlist-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Unit Price </th>
                                    <th>Stock</th>
                                    <th>Add Item</th>
                                    <th>Remove</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($products as $product)
                                    
                                        {{-- //get just first image of each products in order to show product list --}}
                                        @php
                                            $firstImageUrl = isset($product['images'][0]['images_url']) ? $product['images'][0]['images_url'] : null;
                                        @endphp
                                <tr>
                                    <td class="thumbnail-img">
                                        <a href={{route('products')}}{{'/'.$product->id}}>
									<img class="img-fluid" src={{asset($firstImageUrl)}} alt="" />
								</a>
                                    </td>
                                    <td class="name-pr">
                                        <a href={{route('products')}}{{'/'.$product->id}}>
                                    {{$product->product_name}}
								</a>
                                    </td>
                                    <td class="price-pr">
                                        <p>${{$product->product_preis_now}}</p>
                                    </td>
                                    <td class="quantity-box">In Stock</td>
                                    <td class="add-pr">
                                        <a class="btn hvr-hover" href={{route('cart',['id'=>$product->id])}}>Add to Cart</a>
                                    </td>
                                    <form method='post' action={{route('wishlist', $product->id)}}>
                                        @csrf
                                        @method('DELETE')
                                    <td class="remove-pr">
                                        <button type="submit" class="btn btn-sm" style="background-color: #ed6f21; color:white; font-weight:bolder">X
                                        </button>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Wishlist -->

    @endsection