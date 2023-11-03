@extends('layout.app')
 @section('content')

  <div class="hiddenbar-body-ovelay"></div>
  <div class="body_content"></div>
  <section class="home-banner-style6 bw-100  p0">
    <div class="home-style6 h-500">
        <div class="container">
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <div class="inner-banner-style1 text-center" style="margin-top: 180px;">
                        <h2 class="hero-title animate-up-2">About Us</h2>
                        <p class="hero-text fz15 animate-up-3">We're on a Mission to Change View of Real Estate Field .</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
    <!-- UI Elements Sections -->
    <section class="breadcumb-section p-0">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="breadcumb-style1">
              <h2 class="title">About Us</h2>
              <div class="breadcumb-list">
                <a href="/">Home</a>
                <a href="/about">About Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Our About Area -->
    <section class="our-about pb90">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-6">
            <h2>We're on a Mission to Change <br class="d-none d-lg-block"> View of Real Estate Field.</h2>
          </div>
          <div class="col-lg-12">
            <p class="text mb25">It doesn’t matter how organized you are — a surplus of toys will always ensure your house is a mess waiting to happen. Fortunately, getting kids on board with the idea of ditching their stuff is a lot easier than it sounds.</p>
            <p class="text mb55">Maecenas quis viverra metus, et efficitur ligula. Nam congue augue et ex congue, sed luctus lectus congue. Integer convallis condimentum sem. Duis elementum tortor eget condimentum tempor. Praesent sollicitudin lectus ut pharetra pulvinar.</p>
            <div class="row">
              <div class="col-sm-6">
                <div class="why-chose-list style3">
                  <div class="list-one mb30">
                    <span class="list-icon flex-shrink-0 flaticon-garden mb20"></span>
                    <div class="list-content flex-grow-1">
                      <h6 class="mb-1">Modern Villa</h6>
                      <p class="text mb-0 fz14">Nullam sollicitudin blandit <br class="d-none d-sm-block"> Nullam maximus.</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="why-chose-list style3">
                  <div class="list-one mb30">
                    <span class="list-icon flex-shrink-0 flaticon-secure-payment mb20"></span>
                    <div class="list-content flex-grow-1">
                      <h6 class="mb-1">Secure Payment</h6>
                      <p class="text mb-0 fz14">Nullam sollicitudin blandit <br class="d-none d-sm-block"> Nullam maximus.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Banner -->
    <section class="our-about pt-0">
      <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
          <div class="col-lg-12">
            <div class="about-page-img">
              <img class="w-100" src="{{ asset('assets/images/about/about-page-banner.jpg')}}" alt="about">
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Funfact -->
    <section class="pt-0">
      <div class="container">
        <div class="row justify-content-center wow fadeInUp" data-wow-delay="300ms">
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">4</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Awward Winning</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">12</div></li>
                  <li><span>K</span></li>
                </ul>
                <p class="text mb-0">Property Ready</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="funfact_one text-center">
              <div class="details">
                <ul class="ps-0 mb-0 d-flex justify-content-center">
                  <li><div class="timer">20</div></li>
                  <li><span>M</span></li>
                </ul>
                <p class="text mb-0">Happy Customer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CTA Banner -->
    <section class="pt-0">
      <div class="cta-banner3 bgc-thm-light mx-auto maxw1600 pt100 pt60-lg pb90 pb60-lg bdrs24 position-relative overflow-hidden mx20-lg">
        <div class="container">
          <div class="row">
            <div class="col-md-6 col-lg-5 pl30-md pl15-xs wow fadeInRight" data-wow-delay="500ms">
              <div class="mb30">
                <h2 class="title text-capitalize">Let’s find the right <br class="d-none d-md-block"> selling option for you</h2>
              </div>
              <div class="why-chose-list style2">
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-security"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Property Management</h6>
                    <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-keywording"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Mortgage Services</h6>
                    <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                  </div>
                </div>
                <div class="list-one d-flex align-items-start mb30">
                  <span class="list-icon flex-shrink-0 flaticon-investment"></span>
                  <div class="list-content flex-grow-1 ml20">
                    <h6 class="mb-1">Currency Services</h6>
                    <p class="text mb-0 fz15">Nullam sollicitudin blandit eros eu pretium. Nullam maximus ultricies auctor.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    @include('component.CTA')

    @endsection
