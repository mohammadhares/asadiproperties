<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="advanced search, agency, agent, blog, project, house, listing, property, real estate ,rental">
    <meta name="description" content="Asadi Properties">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ace-responsive-menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/ud-custom-spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/jquery-ui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    <title>Asadi Properties - Dashboard</title>
</head>
<body class="bgc-f7">
    <div class="wrapper ovh">
        <div class="preloader"></div>
        <div class="body_content">
            <section class="our-compare pt60 pb60">
                <img src="{{ asset('assets/images/icon/login-page-icon.svg') }}" alt="banner"
                    class="login-bg-icon wow fadeInLeft" data-wow-delay="300ms">
                <div class="container">
                    <div class="row wow fadeInRight" data-wow-delay="300ms">
                        <div class="col-lg-6" style="margin-top: 100px">
                            <div class="log-reg-form signup-modal form-style1 bgc-white p50 p30-sm default-box-shadow2 bdrs12">
                                <form method="POST" action="{{ route('login.auth') }}">
                                    @csrf
                                    <div class="text-center mb40">
                                        <img class="logo" style="width: 100px"
                                            src="{{ asset('assets/images/logo.1.png') }}" alt="">
                                        <h2>Sign in</h2>
                                        <p class="text">Sign in with this account across the following sites.</p>
                                    </div>
                                    <div class="mb25">
                                        <label class="form-label fw600 dark-color">Email</label>
                                        <input type="email" name="email" required class="form-control"
                                            placeholder="Enter Email">
                                    </div>
                                    <div class="mb15">
                                        <label class="form-label fw600 dark-color">Password</label>
                                        <input type="text" name="password" required class="form-control"
                                            placeholder="Enter Password">
                                    </div>
                                    <div
                                        class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                                        <label class="custom_checkbox fz14 ff-heading">Remember me
                                            <input type="checkbox" checked="checked">
                                            <span class="checkmark"></span>
                                        </label>
                                        <a class="fz14 ff-heading" href="#">Lost your password?</a>
                                    </div>
                                    <div class="d-grid mb20" style="margin-top: 50px">
                                        <button class="ud-btn btn-thm" type="submit">Sign in <i
                                                class="fal fa-arrow-right-long"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="{{ asset('assets/js/jquery-3.6.4.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-migrate-3.0.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-scrolltofixed-min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>
</html>
