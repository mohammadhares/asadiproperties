@extends('layout.app')
@section('content')
    <div class="hiddenbar-body-ovelay"></div>
    <div class="body_content">
        <section class="home-banner-style1 p0" style="background-image: url({{ asset('assets/images/home/home-9.jpg') }}) !important; background-size: cover !important;">
            <div class="home-style1 h-500">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="inner-banner-style1 text-center">
                                <h2 class="hero-title animate-up-2">Off Plan Projects</h2>
                                <p class="hero-text fz15 animate-up-3">We’ve more than 745,000 apartments, place & plot.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="breadcumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-style1">
                            <h2 class="title">Projects</h2>
                            <div class="breadcumb-list">
                                <a href="/">Home</a>
                                <a href="/offplane">Off Plan</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Agent Section Area -->
        <section class="our-agents pt-0">
            <div class="container">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5 wow fadeInUp" data-wow-delay="100ms">

                    @foreach ($result as $item)
                        <div class="col">
                            <a href="{{ route('single.project', ['id' => $item->id]) }}">
                                <div class="feature-style2 mb30">
                                    <div class="feature-img">
                                        <img class="bdrs12" src="{{ asset($item->thumbnail) }}" alt="">
                                    </div>
                                    <div class="feature-content pt20">
                                        <h6 class="title mb-1 text-single-line">{{ $item->title }}</h6>
                                        <p class="text fz15">{{ $item->developer }}</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>

                @if (count($result) > 0)
                    @include('pagination', ['paginator' => $result])
                @endif

            </div>
        </section>
    @endsection
