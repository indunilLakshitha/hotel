<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">



    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/gijgo.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>

<body>
    <div id="app">

        <header>
            <!-- Header Start -->
            <div class="header-area header-sticky">
                <div class="main-header ">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- logo -->
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="../assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <!-- main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">

                                            <li><a href="about.html">About</a></li>
                                            <li><a href="services.html">Service</a></li>

                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="rooms.html">Rooms</a>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="{{ url('/contact') }}">Contact</a></li>
                                            @if (Route::has('login'))
                                            @auth
                                            <li> <a href="{{ url('/home') }}">Home</a></li>
                                            @else
                                            <li> <a href="{{ route('login') }}">Login</a></li>

                                            @if (Route::has('register'))
                                            <li><a href="{{ route('register') }}">Register</a></li>
                                            @endif
                                            @endauth

                                            @endif


                                            @guest
                                            <!-- <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li> -->
                                            @if (Route::has('register'))
                                            <!-- <li class="nav-item">
                                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                                </li> -->
                                            @endif
                                            @else
                                            <li class="nav-item dropdown">
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#"
                                                    role="button" data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right ">
                                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>


                                                    @if (auth()->check())
                                                    @if (auth()->user()->isAdmin())

                                                    <a class="dropdown-item" href="{{ route('admin.users.index') }}">
                                                        User Management
                                                    </a>


                                                    <a class="dropdown-item" href="{{route('hotel')}}">
                                                        Hotel
                                                    </a>


                                                    @else

                                                    @endif
                                                    @endif

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                                        class="d-none">
                                                        @csrf
                                                    </form>
                                                </div>
                                            </li>
                                            @endguest

                                        </ul>
                                    </nav>
                                </div>


                                <!-- Mobile Menu -->
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Header End -->
        </header>
    </div>

    <main>


        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center"
                data-background="{{URL::to($hotel->hotel_main_image)}}">
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">

                                <h2>{{$hotel->hotel_name}}</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slider Area End-->


        <div class="container">

            <div class="row" style="padding-top: 70px;">

                <div class="col-md-3">

                    <!-- Default form contact -->
                    <form class="text-center border border-red green blue pink p-5" action="/cart"
                        style="text-align:center;background-color: #2C995A;">

                        <p class="h4 mb-4">Search</p>


                        {{-- <h5 style="text-align:left">Destination/property name:</h5>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <input type="text" id="defaultContactFormName" class="form-control mb-4 "
                                    placeholder="Destination/property name:">
                            </div>
                        </div>
                        <h5 style="text-align:left">Check-in date</h5>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <input type="date" id="defaultContactFormName" class="form-control mb-4 ">
                            </div>
                        </div>
                        <h5 style="text-align:left">Check-out date</h5>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <input type="date" id="defaultContactFormName" class="form-control mb-4 ">
                            </div>
                        </div>
                        <h5 style="text-align:left">1-night stay</h5>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <select class="browser-default custom-select mb-4">
                                    <option value="" disabled>Choose option</option>
                                    <option value="1">3 adults</option>
                                    <option value="2" selected>2 adults</option>
                                    <option value="2">3 adults</option>
                                    <option value="2">4 adults</option>
                                    <option value="2">5 adults</option>
                                    <option value="2">6 adults</option>
                                    <option value="2">7 adults</option>
                                    <option value="2">8 adults</option>
                                    <option value="2">9 adults</option>
                                    <option value="2">10 adults</option>
                                    <option value="2">11 adults</option>


                                </select>
                            </div>
                        </div> --}}

                        <!-- Send button -->
                        <button class="btn btn-info btn-block" type="submit">PAY</button>

                    </form>
                    <!-- Default form contact -->

                </div>
                <div class="col-md-9">

                    <!-- Room Start -->
                    <section class="room-area ">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-xl-8">
                                    <!--font-back-tittle  -->
                                    <div class="font-back-tittle mb-45">
                                        <div class="archivment-front">
                                            <h3>Our Rooms</h3>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                @foreach ($rooms as $ro)
                                <div class="col-xl-4 col-lg-6 col-md-6">
                                    <!-- Single Room -->
                                    <div class="single-room mb-50">
                                        <div class="room-img">
                                            <a href="{{ url('shop', [$ro->id]) }}"><img
                                                    src="{{URL::to($ro->room_room_main_imageimage)}}" alt=""></a>
                                        </div>
                                        <div class="room-caption">
                                            <h3><a href="{{ url('shop', [$ro->id]) }}">{{$ro->room_type}}</a></h3>
                                            <div class="per-night">
                                                <span><u>Rs</u>{{$ro->today_price}}<span>/ par night</span></span>
                                            </div>
                                            <div class="per-night">
                                                <span>{{$ro->available}}<br>Rooms Available</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach



                            </div>
                            <div class="row justify-content-center">
                                <div class="room-btn pt-70">
                                    <a href="#" class="btn view-btn1">View more <i class="ti-angle-right"></i> </a>
                                </div>
                            </div>
                        </div>

                    </section>



                    <!-- Room End -->

                </div>

            </div>
        </div>

        <!-- Gallery img Start-->
        <div class="gallery-area fix">
            <div class="container-fluid p-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="gallery-active owl-carousel">
                            <div class="gallery-img">
                                <a href="#"><img src="../assets/img/gallery/gallery1.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="../assets/img/gallery/gallery2.jpg" alt=""></a>
                            </div>
                            <div class="gallery-img">
                                <a href="#"><img src="../assets/img/gallery/gallery3.jpg" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Gallery img End-->




    </main>

    <footer>
        <!-- Footer Start-->
        <div class="footer-area black-bg footer-padding">
            <div class="container">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-30">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img src="../assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <div class="footer-social footer-social2">
                                <a href="#"><i class="fab fa-facebook-f"></i></a>
                                <a href="#"><i class="fab fa-twitter"></i></a>
                                <a href="#"><i class="fas fa-globe"></i></a>
                                <a href="#"><i class="fab fa-behance"></i></a>
                            </div>
                            <div class="footer-pera">
                                <p>
                                    Copyright &copy;<script>
                                        document.write(new Date().getFullYear());
                                    </script> All rights reserved | Smart Key

                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Quick Links</h4>
                                <ul>
                                    <li><a href="#">About SL Hotels</a></li>
                                    <li><a href="#">Our Best Rooms</a></li>
                                    <li><a href="#">Our Photo Gellary</a></li>
                                    <li><a href="#">Pool Service</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Reservations</h4>
                                <ul>
                                    <li><a href="#">Tel: 011 7845129</a></li>
                                    <li><a href="#">Skype: SLhotels</a></li>
                                    <li><a href="#">slhotel@slhotel.com</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-4  col-sm-5">
                        <div class="single-footer-caption mb-30">
                            <div class="footer-tittle">
                                <h4>Our Location</h4>
                                <ul>
                                    <li><a href="#">145 Maha Street,</a></li>
                                    <li><a href="#">Colombo 2</a></li>
                                </ul>
                                <!-- Form -->
                                <div class="footer-form">
                                    <div id="mc_embed_signup">
                                        <form target="_blank"
                                            action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                            method="get" class="subscribe_form relative mail_part">
                                            <input type="email" name="email" id="newsletter-form-email"
                                                placeholder="Email Address" class="placeholder hide-on-focus"
                                                onfocus="this.placeholder = ''"
                                                onblur="this.placeholder = ' Email Address '">
                                            <div class="form-icon">
                                                <button type="submit" name="submit" id="newsletter-submit"
                                                    class="email_icon newsletter-submit button-contactForm"><img
                                                        src="assets/img/logo/form-iocn.jpg" alt=""></button>
                                            </div>
                                            <div class="mt-10 info"></div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End-->
    </footer>

    <!-- Scripts -->




    <!-- <script src="{{ asset('js/app.js') }}" ></script> -->
    <!-- <script src="./asset/js/app.js" ></script> -->

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="../../assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="../../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../../assets/js/owl.carousel.min.js"></script>
    <script src="../../assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="../../assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/animated.headline.js"></script>
    <script src="../../assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="../../assets/js/jquery.scrollUp.min.js"></script>
    <script src="../../assets/js/jquery.nice-select.min.js"></script>
    <script src="../../assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="../../assets/js/contact.js"></script>
    <script src="../../assets/js/jquery.form.js"></script>
    <script src="../../assets/js/jquery.validate.min.js"></script>
    <script src="../../assets/js/mail-script.js"></script>
    <script src="../../assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="../../assets/js/plugins.js"></script>
    <script src="../../assets/js/main.js"></script>







</body>

</html>
