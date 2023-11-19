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
                                    class="fas fa-circle fz10 pe-2"></i>Starting Price: AED {{ $result->price }}</a>
                            <a class="ff-heading bdrr1 fz15 pr10 ml10 ml0-sm bdrrn-sm" href="#"><i
                                    class="far fa-clock pe-2"></i>{{ $result->created_at }}</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-property-content">
                        <div class="property-action text-lg-end">
                            <div class="d-flex mb20 mb10-md align-items-center justify-content-lg-end">
                                <a class="icon mr10" href="callto:{{ $siteInfo->phone_number }}"><span
                                    class="flaticon-call"></span></a>
                            <a class="icon mr10" href="mailto:{{ $siteInfo->primary_email }}"><span
                                    class="flaticon-email"></span></a>
                            <a class="icon mr10" target="_blank"
                                href="https://wa.me/{{ $siteInfo->whatsapp_number }}?text=Hello%20from%20Asadi!"><span
                                    class="flaticon-whatsapp"></span></a>
                            </div>
                            <h3 class="price mb-0">AED {{ $result->price }}</h3>
                            <p class="text space fz15">Developer: {{ $result->developer }}/ft</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt30 wow fadeInUp" data-wow-delay="300ms">
                <div class="@if(count($gallary) > 0) col-sm-9 @else col-sm-12 @endif">
                    <div class="sp-img-content at-sp-v2 mb15-md">
                        <a class="popup-img preview-img-1 sp-img" href="{{ asset($result->thumbnail) }}">
                            <img class="w-100" src="{{ asset($result->thumbnail) }}" alt="8.jpg">
                        </a>
                    </div>
                </div>
                @if(count($gallary) > 0)
                <div class="col-sm-3">
                    <div class="row">
                        <div class="col-sm-12 ps-lg-0">
                            <div class="sp-img-content" style="height: 550px; overflow: auto;">
                                @foreach ($gallary as $item)
                                    <a class="popup-img preview-img-3 sp-img mb10" href="{{ asset($item->image) }}">
                                        <img style="width: 70% !important;" class="w-100" src="{{ asset($item->image) }}" alt="3.jpg">
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                @endif
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
                            <div class="col-md-6 col-xl-8">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">Property ID</p>
                                        <p class="fw600 mb10 ff-heading dark-color">Starting Price</p>
                                        <p class="fw600 mb10 ff-heading dark-color">Developer</p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">PR {{ $result->id }}</p>
                                        <p class="text mb10">AED {{ $result->price }}</p>
                                        <p class="text mb10">{{ $result->developer }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30">Payment Plans</h4>
                        <div class="row">
                            <div class="col-md-6 col-xl-8">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">On Booking</p>
                                        <p class="fw600 mb10 ff-heading dark-color">During Construction</p>
                                        <p class="fw600 mb10 ff-heading dark-color">Handover in Q3 2023</p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">22</p>
                                        <p class="text mb10">10%</p>
                                        <p class="text mb-0">40%</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30 mt30">Address</h4>
                        <div class="row">
                            <div class="col-md-6 col-xl-8">
                                <div class="d-flex justify-content-between">
                                    <div class="pd-list">
                                        <p class="fw600 mb10 ff-heading dark-color">Address</p>
                                        <p class="fw600 mb10 ff-heading dark-color">City</p>
                                        <p class="fw600 mb-0 ff-heading dark-color">State/county</p>
                                    </div>
                                    <div class="pd-list">
                                        <p class="text mb10">{{ $result->address }}</p>
                                        <p class="text mb10">{{ $result->city }}</p>
                                        <p class="text mb-0">{{ $result->country }}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <iframe class="position-relative bdrs12 mt30 h250" loading="lazy"
                                    src="https://maps.google.com/maps?q={{ $result->latitude }},{{ $result->longitude }}&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
                                    title="{{ $result->city }}, {{ $result->country }}"
                                    aria-label="{{ $result->city }}, {{ $result->country }}"></iframe>

                            </div>
                        </div>
                    </div>
                    <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                        <h4 class="title fz17 mb30">Features & Amenities</h4>
                        <div class="row">
                            <div class="col-sm-6 col-md-4">
                                <div class="pd-list mb10-sm">
                                    @foreach ($feature as $item)
                                    <p class="text mb10"><i class="fas fa-circle fz6 align-middle pe-2"></i>
                                        {{ $item->feature }}
                                    </p>
                                    @endforeach
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
                                            <input type="text" name="name" required class="form-control"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Email</label>
                                            <input type="email" name="email" required class="form-control"
                                                placeholder="example@gmail.com">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="mb20">
                                            <label class="heading-color ff-heading fw600 mb10">Subject</label>
                                            <input type="text" class="form-control" name="subject" required
                                                placeholder="Enter your phone">
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
                                            <button type="submit" class="ud-btn btn-thm">Submit a Tour Request<i
                                                    class="fal fa-arrow-right-long"></i></button>
                                        </div>
                                        @if (session('success'))
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
