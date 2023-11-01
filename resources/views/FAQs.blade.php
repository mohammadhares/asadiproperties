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
            <a class="menubar" href="#menu"><img src="images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="images/header-logo2.svg" alt=""></a>
            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>
        <li><span>Home</span>
          <ul>
            <li><a href="index.html">Home V1</a></li>
            <li><a href="index2.html">Home V2</a></li>
            <li><a href="index3.html">Home V3</a></li>
            <li><a href="index4.html">Home V4</a></li>
            <li><a href="index5.html">Home V5</a></li>
            <li><a href="index6.html">Home V6</a></li>
            <li><a href="index7.html">Home V7</a></li>
            <li><a href="index8.html">Home V8</a></li>
            <li><a href="index9.html">Home V9</a></li>
            <li><a href="index10.html">Home V10</a></li>
          </ul>
        </li>
        <li><span>Property Listign</span>
          <ul>
            <li><span>Listing Grid</span>
              <ul>
                <li><a href="page-grid-default-v1.html">Grid Default v1</a></li>
                <li><a href="page-grid-default-v2.html">Grid Default v2</a></li>
                <li><a href="page-property-3-col.html">Grid Full Width 3 Cols</a></li>
                <li><a href="page-property-4-col.html">Grid Full Width 4 Cols</a></li>
                <li><a href="page-property-2-col.html">Grid Full Width 2 Cols</a></li>
                <li><a href="page-property-1-col-v1.html">Grid Full Width 1 Cols v1</a></li>
                <li><a href="page-property-1-col-v2.html">Grid Full Width 1 Cols v2</a></li>
                <li><a href="page-property-banner-v1.html">Banner Search v1</a></li>
                <li><a href="page-property-banner-v2.html">Banner Search v2</a></li>
              </ul>
            </li>
            <li><span>List Style</span>
              <ul>
                <li><a href="page-property-list.html">Style V1</a></li>
                <li><a href="page-property-list-all.html">All List</a></li>
              </ul>
            </li>
            <li><span>Listing Single</span>
              <ul>
                <li><a href="page-property-single-v1.html">Single V1</a></li>
                <li><a href="page-property-single-v2.html">Single V2</a></li>
                <li><a href="page-property-single-v3.html">Single V3</a></li>
                <li><a href="page-property-single-v4.html">Single V4</a></li>
                <li><a href="page-property-single-v5.html">Single V5</a></li>
                <li><a href="page-property-single-v6.html">Single V6</a></li>
                <li><a href="page-property-single-v7.html">Single V7</a></li>
                <li><a href="page-property-single-v8.html">Single V8</a></li>
                <li><a href="page-property-single-v9.html">Single V9</a></li>
                <li><a href="page-property-single-v10.html">Single V10</a></li>
              </ul>
            </li>
            <li><span>Map Style</span>
              <ul>
                <li><a href="page-property-header-map-style.html">Map Header</a></li>
                <li><a href="page-property-half-map-v1.html">Map V1</a></li>
                <li><a href="page-property-half-map-v2.html">Map V2</a></li>
                <li><a href="page-property-half-map-v3.html">Map V3</a></li>
                <li><a href="page-property-half-map-v4.html">Map V4</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><span>User Dashboard</span>
          <ul>
            <li><a href="page-dashboard.html">Dashboard</a></li>
            <li><a href="page-dashboard-message.html">Message</a></li>
            <li><a href="page-dashboard-add-property.html">New Property</a></li>
            <li><a href="page-dashboard-properties.html">My Properties</a></li>
            <li><a href="page-dashboard-favorites.html">My Favorites</a></li>
            <li><a href="page-dashboard-savesearch.html">Saved Search</a></li>
            <li><a href="page-dashboard-review.html">Reviews</a></li>
            <li><a href="page-dashboard-package.html">My Package</a></li>
            <li><a href="page-dashboard-profile.html">My Profile</a></li>
          </ul>
        </li>
        <li><span>Blog</span>
          <ul>
            <li><a href="page-blog-v1.html">List V1</a></li>
            <li><a href="page-blog-v2.html">List V2</a></li>
            <li><a href="page-blog-v3.html">List V3</a></li>
            <li><a href="page-blog-single.html">Single</a></li>
          </ul>
        </li>
        <li><span>Pages</span>
          <ul>
            <li><a href="page-about.html">About</a></li>
            <li><a href="page-contact.html">Contact</a></li>
            <li><a href="page-compare.html">Compare</a></li>
            <li><a href="page-pricing.html">Pricing</a></li>
            <li><a href="page-faq.html">Faq</a></li>
            <li><a href="page-login.html">Login</a></li>
            <li><a href="page-register.html">Register</a></li>
            <li><a href="page-error.html">404</a></li>
            <li><a href="page-invoice.html">Invoices</a></li>
            <li><a href="page-ui-element.html">UI Elements</a></li>
          </ul>
        </li>
        <li class="px-3 mobile-menu-btn">
          <a href="page-dashboard-add-property.html" class="ud-btn btn-thm text-white">Submit Property<i class="fal fa-arrow-right-long"></i></a>
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
              <h2 class="title">Frequently Asked Questions</h2>
              <div class="breadcumb-list">
                <a href="#">Home</a>
                <a href="#">For Rent</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FAQ Section Area -->
    <section class="our-faq pb90 pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="ui-content">
              <h4 class="title">Question About Selling</h4>
              <div class="accordion-style1 faq-page mb-4 mb-lg-5">
                <div class="accordion" id="accordionExample">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Can a home depreciate in value?</button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                      <div class="accordion-body">It doesn’t matter how organized you are — a surplus of toys will always ensure your house</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Is an older home as good a value as a new home?</button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                      <div class="accordion-body">It doesn’t matter how organized you are — a surplus of toys will always ensure your house</div>
                    </div>
                  </div>
                  <div class="accordion-item active">
                    <h2 class="accordion-header" id="headingThree">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">What is a broker?</button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse show" aria-labelledby="headingThree" data-parent="#accordionExample">
                      <div class="accordion-body"><p>It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds. <br> <br>The trick is to make it an opportunity for them to define themselves and their interests. Encourage kids to make a pile of ”baby toys” to donate, and have them set aside any toys that no longer interest them, such as action figures from a forgotten TV show. Separating these toys will help them appreciate how much they’ve grown and rediscover the toys they love.</p></div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Can I pay my own taxes and insurance?</button>
                    </h2>
                    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                      <div class="accordion-body">It doesn’t matter how organized you are — a surplus of toys will always ensure your house</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="ui-content">
              <h4 class="title">Question About Renting</h4>
              <div class="accordion-style1 faq-page mb-4 mb-lg-5">
                <div class="accordion" id="accordionExample2">
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFive">
                      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">Can a home depreciate in value?</button>
                    </h2>
                    <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                      <div class="accordion-body">It doesn’t matter how organized you are — a surplus of toys will always ensure your house</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingSix">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">Is an older home as good a value as a new home?</button>
                    </h2>
                    <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                      <div class="accordion-body">It doesn’t matter how organized you are — a surplus of toys will always ensure your house</div>
                    </div>
                  </div>
                  <div class="accordion-item active">
                    <h2 class="accordion-header" id="headingSeven">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">What is a broker?</button>
                    </h2>
                    <div id="collapseSeven" class="accordion-collapse collapse show" aria-labelledby="headingSeven" data-parent="#accordionExample">
                      <div class="accordion-body"><p>It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds. <br> <br>The trick is to make it an opportunity for them to define themselves and their interests. Encourage kids to make a pile of ”baby toys” to donate, and have them set aside any toys that no longer interest them, such as action figures from a forgotten TV show. Separating these toys will help them appreciate how much they’ve grown and rediscover the toys they love.</p></div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header" id="headingEight">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">Can I pay my own taxes and insurance?</button>
                    </h2>
                    <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-parent="#accordionExample">
                      <div class="accordion-body">It doesn’t matter how organized you are — a surplus of toys will always ensure your house</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our CTA -->
    <section class="our-cta pt0">
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
