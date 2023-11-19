@extends('layout.dashboard')
@section('dashboard')
<div class="dashboard__main pl0-md">
    <div class="dashboard__content bgc-f7 content_section">
        <div class="row pb40">
            <div class="col-lg-12">
                <div class="dashboard_title_area">
                    <h2>Howdy, {{ session('user')->name }}!</h2>
                    <p class="text">We are glad to see you again!</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">All Properties</div>
                        <div class="title">{{ $total_property }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-home"></i></div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">Property for Rent</div>
                        <div class="title">{{ $total_rent_property }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">Property for Sale</div>
                        <div class="title">{{ $total_sale_property }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-review"></i></div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">Total Contact</div>
                        <div class="title">{{ $total_contact }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-like"></i></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">All Projects</div>
                        <div class="title">{{ $total_project }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-home"></i></div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">Project for Rent</div>
                        <div class="title">{{ $total_rent_project }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">Project for Sale</div>
                        <div class="title">{{ $total_sale_project }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-review"></i></div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">Total Blogs</div>
                        <div class="title">{{ $total_blog }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-like"></i></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">Total Subscriber</div>
                        <div class="title">{{ $total_subscriber }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-home"></i></div>
                </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
                <div class="d-flex justify-content-between statistics_funfact">
                    <div class="details">
                        <div class="text fz25">Total Admin User</div>
                        <div class="title">{{ $total_user }}</div>
                    </div>
                    <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
