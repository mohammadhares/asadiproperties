@extends('layout.app')
@section('content')
    <div class="hiddenbar-body-ovelay"></div>
    <div class="body_content">
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
        <section class="breadcumb-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="breadcumb-style1">
                            <h2 class="title">Blog</h2>
                            <div class="breadcumb-list">
                                <a href="/">Home</a>
                                <a href="/blog">Blogs</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Blog Section Area -->
        <section class="our-blog pt-0 mt-zero">
            <div class="container">
                <div class="row wow fadeInUp" data-wow-delay="300ms">
                    <div class="col-xl-12">
                        <div class="navpill-style1">
                            <div class="tab-content" id="pills-tabContent">
                                <div class="tab-pane fade fz15 show active" id="pills-home" role="tabpanel"
                                    aria-labelledby="pills-home-tab">
                                    <div class="row">
                                        @if (count($result) === 0)
                                            <p class="text-center">There is no post yet.</p>
                                        @else
                                            @foreach ($result as $item)
                                                <div class="col-sm-6 col-lg-4">
                                                   <a href="{{ route('single.blog', ['id' => $item->id]) }}">
                                                    <div class="blog-style1">
                                                        <div class="blog-img"><img class="w-100"
                                                                src="{{ asset($item->image)}}" alt=""></div>
                                                        <div class="blog-content">
                                                            <div class="date">
                                                                <span class="month">{{ $item->created_at->format('M') }}</span>
                                                                <span class="day">{{ $item->created_at->format('d') }}  </span>
                                                            </div>
                                                            <a class="tag" href="#">{{ $item->title }}</a>
                                                            <h6 class="title mt-1">
                                                                <a href="{{ route('single.blog', ['id' => $item->id]) }}">{{ $item->content}}</a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                   </a>
                                                </div>
                                            @endforeach
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if (count($result) > 0)
                    @include('pagination', ['paginator' => $result])
                @endif
            </div>
        </section>

    @endsection
