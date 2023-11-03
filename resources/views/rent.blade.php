@extends('layout.app')
@section('content')
    @include('component.AdvanceFilters', ['property_status' => 'RENT'])
    <div class="hiddenbar-body-ovelay"></div>
    <div class="body_content_wrapper">
        <section class="home-banner-style1 p0" style="background-image: url({{ asset('assets/images/home/home-2.jpg') }}) !important; background-size: cover !important;">
            <div class="home-style1 h-500">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-11 mx-auto">
                            <div class="inner-banner-style1 text-center">
                                <h2 class="hero-title animate-up-2">Rent Your Dream Home</h2>
                                <p class="hero-text fz15 animate-up-3">We’ve more than 745,000 apartments, place & plot.</p>
                                @include('component.BasicFilters', ['property_status' => 'RENT'])
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <div class="body_content">
            <section class="breadcumb-section bgc-f7">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="breadcumb-style1">
                                <h2 class="title">{{ $result->total() }} Property for rent</h2>
                                <div class="breadcumb-list">
                                    <a href="/">Home</a>
                                    <a href="/rent">For Rent</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Property All Lists -->
            <section class="pt0 pb90 bgc-f7">
                <div class="container">
                    <div class="row">
                        @if (count($result) === 0)
                            <p class="text-center">There is no property.</p>
                        @else
                            @include('component.ProperyCard', ['result' => $result])
                        @endif
                    </div>
                    @if (count($result) > 0)
                        @include('pagination', ['paginator' => $result])
                    @endif
                </div>
            </section>
@endsection
