@extends('layout.app')
@section('content')

<div class="hiddenbar-body-ovelay"></div>
<section class="home-banner-style6 bw-100  p0">
    <div class="home-style6 h-300" style="height: 80px !important">
        <div class="container">
        </div>
    </div>
</section>

<div class="body_content">
    <section class="p-0">
            <iframe class="home8-map contact-page" loading="lazy"
            src="https://maps.google.com/maps?q={{ $siteInfo->latitude }},{{ $siteInfo->longitude }}&amp;t=m&amp;z=14&amp;output=embed&amp;iwloc=near"
            title="{{ $siteInfo->address}}"
            aria-label="{{ $siteInfo->address}}" ></iframe>
    </section>
    <section>
        <div class="container">
            <div class="row d-flex align-items-end">
                <div class="col-lg-5 position-relative">
                    <div class="home8-contact-form default-box-shadow1 bdrs12 bdr1 p30 mb30-md bgc-white">
                        <h4 class="form-title mb25">Have questions? Get in touch!</h4>
                        <form method="POST"  class="form-style1">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10"> Name</label>
                                        <input type="text" required class="form-control" name="name" placeholder="Your Name">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Email</label>
                                        <input type="email" required name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="mb20">
                                        <label class="heading-color ff-heading fw600 mb10">Subject</label>
                                        <input type="text" required name="subject" class="form-control" placeholder="Subject">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="mb10">
                                        <label class="heading-color ff-heading fw600 mb10">Textarea</label>
                                        <textarea required cols="30" rows="4" name="description"  placeholder="There are many variations of passages."></textarea>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="d-grid">
                                        <button type="submit" class="ud-btn btn-thm">
                                            Submit<i class="fal fa-arrow-right-long"></i>
                                        </button>
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
                <div class="col-lg-5 offset-lg-2">
                    <h2 class="mb30 text-capitalize">We’d love to hear <br class="d-none d-lg-block">from you.</h2>
                    <p class="text">We are here to answer any question you may have. As a partner of corporates, realton
                        has more than 9,000 offices of all sizes and all potential of session.</p>
                </div>
            </div>
        </div>
    </section>

@endsection
