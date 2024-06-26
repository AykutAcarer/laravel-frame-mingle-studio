@extends('components/layout2')

@section('content')


    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Cart</h2>
                    <!-- <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Cart</li>
                    </ul> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Cart  -->
    <div class="cart-box-main">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-main table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Images</th>
                                    <th>Product Name</th>
                                    <th>Price</th>
                                    <th>Quantity</th>
                                    <th>Total</th>
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
                                                <td class="quantity-box">
                                                    <input type="number" size="4" value="1" min="0" step="1" class="c-input-text qty text" onchange="updateTotal(this,{{$product->product_preis_now}},{{$product->id}})"></td>
                                                <td class="total-pr">
                                                    <p id="totalPrice-{{$product->id}}">$ {{$product->product_preis_now}}</p>
                                                </td>
                                                <form method='post' action={{route('cart', $product->id)}}>
                                                @csrf
                                                @method('DELETE')
                                                <td class="remove-pr">
                                                    <button type="submit" class="btn btn-sm" style="background-color: #ed6f21; color:white; font-weight:bolder">X
                                                    </button>
                                                </form>
                                            
                                                </td>
                                            </tr>
                                        
                                    @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="row my-5">
                <div class="col-lg-6 col-sm-6">
                    <div class="coupon-box">
                        <div class="input-group input-group-sm">
                            <input class="form-control" placeholder="Enter your coupon code" aria-label="Coupon code" type="text">
                            <div class="input-group-append">
                                <button class="btn btn-theme" type="button">Apply Coupon</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-6 col-sm-6">
                    <div class="update-box">
                        <input value="Update Cart" type="submit">
                    </div>
                </div> -->
            </div>

            <div class="row my-5">
                <div class="col-lg-8 col-sm-12"></div>
                <div class="col-lg-4 col-sm-12">
                    <div class="order-box">
                    <h3>Order summary</h3>
                        <div class="d-flex">
                            <h4>Sub Total</h4>
                            <div id="subTotal" class="ml-auto font-weight-bold"> $0 </div>
                        </div>
                        <!-- <div class="d-flex">
                            <h4>Total</h4>
                            <div id="totalPrice" class="ml-auto font-weight-bold"> $ 130 </div>
                        </div>

                        <div class="d-flex">
                            <h4>Discount</h4>
                            <div class="ml-auto font-weight-bold"> $ 40 </div>
                        </div> -->
                        <hr class="my-1">
                        <div class="d-flex">
                            <h4>Coupon Discount</h4>
                            <div class="ml-auto font-weight-bold"> $0 </div>
                        </div>
                        <!-- <div class="d-flex">
                            <h4>Tax</h4>
                            <div class="ml-auto font-weight-bold"> $ 2 </div>
                        </div> -->
                        <div class="d-flex">
                            <h4>Shipping Cost</h4>
                            <div class="ml-auto font-weight-bold"> Free </div>
                        </div>
                        <hr>
                        <div class="d-flex gr-total">
                            <h5>Grand Total</h5>
                            <div class="ml-auto h5"></div>
                        </div>
                        <hr> </div>
                </div>
                <div class="col-12 d-flex shopping-box"><a href="#" type="button" class="ml-auto btn hvr-hover" data-toggle="modal" data-target="#exampleModal">Checkout</a></div>
                
                <!--Modal-->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Information</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Our website's checkout system is currently being updated. You can access our products at Etsy
                            </div>
                            <div class="modal-footer">
                                <a href="https://www.etsy.com/de-en/shop/FrameMingleStudio" class="btn btn-primary">Etsy</a>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <!-- End Cart -->
@endsection