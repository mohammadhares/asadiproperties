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
    <title>ASADI</title>
    <!-- Favicon -->
    <link href="assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="assets/images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    <!-- Apple Touch Icon -->
    <link href="assets/images/apple-touch-icon-60x60.png" sizes="60x60" rel="apple-touch-icon">
    <link href="assets/images/apple-touch-icon-72x72.png" sizes="72x72" rel="apple-touch-icon">
    <link href="assets/images/apple-touch-icon-114x114.png" sizes="114x114" rel="apple-touch-icon">
    <link href="assets/images/apple-touch-icon-180x180.png" sizes="180x180" rel="apple-touch-icon">

</head>

<body>
    <div class="wrapper ovh">
        <div class="preloader"></div>

        <!-- Main Header Nav -->
        <header class="header-nav nav-homepage-style stricky main-menu">
            <!-- Ace Responsive Menu -->
            <nav class="posr">
                <div class="container posr menu_bdrt1">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="logos mr40">
                                    <a class="header-logo logo1" href="index.html"><img
                                            src="assets/images/header-logo.svg" alt="Header Logo"></a>
                                    <a class="header-logo logo2" href="index.html"><img
                                            src="assets/images/header-logo2.svg" alt="Header Logo"></a>
                                </div>
                                <!-- Responsive Menu Structure-->
                                <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal ">
                                    <li class="visible_list"> <a class="list-item" href='/'><span
                                                class="title">HOME</span></a>
                                    </li>
                                    <li class="megamenu_style"> <a class="list-item" href='/rent'><span
                                                class="title">RENT</span></a>
                                    </li>
                                    <li class="visible_list"> <a class="list-item" href='/sale'><span
                                                class="title">SALE</span></a>
                                    </li>
                                    <li class="visible_list"> <a class="list-item" href='/offplane'><span
                                                class="title">OFF PLANE</span></a>
                                    </li>
                                    <li class="visible_list"> <a class="list-item" href='/about'><span
                                                class="title">ABOUT US</span></a>
                                    </li>
                                    <li class="visible_list"> <a class="list-item" href='/blog'><span
                                                class="title">BlOG</span></a>
                                    </li>
                                    <li class="visible_list"> <a class="list-item" href='/contact'><span
                                                class="title">CONTACT</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>


        @yield('content')



        <!-- Our Footer -->
        <section class="footer-style1 pt60 pb-0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="footer-widget mb-4 mb-lg-5">
                            <a class="footer-logo" href="index.html"><img class="mb40"
                                    src="assets/images/header-logo.svg" alt=""></a>
                            <div class="social-widget">
                                <h6 class="text-white mb20">About Us</h6>
                                <div class="about__info">
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Error provident
                                        reiciendis magni sit eveniet ea id dolorum dignissimos unde, architecto
                                        quibusdam similique at accusantium molestiae quas recusandae ullam culpa maxime.
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
                                        <input required type="email" name="email" class="form-control" placeholder="Your Email">
                                        <button type="submit">Subscribe</button>
                                    </form>
                                </div>
                            </div>
                            <div class="row justify-content-between">
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Main Menus</h6>
                                        <div class="link-list">
                                            <a href="#">Home</a>
                                            <a href="#">Rent</a>
                                            <a href="#">Sale</a>
                                            <a href="#">Off Plane</a>
                                            <a href="#">Services</a>
                                            <a href="#">About Us</a>
                                            <a href="#">Contact Us</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Popular Search</h6>
                                        <div class="link-list">
                                            <a href="#">Apartment for Rent</a>
                                            <a href="#">Apartment Low to hide</a>
                                            <a href="#">Offices for Buy</a>
                                            <a href="#">Offices for Rent</a>
                                            <a href="#">Rooms for Rent</a>
                                            <a href="#">Rooms for Buy</a>
                                            <a href="#">Off Plane</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Quick Links</h6>
                                        <ul class="ps-0">
                                            <li><a href="#">Terms of Use</a></li>
                                            <li><a href="#">Privacy Policy</a></li>
                                            <li><a href="#">Pricing Plans</a></li>
                                            <li><a href="#">Our Services</a></li>
                                            <li><a href="#">Contact Support</a></li>
                                            <li><a href="#">Careers</a></li>
                                            <li><a href="#">FAQs</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <div class="link-style1 mb-3">
                                        <h6 class="text-white mb25">Discover</h6>
                                        <ul class="ps-0">
                                            <li><a href="#">Miami</a></li>
                                            <li><a href="#">Los Angeles</a></li>
                                            <li><a href="#">Chicago</a></li>
                                            <li><a href="#">New York</a></li>
                                            <li><a href="#">UAE</a></li>
                                            <li><a href="#">Qatar</a></li>
                                            <li><a href="#">Malysia</a></li>
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
                            <p class="footer-menu ff-heading text-gray"><a class="text-gray" href="#">Privacy</a> · <a
                                    class="text-gray" href="#">Terms</a> · <a class="text-gray" href="#">Sitemap</a></p>
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
    <!-- Custom script for all pages -->
    <script src="../../assets/js/script.js"></script>
</body>

</html>
