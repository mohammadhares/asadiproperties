@extends('layout.app')
 @section('content')

  <!--End Filter Content In Hiddn SideBar -->
    <!-- Mobile Nav  -->


  <div class="hiddenbar-body-ovelay"></div>



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
