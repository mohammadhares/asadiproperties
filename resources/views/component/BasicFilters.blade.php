<div class="advance-search-tab mt70 mt30-md mx-auto animate-up-3">
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel"
            aria-labelledby="home-tab">
            <div class="advance-content-style1">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="advance-search-field position-relative text-start">
                            <form id="rent-search-form" action="{{ route('search') }}"
                                method="GET" class="form-search position-relative"
                                accept-charset="utf-8">
                                <div class="box-search">
                                    <input type="hidden" form="rent-search-form" name="status" value="{{ $property_status }}">
                                    <span class="icon flaticon-home-1"></span>
                                    <input
                                        required
                                        class="form-control bgc-f7 bdrs12" type="text" name="address"
                                        placeholder="Enter title , description, address, city, or country"
                                    />
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div
                            class="d-flex align-items-center justify-content-start justify-content-md-center mt-3 mt-md-0">
                            <button class="advance-search-btn" type="button"
                                data-bs-toggle="modal" data-bs-target="#exampleModal"><span
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
