@extends('layout.app')
@section('content')
<div class="hiddenbar-body-ovelay"></div>
<div class="body_content"></div>
<section class="home-banner-style1 p0" style="background-image: url({{ asset('assets/images/home/home-2.jpg') }}) !important; background-size: cover !important;">
    <div class="home-style1 h-500">
        <div class="container">
            <div class="row">
                <div class="col-xl-11 mx-auto">
                    <div class="inner-banner-style1 text-center">
                        <h2 class="hero-title animate-up-2">Find Our New Blogs</h2>
                        <p class="hero-text fz15 animate-up-3">We’ve more than 745,000 apartments, place & plot.</p>
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
                    <h2 class="title">Blogs</h2>
                    <div class="breadcumb-list">
                        <a href="/">Home</a>
                        <a href="/blog">{{ $result->title}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Blog Image -->
<section class="our-about pt-0">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-12">
                <div class="about-page-img">
                    <img class="w-100 blog-image" src="{{ asset($result->image)}}" alt="blog-img">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Blog Content -->
<section class="our-about pb90" style="margin-top: -200px">
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="300ms">
            <div class="col-lg-6">
                <h2>{{ $result->title }}</h2>
            </div>
            <div class="col-lg-12">
                <p class="text mb25">{{ $result->content }}</p>
                <small>{{ $result->created_at->format('d / M / yy h:m:a') }}</small>
            </div>
        </div>
    </div>
</section>

@include('component.CTA')
@endsection
