<!-- Bootstrap Css -->
<link href="{{ asset('plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css ') }}" rel="stylesheet" />

{{-- ******************* --}}


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <!-- META DATA -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="LocAmazing" />
    <meta name="author" content="Spruko Technologies Private Limited" />
    <meta name="keywords"
        content="business directory website,online business directory website,directory listing sites,bootstrap form template,bootstrap templates,responsive web design,bootstrap website templates,business directory,business directory template,business listing,buy web templates,directory,directory html template,directory listing html template,directory website template,html list template,html template,html5 responsive template,html5 template,local business directory,local business listing,online business directory,online directory,premium,premium bootstrap templates,small business directory,classified,Premium business directory Templates,Directory & Listing HTML Template,business listing websites" />
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />

    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    @livewireStyles
    <!-- Title -->
    <title>LocAmazing | Accueil</title>

    <!-- Bootstrap Css -->
    <link href="{{ asset('plugins/bootstrap-4.4.1-dist/css/bootstrap.min.css') }}" rel="stylesheet" />

    <!-- Dashboard Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

    <!-- Font-awesome  Css -->
    <link href="{{ asset('css/icons.css') }}" rel="stylesheet" />

    <!--Select2 Plugin -->
    <link href="{{ asset('plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- Cookie css -->
    <link href="{{ asset('plugins/cookie/cookie.css') }}" rel="stylesheet" />

    <!-- Auto Complete css -->
    <link href="{{ asset('plugins/autocomplete/jquery.autocomplete.css') }}" rel="stylesheet" />

    <!-- Owl Theme css-->
    <link href="{{ asset('plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />

    <!-- Custom scroll bar css-->
    <link href="{{ asset('plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

    <!-- Color-Skins -->
    <link id="theme" href="{{ asset('color-skins/color7.css') }}" rel="stylesheet" />
</head>

