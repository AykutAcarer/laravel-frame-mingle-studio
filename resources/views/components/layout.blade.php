<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Site Metas -->
    <title></title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href={{asset('images/favicon.ico')}} type="image/x-icon">
    <link rel="apple-touch-icon" href={{asset('images/apple-touch-icon.png')}}>

    <!-- Vite CSS -->
    @vite([
        'resources/css/all.css',
        'resources/css/animate.css',
        'resources/css/baguetteBox.min.css',
        'resources/css/bootsnav.css',
        'resources/css/bootstrap.min.css',
        'resources/css/bootstrap-select.css',
        'resources/css/carousel-ticker.css',
        'resources/css/code_animate.css',
        'resources/css/custom.css',
        'resources/css/jquery-ui.css',
        'resources/css/owl.carousel.min.css',
        'resources/css/responsive.css',
        'resources/css/style.css',
        'resources/css/superslides.css'
    ])


    {{-- <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../resources/css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../resources/css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../resources/css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../resources/css/custom.css"> --}}

    <!-- [if lt IE 9]> 
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif] -->

</head>

<body>
    @if(session('message'))
        <div class="alert-fixed" id="flash-message">
            <p class="text-warning">{{session('message') }}</p>
        </div>
    @endif
    <!-- Start Main Top -->
    <div class="main-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex flex-row">
					<!-- <div class="custom-select-box">
                        <select id="basic" class="selectpicker show-tick form-control" data-placeholder="$ USD">
							<option>¥ JPY</option>
							<option>$ USD</option>
							<option>€ EUR</option>
						</select>
                    </div> -->
                    <!-- <div class="right-phone-box">
                        <p >Call US :- <a href="#"onmouseover="this.style.color='#ed6f21';" onmouseout="this.style.color='white';"> +11 900 800 100</a></p>
                    </div> -->
                    <div class="our-link">
                        <ul>
                            @auth
                            <li><a href={{route('account')}}><i class="fa fa-user s_color" ></i> My Account</a></li>
                            @endauth
                            {{-- <li><a href="#"><i class="fas fa-location-arrow"></i> Our location</a></li> --}}
                            <li><a href={{route('contact')}}><i class="fas fa-headset"></i> Contact Us</a></li>
                        </ul>
           
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 d-flex flex-row-reverse">
					<div class="our-link">
                        <ul class="">
                            @auth
                                <li style="color:aliceblue">Welcome {{auth()->user()->name}}</li>
                                <li><a href={{route('logout')}}><i class="fas fa-location-arrow"></i> Logout</a></li>
                            @else
                                <li><a href={{route('register')}}><i class="fa fa-user s_color" ></i> Register</a></li>
                                <li><a href={{route('login')}}><i class="fas fa-location-arrow"></i> Login</a></li>
                            @endauth
                        </ul>
						<!-- <select id="basic" class="selectpicker show-tick form-control" data-placeholder="Sign In"  >
							<option >Register Here</option>
							<option>Sign In</option>
						</select> -->
					</div>
                    <!-- <div class="text-slid-box">
                        <div id="offer-box" class="carouselTicker">
                            <ul class="offer-box">
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT80
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 10%! Shop Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 50% - 80% off on Vegetables
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> 20% off Entire Purchase Promo code: offT30
                                </li>
                                <li>
                                    <i class="fab fa-opencart"></i> Off 50%! Shop Now 
                                </li>
                            </ul>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
    <!-- End Main Top -->

    <!-- Start Main Top -->
    <header class="main-header">
        <!-- Start Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light navbar-default bootsnav">
            <div class="container">
                <!-- Start Header Navigation -->
                <div class="navbar-header">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-menu" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                    <a class="navbar-brand" href="{{route('home')}}"><img src="https://i.etsystatic.com/isla/c30a0d/69076457/isla_180x180.69076457_m35rjrvp.jpg?version=0" class="logo" width="108px"  alt="" ></a>
                </div>
                <!-- End Header Navigation -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="navbar-menu">
                    <ul class="nav navbar-nav ml-auto" data-in="fadeInDown" data-out="fadeOutUp" >
                        <li class="nav-item active"><a class="nav-link" style="color: #ed6f21"  href={{route('home')}}>Home</a></li>
                        <li class="nav-item"><a class="nav-link" style="color: #ed6f21" href={{route('about')}}>About Us</a></li>
                        <!-- <li class="dropdown">
                            <a href="#" class="nav-link dropdown-toggle arrow" data-toggle="dropdown" >products</a>
                            <ul class="dropdown-menu">
								<li><a href="shop.html" >Sidebar Shop</a></li>
								<li><a href="shop-detail.html" >Shop Detail</a></li>
                                <li><a href="cart.html" >Cart</a></li> 
                                <li><a href="checkout.html" >Checkout</a></li>
                                <li><a href="my-account.html" >My Account</a></li>
                                <li><a href="wishlist.html" >Wishlist</a></li>
                            </ul>
                        </li> -->
                        <li class="nav-item"><a class="nav-link" href={{route('products')}} style="color: #ed6f21">Products</a></li>
                        <li class="nav-item"><a class="nav-link" href={{route('contact')}} style="color: #ed6f21">Contact Us</a></li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->

                <!-- Start Atribute Navigation -->
                <div class="attr-nav">
                    <ul>
                        
                        <li class="nav-item">
                            @auth
							<a href={{route('wishlist',['id'=>'all'])}} style="color: #ed6f21">
								<p><i class="fa fa-heart"></i> Wish List</p>
							</a>
                            @else
                            <a href={{route('login')}} style="color: #ed6f21">
								<p><i class="fa fa-heart"></i> Wish List</p>
							</a>
                            @endauth
						</li>
                        <li class="nav-item">
                            @auth
							<a href={{route('cart',['id'=>'all'])}} style="color: #ed6f21">
								<p><i class="fa fa-shopping-bag"></i> My Cart</p>
							</a>
                            @else
                            <a href={{route('login')}} style="color: #ed6f21">
								<p><i class="fa fa-shopping-bag"></i> My Cart</p>
							</a>
                            @endauth
						</li>
                    </ul>
                </div>
                <!-- End Atribute Navigation -->
            </div>
            <!-- Start Side Menu -->
            <!-- <div class="side">
                <a href="#" class="close-side"><i class="fa fa-times"></i></a>
                <li class="cart-box">
                    <ul class="cart-list">

                    {{-- 
                
                        foreach($products as $item)
                        {
                            if(isset($_SESSION['cart_list'][$item['product_id']])){
                            //get just first image of each products in order to show product list
                            $firstImageUrl = isset($item['images'][0]['images_url']) ? $item['images'][0]['images_url'] : null;
                            echo'
                            <li>
                                <a href="#" class="photo"><img src="'.ASSETS.'/'.$firstImageUrl.'" class="cart-thumb" alt="" /></a>
                                <h6><a href="#">'.$item['product_name'].' </a></h6>
                                <p>1x - <span class="price">$'.$item['product_preis_now'].'</span></p>
                            </li>
                            ';
                            }
                        }
                    
                    ?> --}}
                        <li class="total">
                            <a href="cart/?product_id=newCart" class="btn btn-default hvr-hover btn-cart">VIEW CART</a>
                        </li>


                    </ul>
                </li>
            </div> -->
            <!-- End Side Menu -->
        </nav>
        <!-- End Navigation -->
    </header>
    <!-- End Main Top -->

    <!-- Start Top Search -->
    <div class="top-search">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <input type="text" class="form-control" placeholder="Search">
                
                <span class="input-group-addon close-search"><i class="fa fa-times"></i></span>
            </div>
        </div>
    </div>
    <!-- End Top Search -->



    {{--MAIN--}}
    @yield('content')


    


    <!-- Start Footer  -->
    <footer>
        <div class="footer-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Business Time</h3>
                            <ul class="list-time">
                                <li>Monday - Friday: 08.00am to 05.00pm</li> <li>Saturday: 10.00am to 08.00pm</li> <li>Sunday: <span>Closed</span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Newsletter</h3>
                            <form class="newsletter-box">
                                <div class="form-group">
                                    <input class="" type="email" name="Email" placeholder="Email Address*" />
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <button class="btn hvr-hover" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-top-box">
                            <h3>Social Media</h3>
                            <p>Stay connected with us on social media for the latest updates and exclusive offers.</p>
                            <ul>
                                {{-- <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li> --}}
                                <li><a href="https://www.etsy.com/de-en/shop/FrameMingleStudio"><i class="fab fa-etsy" aria-hidden="true"></i></a></li>
                                {{-- <li><a href="#"><i class="fab fa-linkedin" aria-hidden="true"></i></a></li> --}}
                                {{-- <li><a href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a></li> --}}
                                {{-- <li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li> --}}
                                {{-- <li><a href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a></li> --}}
                                <li><a href="https://www.instagram.com/frameminglestudio/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-widget">
                            <h4>About Freshshop</h4>
                            <p>Our passion lies in transforming your cherished memories into beautiful, personalized art pieces that tell your story. Whether it's a special moment captured in time or a creative gift for a loved one, our meticulously crafted designs are made to inspire and delight. At FrameMingleStudio, we pride ourselves on attention to detail, quality craftsmanship, and exceptional customer service. Explore our collection and find the perfect piece to add a touch of elegance and sentiment to any space. </p> 
                            {{-- <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p> 							 --}}
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link">
                            <h4>Information</h4>
                            <ul>
                                <li><a href="{{route('about')}}">About Us</a></li>
                                {{-- <li><a href="#">Customer Service</a></li> --}}
                                {{-- <li><a href="#">Our Sitemap</a></li> --}}
                                <li><a href={{route('terms')}}>Terms &amp; Conditions</a></li>
                                <li><a href={{route('privacy')}}>Privacy Policy</a></li>
                                {{-- <li><a href="#">Delivery Information</a></li> --}}
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12">
                        <div class="footer-link-contact">
                            <h4>Contact Us</h4>
                            <ul>
                                {{-- <li>
                                    <p><i class="fas fa-map-marker-alt"></i>Address: Michael I. Days 3756 <br>Preston Street Wichita,<br> KS 67213 </p>
                                </li> --}}
                                {{-- <li>
                                    <p><i class="fas fa-phone-square"></i>Phone: <a href="tel:+1-888705770">+1-888 705 770</a></p>
                                </li> --}}
                                <li>
                                    <p><i class="fas fa-envelope"></i>Email: <a href="mailto:infoframeminglestudio@gmail.com">infoframeminglestudio@gmail.com</a></p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Footer  -->

    <!-- Start copyright  -->
    <div class="footer-copyright">
        <p class="footer-company">All Rights Reserved &copy; 2024 
    </div>
    <!-- End copyright  -->
   

    <a href="#" id="back-to-top" title="Back to top" style="display: none;">&uarr;</a>


   <!-- Additional JS files compiled by Mix -->
   {{-- <script src="{{ asset('js/all.js') }}"></script> --}}
   
   <!-- Vite JS -->
   @vite([
    'resources/js/jquery-3.2.1.min.js',
    'resources/js/popper.min.js',
    'resources/js/bootstrap.min.js',
    'resources/js/jquery.superslides.min.js',
    'resources/js/bootstrap-select.js',
    'resources/js/inewsticker.js',
    'resources/js/bootsnav.js',
    'resources/js/images-loded.min.js',
    'resources/js/isotope.min.js',
    'resources/js/owl.carousel.min.js',
    'resources/js/baguetteBox.min.js',
    'resources/js/form-validator.min.js',
    'resources/js/contact-form-script.js',
    'resources/js/custom.js',
    'resources/js/jquery.nicescroll.min.js',
    'resources/js/app.js',
    'resources/js/jquery-ui.js'
])
    {{-- <!-- ALL JS FILES -->
    <script src="../resources/js/jquery-3.2.1.min.js"></script>
    <script src="../resources/js/popper.min.js"></script>
    <script src="../resources/js/bootstrap.min.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../resources/js/jquery.superslides.min.js"></script>
    <script src="../resources/js/bootstrap-select.js"></script>
    <script src="../resources/js/inewsticker.js"></script>
    <script src="../resources/js/bootsnav.js."></script>
    <script src="../resources/js/images-loded.min.js"></script>
    <script src="../resources/js/isotope.min.js"></script>
    <script src="../resources/js/owl.carousel.min.js"></script>
    <script src="../resources/js/baguetteBox.min.js"></script>
    <script src="../resources/js/form-validator.min.js"></script>
    <script src="../resources/js/contact-form-script.js"></script>
    <script src="../resources/js/custom.js"></script> --}}
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    

    <!-- Flash message fade out script -->
    <script>
        $(document).ready(function() {
            setTimeout(function() {
                $('#flash-message').fadeOut('slow');
            }, 3000); 
        });
    </script>   
    <script>
        function updateTotal(input, pricePerItem, product_id) {
            // Get the price per item
            var pricePerItem = pricePerItem;
            // Get the quantity entered by the user
            var quantity = input.value;
            // Calculate the total price by multiplying price per item with quantity
            var totalPrice = pricePerItem * quantity;
            // Update the total price displayed in the HTML
            document.getElementById("totalPrice-"+product_id).textContent = "$ " + totalPrice.toFixed(2);

            // Calculate subtotal
            var subtotal = 0;
            $(".total-pr p").each(function() {
                subtotal += parseFloat($(this).text().replace("$ ", ""));
            });
            $("#subTotal").text("$ " + subtotal.toFixed(2));
            
            // Calculate grand total (considering discount, tax, shipping, etc.)
            var grandTotal = subtotal;
            // You can add any additional calculations for discounts, taxes, shipping, etc. here
            $(".gr-total .h5").text("$ " + grandTotal.toFixed(2));
        }
    </script>

</body>

</html>