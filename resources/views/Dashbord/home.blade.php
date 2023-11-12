@extends('layout.dashboard')
@section('dashboard')
  <div class="dashboard_content_wrapper">
    <div class="dashboard dashboard_wrapper pr30 pr0-xl">
      <div class="dashboard__sidebar d-none d-lg-block">
        <div class="dashboard_sidebar_list">
          <div class="sidebar_list_item ">
            <a href="home.htmls" class="items-center"><i class="flaticon-home mr15"></i>Home</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="d-properties.html" class="items-center"><i class="flaticon-new-tab mr15"></i>Properties</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="d-project.html" class="items-center"><i class="flaticon-like mr15"></i>Project</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="d-blog.html" class="items-center"><i class="flaticon-search-2 mr15"></i>Blog</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="d-subscribe.html" class="items-center"><i class="flaticon-protection mr15"></i>Subscribe</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="d-setting.html" class="items-center"><i class="flaticon-protection mr15"></i>Settings</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="d-users.html" class="items-center"><i class="flaticon-protection mr15"></i>Users</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="d-profile.html" class="items-center"><i class="flaticon-user mr15"></i>Profile</a>
          </div>
          <div class="sidebar_list_item ">
            <a href="d-logout.html" class="items-center"><i class="flaticon-logout mr15"></i>Logout</a>
          </div>
        </div>
      </div>
      <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-f7">
          <div class="row pb40">
            <div class="col-lg-12">
              <div class="dashboard_navigationbar d-block d-lg-none">
                <div class="dropdown">
                  <button onclick="myFunction()" class="dropbtn"><i class="fa fa-bars pr10"></i> Dashboard Navigation</button>
                  <ul id="myDropdown" class="dropdown-content">
                    <li class="active"><a href="page-dashboard.html"><i class="flaticon-discovery mr10"></i>Dashboard</a></li>
                    <li><a href="page-dashboard-message.html"><i class="flaticon-chat-1 mr10"></i>Message</a></li>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE LISTINGS</p></li>
                    <li><a href="page-dashboard-add-property.html"><i class="flaticon-new-tab mr10"></i>Add New Property</a></li>
                    <li><a href="page-dashboard-properties.html"><i class="flaticon-home mr10"></i>My Properties</a></li>
                    <li><a href="page-dashboard-favorites.html"><i class="flaticon-like mr10"></i>My Favorites</a></li>
                    <li><a href="page-dashboard-savesearch.html"><i class="flaticon-search-2 mr10"></i>Saved Search</a></li>
                    <li><a href="page-dashboard-review.html"><i class="flaticon-review mr10"></i>Reviews</a></li>
                    <li><p class="fz15 fw400 ff-heading mt30 pl30">MANAGE ACCOUNT</p></li>
                    <li><a href="page-dashboard-package.html"><i class="flaticon-protection mr10"></i>My Package</a></li>
                    <li><a href="page-dashboard-profile.html"><i class="flaticon-user mr10"></i>My Profile</a></li>
                    <li><a class="" href="page-login.html"><i class="flaticon-exit mr10"></i>Logout</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="dashboard_title_area">
                <h2>Howdy, Ali!</h2>
                <p class="text">We are glad to see you again!</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">All Properties</div>
                  <div class="title">583</div>
                </div>
                <div class="icon text-center"><i class="flaticon-home"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Views</div>
                  <div class="title">192</div>
                </div>
                <div class="icon text-center"><i class="flaticon-search-chart"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Visitor Reviews</div>
                  <div class="title">438</div>
                </div>
                <div class="icon text-center"><i class="flaticon-review"></i></div>
              </div>
            </div>
            <div class="col-sm-6 col-xxl-3">
              <div class="d-flex justify-content-between statistics_funfact">
                <div class="details">
                  <div class="text fz25">Total Favorites</div>
                  <div class="title">67</div>
                </div>
                <div class="icon text-center"><i class="flaticon-like"></i></div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-8">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <div class="navtab-style1">
                  <div class="d-sm-flex align-items-center justify-content-between">
                    <h4 class="title fz17 mb20">View statistics</h4>
                    <ul class="nav nav-tabs border-bottom-0 mb30" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link fw600 active" id="hourly-tab" data-bs-toggle="tab" href="#hourly" role="tab" aria-controls="hourly" aria-selected="true">Hours</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fw600" id="weekly-tab" data-bs-toggle="tab" href="#weekly" role="tab" aria-controls="weekly" aria-selected="false">Weekly</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link fw600" id="monthly-tab" data-bs-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="false">Monthly</a>
                      </li>
                    </ul>
                  </div>
                  <div class="tab-content" id="myTabContent2">
                    <div class="tab-pane fade show active" id="hourly" role="tabpanel" aria-labelledby="hourly-tab">
                      <canvas class="chart-container" id="doublebar-chart"></canvas>
                    </div>
                    <div class="tab-pane fade w-100" id="weekly" role="tabpanel" aria-labelledby="weekly-tab">
                      <canvas class="canvas w-100" id="myChartweave"></canvas>
                    </div>
                    <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                      <div class="chart pt20">
                        <canvas class="w-100" id="myChart"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4">
              <div class="ps-widget bgc-white bdrs12 default-box-shadow2 p30 mb30 overflow-hidden position-relative">
                <h4 class="title fz17 mb25">Recent Activities</h4>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-home flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Your listing <span class="fw600">House on the beverly hills</span> has been approved</p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-review flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Dollie Horton left a review on <span class="fw600">House on the Northridge</span></p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-like flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Someone favorites your <span class="fw600">Triple Story House for Rent</span> listing</p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-review flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Someone favorites your <span class="fw600">Triple Story House for Rent</span> listing</p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-home flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Your listing <span class="fw600">House on the beverly hills</span> has been approved</p>
                </div>
                <div class="recent-activity d-sm-flex align-items-center mb20">
                  <span class="icon me-3 flaticon-review flex-shrink-0"></span>
                  <p class="text mb-0 flex-grow-1">Dollie Horton left a review on <span class="fw600">House on the Northridge</span></p>
                </div>
                <div class="d-grid">
                  <a href="#" class="ud-btn btn-white2">Veiw More<i class="fal fa-arrow-right-long"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <footer class="dashboard_footer pt30 pb10">
          <div class="container">
            <div class="row items-center justify-content-center justify-content-md-between">
              <div class="col-auto">

              </div>

              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
  </div>
  <a class="scrollToHome" href="#"><i class="fas fa-angle-up"></i></a>
</div>
@endsection
