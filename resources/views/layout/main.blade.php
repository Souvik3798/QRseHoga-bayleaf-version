<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRseHoga</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/images/logo/qrlogolight1.png')}}">

    <!-- fontawesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js" integrity="sha512-6PM0qYu5KExuNcKt5bURAoT6KCThUmHRewN3zUFNaoI6Di7XJPTMoT6K0nsagZKk2OB4L7E3q1uQKHNHd4stIQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!-- CSS ============================================ -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/animation.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/feature.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/magnify.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick-theme.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightbox.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="active-light-mode">

    <div class="header-top-bar">
        <div class="container">
            <div class="row align-items-center">
                <!-- <div class="col-lg-4 col-md-12 col-12">
                    <div class="header-left">
                        <p><a href="#">Get the listing/menu based on your Buisness need
                                <i class="feather-chevron-right"></i>
                            </a></p>
                    </div> -->
                <!-- </div> -->
                <div class="col-lg-8 col-md-12 col-12">
                    <div class="header-right">
                        <!-- <div class="address-content">
                            <p>
                                <i class="feather-map-pin"></i>
                                <span>Alabama, USA</span>
                            </p>
                            <p>
                                <i class="feather-phone"></i>
                                <span><a href="#">+06 58 49 99 56</a></span>
                            </p>
                        </div> -->
                        <!-- <div class="social-icon-wrapper">
                            <ul class="social-icon social-default icon-naked">
                                <li><a href="https://www.facebook.com/">
                                        <i class="feather-facebook"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.twitter.com">
                                        <i class="feather-twitter"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.instagram.com/">
                                        <i class="feather-instagram"></i>
                                    </a>
                                </li>
                                <li><a href="https://www.linkdin.com/">
                                        <i class="feather-linkedin"></i>
                                    </a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Start Header Area  -->
    <header class="rn-header header-default header-transparent header-sticky">
        <div class="container position-relative">
            <div class="row align-items-center row--0">
                <div class="col-lg-3 col-md-6 col-4">
                    <div class="logo">
                        <a href="{{url('/')}}">
                            <img class="logo-light" src="{{asset('assets/images/logo/qrlogolight1.png')}}" alt="Corporate Logo">
                            <img class="logo-dark" src="{{asset('assets/images/logo/qrlogodark1.png')}}" alt="Corporate Logo">
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 col-md-6 col-8 position-static">
                    <div class="header-right">
                        <nav class="mainmenu-nav d-none d-lg-block">
                            <ul class="mainmenu">
                                <li class="has-droupdown has-menu-child-item"><a href="{{ url('/') }}">Home</a>

                                <li class="has-droupdown has-menu-child-item"><a href="{{url('/menu')}}">Menu</a>

                                </li>

                                <li class="has-droupdown has-menu-child-item"><a href="{{url('/contact')}}">Contact</a>

                                </li>
                                @if(Session::get('admin'))
                                <li><a class="nav-link" href="{{ url('dish') }}"> <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
                                @else
                                <li><a class="nav-link" href="{{ url('login') }}"> <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
                                @endif

                                @if(Session::get('admin'))
                                    <li>
                                        <a class="nav-link" href="{{ url('logout') }}"> <i class="fa-solid fa-arrow-right-from-bracket"></i></a></li>
                                    </li>
                                @endif
                            </ul>







                        </nav>
                        <!-- Start Header Btn  -->
                        <!-- <div class="header-btn"><a class="btn-default btn-small" target="_blank" href="https://themeforest.net/checkout/from_item/34133466?license=regular">BUY NOW</a></div> -->
                        <!-- End Header Btn  -->

                        <!-- Start Mobile-Menu-Bar -->
                        <div class="mobile-menu-bar ml--5 d-block d-lg-none">
                            <div class="hamberger">
                                <button class="hamberger-button">
                                    <i class="feather-menu"></i>
                                </button>
                            </div>
                        </div>
                        <!-- Start Mobile-Menu-Bar -->


                        <div id="my_switcher" class="my_switcher">
                            <ul>
                                <li>
                                    <a href="javascript: void(0);" data-theme="light" class="setColor light">
                                        <img class="sun-image" src="assets/images/icons/sun-01.svg" alt="Sun images">
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript: void(0);" data-theme="dark" class="setColor dark">
                                        <img class="Victor Image" src="assets/images/icons/vector.svg" alt="Vector Images">
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- End Header Area  -->
    <div class="popup-mobile-menu">
        <div class="inner">
            <div class="header-top">
                <div class="logo">
                    <a href="index-corporate.html">
                        <img class="logo-light" src="{{asset('assets/images/logo/qrlogolight1.png')}}" alt="Corporate Logo">
                        <img class="logo-dark" src="{{asset('assets/images/logo/qrlogodark1.png')}}" alt="Corporate Logo">

                    </a>
                </div>
                <div class="close-menu">
                    <button class="close-button">
                        <i class="feather-x"></i>
                    </button>
                </div>
            </div>
            <ul class="mainmenu">
                <li class=" menu-child-item"><a href="{{ url('/') }}">Home</a>


                <li class="menu-child-item"><a href="{{url('/menu')}}">Menu</a>

                </li>
                <li class="menu-child-item"><a href="{{url('/contact')}}">Contact</a>

                </li>

                                @if(Session::get('admin'))
                                <li><a class="nav-link" href="{{ url('dish') }}"> <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
                                @else
                                <li><a class="nav-link" href="{{ url('login') }}"> <i class="fa-solid fa-arrow-right-to-bracket"></i></a></li>
                                @endif
            </ul>







        </div>
    </div>
    </div>
    <!-- Start Theme Style  -->
    <div>
    <div class="rn-gradient-circle"></div>
    <div class="rn-gradient-circle theme-pink"></div>
    </div>
    <!-- End Theme Style  -->



    @yield('content')


            <!-- Start Footer Area  -->
            <div class="footer-style-3">

                <div class="copyright-area copyright-style-one variation-two">
                    <div class="container">
                        <div class="row align-items-center">
                            <!-- <div class="col-lg-4 col-md-7 col-sm-12 col-12">
                                <div class="copyright-left">
                                    <ul class="ft-menu link-hover">
                                        <li><a href="privacy-policy.html">Privacy Policy</a></li>
                                        <li><a href="#">Terms And Condition</a></li>
                                        <li><a href="contact.html">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div> -->
                            <div class="col-lg-4 col-md-5 mt_sm--20">
                                <div class="copyright-center text-center">
                                    <ul class="social-icon social-default color-lessdark justify-content-center">
                                        <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="200">
                                            <a href="https://www.facebook.com/watch/QuadMonkSolutions/" target="_blank">
                                                <i class="feather-facebook"></i>
                                            </a>
                                        </li>
                                        <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="300">
                                            <a href="https://twitter.com/quadmonk?t=nNYDARtwF6ur9oLkswolFw&s=08" target="_blank">
                                                <i class="feather-twitter"></i>
                                            </a>
                                        </li>
                                        <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="400">
                                            <a href="https://www.instagram.com/quadmonk/?hl=en" target="_blank">
                                                <i class="feather-instagram"></i>
                                            </a>
                                        </li>
                                        <!-- <li data-sal="slide-up" data-sal-duration="400" data-sal-delay="500">
                                            <a href="https://www.linkdin.com/">
                                                <i class="feather-linkedin"></i>
                                            </a>
                                        </li> -->
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--20 mt_sm--20">
                                <div class="copyright-right text-center text-lg-right">
                                    <p class="copyright-text">Copyright All rights reserved © 2022 QuadMonk Solutions.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Footer Area  -->
    <div class="rn-back-top">
        <i class="feather-arrow-up"></i>
    </div>


    <script src="{{asset('assets/js/vendor/modernizr.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/popper.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/waypoint.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/wow.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/counterup.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/feather.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/sal.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/masonry.js')}}"></script>
    <script src="{{asset('assets/js/vendor/imageloaded.js')}}"></script>
    <script src="{{asset('assets/js/vendor/magnify.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/lightbox.js')}}"></script>
    <script src="{{asset('assets/js/vendor/slick.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/easypie.js')}}"></script>
    <script src="{{asset('assets/js/vendor/text-type.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery.style.swicher.js')}}"></script>
    <script src="{{asset('assets/js/vendor/js.cookie.js')}}"></script>
    <script src="{{asset('assets/js/vendor/jquery-one-page-nav.js')}}"></script>
    <script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
