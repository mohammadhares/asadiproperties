<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="advanced search, agency, agent, classified, directory, house, listing, property, real estate, real estate agency, real estate agent, realestate, realtor, rental">
    <meta name="description" content="Homez - Real Estate HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ud-custom-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/slider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/dashbord_navitaion.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <link href="{{ asset('assets/images/logo.1.png') }}" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    @yield('styles')
    <title>Asadi Properties</title>
</head>

<body>
    <div class="wrapper">
        <!-- Main Header Nav -->
        <header class="header-nav nav-innerpage-style menu-home4 dashboard_header main-menu">
            <!-- Ace Responsive Menu -->
            <nav class="posr">
                <div class="container-fluid pr30 pr15-xs pl30 posr menu_bdrt1">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-6 col-lg-auto">
                            <div class="text-center text-lg-start d-flex align-items-center">
                                <div class="dashboard_header_logo position-relative me-2 me-xl-5">
                                    <a href="{{ route('home.view') }}" class="logo">
                                        <img width="100" src="{{ asset('assets/images/logo.1.png') }}" alt="home">
                                    </a>
                                </div>
                                <div class="fz20 ms-2 ms-xl-5">
                                    <a href="{{ route('home.view') }}"
                                        class="dashboard_sidebar_toggle_icon text-thm1 vam">
                                        <img src="{{ asset('assets/images/dark-nav-icon.svg') }}" alt="toggle-btn">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-lg-auto">
                            <div class="text-center text-lg-end header_right_widgets">
                                <ul class="mb0 d-flex justify-content-center justify-content-sm-end p-0">
                                    <li class="d-none d-sm-block">
                                        <a class="text-center mr15" href="{{ route('subscribe.view') }}">
                                            <span class="flaticon-email"></span>
                                        </a>
                                    </li>
                                    <li class="d-none d-sm-block">
                                        <a class="text-center mr20 notif" href="{{ route('contact.view') }}">
                                            <span class="flaticon-bell"></span>
                                        </a>
                                    </li>
                                    <li class="user_setting">
                                        <div class="dropdown">
                                            <a class="btn" href="return false;" data-bs-toggle="dropdown">
                                                <img src="{{ asset('assets/images/resource/user.png') }}" alt="user.png">
                                            </a>
                                            <div class="dropdown-menu">
                                                <div class="user_setting_content">
                                                    <a class="dropdown-item" href="{{ route('profile.view') }}">
                                                        <i class="flaticon-user mr10"></i>My Profile
                                                    </a>
                                                    <a class="dropdown-item" href="{{ route('auth.logout') }}">
                                                        <i class="flaticon-logout mr10"></i> Logout
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </header>
        <!-- Mobile Nav  -->
        <div id="page" class="mobilie_header_nav stylehome1">
            <div class="mobile-menu">
                <div class="header innerpage-style">
                    <div class="menu_and_widgets">
                        <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
                            <a class="menubar" href="#menu">
                                <img src="{{ asset('assets/images/mobile-dark-nav-icon.svg') }}" alt="">
                            </a>
                            <a class="mobile_logo" href="#">
                                <img src="{{ asset('assets/images/header-logo2.svg') }}" alt="">
                            </a>
                            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.mobile-menu -->
            <nav id="menu" class="">
                <ul>
                    <li> <a href='{{ route('home.view') }}'>Dashboard</a></li>
                    <li> <a href='{{ route('property.view') }}'>Property</a></li>
                    <li> <a href='{{ route('project.view') }}'>Project</a></li>
                    <li> <a href='{{ route('blog.view') }}'>Blog</a></li>
                    <li> <a href='{{ route('users.view') }}'>Users</a></li>
                    <li> <a href='{{ route('contact.view') }}'>Contact</a> </li>
                    <li> <a href='{{ route('subscribe.view') }}'>Subscribe</a> </li>
                    <li> <a href='{{ route('profile.view') }}'>My Profile</a> </li>
                    <li> <a href='{{ route('auth.logout') }}'>Logout</a> </li>
                </ul>
            </nav>
        </div>

        <div class="dashboard_content_wrapper">
            <div class="dashboard dashboard_wrapper pr30 pr0-xl">
                <div class="dashboard__sidebar d-none d-lg-block">
                    <div class="dashboard_sidebar_list">
                        <div class="sidebar_list_item">
                            <a href="{{ route('home.view') }}" class="items-center {{ request()->is('dashboard/home') ? '-is-active' : '' }} ">
                                <i class="flaticon-discovery mr15"></i>
                                Dashboard
                            </a>
                        </div>
                        <div class="sidebar_list_item ">
                            <a href="{{ route('property.view') }}" class="items-center {{ request()->is('dashboard/property/*') ? '-is-active' : '' }} ">
                                <i class="flaticon-home mr15"></i>
                                Property
                            </a>
                        </div>
                        <div class="sidebar_list_item ">
                            <a href="{{ route('project.view') }}" class="items-center">
                                <i class="flaticon-protection mr15"></i>
                                Project
                            </a>
                        </div>
                        <div class="sidebar_list_item ">
                            <a href="{{ route('blog.view') }}" class="items-center {{ request()->is('dashboard/blog/*') ? '-is-active' : '' }} ">
                                <i class="flaticon-review  mr15"></i>
                                Blog
                            </a>
                        </div>
                        <div class="sidebar_list_item ">
                            <a href="{{ route('contact.view') }}" class="items-center {{ request()->is('dashboard/contact') ? '-is-active' : '' }} ">
                                <i class="flaticon-bell mr15"></i>
                                Contact
                            </a>
                        </div>
                        <div class="sidebar_list_item ">
                            <a href="{{ route('subscribe.view') }}" class="items-center {{ request()->is('dashboard/subscribe') ? '-is-active' : '' }}" >
                                <i class="flaticon-email mr15"></i>
                                Subscribe
                            </a>
                        </div>

                        <div class="sidebar_list_item ">
                            <a href="{{ route('setting.view') }}" class="items-center {{ request()->is('dashboard/settings') ? '-is-active' : '' }}">
                                <i class="flaticon-email mr15"></i>
                                Settings
                            </a>
                        </div>

                        <div class="sidebar_list_item ">
                            <a href="{{ route('users.view') }}" class="items-center {{ request()->is('dashboard/user/*') ? '-is-active' : '' }}">
                                <i class="flaticon-user mr15"></i>
                                Users
                            </a>
                        </div>

                        <div class="sidebar_list_item ">
                            <a href="{{ route('profile.view') }}" class="items-center {{ request()->is('dashboard/profile') ? '-is-active' : '' }}">
                                <i class="flaticon-user mr15"></i>
                                My Profile
                            </a>
                        </div>
                        <div class="sidebar_list_item ">
                            <a href="{{ route('auth.logout') }}" class="items-center">
                                <i class="flaticon-logout mr15"></i>
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
                @yield('dashboard')
            </div>
        </div>
        <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.mmenu.all.js') }}"></script>
    <script src="{{ asset('assets/js/ace-responsive-menu.js') }}"></script>
    <script src="{{ asset('assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('assets/js/chart-custome.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard-script.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    @yield('scripts')
</body>

</html>
