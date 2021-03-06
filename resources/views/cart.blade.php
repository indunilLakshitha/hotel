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
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/gijgo.css">
    <link rel="stylesheet" href="assets/css/slicknav.css">
    <link rel="stylesheet" href="assets/css/animate.min.css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/slick.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">






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
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-8">
                                <!-- main-menu -->
                                <div class="main-menu f-right d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            @if (Route::has('login'))
                                            @auth
                                            <li> <a href="{{ url('/home') }}">Home</a></li>
                                            <li><a href="{{ url('/about') }}">About</a></li>
                                            <li><a href="services.html">Service</a></li>

                                            <li><a href="/cart" style="font-size:20px;">My Rooms</a>

                                            </li>
                                            <li><a href="{{ url('/contact') }}">Contact</a></li>
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
                                            <li><a href="{{ url('/wishlist') }}">Wishlist
                                                    ({{ Cart::instance('wishlist')->count(false) }})</a></li>
                                            <li><a href="{{ url('/cart') }}">Cart
                                                    ({{ Cart::instance('default')->count(false) }})</a></li>



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


        <main class="py-4">

            <div class="container">
                <p><a href="{{ url('shop') }}">Home</a> / Cart</p>
                <h1>Your Cart</h1>

                <hr>

                @if (session()->has('success_message'))
                <div class="alert alert-success">
                    {{ session()->get('success_message') }}
                </div>
                @endif

                @if (session()->has('error_message'))
                <div class="alert alert-danger">
                    {{ session()->get('error_message') }}
                </div>
                @endif

                {{-- @if (sizeof(Cart::content()) > 0) --}}

                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Description</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th></th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $total =0?>
                        @isset($itemss)


                        @foreach ($itemss as $item)
                        <tr>
                            <td>{{$item->room_type}}</td>
                            <td>{{$item->room_description1}}</td>
                            <td>{{$item->qty}}</td>
                            <td>{{$item->today_price}}</td>
                            <?php $total +=$item->today_price?>
                        </tr>
                        @endforeach
                        @endisset
                        <tr>
                            <td></td>
                            <td></td>
                            <td>Total Amount</td>
                            <td>{{$total}}</td>
                        </tr>
                    </tbody>
                </table>

                {{-- <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Continue Shopping</a> &nbsp; --}}
                {{-- <a href="{{ url('/home') }}" class="btn btn-success btn-lg">Proceed to Checkout</a> --}}
                <a href="{{ url('/payment') }}" class="btn btn-dark btn-lg">Pay</a>

                {{-- <div style="float:right">
                    <form action="{{ url('/emptyCart') }}" method="POST">
                {!! csrf_field() !!}
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" class="btn btn-danger btn-lg" value="Empty Cart">
                </form>
            </div> --}}

            {{-- @else --}}

            {{-- <h3>You have no items in your shopping cart</h3> --}}
            {{-- <a href="{{ url('/shop') }}" class="btn btn-primary btn-lg">Continue Shopping</a> --}}

            {{-- @endif --}}

            <div class="spacer"></div>

    </div> <!-- end container -->

    </main>
    </div>

    <!-- Scripts -->




    <!-- <script src="{{ asset('js/app.js') }}" ></script> -->
    <!-- <script src="./asset/js/app.js" ></script> -->

    <!-- JS here -->

    <!-- All JS Custom Plugins Link Here here -->
    <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>

    <!-- Jquery, Popper, Bootstrap -->
    <script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="./assets/js/popper.min.js"></script>
    <script src="./assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="./assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="./assets/js/owl.carousel.min.js"></script>
    <script src="./assets/js/slick.min.js"></script>
    <!-- Date Picker -->
    <script src="./assets/js/gijgo.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="./assets/js/wow.min.js"></script>
    <script src="./assets/js/animated.headline.js"></script>
    <script src="./assets/js/jquery.magnific-popup.js"></script>

    <!-- Scrollup, nice-select, sticky -->
    <script src="./assets/js/jquery.scrollUp.min.js"></script>
    <script src="./assets/js/jquery.nice-select.min.js"></script>
    <script src="./assets/js/jquery.sticky.js"></script>

    <!-- contact js -->
    <script src="./assets/js/contact.js"></script>
    <script src="./assets/js/jquery.form.js"></script>
    <script src="./assets/js/jquery.validate.min.js"></script>
    <script src="./assets/js/mail-script.js"></script>
    <script src="./assets/js/jquery.ajaxchimp.min.js"></script>

    <!-- Jquery Plugins, main Jquery -->
    <script src="./assets/js/plugins.js"></script>
    <script src="./assets/js/main.js"></script>




    <script>
        (function(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('.quantity').on('change', function() {
                var id = $(this).attr('data-id')
                $.ajax({
                  type: "PATCH",
                  url: '{{ url("/cart") }}' + '/' + id,
                  data: {
                    'quantity': this.value,
                  },
                  success: function(data) {
                    window.location.href = '{{ url('/cart') }}';
                  }
                });

            });

        })();


       function addToBokking(){

        $.ajax({
                type: 'POST',
                url: '{{('/addtob')}}',
                data: new FormData(form) ,
                processData: false,
                contentType: false,
                success: function(data){
                    console.log(data);
                }
            })

        }

    </script>


</body>

</html>
