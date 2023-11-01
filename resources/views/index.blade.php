@extends('layout.app')
 @section('content')


  <!-- Signup Modal
  <div class="signup-modal">
    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalToggleLabel">Welcome to Realton</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <div class="log-reg-form">
              <div class="navtab-style2">
                <nav>
                  <div class="nav nav-tabs mb20" id="nav-tab" role="tablist">
                    <button class="nav-link active fw600" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Sign In</button>
                    <button class="nav-link fw600" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">New Account</button>
                  </div>
                </nav>
                <div class="tab-content" id="nav-tabContent2">
                  <div class="tab-pane fade show active fz15" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="form-style1">
                      <div class="mb25">
                        <label class="form-label fw600 dark-color">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                      </div>
                      <div class="mb15">
                        <label class="form-label fw600 dark-color">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password">
                      </div>
                      <div class="checkbox-style1 d-block d-sm-flex align-items-center justify-content-between mb10">
                        <label class="custom_checkbox fz14 ff-heading">Remember me
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <a class="fz14 ff-heading" href="#">Lost your password?</a>
                      </div>
                      <div class="d-grid mb20">
                        <button class="ud-btn btn-thm" type="button">Sign in <i class="fal fa-arrow-right-long"></i></button>
                      </div>
                      <div class="hr_content mb20"><hr><span class="hr_top_text">OR</span></div>
                      <div class="d-grid mb10">
                        <button class="ud-btn btn-white" type="button"><i class="fab fa-google"></i> Continue Google</button>
                      </div>
                      <div class="d-grid mb10">
                        <button class="ud-btn btn-fb" type="button"><i class="fab fa-facebook-f"></i> Continue Facebook</button>
                      </div>
                      <div class="d-grid mb20">
                        <button class="ud-btn btn-apple" type="button"><i class="fab fa-apple"></i> Continue Apple</button>
                      </div>
                      <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600" href="page-register.html">Create an account.</a></p>
                    </div>
                  </div>
                  <div class="tab-pane fade fz15" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="form-style1">
                      <div class="mb25">
                        <label class="form-label fw600 dark-color">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Email">
                      </div>
                      <div class="mb20">
                        <label class="form-label fw600 dark-color">Password</label>
                        <input type="text" class="form-control" placeholder="Enter Password">
                      </div>
                      <div class="d-grid mb20">
                        <button class="ud-btn btn-thm" type="button">Create account <i class="fal fa-arrow-right-long"></i></button>
                      </div>
                      <div class="hr_content mb20"><hr><span class="hr_top_text">OR</span></div>
                      <div class="d-grid mb10">
                        <button class="ud-btn btn-white" type="button"><i class="fab fa-google"></i> Continue Google</button>
                      </div>
                      <div class="d-grid mb10">
                        <button class="ud-btn btn-fb" type="button"><i class="fab fa-facebook-f"></i> Continue Facebook</button>
                      </div>
                      <div class="d-grid mb20">
                        <button class="ud-btn btn-apple" type="button"><i class="fab fa-apple"></i> Continue Apple</button>
                      </div>
                      <p class="dark-color text-center mb0 mt10">Not signed up? <a class="dark-color fw600" href="page-register.html">Create an account.</a></p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  Menu In Hiddn SideBar -->
  <div class="rightside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Welcome to Realton</h4>
    </div>
    <div class="hsidebar-content">
      <div class="hiddenbar_navbar_content">
        <div class="hiddenbar_navbar_menu">
          <ul class="navbar-nav">
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Apartments</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Bungalow</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Houses</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Loft</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Office</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Townhome</a></li>
            <li class="nav-item"> <a class="nav-link" href="#" role="button">Villa</a></li>
          </ul>
        </div>
        <div class="hiddenbar_footer position-relative bdrt1">
          <div class="row pt45 pb30 pl30">
            <div class="col-auto">
              <div class="contact-info">
                <p class="info-title dark-color">Total Free Customer Care</p>
                <h6 class="info-phone dark-color"><a href="%2b(0)-123-050-945-02.html">+(0) 123 050 945 02</a></h6>
              </div>
            </div>
            <div class="col-auto">
              <div class="contact-info">
                <p class="info-title dark-color">Nee Live Support?</p>
                <h6 class="info-mail dark-color"><a href="mailto:hi@homez.com">hi@homez.com</a></h6>
              </div>
            </div>
          </div>
          <div class="row pt30 pb30 bdrt1">
            <div class="col-auto">
              <div class="social-style-sidebar d-flex align-items-center pl30">
                <h6 class="me-4 mb-0">Follow us</h6>
                <a class="me-3" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="me-3" href="#"><i class="fab fa-twitter"></i></a>
                <a class="me-3" href="#"><i class="fab fa-instagram"></i></a>
                <a class="me-3" href="#"><i class="fab fa-linkedin-in"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End Menu In Hiddn SideBar -->
  <!-- Advance Feature Modal Start -->
  <div class="advance-feature-modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content">
          <div class="modal-header pl30 pr30">
            <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-0">
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-wrapper">
                  <h6 class="list-title">Price Range</h6>
                  <!-- Range Slider Mobile Version -->
                  <div class="range-slider-style modal-version">
                    <div class="range-wrapper">
                      <div class="mb30 mt35" id="slider"></div>
                      <div class="d-flex align-items-center">
                        <span id="slider-range-value1"></span><i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                        <span id="slider-range-value2"></span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Type</h6>
                  <div class="form-style2 input-group">
                    <select class="selectpicker" data-live-search="true" data-width="100%">
                      <option>Property</option>
                      <option data-tokens="Apartments">Apartments</option>
                      <option data-tokens="Bungalow">Bungalow</option>
                      <option data-tokens="Houses">Houses</option>
                      <option data-tokens="Loft">Loft</option>
                      <option data-tokens="Office">Office</option>
                      <option data-tokens="Townhome">Townhome</option>
                      <option data-tokens="Villa">Villa</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Property ID</h6>
                  <div class="form-style2">
                    <input type="text" class="form-control" placeholder="RT04949213">
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Bedrooms</h6>
                  <div class="d-flex">
                    <div class="selection">
                      <input id="xany" name="xbeds" type="radio" checked>
                      <label for="xany">any</label>
                    </div>
                    <div class="selection">
                      <input id="xoneplus" name="xbeds" type="radio">
                      <label for="xoneplus">1+</label>
                    </div>
                    <div class="selection">
                      <input id="xtwoplus" name="xbeds" type="radio">
                      <label for="xtwoplus">2+</label>
                    </div>
                    <div class="selection">
                      <input id="xthreeplus" name="xbeds" type="radio">
                      <label for="xthreeplus">3+</label>
                    </div>
                    <div class="selection">
                      <input id="xfourplus" name="xbeds" type="radio">
                      <label for="xfourplus">4+</label>
                    </div>
                    <div class="selection">
                      <input id="xfiveplus" name="xbeds" type="radio">
                      <label for="xfiveplus">5+</label>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Bathrooms</h6>
                  <div class="d-flex">
                    <div class="selection">
                      <input id="yany" name="ybath" type="radio" checked>
                      <label for="yany">any</label>
                    </div>
                    <div class="selection">
                      <input id="yoneplus" name="ybath" type="radio">
                      <label for="yoneplus">1+</label>
                    </div>
                    <div class="selection">
                      <input id="ytwoplus" name="ybath" type="radio">
                      <label for="ytwoplus">2+</label>
                    </div>
                    <div class="selection">
                      <input id="ythreeplus" name="ybath" type="radio">
                      <label for="ythreeplus">3+</label>
                    </div>
                    <div class="selection">
                      <input id="yfourplus" name="ybath" type="radio">
                      <label for="yfourplus">4+</label>
                    </div>
                    <div class="selection">
                      <input id="yfiveplus" name="ybath" type="radio">
                      <label for="yfiveplus">5+</label>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Location</h6>
                  <div class="form-style2 input-group">
                    <select class="selectpicker" data-live-search="true" data-width="100%">
                      <option>All Cities</option>
                      <option data-tokens="California">California</option>
                      <option data-tokens="Chicago">Chicago</option>
                      <option data-tokens="LosAngeles">Los Angeles</option>
                      <option data-tokens="Manhattan">Manhattan</option>
                      <option data-tokens="NewJersey">New Jersey</option>
                      <option data-tokens="NewYork">New York</option>
                      <option data-tokens="SanDiego">San Diego</option>
                      <option data-tokens="SanFrancisco">San Francisco</option>
                      <option data-tokens="Texas">Texas</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="widget-wrapper">
                  <h6 class="list-title">Square Feet</h6>
                  <div class="space-area">
                    <div class="d-flex align-items-center justify-content-between">
                      <div class="form-style1">
                        <input type="text" class="form-control" placeholder="Min.">
                      </div>
                      <span class="dark-color">-</span>
                      <div class="form-style1">
                        <input type="text" class="form-control" placeholder="Max">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-12">
                <div class="widget-wrapper mb0">
                  <h6 class="list-title mb10">Amenities</h6>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Attic
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Basketball court
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Air Conditioning
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Lawn
                      <input type="checkbox" checked="checked">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">TV Cable
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Dryer
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Outdoor Shower
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Washer
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="widget-wrapper mb20">
                  <div class="checkbox-style1">
                    <label class="custom_checkbox">Lake view
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Wine cellar
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Front yard
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                    <label class="custom_checkbox">Refrigerator
                      <input type="checkbox">
                      <span class="checkmark"></span>
                    </label>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
            <div class="btn-area">
              <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Advance Feature Modal End -->

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="assets/images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="assets/images/logo.2.png" alt=""></a>
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

  <div class="body_content_wrapper">
    <!-- Home Banner Style V1 -->
    <section class="home-banner-style1 p0">
      <div class="home-style1">
        <div class="container">
          <div class="row">
            <div class="col-xl-11 mx-auto">
              <div class="inner-banner-style1 text-center">
                <h6 class="hero-sub-title animate-up-1">THE BEST WAY TO</h6>
                <h2 class="hero-title animate-up-2">Find Your Dream Home</h2>
                <p class="hero-text fz15 animate-up-3">We’ve more than 745,000 apartments, place & plot.</p>
                <div class="advance-search-tab mt70 mt30-md mx-auto animate-up-3">
                  <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                      <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Buy</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Rent</button>
                    </li>
                    <li class="nav-item" role="presentation">
                      <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Sold</button>
                    </li>
                  </ul>
                  <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="advance-content-style1">
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <div class="advance-search-field position-relative text-start">
                              <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control bgc-f7 bdrs12" type="text" name="search" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                              <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                              <button class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="advance-content-style1">
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <div class="advance-search-field position-relative text-start">
                              <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control bgc-f7 bdrs12" type="text" name="search" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                              <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                              <button class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                      <div class="advance-content-style1">
                        <div class="row">
                          <div class="col-md-8 col-lg-9">
                            <div class="advance-search-field position-relative text-start">
                              <form action="#" method="get" class="form-search position-relative" accept-charset="utf-8">
                                <div class="box-search">
                                  <span class="icon flaticon-home-1"></span>
                                  <input class="form-control bgc-f7 bdrs12" type="text" name="search" placeholder="Enter an address, neighborhood, city, or ZIP code">
                                </div>
                              </form>
                            </div>
                          </div>
                          <div class="col-md-4 col-lg-3">
                            <div class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                              <button class="advance-search-btn" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal"><span class="flaticon-settings"></span> Advanced</button>
                              <button class="advance-search-icon ud-btn btn-thm ms-4" type="button"><span class="flaticon-search"></span></button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <a href="#explore-property">
          <div class="mouse_scroll animate-up-4">
            <img src="assets/images/about/home-scroll.png" alt="">
          </div>
        </a>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section id="explore-property" class="pb90 pb30-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <div class="main-title wow fadeInUp" data-wow-delay="300ms">
              <h2 class="title">Explore Apartment Types</h2>
              <p class="paragraph">Get some Inspirations from 1800+ skills</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="explore-apartment-slider navi_pagi_top_right slider-5-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-home"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Houses</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-corporation"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Apartments</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-network"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Office</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-garden"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Villa</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-chat"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Townhome</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-window"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Bungalow</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-bird-house"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Loft</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-garden"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Villa</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-chat"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Townhome</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-window"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Bungalow</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
              <div class="item">
                <a href="page-property-single-v1.html">
                  <div class="iconbox-style1">
                    <span class="icon flaticon-bird-house"></span>
                    <div class="iconbox-content">
                      <h6 class="title">Loft</h6>
                      <p class="text mb-0">22 Properties</p>
                    </div>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pt0 pb90 pb10-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="300ms">
            <div class="main-title text-center">
              <h2 class="title">See how Realton can help</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay="00ms">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="assets/images/icon/property-buy.svg" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Buy a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2">Find a home<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInUp" data-wow-delay="300ms">
            <div class="iconbox-style2 active text-center">
              <div class="icon"><img src="assets/images/icon/property-sell.svg" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Sell a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2">Place an ad<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4 wow fadeInRight" data-wow-delay="300ms">
            <div class="iconbox-style2 text-center">
              <div class="icon"><img src="assets/images/icon/property-rent.svg" alt=""></div>
              <div class="iconbox-content">
                <h4 class="title">Rent a property</h4>
                <p class="text">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                <a href="page-property-single-v1.html" class="ud-btn btn-white2">Find a rental<i class="fal fa-arrow-right-long"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="bgc-f7">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Discover Our Featured Listings</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-3">
              <a class="ud-btn2" href="#">See All Properties<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="feature-listing-slider navi_pagi_bottom_center slider-dib-sm slider-3-grid owl-carousel owl-theme">
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="assets/images/listings/g1-1.jpg" alt="">
                    <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                    <div class="list-price">$14,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                      <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                      <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                        <a href="#"><span class="flaticon-new-tab"></span></a>
                        <a href="#"><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="assets/images/listings/g1-2.jpg" alt="">
                    <div class="list-price">$82,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                      <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                      <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                        <a href="#"><span class="flaticon-new-tab"></span></a>
                        <a href="#"><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="assets/images/listings/g1-3.jpg" alt="">
                    <div class="list-price">$63,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                      <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                      <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                        <a href="#"><span class="flaticon-new-tab"></span></a>
                        <a href="#"><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="assets/images/listings/g1-4.jpg" alt="">
                    <div class="list-price">$63,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Triple Story House for Rent</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                      <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                      <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                        <a href="#"><span class="flaticon-new-tab"></span></a>
                        <a href="#"><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="listing-style1">
                  <div class="list-thumb">
                    <img class="w-100" src="assets/images/listings/g1-5.jpg" alt="">
                    <div class="list-price">$14,000 / <span>mo</span></div>
                  </div>
                  <div class="list-content">
                    <h6 class="list-title"><a href="page-property-single-v1.html">Northwest Office Space</a></h6>
                    <p class="list-text">California City, CA, USA</p>
                    <div class="list-meta d-flex align-items-center">
                      <a href="#"><span class="flaticon-bed"></span>3 bed</a>
                      <a href="#"><span class="flaticon-shower"></span>4 bath</a>
                      <a href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                    </div>
                    <hr class="mt-2 mb-2">
                    <div class="list-meta2 d-flex justify-content-between align-items-center">
                      <span class="for-what">For Rent</span>
                      <div class="icons d-flex align-items-center">
                        <a href="#"><span class="flaticon-fullscreen"></span></a>
                        <a href="#"><span class="flaticon-new-tab"></span></a>
                        <a href="#"><span class="flaticon-like"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Property Cities -->
    <section class="pb40-md pb90">
      <div class="container">
        <div class="row align-items-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title">Properties by Cities</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="text-start text-lg-end mb-3">
              <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="property-city-slider dots_none slider-dib-sm slider-4-grid2 vam_nav_style owl-theme owl-carousel">
              <div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="assets/images/listings/city-listing-1.png" alt=""></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Los Angeles</h6>
                      <p class="text">12 Properties</p>
                    </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="assets/images/listings/city-listing-2.png" alt=""></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Miami</h6>
                      <p class="text">12 Properties</p>
                    </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="assets/images/listings/city-listing-3.png" alt=""></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">New York</h6>
                      <p class="text">12 Properties</p>
                    </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="feature-style1 mb30">
                  <div class="feature-img"><img class="w-100" src="assets/images/listings/city-listing-4.png" alt=""></div>
                  <div class="feature-content">
                    <div class="top-area">
                      <h6 class="title mb-1">Chicago</h6>
                      <p class="text">12 Properties</p>
                    </div>
                    <div class="bottom-area">
                      <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i class="fal fa-arrow-right-long"></i></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- About Us -->
    <section class="pt0 pb40-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-xl-4">
            <div class="about-box-1 pe-4 mt100 mt0-lg mb30-lg wow fadeInRight" data-wow-delay="300ms">
              <h2 class="title mb30">Let’s find the right selling option for you</h2>
              <p class="text mb25 fz15">As the complexity of buildings to increase, the field of architecture</p>
              <div class="list-style1 mb50">
                <ul>
                  <li><i class="far fa-check text-white bgc-dark fz15"></i>Find excellent deals</li>
                  <li><i class="far fa-check text-white bgc-dark fz15"></i>Friendly host & Fast support</li>
                  <li><i class="far fa-check text-white bgc-dark fz15"></i>List your own property</li>
                </ul>
              </div>
              <a href="page-property-single-v1.html" class="ud-btn btn-white2">Learn More<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
          <div class="col-lg-9 col-xl-8 col-xxl-7 offset-xxl-1">
            <div class="position-relative mb35 mb0-sm wow fadeInLeft" data-wow-delay="300ms">
              <div class="img-box-1 list-inline-item me-0">
                <img class="img-1" src="assets/images/about/about-1.jpg" alt="">
              </div>
              <div class="img-box-2 list-inline-item me-0">
                <img class="img-1" src="assets/images/about/about-2.jpg" alt="">
              </div>
              <div class="img-box-3">
                <img class="img-1 bounce-y" src="assets/images/about/about-1.png" alt="">
              </div>
              <div class="img-box-4">
                <img class="img-1 spin-right" src="assets/images/about/element-1.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Popular Property -->
    <section class="bgc-dark">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="00ms">
          <div class="col-lg-9">
            <div class="main-title2">
              <h2 class="title text-white">Discover Popular Properties</h2>
              <p class="paragraph text-white">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
          <div class="col-lg-3">
            <div class="dark-light-navtab text-start text-lg-end mt-0 mt-lg-4 mb-4">
              <ul class="nav nav-pills justify-content-start justify-content-lg-end" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">For Rent</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link me-0" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">For Sale</button>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
            <div class="tab-content" id="pills-tabContent">
              <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel">
                      <div class="item">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g1-1.jpg" alt="">
                            <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                            <div class="list-price">$84,000 / <span>mo</span></div>
                          </div>
                          <div class="list-content pb-2">
                            <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                            <p class="list-text">California City, CA, USA</p>
                            <div class="list-meta d-flex align-items-center">
                              <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                              <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                              <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="list-meta2 d-flex justify-content-between align-items-center">
                              <span class="for-what">For Rent</span>
                              <div class="icons d-flex align-items-center">
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-like"></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g1-2.jpg" alt="">
                            <div class="list-price">$12,000 / <span>mo</span></div>
                          </div>
                          <div class="list-content pb-2">
                            <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                            <p class="list-text">California City, CA, USA</p>
                            <div class="list-meta d-flex align-items-center">
                              <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                              <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                              <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="list-meta2 d-flex justify-content-between align-items-center">
                              <span class="for-what">For Rent</span>
                              <div class="icons d-flex align-items-center">
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-like"></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g1-3.jpg" alt="">
                            <div class="list-price">$19,000 / <span>mo</span></div>
                          </div>
                          <div class="list-content pb-2">
                            <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                            <p class="list-text">California City, CA, USA</p>
                            <div class="list-meta d-flex align-items-center">
                              <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                              <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                              <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="list-meta2 d-flex justify-content-between align-items-center">
                              <span class="for-what">For Rent</span>
                              <div class="icons d-flex align-items-center">
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-like"></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g1-4.jpg" alt="">
                            <div class="list-price">$17,000 / <span>mo</span></div>
                          </div>
                          <div class="list-content pb-2">
                            <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                            <p class="list-text">California City, CA, USA</p>
                            <div class="list-meta d-flex align-items-center">
                              <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                              <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                              <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="list-meta2 d-flex justify-content-between align-items-center">
                              <span class="for-what">For Rent</span>
                              <div class="icons d-flex align-items-center">
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-like"></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <div class="row">
                  <div class="col-lg-12">
                    <div class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel">
                      <div class="item">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g1-1.jpg" alt="">
                            <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                            <div class="list-price">$84,000 / <span>mo</span></div>
                          </div>
                          <div class="list-content pb-2">
                            <h6 class="list-title"><a href="page-property-single-v1.html">Equestrian Family Home</a></h6>
                            <p class="list-text">California City, CA, USA</p>
                            <div class="list-meta d-flex align-items-center">
                              <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                              <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                              <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="list-meta2 d-flex justify-content-between align-items-center">
                              <span class="for-what">For Rent</span>
                              <div class="icons d-flex align-items-center">
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-like"></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g1-2.jpg" alt="">
                            <div class="list-price">$12,000 / <span>mo</span></div>
                          </div>
                          <div class="list-content pb-2">
                            <h6 class="list-title"><a href="page-property-single-v1.html">Luxury villa in Rego Park</a></h6>
                            <p class="list-text">California City, CA, USA</p>
                            <div class="list-meta d-flex align-items-center">
                              <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                              <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                              <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="list-meta2 d-flex justify-content-between align-items-center">
                              <span class="for-what">For Rent</span>
                              <div class="icons d-flex align-items-center">
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-like"></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g1-3.jpg" alt="">
                            <div class="list-price">$19,000 / <span>mo</span></div>
                          </div>
                          <div class="list-content pb-2">
                            <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                            <p class="list-text">California City, CA, USA</p>
                            <div class="list-meta d-flex align-items-center">
                              <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                              <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                              <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="list-meta2 d-flex justify-content-between align-items-center">
                              <span class="for-what">For Rent</span>
                              <div class="icons d-flex align-items-center">
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-like"></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="item">
                        <div class="listing-style1">
                          <div class="list-thumb">
                            <img class="w-100" src="assets/images/listings/g1-4.jpg" alt="">
                            <div class="list-price">$17,000 / <span>mo</span></div>
                          </div>
                          <div class="list-content pb-2">
                            <h6 class="list-title"><a href="page-property-single-v1.html">Villa on Hollywood Boulevard</a></h6>
                            <p class="list-text">California City, CA, USA</p>
                            <div class="list-meta d-flex align-items-center">
                              <a class="me-2" href="#"><span class="flaticon-bed"></span>3 bed</a>
                              <a class="me-2" href="#"><span class="flaticon-shower"></span>4 bath</a>
                              <a class="me-2" href="#"><span class="flaticon-expand"></span>1200 sqft</a>
                            </div>
                            <hr class="mt-2 mb-2">
                            <div class="list-meta2 d-flex justify-content-between align-items-center">
                              <span class="for-what">For Rent</span>
                              <div class="icons d-flex align-items-center">
                                <a href="#"><span class="flaticon-fullscreen"></span></a>
                                <a href="#"><span class="flaticon-new-tab"></span></a>
                                <a href="#"><span class="flaticon-like"></span></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="d-grid d-md-block text-center mt30 mt0-md">
              <a href="page-grid-default-v1.html" class="ud-btn btn-thm">See All Properties<i class="fal fa-arrow-right-long"></i></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Testimonials -->
    <section class="pb100 pb50-md bgc-thm-light">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="00ms">
            <div class="main-title">
              <h2 class="title">People Love Living with Realton</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <div class="testimonial-slider navi_pagi_top_right slider-3-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title">Great Work</h5>
                    <span class="icon fas fa-quote-left"></span>
                    <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                    <div class="testimonial-review">
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="wa" src="assets/images/testimonials/testimonial-1.png" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Leslie Alexander</h6>
                      <p class="mb-0">Nintendo</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title">Great Work</h5>
                    <span class="icon fas fa-quote-left"></span>
                    <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                    <div class="testimonial-review">
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="wa" src="assets/images/testimonials/testimonial-2.png" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Floyd Miles</h6>
                      <p class="mb-0">Bank of America</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title">Great Work</h5>
                    <span class="icon fas fa-quote-left"></span>
                    <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                    <div class="testimonial-review">
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="wa" src="assets/images/testimonials/testimonial-3.png" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Dianne Russell</h6>
                      <p class="mb-0">Facebook</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title">Great Work</h5>
                    <span class="icon fas fa-quote-left"></span>
                    <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                    <div class="testimonial-review">
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="wa" src="assets/images/testimonials/testimonial-3.png" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Dianne Russell</h6>
                      <p class="mb-0">Facebook</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial-style1 position-relative">
                  <div class="testimonial-content">
                    <h5 class="title">Great Work</h5>
                    <span class="icon fas fa-quote-left"></span>
                    <p class="text">“Amazing design, easy to customize and a design quality superlative account on its cloud platform for the optimized performance. And we didn’t on our original designs.”</p>
                    <div class="testimonial-review">
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a class="me-1" href="#"><i class="fas fa-star"></i></a>
                      <a href="#"><i class="fas fa-star"></i></a>
                    </div>
                  </div>
                  <div class="thumb d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <img class="wa" src="assets/images/testimonials/testimonial-3.png" alt="">
                    </div>
                    <div class="flex-grow-1 ms-3">
                      <h6 class="mb-0">Dianne Russell</h6>
                      <p class="mb-0">Facebook</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Explore Apartment -->
    <section class="pb90 pb20-md">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 m-auto wow fadeInUp" data-wow-delay="00ms">
            <div class="main-title text-start text-md-center">
              <h2 class="title">From Our Blog</h2>
              <p class="paragraph">Aliquam lacinia diam quis lacus euismod</p>
            </div>
          </div>
        </div>
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-sm-6 col-lg-4">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-1.jpg" alt=""></div>
              <div class="blog-content">
                <div class="date">
                  <span class="month">July</span>
                  <span class="day">28</span>
                </div>
                <a class="tag" href="#">Living Room</a>
                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-2.jpg" alt=""></div>
              <div class="blog-content">
                <div class="date">
                  <span class="month">July</span>
                  <span class="day">28</span>
                </div>
                <a class="tag" href="#">Living Room</a>
                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-lg-4">
            <div class="blog-style1">
              <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-3.jpg" alt=""></div>
              <div class="blog-content">
                <div class="date">
                  <span class="month">July</span>
                  <span class="day">28</span>
                </div>
                <a class="tag" href="#">Living Room</a>
                <h6 class="title mt-1"><a href="page-blog-single.html">Private Contemporary Home Balancing Openness</a></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Partners -->
    <section class="our-partners pt0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 wow fadeInUp">
            <div class="main-title text-center">
              <h6>Trusted by the world’s best</h6>
            </div>
          </div>
          <div class="col-lg-12">
            <div class="dots_none nav_none slider-dib-sm slider-6-grid owl-carousel owl-theme wow fadeInUp" data-wow-delay="300ms">
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="assets/images/partners/1.png" alt="1.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="assets/images/partners/2.png" alt="2.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="assets/images/partners/3.png" alt="3.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="assets/images/partners/4.png" alt="4.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="assets/images/partners/5.png" alt="5.png"></div>
              </div>
              <div class="item">
                <div class="partner_item"><img class="wa m-auto" src="assets/images/partners/6.png" alt="6.png"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA -->
    <section class="our-cta pt0">
      <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pt60-md pb120 pb60-md bdrs12 position-relative mx20-lg">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="assets/images/about/element-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="assets/images/about/element-1.png" alt="">
        </div>
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7 col-xl-6 wow fadeInLeft">
              <div class="cta-style1">
                <h2 class="cta-title">Need help? Talk to our expert.</h2>
                <p class="cta-text mb-0">Talk to our experts or Browse through more properties.</p>
              </div>
            </div>
            <div class="col-lg-5 col-xl-6 wow fadeInRight" data-wow-delay="300ms">
              <div class="cta-btns-style1 d-block d-sm-flex align-items-center justify-content-lg-end">
                <a href="page-contact.html" class="ud-btn btn-transparent mr30 mr0-xs">Contact Us<i class="fal fa-arrow-right-long"></i></a>
                <a href="page-contact.html" class="ud-btn btn-dark"><span class="flaticon-call vam pe-2"></span>920 851 9087</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @endsection
