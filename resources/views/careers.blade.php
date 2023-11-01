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

  <div class="body_content">
    <!-- UI Elements Sections -->
    <section class="breadcumb-section3 p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title text-white">Compare Properties</h2>
              <div class="breadcumb-list">
                <a class="text-white" href="#">Home</a>
                <a class="text-white" href="#">careers</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our Compare Area -->
    <section class="our-compare pb-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="table-style2 table-responsive">
              <table class="table table-borderless mb-0">
                <thead class="t-head">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">Home in Metric Way</th>
                    <th scope="col">Villa on Hollywood Boulevard</th>
                    <th scope="col">Explore Old Barcelona</th>
                  </tr>
                </thead>
                <thead class="t-head2">
                  <tr>
                    <th scope="col"></th>
                    <th scope="col">
                      <div class="membership_header">
                        <div class="thumb">
                          <img class="img-fluid mb-3 w100" src="images/listings/compare-1.jpg" alt="compare-1">
                          <div class="h6 price mt-1">$14,000 / mo</div>
                          <p class="address mb-0">California City, CA, USA</p>
                        </div>
                      </div>
                    </th>
                    <th scope="col">
                      <div class="membership_header">
                        <div class="thumb">
                          <img class="img-fluid mb-3 w100" src="images/listings/compare-1.jpg" alt="compare-1">
                          <div class="h6 price mt-1">$14,000 / mo</div>
                          <p class="address mb-0">California City, CA, USA</p>
                        </div>
                      </div>
                    </th>
                    <th scope="col">
                      <div class="membership_header">
                        <div class="thumb">
                          <img class="img-fluid mb-3 w100" src="images/listings/compare-1.jpg" alt="compare-1">
                          <div class="h6 price mt-1">$14,000 / mo</div>
                          <p class="address mb-0">California City, CA, USA</p>
                        </div>
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody class="t-body">
                  <tr>
                    <th class="text-end" scope="row">Property Type</th>
                    <td>Apartment</td>
                    <td>Studio</td>
                    <td>Villa</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Address</th>
                    <td>Quincy St</td>
                    <td>8100 S Ashland Ave</td>
                    <td>194 Mercer Street</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">City</th>
                    <td>New York</td>
                    <td>Chicago</td>
                    <td>New York</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">State/county</th>
                    <td>New York</td>
                    <td>New York</td>
                    <td>New York</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Zip/Postal Code</th>
                    <td>10013</td>
                    <td>10013</td>
                    <td>10013</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Country</th>
                    <td>United States</td>
                    <td>United States</td>
                    <td>United States</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Property Size</th>
                    <td>2560 Sq Ft</td>
                    <td>2560 Sq Ft</td>
                    <td>2560 Sq Ft</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Property ID</th>
                    <td>R43</td>
                    <td>R43</td>
                    <td>R43</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Bedrooms</th>
                    <td>3</td>
                    <td>2</td>
                    <td>5</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Bathrooms </th>
                    <td>1</td>
                    <td>4</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Garage</th>
                    <td>1</td>
                    <td>4</td>
                    <td>3</td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Air Conditioning</th>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Barbeque</th>
                    <td><a class="check_circle_close" href="#"><span class="fas fa-xmark"></span></a></td>
                    <td><a class="check_circle_close" href="#"><span class="fas fa-xmark"></span></a></td>
                    <td><a class="check_circle_close" href="#"><span class="fas fa-xmark"></span></a></td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Gym</th>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">Swimming Pool</th>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                  </tr>
                  <tr>
                    <th class="text-end" scope="row">TV Cable</th>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                    <td><a class="check_circle" href="#"><span class="fas fa-check"></span></a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA -->
    <section class="our-cta">
      <div class="cta-banner bgc-f7 mx-auto maxw1600 pt120 pb120 pt60-md pb60-md bdrs12 position-relative mx20-lg">
        <div class="img-box-5">
          <img class="img-1 spin-right" src="images/about/element-1.png" alt="">
        </div>
        <div class="img-box-6">
          <img class="img-1 spin-left" src="images/about/element-1.png" alt="">
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
