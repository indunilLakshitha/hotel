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
       
                                            <li><a href="#">Pages</a>
                                                <ul class="submenu">
                                                    <li><a href="rooms.html">Rooms</a>
                                                    <li><a href="elements.html">Element</a></li>
                                                </ul>
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


        

        <main class="py-4">
        <div class="container">
 


 <div class="row">
         <div class="col-sm-8"></div>
         <div class="col-sm-4"></div>
     </div>
     <div class="row">
         <div class="col-sm-8"></div>
         <div class="col-sm-4"></div>
     </div>
     <div class="row">
         <div class="col-sm-10"></div>
         <div class="col-sm-2">
        
         <a href="{{ route('hotel') }}"> <button type="button"  class="btn btn-primary">Back</button></a>
         </div>
     </div>
    
 
     <!-- Add Hotel -->
     
     <div class="container py-5">
     <div class="row" >
         <div class="col-md-10 mx-auto"  style="border-style: solid;">
           <h1>Add Room Images</h1>
             <form  action ="{{URL::to('storeRoomImage/'.$room->id)}}" method="POST" enctype="multipart/form-data">
                 @csrf
                 <div class="form-group row">
                     <div class="col-sm-6">
                         <label >Room Type</label>
 
                         <div>
                         
                         <select class="form-control" id="sel1" name="room_detail_id" style="text-align:right;">
 
                        
                             <option value="{{$room->id}}">{{$room->room_type}}</option>
                        </select>
 
                         </div>

                         
 
 
                     </div>
                     <div class="col-sm-6">
                         <label >Hotel Name</label>
 
                         <div>
                         
                         <select class="form-control" id="sel1"  style="text-align:right;">
 
                        
                             <option >{{$hotel->hotel_name}}</option>
                        </select>
 
                         </div>

                         
 
 
                     </div>
                    
                 </div>
                 <div class="form-group row">
                     <div class="col-sm-6">
                     <label for="inputLastname">Select Image Type</label>
 
                         <div>
                             <select class="form-control" id="sel1" name="room_image_description">
                             
                                 <option value="BathRoom">BathRoom</option>
                                 <option value="Top Room Image">Top Room Image</option>
                                 <option value="Bottom Room Image">Bottom Room Image </option>
                                 <option value="Left Room Image">Left Room Image</option>
                                 <option value="Right Room Image">Right Room Image</option>
 
                             </select>
                         </div>
                     </div>
 
                     <div class="col-sm-6">
                         <label for="inputAddressLine1">Room Images</label>
                         <div>
                          <input type="file" name="room_image">
                         </div>
                         
                     </div>
                     
                    
                 </div>
                 
                 <div style="padding-bottom: 60px;">
                     <button type="submit" class="btn btn-primary px-4 float-right"  >Save</button>
                 </div>
                 
             </form>
         </div>
     </div>
 </div>
     
     
 
 
 </div>

 <div class="row">
     <div class=col-2>

     </div>
    <div class=col-8>

          <!-- ViewHotel -->
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Room Type</th>
      <th scope="col">Room Image</th>

      
      <th scope="col">Delete</th>
    </tr>
  </thead>
  @foreach ($xx as $xxx)
 
  <tbody>
    <tr>
    <th scope="row">{{$xxx->id}}</th>
    <td>{{$xxx->room_image_description}}</td>
    <td><img src="{{URL::to($xxx->room_image)}}" height="70px;" width="80px;"></td>
    <td><a  href = 'delete/{{ $xxx->id }}' ><button type="button" class="btn btn-danger">Delete</button></a></td>
    

      
    </tr>
  
  </tbody>
  @endforeach


  </table>

     </div>
     <div class=col-2>

    </div>

 </div>

  

        </main>
    </div>

   <!-- Scripts -->
   

   

        <!-- <script src="{{ asset('js/app.js') }}" ></script> -->
        <!-- <script src="./asset/js/app.js" ></script> -->

           	<!-- JS here -->
	
		<!-- All JS Custom Plugins Link Here here -->
        <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		
		<!-- Jquery, Popper, Bootstrap -->
		<script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
	    <!-- Jquery Mobile Menu -->
        <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
        <script src="../assets/js/owl.carousel.min.js"></script>
        <script src="../assets/js/slick.min.js"></script>
        <!-- Date Picker -->
        <script src="../assets/js/gijgo.min.js"></script>
		<!-- One Page, Animated-HeadLin -->
        <script src="../assets/js/wow.min.js"></script>
		<script src="../assets/js/animated.headline.js"></script>
        <script src="../assets/js/jquery.magnific-popup.js"></script>

		<!-- Scrollup, nice-select, sticky -->
        <script src="../assets/js/jquery.scrollUp.min.js"></script>
        <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="../assets/js/jquery.sticky.js"></script>
        
        <!-- contact js -->
        <script src="../assets/js/contact.js"></script>
        <script src="../assets/js/jquery.form.js"></script>
        <script src="../assets/js/jquery.validate.min.js"></script>
        <script src="../assets/js/mail-script.js"></script>
        <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
        <script src="../assets/js/plugins.js"></script>
        <script src="../assets/js/main.js"></script>




        


</body>
</html>






@section('content')

@endsection