<body>
    <!--Loader-->
    <div id="global-loader">
        <img src="{{ asset('images/products/products/loader.png') }}" class="loader-img floating" alt="" />
    </div>

    <!--Topbar-->
    <div class="header-main">
        <!-- Mobile Header -->
        <div class="sticky">
            <div class="horizontal-header clearfix">
                <div class="container">
                    <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>
                    <span class="smllogo"><a href="/" class="d-flex logo-height logo-svg">
                            <svg style="enable-background: new 0 0 512 512" version="1.1" viewbox="0 0 512 512" x="0px"
                                xmlns="http://www.w3.org/2000/svg" y="0px">
                                <g>
                                    <g>
                                        <g>
                                            <path
                                                d="M268.673,266.152c10.947-1.477,18.624-11.549,17.146-22.495c-1.478-10.947-11.55-18.62-22.495-17.146 c-2.41,0.325-4.875,0.49-7.325,0.49c-29.775,0-54-24.225-54-54c0-29.775,24.225-54,54-54c29.775,0,54,24.225,54,54 c0,2.949-0.238,5.903-0.707,8.781c-1.777,10.902,5.62,21.181,16.521,22.958c10.914,1.776,21.181-5.62,22.958-16.521 c0.816-5,1.229-10.12,1.229-15.219c0-51.832-42.168-94-94-94c-51.832,0-94,42.168-94,94c0,51.832,42.168,94,94,94 C260.233,267,264.498,266.714,268.673,266.152z">
                                            </path>
                                            <path
                                                d="M438.765,396.608c-15.385-8.07-36.508-14.869-62.782-20.208c-10.83-2.197-21.382,4.794-23.582,15.617 c-2.199,10.824,4.793,21.383,15.617,23.582c40.529,8.235,57.145,18.119,61.938,22.912c-3.531,3.538-15.338,12.42-50.025,20.77 C345.858,467.483,301.847,472,256,472s-89.858-4.517-123.93-12.719c-34.688-8.35-46.494-17.231-50.025-20.77 c4.793-4.793,21.408-14.677,61.938-22.912c10.824-2.199,17.816-12.758,15.617-23.582c-2.199-10.824-12.759-17.813-23.582-15.617 c-26.274,5.339-47.397,12.138-62.782,20.208C51.846,407.828,41,421.938,41,438.544c0,24.814,24.166,44.021,71.826,57.087 C151.331,506.187,202.178,512,256,512s104.669-5.813,143.174-16.369C446.834,482.565,471,463.358,471,438.544 C471,421.938,460.154,407.828,438.765,396.608z">
                                            </path>
                                            <path
                                                d="M239.094,422.686C242.759,428.484,249.141,432,256,432s13.241-3.516,16.906-9.315 c18.337-29.01,42.204-54.457,65.286-79.064c45.101-48.082,91.737-97.802,91.808-171.645 c-0.054-46.29-18.244-89.628-51.221-122.032C346.002,17.737,302.397,0,256,0c-46.369,0-89.818,17.76-122.343,50.008 C101.044,82.344,83.054,125.661,83,172.02c0.071,73.92,46.48,123.728,91.361,171.897 C197.205,368.434,220.826,393.785,239.094,422.686z M256,40c73.804,0,133.916,59.226,134,131.981 c-0.055,57.999-37.558,97.98-80.982,144.275c-17.974,19.163-36.399,38.805-53.006,60.732 c-16.449-21.772-34.641-41.296-52.385-60.34c-43.233-46.399-80.57-86.472-80.627-144.625C123.085,97.991,181.506,40,256,40z">
                                            </path>
                                        </g>
                                    </g>
                                </g>
                            </svg><span class="font-weight-semibold mb-0 fs-26 text-dark">LocAmazing</span></a>
                    </span>
                    <a href="ad-list.html" class="callusbtn"><i class="fa fa-plus-circle" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>
        <!-- /Mobile Header -->

        <div class="horizontal-main header-style-04 clearfix">
            <div class="horizontal-mainwrapper container clearfix">
                <div class="desktoplogo">
                    <a href="/"><img src="{{ asset('images/brand/logo1.png') }}" alt="" /></a>
                </div>
                <div class="desktoplogo-1">
                    <a href="/" class="d-flex logo-height logo-svg">
                        <svg style="enable-background: new 0 0 512 512" version="1.1" viewbox="0 0 512 512" x="0px"
                            xmlns="http://www.w3.org/2000/svg" y="0px">
                            <g>
                                <g>
                                    <g>
                                        <path
                                            d="M268.673,266.152c10.947-1.477,18.624-11.549,17.146-22.495c-1.478-10.947-11.55-18.62-22.495-17.146 c-2.41,0.325-4.875,0.49-7.325,0.49c-29.775,0-54-24.225-54-54c0-29.775,24.225-54,54-54c29.775,0,54,24.225,54,54 c0,2.949-0.238,5.903-0.707,8.781c-1.777,10.902,5.62,21.181,16.521,22.958c10.914,1.776,21.181-5.62,22.958-16.521 c0.816-5,1.229-10.12,1.229-15.219c0-51.832-42.168-94-94-94c-51.832,0-94,42.168-94,94c0,51.832,42.168,94,94,94 C260.233,267,264.498,266.714,268.673,266.152z">
                                        </path>
                                        <path
                                            d="M438.765,396.608c-15.385-8.07-36.508-14.869-62.782-20.208c-10.83-2.197-21.382,4.794-23.582,15.617 c-2.199,10.824,4.793,21.383,15.617,23.582c40.529,8.235,57.145,18.119,61.938,22.912c-3.531,3.538-15.338,12.42-50.025,20.77 C345.858,467.483,301.847,472,256,472s-89.858-4.517-123.93-12.719c-34.688-8.35-46.494-17.231-50.025-20.77 c4.793-4.793,21.408-14.677,61.938-22.912c10.824-2.199,17.816-12.758,15.617-23.582c-2.199-10.824-12.759-17.813-23.582-15.617 c-26.274,5.339-47.397,12.138-62.782,20.208C51.846,407.828,41,421.938,41,438.544c0,24.814,24.166,44.021,71.826,57.087 C151.331,506.187,202.178,512,256,512s104.669-5.813,143.174-16.369C446.834,482.565,471,463.358,471,438.544 C471,421.938,460.154,407.828,438.765,396.608z">
                                        </path>
                                        <path
                                            d="M239.094,422.686C242.759,428.484,249.141,432,256,432s13.241-3.516,16.906-9.315 c18.337-29.01,42.204-54.457,65.286-79.064c45.101-48.082,91.737-97.802,91.808-171.645 c-0.054-46.29-18.244-89.628-51.221-122.032C346.002,17.737,302.397,0,256,0c-46.369,0-89.818,17.76-122.343,50.008 C101.044,82.344,83.054,125.661,83,172.02c0.071,73.92,46.48,123.728,91.361,171.897 C197.205,368.434,220.826,393.785,239.094,422.686z M256,40c73.804,0,133.916,59.226,134,131.981 c-0.055,57.999-37.558,97.98-80.982,144.275c-17.974,19.163-36.399,38.805-53.006,60.732 c-16.449-21.772-34.641-41.296-52.385-60.34c-43.233-46.399-80.57-86.472-80.627-144.625C123.085,97.991,181.506,40,256,40z">
                                        </path>
                                    </g>
                                </g>
                            </g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                            <g></g>
                        </svg><span class="font-weight-semibold mb-0 fs-26 text-dark">LocAmazing</span></a>
                </div>
                <!--Nav-->
                <nav class="horizontalMenu clearfix d-md-flex">
                    <ul class="horizontalMenu-list">
                        <li><a href="/">Accueil</a></li>
                        <li><a href="about.html">About Us </a></li>
                        <li>
                            <a href="#">Categories <span class="fa fa-caret-down m-0"></span></a>
                            <ul class="sub-menu">
                                <li>
                                    <a href="{{ route('hotel') }}">Hotels</a>
                                </li>
                                <li>
                                    <a href="salonspa-list.html">Salon & Spa</a>
                                </li>
                                <li>
                                    <a href="resto-list.html">Restaurant</a>
                                </li>
                                <li>
                                    <a href="cafe-list.html">Café</a>
                                </li>
                                <li>
                                    <a href="blg-list.html">Boulangerie</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">
                                Contact Us <span class="wsarrow"></span></a>
                        </li>
                        @auth
                            <li>
                                <a href="/logout">Se Deconnecter <span class="wsarrow"></span>
                                </a>
                            </li>
                        @endauth
                        @guest
                            <li>
                                <a href="/loginregister">S'identifier <span class="wsarrow"></span>
                                </a>
                            </li>
                        @endguest
                    </ul>
                </nav>
                <!--Nav-->
            </div>
            <div class="body-progress-container">
                <div class="
              progress-bar progress-bar-striped progress-bar-animated
              bg-success
            " id="myBar"></div>
            </div>
        </div>
    </div>

    @yield('contentmain')

    <!--Footer Section-->
    <section>
        <footer class="bg-dark-purple text-white">
            <div class="footer-main border-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <h6>Categories</h6>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="hotel-list.html"
                                        class="btn footer-btn-outline btn-sm btn-pill mb-1">Hotels</a>
                                    <a href="salonspa-list.html"
                                        class="btn footer-btn-outline btn-sm btn-pill mb-1">Salon&Spa</a>
                                    <a href="cafe-list.html"
                                        class="btn footer-btn-outline btn-sm btn-pill mb-1">Café</a>
                                    <a href="resto-list.html"
                                        class="btn footer-btn-outline btn-sm btn-pill mb-1">Restaurent</a>
                                    <a href="blg-list.html"
                                        class="btn footer-btn-outline btn-sm btn-pill mb-1">Boulangerie</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <h6>Les plus recherche</h6>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="resto-list.html"><i
                                            class="fa fa-angle-double-right mr-2 text-secondary"></i>
                                        Restaurant</a>
                                </li>
                                <li>
                                    <a href="cafe-list.html"><i
                                            class="fa fa-angle-double-right mr-2 text-secondary"></i>
                                        Café</a>
                                </li>
                                <li>
                                    <a href="hotel-list.html"><i
                                            class="fa fa-angle-double-right mr-2 text-secondary"></i>
                                        Hotels</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <h6 class="mt-6 mt-xl-0">Contact</h6>
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="contact.html"><i class="fa fa-home mr-3 text-secondary"></i> El
                                        jadida</a>
                                </li>
                                <li>
                                    <a href="contact.html"><i class="fa fa-envelope mr-3 fs-12 text-secondary"></i>
                                        info12323@example.com</a>
                                </li>
                                <li>
                                    <a href="contact.html"><i class="fa fa-phone mr-3 text-secondary"></i>+212 638
                                        10 80 46</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-12">
                            <h6 class="mb-2 mt-6 mt-xl-0">Subscribe</h6>
                            <div class="input-group">
                                <input type="text" class="form-control br-tl-3 br-bl-3" placeholder="Email" />
                                <div class="input-group-append">
                                    <button type="button" class="btn btn-secondary br-tr-3 br-br-3 pl-5 pr-5">
                                        Subscribe
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-dark-purple text-white-50 p-3">
                <div class="container">
                    <div class="row d-flex">
                        <div class="col-lg-12 col-sm-12 mt-2 mb-2 text-center">
                            Copyright © 2021<a href="#" class="fs-14 text-secondary">LocAmazing</a>. Designed by
                            <a href="spruko.com" class="fs-14 text-secondary">LocAmazing</a>
                            All rights reserved.
                        </div>
                        <div class="col-lg-12 col-sm-12 text-center mb-2 mt-2">
                            <ul class="social-icons mb-0">
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-rss"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
                                </li>
                                <li>
                                    <a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </section>
    <!--Footer Section-->
    <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fa fa-rocket"></i></a>

    <!-- JQuery js-->
    <script src="{{ asset('js/vendors/jquery.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('plugins/bootstrap-4.4.1-dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('plugins/bootstrap-4.4.1-dist/js/bootstrap.min.js') }}"></script>

    <!--JQuery Sparkline Js-->
    <script src="{{ asset('js/vendors/jquery.sparkline.min.js') }}"></script>

    <!-- Circle Progress Js-->
    <script src="{{ asset('js/vendors/circle-progress.min.js') }}"></script>

    <!-- Star Rating Js-->
    <script src="{{ asset('plugins/rating/jquery.rating-stars.js') }}"></script>

    <!--Owl Carousel js -->
    <script src="{{ asset('plugins/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>

    <!--Horizontal Menu-->
    <script src="{{ asset('plugins/horizontal/horizontal-menu/horizontal.js') }}"></script>

    <!--Counters -->
    <script src="{{ asset('plugins/counters/counterup.min.js') }}"></script>
    <script src="{{ asset('plugins/counters/waypoints.min.js') }}"></script>
    <script src="{{ asset('plugins/counters/numeric-counter.js') }}"></script>

    <!--JQuery TouchSwipe js-->
    <script src="{{ asset('js/jquery.touchSwipe.min.js') }}"></script>

    <!--Select2 js -->
    <script src="{{ asset('plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>

    <!-- sticky Js-->
    <script src="{{ asset('js/sticky.js') }}"></script>

    <!-- Cookie js -->
    <script src="{{ asset('plugins/cookie/jquery.ihavecookies.js') }}"></script>
    <script src="{{ asset('plugins/cookie/cookie.js') }}"></script>

    <!--Auto Complete js -->
    <script src="{{ asset('plugins/autocomplete/jquery.autocomplete.js') }}"></script>
    <script src="{{ asset('plugins/autocomplete/autocomplete.js') }}"></script>

    <!-- Custom scroll bar Js-->
    <script src="{{ asset('plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

    <!-- Swipe Js-->
    <script src="{{ asset('js/swipe.js') }}"></script>

    <!-- Scripts Js-->
    <script src="{{ asset('js/scripts2.js') }}"></script>

    <!-- Custom Js-->
    <script src="{{ asset('js/custom.js') }}"></script>
    @livewireScripts

</body>

</html>
