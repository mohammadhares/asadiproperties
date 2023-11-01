@extends('layout.app')
 @section('content')


  <!-- Signup Modal -->
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
  <!-- Menu In Hiddn SideBar -->
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
  <!-- Filter Content In Hiddn SideBar -->
  <div class="lefttside-hidden-bar">
    <div class="hsidebar-header">
      <div class="sidebar-close-icon"><span class="far fa-times"></span></div>
      <h4 class="title">Find your home</h4>
    </div>
    <div class="hsidebar-content">
    </div>
  </div>
  <!--End Filter Content In Hiddn SideBar -->

  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="assets/images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="assets/images/header-logo2.svg" alt=""></a>
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

  <div class="body_content">
    <!-- UI Elements Sections -->
    <section class="breadcumb-section">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">Services</h2>
              <div class="breadcumb-list">
                <a href="index.html">Home</a>
                <a href='/services'>Services</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Blog Section Area -->
    <section class="our-blog pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-xl-12">
            <div class="navpill-style1">
              <ul class="nav nav-pills mb20" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 active fw500 dark-color" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home Improvement</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-lifestyle-tab" data-bs-toggle="pill" data-bs-target="#pills-lifestyle" type="button" role="tab" aria-controls="pills-lifestyle" aria-selected="false">Life & Style</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-finance-tab" data-bs-toggle="pill" data-bs-target="#pills-finance" type="button" role="tab" aria-controls="pills-finance" aria-selected="false">Finance</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-homesell-tab" data-bs-toggle="pill" data-bs-target="#pills-homesell" type="button" role="tab" aria-controls="pills-homesell" aria-selected="false">Selling a Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-homerent-tab" data-bs-toggle="pill" data-bs-target="#pills-homerent" type="button" role="tab" aria-controls="pills-homerent" aria-selected="false">Renting a Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link mb-2 mb-lg-0 fw500 dark-color" id="pills-homebuy-tab" data-bs-toggle="pill" data-bs-target="#pills-homebuy" type="button" role="tab" aria-controls="pills-homebuy" aria-selected="false">Buying a Home</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade fz15 show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="row">
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
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-lifestyle" role="tabpanel" aria-labelledby="pills-lifestyle-tab">
                  <div class="row">
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
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-finance" role="tabpanel" aria-labelledby="pills-finance-tab">
                  <div class="row">
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
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-homesell" role="tabpanel" aria-labelledby="pills-homesell-tab">
                  <div class="row">
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
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-homerent" role="tabpanel" aria-labelledby="pills-homerent-tab">
                  <div class="row">
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
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade fz15" id="pills-homebuy" role="tabpanel" aria-labelledby="pills-homebuy-tab">
                  <div class="row">
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
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-4.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">7 Simple Ways to Keep Your Kids' Toys From Taking Over Your Home</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-5.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">How to Attract Birds to Your Yard (Hint: Don't Just Wing It)</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-6.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Add Heat Under Your Feet With a Radiant Flooring System</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-7.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Get Ready to Grow: 6 Tips for Planning Your Spring Garden</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-8.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Whale Watch From Any of This Home's 3 Rooftop Decks</a></h6>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                      <div class="blog-style1">
                        <div class="blog-img"><img class="w-100" src="assets/images/blog/blog-9.jpg" alt=""></div>
                        <div class="blog-content">
                          <div class="date">
                            <span class="month">July</span>
                            <span class="day">28</span>
                          </div>
                          <a class="tag" href="#">Living Room</a>
                          <h6 class="title mt-1"><a href="page-blog-single.html">Personalize Your Space With a DIY Gallery Wall</a></h6>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>
        <div class="row">
          <div class="mbp_pagination text-center">
            <ul class="page_navigation">
              <li class="page-item">
                <a class="page-link" href="#"> <span class="fas fa-angle-left"></span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">1</a></li>
              <li class="page-item active" aria-current="page">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
              </li>
              <li class="page-item"><a class="page-link" href="#">3</a></li>
              <li class="page-item"><a class="page-link" href="#">4</a></li>
              <li class="page-item"><a class="page-link" href="#">5</a></li>
              <li class="page-item"><a class="page-link" href="#">...</a></li>
              <li class="page-item"><a class="page-link" href="#">20</a></li>
              <li class="page-item">
                <a class="page-link" href="#"><span class="fas fa-angle-right"></span></a>
              </li>
            </ul>
            <p class="mt10 pagination_page_count text-center">1 – 20 of 300+ property available</p>
          </div>
        </div>
      </div>
    </section>

   @endsection
