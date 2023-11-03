@extends('layout.app')
@section('content')
@include('component.AdvanceFilters', ['property_status' => 'SALE'])

    <div class="hiddenbar-body-ovelay"></div>
    <div class="body_content_wrapper">
        <!-- Home Banner Style V1 -->
        <section class="home-banner-style1 p0" style="background-size: cover !important;">
            <div class="home-style1">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="inner-banner-style1 text-center">
                                <h6 class="hero-sub-title animate-up-1">THE BEST WAY TO</h6>
                                <h2 class="hero-title animate-up-2">Find Your Dream Home</h2>
                                <p class="hero-text fz15 animate-up-3">We’ve more than 745,000 apartments, place & plot.
                                </p>
                                <div class="advance-search-tab mt70 mt30-md mx-auto animate-up-3">
                                    <ul class="nav nav-tabs p-0 m-0" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab"
                                                data-bs-target="#home" type="button" role="tab"
                                                aria-controls="home" aria-selected="true">
                                                Sale
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab"
                                                data-bs-target="#profile" type="button" role="tab"
                                                aria-controls="profile" aria-selected="false">
                                                Rent
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="home" role="tabpanel"
                                            aria-labelledby="home-tab">
                                            <div class="advance-content-style1">
                                                <div class="row">
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="advance-search-field position-relative text-start">
                                                            <form id="buy-search-form" action="{{ route('search') }}"
                                                                method="GET" class="form-search position-relative"
                                                                accept-charset="utf-8">
                                                                <div class="box-search">
                                                                    <input value="SALE" type="hidden" name="status"
                                                                        id="selected_option">
                                                                    <span class="icon flaticon-home-1"></span>
                                                                    <input class="form-control bgc-f7 bdrs12"
                                                                        type="text" name="address"
                                                                        placeholder="Enter title , description, address, city, or country">
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-3">
                                                        <div
                                                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                                                            <button class="advance-search-btn" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><span
                                                                    class="flaticon-settings"></span> Advanced</button>
                                                            <button id="buy-search-btn" form="buy-search-form"
                                                                class="advance-search-icon ud-btn btn-thm ms-4"
                                                                type="submit">
                                                                <span class="flaticon-search"></span>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="profile" role="tabpanel"
                                            aria-labelledby="profile-tab">
                                            <div class="advance-content-style1">
                                                <div class="row">
                                                    <div class="col-md-8 col-lg-9">
                                                        <div class="advance-search-field position-relative text-start">
                                                            <form id="rent-search-form" action="{{ route('search') }}"
                                                                method="GET" class="form-search position-relative"
                                                                accept-charset="utf-8">
                                                                <div class="box-search">
                                                                    <input type="hidden" name="status" value="RENT"
                                                                        id="selected_option">
                                                                    <span class="icon flaticon-home-1"></span>
                                                                    <input class="form-control bgc-f7 bdrs12"
                                                                        type="text" name="address"
                                                                        placeholder="Enter title , description, address, city, or country" />
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 col-lg-3">
                                                        <div
                                                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                                                            <button class="advance-search-btn" type="button"
                                                                data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal"><span
                                                                    class="flaticon-settings"></span> Advanced</button>
                                                            <button id="rent-search-btn" form="rent-search-form"
                                                                class="advance-search-icon ud-btn btn-thm ms-4"
                                                                type="submit">
                                                                <span class="flaticon-search"></span>
                                                            </button>
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
        <section class="bgc-f7">
            <div class="container">
                <div class="row align-items-center wow fadeInUp" data-wow-delay="00ms">
                    <div class="col-lg-9">
                        <div class="main-title2">
                            <h2 class="title">Discover Our New Featured Listings</h2>
                            <p class="paragraph">You can find our new featured listing here</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-start text-lg-end mb-3">
                            <a class="ud-btn2" href="/sale">See All Properties<i
                                    class="fal fa-arrow-right-long"></i></a>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                        <div
                            class="feature-listing-slider navi_pagi_bottom_center slider-dib-sm slider-3-grid owl-carousel owl-theme">
                            @foreach ($newProperties as $item)
                                <div class="item">
                                    <a href="{{ route('single.property', ['id' => $item->id]) }}">

                                        <div class="listing-style1">
                                            <div class="list-thumb">
                                                <img class="w-100 h-400" src="{{ $item->thumbnail }}" alt="">
                                                <div class="list-tag fz12">
                                                    <span class="flaticon-electricity me-2"></span>FEATURED
                                                </div>
                                                <div class="list-price">$ {{ $item->price }}
                                                    @if ($item->status == 'RENT')
                                                        / <span>mo</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="list-content">
                                                <h6 class="list-title" style="white-space: nowrap; ">
                                                    <a href="{{ route('single.property', ['id' => $item->id]) }}">
                                                        {{ $item->title }}
                                                    </a>
                                                </h6>
                                                <p class="list-text">{{ $item->city }} , {{ $item->country }}</p>
                                                <div class="list-meta d-flex align-items-center">
                                                    <a href="#" onclick="return false"><span
                                                            class="flaticon-bed"></span>{{ $item->bedrooms }} bed</a>
                                                    <a href="#" onclick="return false"><span
                                                            class="flaticon-shower"></span>{{ $item->bathrooms }} bath</a>
                                                    <a href="#" onclick="return false"><span
                                                            class="flaticon-expand"></span>{{ $item->size }} sqft</a>
                                                </div>
                                                <hr class="mt-2 mb-2">
                                                <div class="list-meta2 d-flex justify-content-between align-items-center">
                                                    <span class="for-what">For {{ $item->status }}</span>
                                                    <div class="icons d-flex align-items-center">
                                                        <a href="callto:{{ $siteInfo['phones'][0]['phone'] }}"><span
                                                                class="flaticon-call"></span></a>
                                                        <a href="mailto:{{ $siteInfo['emails'][0]['email'] }}"><span
                                                                class="flaticon-email"></span></a>
                                                        <a target="_blank"
                                                            href="https://wa.me/{{ $siteInfo['phones'][0]['phone'] }}?text=Hello%20from%20Asadi!"><span
                                                                class="flaticon-whatsapp"></span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                </div>
                            @endforeach
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
                            <p class="paragraph">list of cities with properties</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="text-start text-lg-end mb-3">
                            {{-- <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i
                                    class="fal fa-arrow-right-long"></i></a> --}}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                        <div
                            class="property-city-slider dots_none slider-dib-sm slider-4-grid2 vam_nav_style owl-theme owl-carousel">
                            <div class="item">
                                <div class="feature-style1 mb30">
                                    <div class="feature-img"><img class="w-100"
                                            src="assets/images/listings/city-listing-1.png" alt=""></div>
                                    <div class="feature-content">
                                        <div class="top-area">
                                            <h6 class="title mb-1">Los Angeles</h6>
                                            <p class="text">59 Properties</p>
                                        </div>
                                        <div class="bottom-area">
                                            {{-- <a class="ud-btn2" href="page-property-single-v1.html">See All Cities<i
                                                    class="fal fa-arrow-right-long"></i></a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-style1 mb30">
                                    <div class="feature-img"><img class="w-100"
                                            src="assets/images/listings/city-listing-2.png" alt=""></div>
                                    <div class="feature-content">
                                        <div class="top-area">
                                            <h6 class="title mb-1">Miami</h6>
                                            <p class="text">18 Properties</p>
                                        </div>
                                        <div class="bottom-area">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-style1 mb30">
                                    <div class="feature-img"><img class="w-100"
                                            src="assets/images/listings/city-listing-3.png" alt=""></div>
                                    <div class="feature-content">
                                        <div class="top-area">
                                            <h6 class="title mb-1">New York</h6>
                                            <p class="text">32 Properties</p>
                                        </div>
                                        <div class="bottom-area">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="feature-style1 mb30">
                                    <div class="feature-img"><img class="w-100"
                                            src="assets/images/listings/city-listing-4.png" alt=""></div>
                                    <div class="feature-content">
                                        <div class="top-area">
                                            <h6 class="title mb-1">Chicago</h6>
                                            <p class="text">19 Properties</p>
                                        </div>
                                        <div class="bottom-area">
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
                            <p class="text mb25 fz15">As the complexity of buildings to increase, the field of architecture
                            </p>
                            <div class="list-style1 mb50">
                                <ul>
                                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Find excellent deals</li>
                                    <li><i class="far fa-check text-white bgc-dark fz15"></i>Friendly host & Fast support
                                    </li>
                                    <li><i class="far fa-check text-white bgc-dark fz15"></i>List your own property</li>
                                </ul>
                            </div>
                            <a href="/about" class="ud-btn btn-white2">Learn More<i
                                    class="fal fa-arrow-right-long"></i></a>
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
                            <p class="paragraph text-white">Find our popular properties for rent or sale</p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="dark-light-navtab text-start text-lg-end mt-0 mt-lg-4 mb-4">
                            <ul class="nav nav-pills justify-content-start justify-content-lg-end" id="pills-tab"
                                role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-home" type="button" role="tab"
                                        aria-controls="pills-home" aria-selected="true">For Rent</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link me-0" id="pills-profile-tab" data-bs-toggle="pill"
                                        data-bs-target="#pills-profile" type="button" role="tab"
                                        aria-controls="pills-profile" aria-selected="false">For Sale</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="300ms">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div
                                            class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel">
                                            @foreach ($popular_rent as $item)
                                                <div class="item">
                                                    <a href="{{ route('single.property', ['id' => $item->id]) }}">

                                                        <div class="listing-style1">
                                                            <div class="list-thumb">
                                                                <img class="w-100" src="{{ $item->thumbnail }}"
                                                                    alt="">
                                                                <div class="list-tag fz12">
                                                                    <span class="flaticon-electricity me-2"></span>FEATURED
                                                                </div>
                                                                <div class="list-price">$ {{ $item->price }}
                                                                    @if ($item->status == 'RENT')
                                                                        / <span>mo</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="list-content">
                                                                <h6 class="list-title" style="white-space: nowrap; ">
                                                                    <a
                                                                        href="{{ route('single.property', ['id' => $item->id]) }}">
                                                                        {{ $item->title }}
                                                                    </a>
                                                                </h6>
                                                                <p class="list-text">{{ $item->city }} ,
                                                                    {{ $item->country }}</p>
                                                                <div class="list-meta d-flex align-items-center">
                                                                    <a href="#" onclick="return false"><span
                                                                            class="flaticon-bed"></span>{{ $item->bedrooms }}
                                                                        bed</a>
                                                                    <a href="#" onclick="return false"><span
                                                                            class="flaticon-shower"></span>{{ $item->bathrooms }}
                                                                        bath</a>
                                                                    <a href="#" onclick="return false"><span
                                                                            class="flaticon-expand"></span>{{ $item->size }}
                                                                        sqft</a>
                                                                </div>
                                                                <hr class="mt-2 mb-2">
                                                                <div
                                                                    class="list-meta2 d-flex justify-content-between align-items-center">
                                                                    <span class="for-what">For {{ $item->status }}</span>
                                                                    <div class="icons d-flex align-items-center">
                                                                        <a
                                                                            href="callto:{{ $siteInfo['phones'][0]['phone'] }}"><span
                                                                                class="flaticon-call"></span></a>
                                                                        <a
                                                                            href="mailto:{{ $siteInfo['emails'][0]['email'] }}"><span
                                                                                class="flaticon-email"></span></a>
                                                                        <a target="_blank"
                                                                            href="https://wa.me/{{ $siteInfo['phones'][0]['phone'] }}?text=Hello%20from%20Asadi!"><span
                                                                                class="flaticon-whatsapp"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div
                                            class="dots_none nav_none slider-dib-sm slider-4-grid3 vam_nav_style owl-theme owl-carousel">
                                            @foreach ($popular_sale as $item)
                                                <div class="item">
                                                    <a href="{{ route('single.property', ['id' => $item->id]) }}">

                                                        <div class="listing-style1">
                                                            <div class="list-thumb">
                                                                <img class="w-100" src="{{ $item->thumbnail }}"
                                                                    alt="">
                                                                <div class="list-tag fz12">
                                                                    <span class="flaticon-electricity me-2"></span>FEATURED
                                                                </div>
                                                                <div class="list-price">$ {{ $item->price }}
                                                                    @if ($item->status == 'RENT')
                                                                        / <span>mo</span>
                                                                    @endif
                                                                </div>
                                                            </div>
                                                            <div class="list-content">
                                                                <h6 class="list-title text-single-line">
                                                                    <a
                                                                        href="{{ route('single.property', ['id' => $item->id]) }}">
                                                                        {{ $item->title }}
                                                                    </a>
                                                                </h6>
                                                                <p class="list-text">{{ $item->city }} ,
                                                                    {{ $item->country }}
                                                                </p>
                                                                <div class="list-meta d-flex align-items-center">
                                                                    <a href="#" onclick="return false"><span
                                                                            class="flaticon-bed"></span>{{ $item->bedrooms }}
                                                                        bed</a>
                                                                    <a href="#" onclick="return false"><span
                                                                            class="flaticon-shower"></span>{{ $item->bathrooms }}
                                                                        bath</a>
                                                                    <a href="#" onclick="return false"><span
                                                                            class="flaticon-expand"></span>{{ $item->size }}
                                                                        sqft</a>
                                                                </div>
                                                                <hr class="mt-2 mb-2">
                                                                <div
                                                                    class="list-meta2 d-flex justify-content-between align-items-center">
                                                                    <span class="for-what">For {{ $item->status }}</span>
                                                                    <div class="icons d-flex align-items-center">
                                                                        <a
                                                                            href="callto:{{ $siteInfo['phones'][0]['phone'] }}"><span
                                                                                class="flaticon-call"></span></a>
                                                                        <a
                                                                            href="mailto:{{ $siteInfo['emails'][0]['email'] }}"><span
                                                                                class="flaticon-email"></span></a>
                                                                        <a target="_blank"
                                                                            href="https://wa.me/{{ $siteInfo['phones'][0]['phone'] }}?text=Hello%20from%20Asadi!"><span
                                                                                class="flaticon-whatsapp"></span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-grid d-md-block text-center mt30 mt0-md">
                            <a href="/sale" class="ud-btn btn-thm">See All Properties<i
                                    class="fal fa-arrow-right-long"></i></a>
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
                            <h2 class="title">People Love Living with our properties</h2>
                            <p class="paragraph">here you are our valuable customer comments</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="testimonial-slider navi_pagi_top_right slider-3-grid owl-carousel owl-theme wow fadeInUp"
                            data-wow-delay="300ms">
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content tst_content">
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“Asadi Properties helped me rent my first apartment, and I
                                            couldn't have asked for a better experience. They walked me through the entire
                                            process, and their support made it stress-free. I'm grateful for their expertise
                                            and support.”</p>
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
                                            <img class="wa" src="assets/images/testimonials/testimonial-5.png"
                                                alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Lisa Patel</h6>
                                            <p class="mb-0">Nintendo</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content tst_content">
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“When it comes to buying a home, Asadi Properties is the best in
                                            the business. They have an extensive network of properties and a deep
                                            understanding of the market. Their dedication to finding me the perfect home was
                                            outstanding.”</p>
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
                                            <img class="wa" src="assets/images/testimonials/testimonial-4.png"
                                                alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">David Brown</h6>
                                            <p class="mb-0">Instagram</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-style1   position-relative">
                                    <div class="testimonial-content tst_content">
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“I've rented multiple properties through Asadi Properties, and
                                            each time they've been accommodating and helpful. They truly care about finding
                                            the right place for their clients, and I've always been satisfied with their
                                            service.”</p>
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
                                            <img class="wa" src="assets/images/testimonials/testimonial-2.png"
                                                alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Emily Rodriguez</h6>
                                            <p class="mb-0">Website</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content tst_content">
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“I had a fantastic experience with Asadi Properties when renting
                                            a home. The team was professional, responsive, and helped me find the perfect
                                            place that fit my budget and preferences. I highly recommend their services.”
                                        </p>
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
                                            <img class="wa" src="assets/images/testimonials/testimonial-1.png"
                                                alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">Sarah Johnson</h6>
                                            <p class="mb-0">Facebook</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-style1 position-relative">
                                    <div class="testimonial-content tst_content">
                                        <span class="icon fas fa-quote-left"></span>
                                        <p class="text">“Asadi Properties made selling my home a breeze. Their expert
                                            guidance, marketing strategies, and negotiation skills resulted in a quick and
                                            profitable sale. I couldn't be happier with their services.”</p>
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
                                            <img class="wa" src="assets/images/testimonials/testimonial-3.png"
                                                alt="">
                                        </div>
                                        <div class="flex-grow-1 ms-3">
                                            <h6 class="mb-0">John Smith</h6>
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
                            <p class="paragraph">Find the recent blogs</p>
                        </div>
                    </div>
                </div>
                <div class="row wow fadeInUp" data-wow-delay="300ms">
                    @foreach ($blogs as $item)
                        <div class="col-sm-6 col-lg-4">
                            <div class="blog-style1">
                                <div class="blog-img">
                                    <img class="w-100" src="{{ asset($item->image) }}" alt=""></div>
                                <div class="blog-content">
                                    <div class="date">
                                        <span class="month">{{ $item->created_at->format('M') }}</span>
                                        <span class="day">{{ $item->created_at->format('d') }}  </span>
                                    </div>
                                    <a class="tag text-single-line" href="#">{{ $item->title  }}</a>
                                    <h6 class="title mt-1"><a href="/blog">{{ $item->content  }}</a></h6>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('component.CTA')
    @endsection
