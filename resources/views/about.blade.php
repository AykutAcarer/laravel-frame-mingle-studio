@extends('components/layout')

@section('content')

    <!-- Start About Page  -->
    <div class="about-box-main">
        <div class="container">
            <div class="row">
				<div class="col-lg-6">
                    <div class="banner-frame"> <img class="img-fluid" src="{{asset('images/about-page-img.png')}}" alt="" />
                    </div>
                </div>
                <div class="col-lg-6">
                    <h2 class="noo-sh-title-top"><span>Frame Mingle Studio is a Star Seller!</span></h2>
                    <p>Welcome to Frame Mingle Studio, where creativity meets craftsmanship!</p>
                    <p>Our studio is dedicated to creating unique and personalized photo collages that capture your most cherished memories. Each piece is meticulously designed to tell a story, blending art and emotion to create stunning visual displays. Whether you're celebrating a special occasion, commemorating a loved one, or simply adding a touch of elegance to your home decor, our custom frames are crafted to perfection.</p>
                    <p>At Frame Mingle Studio, we believe that every picture tells a thousand words, and our mission is to bring those stories to life. Our skilled artisans use high-quality materials and innovative techniques to ensure that every collage is not just a product, but a work of art. We take pride in our attention to detail and our commitment to customer satisfaction. Join us in preserving your precious moments with style and grace, and let us help you create a lasting legacy through our beautiful, handcrafted frames.</p>
                    <p>Thank you for visiting our shop and allowing us to be a part of your journey in preserving life's precious moments.</p>
					{{-- <a class="btn hvr-hover" href="#">Read More</a> --}}
                </div>
            </div>
            <div class="row my-5">
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Smooth Shipping</h3>
                        <p>Has a history of shipping on time with tracking. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Speedy replies</h3>
                        <p>Has a history of replying to messages quickly. </p>
                    </div>
                </div>
                <div class="col-sm-6 col-lg-4">
                    <div class="service-block-inner">
                        <h3>Rave reviews</h3>
                        <p>Average review rating is 4.8 or higher. </p>
                    </div>
                </div>
            </div>
            <div class="row my-4" style="display: flex; justify-content:center; flex-wrap:wrap;">
                <div class="col-12" style="display: flex; justify-content:center; flex-wrap:wrap;">
                    <h2 class="noo-sh-title">Meet Our Team</h2>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Elena</h3> <span class="post">Designer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>FrameMingle Studio, led by the talented duo Elena and Nile, is dedicated to creating personalized photo collages and custom art pieces that capture life's most cherished moments. Their meticulous attention to detail and passion for creativity shine through in every piece they craft, making each artwork a unique and meaningful addition to any home. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-2.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Nile</h3> <span class="post">Designer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>FrameMingle Studio, led by the talented duo Elena and Nile, is dedicated to creating personalized photo collages and custom art pieces that capture life's most cherished moments. Their meticulous attention to detail and passion for creativity shine through in every piece they craft, making each artwork a unique and meaningful addition to any home.</p>
                        </div>
                        <hr class="my-0"> </div>
                </div>
                {{-- <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-3.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Elena</h3> <span class="post">Designer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div> --}}
                {{-- <div class="col-sm-6 col-lg-3">
                    <div class="hover-team">
                        <div class="our-team"> <img src="images/img-1.jpg" alt="" />
                            <div class="team-content">
                                <h3 class="title">Williamson</h3> <span class="post">Web Developer</span> </div>
                            <ul class="social">
                                <li>
                                    <a href="#" class="fab fa-facebook"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-twitter"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-google-plus"></a>
                                </li>
                                <li>
                                    <a href="#" class="fab fa-youtube"></a>
                                </li>
                            </ul>
                            <div class="icon"> <i class="fa fa-plus" aria-hidden="true"></i> </div>
                        </div>
                        <div class="team-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent urna diam, maximus ut ullamcorper quis, placerat id eros. Duis semper justo sed condimentum rutrum. Nunc tristique purus turpis. Maecenas vulputate. </p>
                        </div>
                        <hr class="my-0"> </div>
                </div> --}}
            </div>
        </div>
    </div>
    <!-- End About Page -->

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