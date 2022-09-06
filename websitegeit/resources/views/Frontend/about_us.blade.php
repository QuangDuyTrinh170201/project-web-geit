<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>About Us</title>

    <!-- Favicon  -->
    <link rel="icon" href="{{ url('public') }}/Frontend/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="{{ url('public') }}/Frontend/css/core-style.css">
    <link rel="stylesheet" href="{{ url('public') }}/Frontend/style.css">



</head>

<body>

    <!-- ##### Header Area Start ##### -->
    <header class="header_area">
        <div class="classy-nav-container breakpoint-off d-flex align-items-center justify-content-between">
            <!-- Classy Menu -->
            <nav class="classy-navbar" id="essenceNav">
                <!-- Logo -->
                <a class="nav-brand" href="index.html"><img src="{{ url('public') }}/Frontend/img/bg-img/logoGS.png" alt=""></a>
                <!-- Navbar Toggler -->
                <div class="classy-navbar-toggler">
                    <span class="navbarToggler"><span></span><span></span><span></span></span>
                </div>
                <!-- Menu -->
                <div class="classy-menu">
                    <!-- close btn -->
                    <div class="classycloseIcon">
                        <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                    </div>
                    <!-- Nav Start -->
                    <div class="classynav">
                        <ul>
                            <li><a href="{{ url('dashboard') }}">Home</a></li>
                            <li><a href="{{url('product')}}">Shop</a>
                            </li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="single-product-details.html">Product Details</a></li>
                                    <li><a href="checkout.html">Checkout</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('about-us')}}">About</a></li>
                            <li><a href="{{url('contact-us')}}">Contact</a></li>
                        </ul>
                    </div>
                    <!-- Nav End -->
                </div>
            </nav>

            <!-- Header Meta Data -->
            <div class="header-meta d-flex clearfix justify-content-end">
                <!-- Search Area -->
                <div class="search-area">
                    <form action="#" method="post">
                        <input type="search" name="search" id="headerSearch" placeholder="Type for search">
                        <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                    </form>
                </div>
                <!-- Favourite Area -->
                <div class="favourite-area">
                    <a href="#"><img src="{{ url('public') }}/Frontend/img/core-img/heart.svg" alt=""></a>
                </div>
                <!-- User Login Info -->
                <div class="user-login-info">
                    <a href="{{url ('login')}}"><img src="{{ url('public') }}/Frontend/img/core-img/user.svg" alt=""></a>
                </div>
                <!-- Cart Area -->
                <div class="cart-area">
                    <a href="#" id="essenceCartBtn"><img src="{{ url('public') }}/Frontend/img/core-img/bag.svg" alt=""> <span>3</span></a>
                </div>
            </div>

        </div>
    </header>
    <!-- ##### Header Area End ##### -->

  <!-- ##### Right Side Cart Area ##### -->
  <div class="cart-bg-overlay"></div>

  <div class="right-side-cart-area">

      <!-- Cart Button -->
      <div class="cart-button">
          <a href="#" id="rightSideCart"><img src="{{ url('public') }}/Frontend/img/core-img/bag.svg" alt=""> <span>3</span></a>
      </div>

      <div class="cart-content d-flex">

          <!-- Cart List Area -->
          <div class="cart-list">
              <!-- Single Cart Item -->
              <div class="single-cart-item">
                  <a href="#" class="product-image">
                      <img src="" class="cart-thumb" alt=""><!--img1-->
                      <!-- Cart Item Desc -->
                      <div class="cart-item-desc">
                        <span class="product-remove"><i class="fa fa-close" aria-hidden="true"></i></span>
                          <h6></h6><!--Nameproduct-->
                          <p class="quantity"></p>
                          <p class="color"></p>
                          <p class="price"></p>
                      </div>
                  </a>
              </div>
          </div>

          <!-- Cart Summary -->
          <div class="cart-amount-summary">

              <h2>Summary</h2>
              <ul class="summary-table">
                  <li><span>subtotal:</span> <span>$274.00</span></li>
                  <li><span>delivery:</span> <span>Free</span></li>
                  <li><span>discount:</span> <span>-15%</span></li>
                  <li><span>total:</span> <span>$232.00</span></li>
              </ul>
              <div class="checkout-btn mt-100">
                  <a href="checkout.html" class="btn essence-btn">check out</a>
              </div>
          </div>
      </div>
  </div>
  <!-- ##### Right Side Cart End ##### -->

    <!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb_area breadcumb-style-two bg-img" style="background-image: url({{ url('public') }}/Frontend/img/bg-img/breadcumb2.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="page-title text-center">
                        <h2>About Us</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->

    <!-- ##### Blog Wrapper Area Start ##### -->
    <div class="blog-wrapper section-padding-80">
        <div class="container">
            <div class="row">

                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{ url('public') }}/Frontend/img/bg-img/blog1.jpg" alt="">
                        <!-- Post Title -->
                    </div>
                </div>

                <!-- Single Blog Area -->
                <div class="col-12 col-lg-6">
                    <div class="single-blog-area mb-50">
                        <img src="{{ url('public') }}/Frontend/img/bg-img/blog2.jpg" alt="">
                        <!-- Post Title -->
                    </div>
                </div>
                <div>
                    <figure>
                        <blockquote cite="https://www.huxley.net/bnw/four.html">
                            <dl>
                                <dd>
                                    <p >
                                       GeitStop is a newly form star-up, completely different with any other shop tht you have known. We focus on bring you products which satisfied your hobbies needs. We hope to serve and connect youthful, energetic man with hobbies. GeitStop seem familiar with some of you, in fact, we came from some online communities, which connect people who love photography, motorbike, etc. Come join us, you will get to known the best hobbies connection with most professional specialist.
                                    </p>
                                </dd>
                            </dl>

                        </blockquote>
                        <figcaption> <cite>-- Founder GeitStop --</cite></figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </div>
    <!-- ##### Blog Wrapper Area End ##### -->

     <!-- ##### Footer Area Start ##### -->
     <footer class="footer_area clearfix">
        <div class="container">
            <div class="row">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area d-flex mb-30">
                        <!-- Logo -->
                        <div class="footer-logo mr-50">
                            <a href="#"><img src="{{ url('public') }}/Frontend/img/bg-img/logoGS.png" alt=""></a>
                        </div>
                        <!-- Footer Menu -->
                        <div class="footer_menu">
                            <ul>
                                <li><a href="{{url('product')}}">Shop</a></li>
                                <li><a href="{{url('about-us')}}">About</a></li>
                                <li><a href="{{url('contact-us')}}">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area mb-30">
                        <ul class="footer_widget_menu">
                            <li><a href="#">Order Status</a></li>
                            <li><a href="#">Payment Options</a></li>
                            <li><a href="#">Shipping and Delivery</a></li>
                            <li><a href="#">Guides</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="row align-items-end">
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_heading mb-30">
                            <h6>Subscribe</h6>
                        </div>
                        <div class="subscribtion_form">
                            <form action="#" method="post">
                                <input type="email" name="mail" class="mail" placeholder="Your email here">
                                <button type="submit" class="submit"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Single Widget Area -->
                <div class="col-12 col-md-6">
                    <div class="single_widget_area">
                        <div class="footer_social_area">
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        </div>
                    </div>
                </div>
            </div>

<div class="row mt-5">
                <div class="col-md-12 text-center">
                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>, distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>

        </div>
    </footer>
    <!-- ##### Footer Area End ##### -->

    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="{{ url('public') }}/Frontend/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="{{ url('public') }}/Frontend/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{ url('public') }}/Frontend/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="{{ url('public') }}/Frontend/js/plugins.js"></script>
    <!-- Classy Nav js -->
    <script src="{{ url('public') }}/Frontend/js/classy-nav.min.js"></script>
    <!-- Active js -->
    <script src="{{ url('public') }}/Frontend/js/active.js"></script>
    <!--Map js-->
    <script src="{{ url('public') }}/Frontend/js/map.js"></script>


</body>

</html>
