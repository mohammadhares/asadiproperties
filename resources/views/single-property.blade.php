@extends('layout.app')
@section('content')

<div class="hiddenbar-body-ovelay"></div>
<section class="home-banner-style6 p0 bw-100 ">
    <div class="home-style6 h-300" style="height: 80px !important">
        <div class="container">
        </div>
    </div>
</section>
<section class="pt60 pb0 bgc-white">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
            <div class="col-lg-8">
                <div class="single-property-content mb30-md">
                    <h2 class="sp-lg-title">{{ $result->title }}</h2>
                    <div class="pd-meta mb15 d-md-flex align-items-center">
                        <p class="text fz15 mb-0 pr10 bdrrn-sm">{{ $result->address }}</p>
                    </div>
                    <div class="property-meta d-flex align-items-center">
                        <a class="ff-heading text-thm fz15 bdrr1 pr10 bdrrn-sm" href="#"><i
                                class="fas fa-circle fz10 pe-2"></i>For {{ $result->status }}</a>
                        <a class="ff-heading bdrr1 fz15 pr10 ml10 ml0-sm bdrrn-sm" href="#"><i
                                class="far fa-clock pe-2"></i>{{ $result->created_at }}</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-property-content">
                    <div class="property-action text-lg-end">
                        <div class="d-flex mb20 mb10-md align-items-center justify-content-lg-end">
                            <a class="icon mr10" href="callto:{{ $siteInfo['phones'][0]['phone'] }}"><span
                                    class="flaticon-call"></span></a>
                            <a class="icon mr10" href="mailto:{{ $siteInfo['emails'][0]['email'] }}"><span
                                    class="flaticon-email"></span></a>
                            <a class="icon mr10" target="_blank"
                                href="https://wa.me/{{ $siteInfo['phones'][0]['phone'] }}?text=Hello%20from%20Asadi!"><span
                                    class="flaticon-whatsapp"></span></a>
                        </div>
                        <h3 class="price mb-0">AED {{ $result->price }}</h3>
                        <p class="text space fz15">{{ $result->size }}/ft</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt30 wow fadeInUp" data-wow-delay="300ms">
            <div class="col-sm-9">
                <div class="sp-img-content at-sp-v2 mb15-md">
                    <a class="popup-img preview-img-1 sp-img" href="{{ asset($result->thumbnail) }}">
                        <img class="w-100" src="{{ asset($result->thumbnail) }}" alt="8.jpg">
                    </a>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="row">
                    <div class="col-sm-12 ps-lg-0">
                        <div class="sp-img-content">
                            <a class="popup-img preview-img-3 sp-img mb10" href="{{ asset($result->thumbnail) }}">
                                <img class="w-100" src="{{ asset($result->thumbnail) }}" alt="3.jpg">
                            </a>
                        </div>
                    </div>
                    <div class="col-sm-12 ps-lg-0">
                        <div class="sp-img-content at-sp-v2">
                            <a class="popup-img preview-img-5 sp-img" href="{{ asset($result->thumbnail) }}">
                                <img class="w-100" src="{{ asset($result->thumbnail) }}" alt="5.jpg">
                            </a>
                            <a href="{{ asset($result->thumbnail) }}" class="all-tag popup-img">See All
                                Photos</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt30">
            <div class="col-sm-6 col-md-4 col-xl-2">
                <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-bed"></span>
                    <div class="ml15">
                        <h6 class="mb-0">Bedroom</h6>
                        <p class="text mb-0 fz15">{{ $result->bedrooms }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-shower"></span>
                    <div class="ml15">
                        <h6 class="mb-0">Bath</h6>
                        <p class="text mb-0 fz15">{{ $result->bathrooms }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-event"></span>
                    <div class="ml15">
                        <h6 class="mb-0">Year Built</h6>
                        <p class="text mb-0 fz15">{{ $result->year_built }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-expand"></span>
                    <div class="ml15">
                        <h6 class="mb-0">Sqft</h6>
                        <p class="text mb-0 fz15">{{ $result->size }}</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-xl-2">
                <div class="overview-element mb25 d-flex align-items-center">
                    <span class="icon flaticon-home-1"></span>
                    <div class="ml15">
                        <h6 class="mb-0">Property Type</h6>
                        <p class="text mb-0 fz15">{{ $result->property_type }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Property All Lists -->
<section class="pt60 pb90 bgc-f7">
    <div class="container">
        <div class="row wrap wow fadeInUp" data-wow-delay="500ms">
            <div class="col-lg-8">
                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                    <h4 class="title fz17 mb30">Property Description</h4>
                    <p class="text mb10">{{ $result->content }}</p>
                    <h4 class="title fz17 mb30 mt50">Property Details</h4>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="d-flex justify-content-between">
                                <div class="pd-list">
                                    <p class="fw600 mb10 ff-heading dark-color">Property ID</p>
                                    <p class="fw600 mb10 ff-heading dark-color">Price</p>
                                    <p class="fw600 mb10 ff-heading dark-color">Property Size</p>
                                    <p class="fw600 mb10 ff-heading dark-color">Bathrooms</p>
                                    <p class="fw600 mb-0 ff-heading dark-color">Bedrooms</p>
                                </div>
                                <div class="pd-list">
                                    <p class="text mb10">PR {{ $result->id }}</p>
                                    <p class="text mb10">AED {{ $result->price }}</p>
                                    <p class="text mb10">{{ $result->size }} Sq Ft</p>
                                    <p class="text mb10">{{ $result->bathrooms }}</p>
                                    <p class="text mb-0">{{ $result->bedrooms }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-4 offset-xl-2">
                            <div class="d-flex justify-content-between">
                                <div class="pd-list">
                                    <p class="fw600 mb10 ff-heading dark-color">Year Built</p>
                                    <p class="fw600 mb10 ff-heading dark-color">Property Type</p>
                                    <p class="fw600 mb-0 ff-heading dark-color">Property Status</p>
                                </div>
                                <div class="pd-list">
                                    <p class="text mb10">{{ $result->year_built }}</p>
                                    <p class="text mb10">{{ $result->property_type }}</p>
                                    <p class="text mb-0">For {{ $result->status }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                    <h4 class="title fz17 mb30 mt30">Address</h4>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <div class="d-flex justify-content-between">
                                <div class="pd-list">
                                    <p class="fw600 mb10 ff-heading dark-color">Address</p>
                                    <p class="fw600 mb10 ff-heading dark-color">City</p>
                                    <p class="fw600 mb-0 ff-heading dark-color">State/county</p>
                                </div>
                                <div class="pd-list">
                                    <p class="text mb10">{{ $result->city }}</p>
                                    <p class="text mb10">{{ $result->city }}</p>
                                    <p class="text mb-0">{{ $result->country }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">

                            <iframe class="position-relative bdrs12 mt30 h250" loading="lazy"
                                src="https://maps.google.com/maps?q={{ $result->latitude }},{{ $result->longitude }}&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                                title="{{ $result->city}}, {{ $result->country}}"
                                aria-label="{{ $result->city}}, {{ $result->country}}"></iframe>

                        </div>
                    </div>
                </div>
                <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                    <h4 class="title fz17 mb30">Features & Amenities</h4>
                    <div class="row">
                        <div class="col-sm-6 col-md-4">
                            <div class="pd-list mb10-sm">
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Air Conditioning
                                </p>
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Barbeque</p>
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Dryer</p>
                                <p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>Gym</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="pd-list">
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Lawn</p>
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Microwave</p>
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Outdoor Shower
                                </p>
                                <p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>Refrigerator</p>
                            </div>
                        </div>
                        <div class="col-sm-6 col-md-4">
                            <div class="pd-list">
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Swimming Pool
                                </p>
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>TV Cable</p>
                                <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>Washer</p>
                                <p class="text mb-0"><i class="fas fa-circle fz6 align-middle pe-2"></i>WiFi6
                                <p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="column">
                    <div class="default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white position-relative">
                        <h6 class="title fz17 mb30">Get More Information</h6>
                        <form class="form-style1" method="POST" action="{{ route('store.contact') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Name</label>
                                        <input type="text" name="name" required  class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Email</label>
                                        <input type="email" name="email" required  class="form-control" placeholder="example@gmail.com">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Subject</label>
                                        <input type="text" class="form-control" name="subject" required placeholder="Enter your phone">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb10">
                                        <label class="heading-color ff-heading fw600 mb10">Message</label>
                                        <textarea cols="30" rows="4" name="description" required
                                            placeholder="Hello, I am interested in [Renovated apartment at last floor]"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" class="ud-btn btn-thm" >Submit a Tour Request<i
                                                class="fal fa-arrow-right-long"></i></button>
                                    </div>
                                    @if(session('success'))
                                    <div class="alert alert-success mt-4" style="margin-top: 10px">
                                        {{ session('success') }}
                                    </div>
                                @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
