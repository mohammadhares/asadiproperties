@extends('layout.app')
 @section('content')


  <!-- Signup Modal -->
  <!-- <div class="signup-modal">
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
  </div>-->
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
    </div>
    <div class="hsidebar-content">
      <div class="widget-wrapper">
        <h6 class="list-title">Find your home</h6>
        <div class="search_area">
          <input type="text" class="form-control" placeholder="What are you looking for?">
          <label><span class="flaticon-search"></span></label>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Listing Status</h6>
        <div class="radio-element">
          <div class="form-check d-flex align-items-center mb10">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
            <label class="form-check-label" for="flexRadioDefault4">Buy</label>
          </div>
          <div class="form-check d-flex align-items-center mb10">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault5" checked="checked">
            <label class="form-check-label" for="flexRadioDefault5">Rent</label>
          </div>
          <div class="form-check d-flex align-items-center">
            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault6">
            <label class="form-check-label" for="flexRadioDefault6">Sold</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Property Type</h6>
        <div class="checkbox-style1">
          <label class="custom_checkbox">Houses
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Apartments
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Office
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Villa
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <label class="custom_checkbox">Townhome
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Price Range</h6>
        <!-- Range Slider Mobile Version -->
        <div class="range-slider-style2">
          <div class="range-wrapper">
            <div class="mb30 mt35" id="slider"></div>
            <div class="d-flex align-items-center">
              <span id="slider-range-value1"></span><i class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
              <span id="slider-range-value2"></span>
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Bedrooms</h6>
        <div class="d-flex">
          <div class="selection">
            <input id="any2" name="beds" type="radio" checked>
            <label for="any2">any</label>
          </div>
          <div class="selection">
            <input id="oneplus2" name="beds" type="radio">
            <label for="oneplus2">1+</label>
          </div>
          <div class="selection">
            <input id="twoplus2" name="beds" type="radio">
            <label for="twoplus2">2+</label>
          </div>
          <div class="selection">
            <input id="threeplus2" name="beds" type="radio">
            <label for="threeplus2">3+</label>
          </div>
          <div class="selection">
            <input id="fourplus2" name="beds" type="radio">
            <label for="fourplus2">4+</label>
          </div>
          <div class="selection">
            <input id="fiveplus2" name="beds" type="radio">
            <label for="fiveplus2">5+</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <h6 class="list-title">Bathrooms</h6>
        <div class="d-flex">
          <div class="selection">
            <input id="bathany2" name="bath" type="radio" checked>
            <label for="bathany2">any</label>
          </div>
          <div class="selection">
            <input id="bathoneplus2" name="bath" type="radio">
            <label for="bathoneplus2">1+</label>
          </div>
          <div class="selection">
            <input id="bathtwoplus2" name="bath" type="radio">
            <label for="bathtwoplus2">2+</label>
          </div>
          <div class="selection">
            <input id="baththreeplus2" name="bath" type="radio">
            <label for="baththreeplus2">3+</label>
          </div>
          <div class="selection">
            <input id="bathfourplus2" name="bath" type="radio">
            <label for="bathfourplus2">4+</label>
          </div>
          <div class="selection">
            <input id="bathfiveplus2" name="bath" type="radio">
            <label for="bathfiveplus2">5+</label>
          </div>
        </div>
      </div>
      <div class="widget-wrapper advance-feature-modal">
        <h6 class="list-title">Location</h6>
        <div class="form-style2 input-group">
          <select class="selectpicker" data-width="100%">
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
      <div class="widget-wrapper">
        <h6 class="list-title">Year Built</h6>
        <div class="space-area">
          <div class="d-flex align-items-center justify-content-between">
            <div class="form-style1">
              <input type="text" class="form-control" placeholder="2019">
            </div>
            <span class="dark-color">-</span>
            <div class="form-style1">
              <input type="text" class="form-control" placeholder="2022">
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper">
        <div class="feature-accordion">
          <div class="accordion" id="accordionExample2">
            <div class="accordion-item border-none">
              <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button border-none p-0 after-none feature-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo"><span class="flaticon-settings"></span> Other Features</button>
              </h2>
              <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample2">
                <div class="accordion-body p-0 mt15">
                  <div class="row">
                    <div class="col-lg-6">
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
                        <label class="custom_checkbox">TV Cable
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Dryer
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="checkbox-style1">
                        <label class="custom_checkbox">Outdoor Shower
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Washer
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
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
            </div>
          </div>
        </div>
      </div>
      <div class="widget-wrapper mb20">
        <div class="btn-area d-grid align-items-center">
          <button class="ud-btn btn-thm"><span class="flaticon-search align-text-top pr10"></span>Search</button>
        </div>
      </div>
      <div class="reset-area d-flex align-items-center justify-content-between">
        <a class="reset-button" href="#"><span class="flaticon-turn-back"></span><u>Reset all filters</u></a>
        <a class="reset-button" href="#"><span class="flaticon-favourite"></span><u>Save Search</u></a>
      </div>
    </div>
  </div>
  <!--End Filter Content In Hiddn SideBar -->
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
                  <!-- Range Slider Desktop Version -->
                  <div class="range-slider-style large-version">
                    <div class="range-wrapper">
                      <div class="slider-range mb30 mt35"></div>
                      <div class="text-center">
                        <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-2 dark-color"></span>
                        <input type="text" class="amount2" placeholder="$70987">
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
  <div class="hiddenbar-body-ovelay"></div>

  <!-- Mobile Nav  -->
  <div id="page" class="mobilie_header_nav stylehome1">
    <div class="mobile-menu">
      <div class="header innerpage-style">
        <div class="menu_and_widgets">
          <div class="mobile_menu_bar d-flex justify-content-between align-items-center">
            <a class="menubar" href="#menu"><img src="assets/images/mobile-dark-nav-icon.svg" alt=""></a>
            <a class="mobile_logo" href="#"><img src="assets/images/header-logo2.svg" alt=""></a>
            <a href="page-login.html"><span class="icon fz18 far fa-user-circle"></span></a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.mobile-menu -->
    <nav id="menu" class="">
      <ul>
        <li> <a href="index.html">Home</a>
        </li>
        <li> <a href="rent.html">Rent</a>
        </li>
        <li> <a href="sale.html">Sale</a>
        </li>
        <li> <a href="off plane.html">Off plane</a>
        </li>
        <li> <a href="about.html">About as</a>
        </li>
        <li> <a href="blog.html">Blog</a>
        </li>
        <li> <a href="page-contact.html">Contact</a>
        </li>

        <!-- Only for Mobile View -->
      </ul>
    </nav>
  </div>

  <div class="body_content"> -->
    <!-- Breadcumb Sections -->
    <section class="breadcumb-section bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">New York Homes for Sale</h2>
              <div class="breadcumb-list">
                <a href="#">Home</a>
                <a href="#">For Rent</a>
              </div>
              <a href="#" class="filter-btn-left mobile-filter-btn d-block d-lg-none"><span class="flaticon-settings"></span> Filter</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Property All Lists -->
    <section class="pt0 pb90 bgc-f7">
      <div class="container">
        <div class="row">
          <div class="col-xl-9 d-none d-lg-block">
            <div class="dropdown-lists">
              <ul class="p-0 text-center text-xl-start">
                <li class="list-inline-item position-relative">
                  <button type="button" class="open-btn mb15 dropdown-toggle" data-bs-toggle="dropdown">For Sale <i class="fa fa-angle-down ms-2"></i></button>
                  <div class="dropdown-menu">
                    <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                      <h6 class="list-title">Listing Status</h6>
                      <div class="radio-element">
                        <div class="form-check d-flex align-items-center mb10">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                          <label class="form-check-label" for="flexRadioDefault1">Buy</label>
                        </div>
                        <div class="form-check d-flex align-items-center mb10">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked="checked">
                          <label class="form-check-label" for="flexRadioDefault2">Rent</label>
                        </div>
                        <div class="form-check d-flex align-items-center">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                          <label class="form-check-label" for="flexRadioDefault3">Sold</label>
                        </div>
                      </div>
                    </div>
                    <div class="text-end mt10 pr10">
                      <button type="button" class="done-btn ud-btn btn-thm drop_btn">Done</button>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item position-relative">
                  <button type="button" class="open-btn mb15 dropdown-toggle" data-bs-toggle="dropdown">Property Type <i class="fa fa-angle-down ms-2"></i></button>
                  <div class="dropdown-menu">
                    <div class="widget-wrapper bdrb1 pb25 mb0 pl20">
                      <h6 class="list-title">Property Type</h6>
                      <div class="checkbox-style1">
                        <label class="custom_checkbox">Houses
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Apartments
                          <input type="checkbox" checked="checked">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Office
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Villa
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                        <label class="custom_checkbox">Townhome
                          <input type="checkbox">
                          <span class="checkmark"></span>
                        </label>
                      </div>
                    </div>
                    <div class="text-end mt10 pr10">
                      <button type="button" class="done-btn ud-btn btn-thm dropdown-toggle">Done</button>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item position-relative">
                  <button type="button" class="open-btn mb15 dropdown-toggle" data-bs-toggle="dropdown">Price <i class="fa fa-angle-down ms-2"></i></button>
                  <div class="dropdown-menu dd3">
                    <div class="widget-wrapper bdrb1 pb25 mb0 pl20 pr20">
                      <h6 class="list-title">Price Range</h6>
                      <!-- Range Slider Desktop Version -->
                      <div class="range-slider-style1">
                        <div class="range-wrapper">
                          <div class="slider-range mt30 mb20"></div>
                          <div class="text-center">
                            <input type="text" class="amount" placeholder="$20"><span class="fa-sharp fa-solid fa-minus mx-1 dark-color"></span>
                            <input type="text" class="amount2" placeholder="$70987">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="text-end mt10 pr10">
                      <button type="button" class="done-btn ud-btn btn-thm drop_btn3">Done</button>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item position-relative">
                  <button type="button" class="open-btn mb15 dropdown-toggle" data-bs-toggle="dropdown">Beds / Baths <i class="fa fa-angle-down ms-2"></i></button>
                  <div class="dropdown-menu dd4 pb20">
                    <div class="widget-wrapper pl20 pr20">
                      <h6 class="list-title">Bedrooms</h6>
                      <div class="d-flex">
                        <div class="selection">
                          <input id="any" name="beds" type="radio" checked>
                          <label for="any">any</label>
                        </div>
                        <div class="selection">
                          <input id="oneplus" name="beds" type="radio">
                          <label for="oneplus">1+</label>
                        </div>
                        <div class="selection">
                          <input id="twoplus" name="beds" type="radio">
                          <label for="twoplus">2+</label>
                        </div>
                        <div class="selection">
                          <input id="threeplus" name="beds" type="radio">
                          <label for="threeplus">3+</label>
                        </div>
                        <div class="selection">
                          <input id="fourplus" name="beds" type="radio">
                          <label for="fourplus">4+</label>
                        </div>
                        <div class="selection">
                          <input id="fiveplus" name="beds" type="radio">
                          <label for="fiveplus">5+</label>
                        </div>
                      </div>
                    </div>
                    <div class="widget-wrapper bdrb1 pb25 mb0 pl20 pr20">
                      <h6 class="list-title">Bathrooms</h6>
                      <div class="d-flex">
                        <div class="selection">
                          <input id="baany" name="bath" type="radio" checked>
                          <label for="baany">any</label>
                        </div>
                        <div class="selection">
                          <input id="baoneplus" name="bath" type="radio">
                          <label for="baoneplus">1+</label>
                        </div>
                        <div class="selection">
                          <input id="batwoplus" name="bath" type="radio">
                          <label for="batwoplus">2+</label>
                        </div>
                        <div class="selection">
                          <input id="bathreeplus" name="bath" type="radio">
                          <label for="bathreeplus">3+</label>
                        </div>
                        <div class="selection">
                          <input id="bafourplus" name="bath" type="radio">
                          <label for="bafourplus">4+</label>
                        </div>
                        <div class="selection">
                          <input id="bafiveplus" name="bath" type="radio">
                          <label for="bafiveplus">5+</label>
                        </div>
                      </div>
                    </div>
                    <div class="text-end mt10 pr10">
                      <button type="button" class="done-btn ud-btn btn-thm drop_btn4">Done</button>
                    </div>
                  </div>
                </li>
                <li class="list-inline-item">
                  <!-- Advance Features modal trigger -->
                  <button type="button" class="open-btn mb15" data-bs-toggle="modal" data-bs-target="#exampleModal"> <i class="flaticon-settings me-2"></i> More Filter</button>
                </li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3">
            <div class="page_control_shorting mb30 d-flex align-items-center justify-content-center justify-content-xl-end">
              <div class="pcs_dropdown pr10"><span>Sort by</span>
                <select class="selectpicker show-tick">
                  <option>Newest</option>
                  <option>Best Seller</option>
                  <option>Best Match</option>
                  <option>Price Low</option>
                  <option>Price High</option>
                </select>
              </div>
              <a class="pl15 pr15 bdrl1 bdrr1 d-none d-md-block" href="#">Grid</a>
              <a class="pl15 d-none d-md-block" href="#">List</a>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-1.jpg" alt="">
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
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-2.jpg" alt="">
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
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-3.jpg" alt="">
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
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-4.jpg" alt="">
                <div class="list-price">$63,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">House on the Northridge</a></h6>
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
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-5.jpg" alt="">
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
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-6.jpg" alt="">
                <div class="list-price">$82,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Villa called Archangel</a></h6>
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
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-7.jpg" alt="">
                <div class="list-price">$63,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">House In Foxhall Ave, Kingston</a></h6>
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
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-8.jpg" alt="">
                <div class="list-price">$63,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Store in Woodside, New York</a></h6>
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
          <div class="col-sm-6 col-lg-4">
            <div class="listing-style1">
              <div class="list-thumb">
                <img class="w-100" src="assets/images/listings/g3-9.jpg" alt="">
                <div class="list-price">$82,000 / <span>mo</span></div>
              </div>
              <div class="list-content">
                <h6 class="list-title"><a href="page-property-single-v1.html">Luxury Villa In Los Angeles</a></h6>
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
