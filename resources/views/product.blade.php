
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
       <div class="header-area header-sticky" >
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
                                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                    {{ Auth::user()->name }}
                                                </a>

                                                <div class="dropdown-menu dropdown-menu-right " >
                                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                                    document.getElementById('logout-form').submit();">
                                                        {{ __('Logout') }}
                                                    </a>
                

                                                    @if (auth()->check())
                                                        @if (auth()->user()->isAdmin())
                                                            
                                                        <a class="dropdown-item" href="{{ route('admin.users.index') }}" >
                                                            User Management
                                                            </a>

                
                                                            <a class="dropdown-item" href="{{route('hotel')}}">
                                                            Hotel
                                                            </a>
                                                        

                                                        @else
                                                            
                                                        @endif
                                                    @endif
                                                
                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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


    <div class="container">
        <p><a href="{{ url('/shop') }}">Shop</a> / {{ $product->room_type }}</p>
        <h1>{{ $product->room_type }}</h1>

        <hr>

        <div class="row">
            <div class="col-md-4">
                <img src="{{URL::to($product->room_room_main_imageimage)}}" alt="product" class="img-responsive">
            </div>

            <div class="col-md-8">
                <h3>${{ $product->today_price }}</h3>
                <form action="{{ url('/cart') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->room_type}}">
                    <input type="hidden" name="price" value="{{ $product->today_price}}">
                    <input type="hidden" name="image" value="{{ $product->room_room_main_imageimage}}">
                    <input type="submit" class="btn btn-success btn-lg" value="Add to Cart">
                </form>

                <form action="{{ url('/wishlist') }}" method="POST" class="side-by-side">
                    {!! csrf_field() !!}
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->room_type }}">
                    <input type="hidden" name="price" value="{{ $product->today_price }}">
                    <input type="submit" class="btn btn-primary btn-lg" value="Add to Wishlist">
                </form>


                <br><br>

                {{ $product->room_description1 }}
                <br><br>
                {{ $product->room_description2 }}
                <br><br>
                {{ $product->room_description3 }}
                
            </div> <!-- end col-md-8 -->

            
        </div> <!-- end row -->

        <div class="spacer"></div>

        <div class="row">
            <h3>You may also like...</h3>

         

        </div> <!-- end row -->

        <div class="spacer"></div>


    </div> <!-- end container -->



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
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Smart Key
  
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
                                 <div class="footer-form" >
                                     <div id="mc_embed_signup">
                                         <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                         method="get" class="subscribe_form relative mail_part">
                                             <input type="email" name="email" id="newsletter-form-email" placeholder="Email Address"
                                             class="placeholder hide-on-focus" onfocus="this.placeholder = ''"
                                             onblur="this.placeholder = ' Email Address '">
                                             <div class="form-icon">
                                               <button type="submit" name="submit" id="newsletter-submit"
                                               class="email_icon newsletter-submit button-contactForm"><img src="assets/img/logo/form-iocn.jpg" alt=""></button>
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






