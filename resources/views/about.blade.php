@extends('layouts.app')

@section('content')



        <!-- slider Area Start-->
        <div class="slider-area">
            <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/aboutpage_hero.jpg" >
                <div class="container">
                    <div class="row ">
                        <div class="col-md-11 offset-xl-1 offset-lg-1 offset-md-1">
                            <div class="hero-caption">
                                <span>About</span>
                                <h2>About</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <main>


<!-- Make customer Start-->
<section class="make-customer-area customar-padding fix">
    <div class="container-fluid p-0">
        <div class="row">
           <div class="col-xl-5 col-lg-6">
                <div class="customer-img mb-120">
                    <img src="assets/img/customer/customar1.png" class="customar-img1" alt="">
                    <img src="assets/img/customer/customar2.png" class="customar-img2" alt="">
                    <div class="service-experience heartbeat">
                        <h3>25 Years of Service<br>Experience</h3>
                    </div>
                </div>
           </div>
            <div class=" col-xl-4 col-lg-4">
                <div class="customer-caption">
                    <span>About our company</span>
                    <h2>Make the customer the hero of your story</h2>
                    <div class="caption-details">
                        <p class="pera-dtails">Lorem ipsum dolor sit amet, consectetur adipisic- ing elit, sed do eiusmod tempor inc. </p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud. </p>
                        <a href="#" class="btn more-btn1">Learn More <i class="ti-angle-right"></i> </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Make customer End-->


<!-- Gallery img Start-->
<div class="gallery-area g-padding fix">
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

<!-- Dining Start -->
<div class="dining-area d-padding">
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
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
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

@endsection