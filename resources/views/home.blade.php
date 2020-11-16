@extends('layouts.app')

@section('content')

    <main>

        <!-- slider Area Start-->
        <div class="slider-area ">
            <!-- Mobile Menu -->
            <div class="slider-active dot-style">
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single-slider  hero-overly slider-height d-flex align-items-center" data-background="assets/img/hero/h1_hero.jpg" >
                    <div class="container">
                        <div class="row justify-content-center text-center">
                            <div class="col-xl-9">
                                <div class="h1-slider-caption">
                                    <h1 data-animation="fadeInUp" data-delay=".4s">top hotel in the city</h1>
                                    <h3 data-animation="fadeInDown" data-delay=".4s">Hotel & Resourt</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->

        <form action="/filter_rooms" method="post">
        <!-- Booking Room Start-->
        @csrf
        <div class="booking-area">
            <div class="container">
               <div class="row ">
               <div class="col-12">
                <form action="">
                <div class="booking-wrap d-flex justify-content-between align-items-center">

                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>City:</span>
                        </div>
                        <div class="select-this">
                                <div class="select-itms" >
                                    <select name="city" id="select1">
                                        @foreach ($cities as $item)
                                            <option value="{{$item}}">{{$item}}</option>
                                        @endforeach
                                    </select>
                                </div>
                        </div>
                   </div>
                    <!-- select in date -->
                    <div class="single-select-box mb-30">
                        <!-- select out date -->
                        <div class="boking-tittle">
                            <span> Check In Date:</span>
                        </div>
                        <div class="boking-datepicker">
                            <input id="datepicker1"  placeholder="10/12/2020" />
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <!-- select out date -->
                        <div class="boking-tittle">
                            <span>Check OutDate:</span>
                        </div>
                        <div class="boking-datepicker">
                            <input id="datepicker2"  placeholder="12/12/2020" />
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Adults:</span>
                        </div>
                        <div class="select-this">
                                <div class="select-itms" >
                                    <select name="adults" id="select1">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Children:</span>
                        </div>
                        <div class="select-this">
                                <div class="select-itms">
                                    <select name="children" id="select2">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                    </select>
                                </div>
                        </div>
                   </div>
                    <!-- Single Select Box -->
                    <div class="single-select-box mb-30">
                        <div class="boking-tittle">
                            <span>Rooms:</span>
                        </div>
                        <div class="select-this">
                                <div class="select-itms">
                                    <select name="select" id="select3">
                                        <option value="">1</option>
                                        <option value="">2</option>
                                        <option value="">3</option>
                                        <option value="">4</option>
                                    </select>
                                </div>
                        </div>
                   </div>
                   <button type="submit" onclick >Book Now</button>
                </form>
                    <!-- Single Select Box -->


                </div>
               </div>
               </div>
            </div>
        </div>
        <!-- Booking Room End-->
<!-- Room Start -->
<section class="room-area">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <!--font-back-tittle  -->
                <div class="font-back-tittle mb-45">
                    <div class="archivment-front">
                        <h3>Our Rooms</h3>
                    </div>
                    <h3 class="archivment-back">Our Hotels</h3>
                </div>
            </div>
        </div>
        <div class="row">
            @isset($hotel)

            @foreach ($hotel as $hol)

            <div class="col-xl-4 col-lg-6 col-md-6">
                <!-- Single Room -->
                <div class="single-room mb-50">
                    <div class="room-img">
                       <a href=" {{URL::to('hotelshow/'.$hol->id)}}"><img src="{{URL::to($hol->hotel_main_image)}}" alt="" onclick="myFunction()" width="200px"></a>
                    </div>
                    <div class="room-caption">
                        <h3><a href=" {{URL::to('hotelshow/'.$hol->id)}}">{{$hol->hotel_name}}</a></h3>
                        <div class="per-night">
                            <span><u>$</u> <span>{{$hol->hotel_location}}</span></span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endisset
        </div>
        <div class="row justify-content-center">
            <div class="room-btn pt-70">
                <a href="#" class="btn view-btn1">View more  <i class="ti-angle-right"></i> </a>
            </div>
        </div>
    </div>

</section>
<!-- Room End -->

        <!-- Dining Start -->
        <div class="dining-area dining-padding-top">
            <!-- Single Left img -->
            <div class="single-dining-area left-img">
                <div class="container">
                    <div class="row justify-content-end">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption">
                                <span>Our resturent</span>
                                <h3>Dining & Drinks</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                                <a href="#" class="btn border-btn">Learn More <i class="ti-angle-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single Right img -->
            <div class="single-dining-area right-img">
                <div class="container">
                    <div class="row justify-content-start">
                        <div class="col-lg-8 col-md-8">
                            <div class="dining-caption text-right">
                                <span>Our Pool</span>
                                <h3>Swimming Pool</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br>veniam, quis nostrud.</p>
                                <a href="#" class="btn border-btn">Learn More  <i class="ti-angle-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dining End -->


        <!-- Blog Start -->
       <div class="blog-area blog-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <!-- Seciton Tittle  -->
                        <div class="font-back-tittle mb-50">
                            <div class="archivment-front">
                                <h3>Our Blog</h3>
                            </div>
                            <h3 class="archivment-back">Recent News</h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="single-blog.html"><img src="assets/img/our_blog/blog-img1.jpg" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul><li>by<a href="#"> Jhon Guru</a></li></ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                               <a href="single-blog.html"> <img src="assets/img/our_blog/blog-img2.jpg" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul><li>by<a href="#"> Jhon Guru</a></li></ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <!-- Single Blog -->
                        <div class="single-blog mb-30">
                            <div class="blog-img">
                                <a href="single-blog.html"><img src="assets/img/our_blog/blog-img3.jpg" alt=""></a>
                            </div>
                            <div class="blog-caption">
                                <div class="blog-cap-top d-flex justify-content-between mb-40">
                                    <span>news</span>
                                    <ul><li>by<a href="#"> Jhon Guru</a></li></ul>
                                </div>
                                <div class="blog-cap-mid">
                                    <p><a href="single-blog.html">5 Simple Tricks for Getting Stellar Hotel Service Wherever You Are</a></p>
                                </div>
                                <!-- Comments -->
                                <div class="blog-cap-bottom d-flex justify-content-between">
                                    <span>Feb 28, 2020</span>
                                    <span><img src="assets/img/our_blog/blog-comments-icon.jpg" alt="">3</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       </div>
        <!-- Blog End -->

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery2.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="assets/img/gallery/gallery3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->
    </main>


@endsection
