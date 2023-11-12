<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Homez - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- css file -->
    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/jquery-ui.min.css">
    <link rel="stylesheet" href="../../assets/css/ace-responsive-menu.css">
    <link rel="stylesheet" href="../../assets/css/menu.css">
    <link rel="stylesheet" href="../../assets/css/fontawesome.css">
    <link rel="stylesheet" href="../../assets/css/flaticon.css">
    <link rel="stylesheet" href="../../assets/css/bootstrap-select.min.css">
    <link rel="stylesheet" href="../../assets/css/animate.css">
    <link rel="stylesheet" href="../../assets/css/slider.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/custom.css">
    <link rel="stylesheet" href="../../assets/css/ud-custom-spacing.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="../../css/responsive.css">
    <!-- Title -->
    <title>Asadi Properties</title>
    <!-- Favicon -->
    <link href="assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />
</head>

<body class="dark-mode">
    <div class="wrapper ovh">
        {{-- <div class="preloader"></div> --}}

        <!-- Main Header Nav -->
        <header class="header-nav nav-homepage-style stricky main-menu">
            <!-- Ace Responsive Menu -->
            <nav class="posr">
                <div class="container posr menu_bdrt1">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="logos mr40">
                                    <a class="header-logo logo1" href='/'>
                                        <img src="{{ asset('assets/images/logo.1.png') }}" alt="Header Logo">
                                    </a>
                                    <a class="header-logo logo2" href='/'>
                                        <img src="{{ asset('assets/images/logo.1.png') }}" alt="Header Logo">
                                    </a>
                                </div>
                                <!-- Responsive Menu Structure-->
                                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal ">
                                    <li class="visible_list {{ request()->is('/') ? 'menus-active' : '' }}">
                                        <a class="list-item" href='/'><span class="title">HOME</span></a>
                                    </li>
                                    <li class="visible_list {{ request()->is('rent') ? 'menus-active' : '' }}">
                                        <a class="list-item" href='/rent'><span class="title">RENT</span></a>
                                    </li>
                                    <li class="visible_list {{ request()->is('sale') ? 'menus-active' : '' }}">
                                        <a class="list-item" href='/sale'><span class="title">SALE</span></a>
                                    </li>
                                    <li class="visible_list {{ request()->is('offplane') ? 'menus-active' : '' }}">
                                        <a class="list-item" href='/offplane'><span class="title">OFF PLANE</span></a>
                                    </li>
                                    <li class="visible_list {{ request()->is('blog') ? 'menus-active' : '' }}">
                                        <a class="list-item" href='/blog'><span class="title">BlOG</span></a>
                                    </li>
                                    <li class="visible_list {{ request()->is('contact') ? 'menus-active' : '' }}">
                                        <a class="list-item" href='/contact'><span class="title">CONTACT</span></a>
                                    </li>
                                    <li class="visible_list {{ request()->is('about') ? 'menus-active' : '' }}">
                                        <a class="list-item" href='/about'><span class="title">ABOUT US</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>

        <div id="page" class="mobilie_header_nav stylehome1">
            <div class="mobile-menu">
              <div class="header innerpage-style">
                <div class="menu_and_widgets">
                  <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                    <a class="menubar" href="#menu"><img src="assets/images/mobile-dark-nav-icon.svg" alt=""></a>
                    <a class="mobile_logo" href="#"><img width="100px" src="{{ asset('assets/images/logo.1.png')}}" alt=""></a>
                    <a href="page-login.html"><span class=""></span></a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="">
                <ul>
                    <li> <a href='/'>Home</a>
                    </li>
                    <li> <a href='/rent'>Rent</a>
                    </li>
                    <li> <a href='/sale'>Sale</a>
                    </li>
                    <li> <a href='/offplane'>Off plane</a>
                    </li>
                    <li> <a href='/services'>Services</a>
                    </li>
                    <li> <a href='/blog'>Blog</a>
                    </li>
                    <li> <a href='/contact'>Contact</a>
                    </li>
                    <li> <a href='/about'>About as</a>
                    </li>
                <!-- Only for Mobile View -->
              </ul>
            </nav>
          </div>


        @yield('content')

        <a target="_blank" href="https://wa.me/{{ $siteInfo['phones'][0]['phone'] }}?text=Hello%20from%20Asadi!" class="whatsapp-floating">
            <span class="flaticon-whatsapp"></span>
        </a>
        <!-- Our Footer -->
        <section class="footer-style1 pt60 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer-widget mb-4 mb-lg-5">
                            <a class="footer-logo" href="/">
                                <img class="mb40" src="{{ asset('assets/images/logo.1.png')}}" alt=""></a>
                            <div class="social-widget">
                                <h6 class="text-white mb20">About Us</h6>
                                <div class="about__info">
                                    <p>{{ $siteInfo->about }}
                                    </p>
                                </div>
                            </div>
                            <div class="row mb-4 mb-lg-5">
                                <div class="col-auto">
                                    <div class="contact-info">
                                        <p class="info-title">Total Free Customer Care</p>
                                        @foreach ($siteInfo['phones'] as $phone)
                                        <h6 class="info-phone">
                                            <a href="callto:{{ $phone['phone'] }}">{{ $phone['phone'] }}</a>
                                        </h6>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="contact-info">
                                        <p class="info-title">Need Live Support?</p>
                                        @foreach ($siteInfo['emails'] as $email)
                                        <h6 class="info-mail">
                                            <a href="mailto:{{ $email['email'] }}">{{ $email['email'] }}</a>
                                        </h6>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="social-widget">
                                <h6 class="text-white mb20">Follow us on social media</h6>
                                <div class="social-style1">
                                    @foreach ($siteInfo['socialmedias'] as $social)
                                    <a href="{{ $social['url'] }}"><i
                                            class="fab fa-{{ $social['icon'] }} list-inline-item"></i></a>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="footer-widget mb-4 mb-lg-5">
                            <div class="mailchimp-widget mb-4 mb-lg-5">
                                <h6 class="title text-white mb20">Keep Yourself Up to Date</h6>
                                <div class="mailchimp-style1">
                                    <form method="POST" action="{{ route('subscribe') }}">
                                        @csrf
                                        <input required type="email" name="email" class="form-control"
                                            placeholder="Your Email">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                                @if(session('subscribe-success'))
                                    <div class="alert alert-success mt-4" style="margin-top: 10px">
                                        {{ session('success') }}
                                    </div>
                                @endif
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Main Menus</h6>
                                        <div class="link-list">
                                            <a href='/'>Home</a>
                                            <a href='/rent'>Rent</a>
                                            <a href='/sale'>Sale</a>
                                            <a href='/ofplane'>Off Plane</a>
                                            <a href='/blog'>blog</a>
                                            <a href='/contact'>Contact Us</a>
                                            <a href='/about'>About Us</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Popular Search</h6>
                                        <div class="link-list">
                                            <a href="/rent">Apartment for Rent</a>
                                            <a href="/sale">Apartment Low to hide</a>
                                            <a href="/sale">Offices for Buy</a>
                                            <a href="/rent">Offices for Rent</a>
                                            <a href="/rent">Rooms for Rent</a>
                                            <a href="/sale">Rooms for Buy</a>
                                            <a href="/offplane">Off Plane</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Quick Links</h6>
                                        <ul class="ps-0">
                                            <li><a href='/termsof'>Terms of Use</a></li>
                                            <li><a href='/privaecy'>Privacy Policy</a></li>
                                            <li><a href='/pricing'>Pricing Plans</a></li>
                                            <li><a href='/services'>Our Services</a></li>
                                            <li><a href='/contact'>Contact Support</a></li>
                                            <li><a href='/careers'>Careers</a></li>
                                            <li><a href='/FAQs'>FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Discover</h6>
                                        <ul class="ps-0">
                                            <li><a href="/sale">Miami</a></li>
                                            <li><a href="/sale">Los Angeles</a></li>
                                            <li><a href="/sale">Chicago</a></li>
                                            <li><a href="/sale">New York</a></li>
                                            <li><a href="/sale">UAE</a></li>
                                            <li><a href="/sale">Qatar</a></li>
                                            <li><a href="/sale">Malysia</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container white-bdrt1 py-4">
                <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <div class="text-center text-lg-end">
                            <p class="footer-menu ff-heading text-gray"><a class="text-gray"
                                    href='/privaecy'>Privacy</a> · <a class="text-gray" href='/termsof'>Terms</a> ·
                                <a class="text-gray" href='/sitemap'>Sitemap</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
    </div>
    </div>
    <!-- Wrapper End -->
    <script src="../../assets/js/jquery-3.6.4.min.js"></script>
    <script src="../../assets/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="../../assets/js/popper.min.js"></script>
    <script src="../../assets/js/bootstrap.min.js"></script>
    <script src="../../assets/js/bootstrap-select.min.js"></script>
    <script src="../../assets/js/jquery.mmenu.all.js"></script>
    <script src="../../assets/js/ace-responsive-menu.js"></script>
    <script src="../../assets/js/jquery-scrolltofixed-min.js"></script>
    <script src="../../assets/js/wow.min.js"></script>
    <script src="../../assets/js/owl.js"></script>
    <script src="../../assets/js/parallax.js"></script>
    <script src="../../assets/js/pricing-slider.js"></script>
    <script src="../../assets/js/infobox.min.js"></script>
    <script src="../../assets/markerclusterer.js"></script>
    <!-- Custom script for all pages -->
    <script src="../../assets/js/script.js"></script>
</body>

</html>
