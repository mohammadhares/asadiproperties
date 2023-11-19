@extends('layout.dashboard')
@section('dashboard')
@section('styles')
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
@endsection
<div class="dashboard__main pl0-md">
    <div class="dashboard__content bgc-f7 content_section">
        <div class="row align-items-center pb40">
            <div class="col-xxl-3">
                <div class="dashboard_title_area">
                    <h3>Property</h3>
                    <p>you can add property, medias, address and features.</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    @include('component.messages.success')
                    @include('component.messages.errors')
                </div>
                <div class="col-xl-12">
                    <div
                        class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">
                        <div class="navtab-style1">
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                    <button class="nav-link active fw600 ms-3" id="nav-item1-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-item1" type="button" role="tab" aria-controls="nav-item1"
                                        aria-selected="true">Property</button>
                                    @if ($mode === 'EDIT')
                                    <button class="nav-link fw600" id="nav-item2-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-item2" type="button" role="tab" aria-controls="nav-item2"
                                        aria-selected="false">Media</button>
                                    <button class="nav-link fw600" id="nav-item3-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-item3" type="button" role="tab" aria-controls="nav-item3"
                                        aria-selected="false">Address</button>
                                    <button class="nav-link fw600" id="nav-item4-tab" data-bs-toggle="tab"
                                        data-bs-target="#nav-item4" type="button" role="tab" aria-controls="nav-item4"
                                        aria-selected="false">Features</button>
                                    @endif
                                </div>
                            </nav>
                            <div class="tab-content" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                                    aria-labelledby="nav-item1-tab">
                                    <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                        <form class="form-style1"
                                            action="@if ($mode === 'EDIT') {{ route('property.update', ['id' => $item->id]) }} @else {{ route('property.create') }} @endif"
                                            method="POST" enctype="multipart/form-data">
                                            @csrf
                                            @if ($mode === 'EDIT')
                                            @method('PUT')
                                            @endif
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb20">
                                                        <label class="heading-color ff-heading fw600 mb10">Title</label>
                                                        <input value="@if ($mode === 'EDIT') {{ $item->title }} @endif"
                                                            type="text" name="title" required class="form-control"
                                                            placeholder="Ex. hotel, apartement, house...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb20">
                                                        <label
                                                            class="heading-color ff-heading fw600 mb10">Description</label>
                                                        <textarea cols="30" rows="5" name="content"
                                                            placeholder="write some description.">
@if ($mode === 'EDIT') {{ $item->content }} @endif
</textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb20">
                                                        <label class="heading-color ff-heading fw600 mb10">Select
                                                            Category</label>
                                                        <input type="text" required
                                                            value="@if ($mode === 'EDIT') {{ $item->property_type }} @endif"
                                                            name="property_type" class="form-control"
                                                            placeholder="Ex: Home">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb20">
                                                        <label class="heading-color ff-heading fw600 mb10">Listed
                                                            in</label>
                                                        <div class="location-area">
                                                            <select name="status" class="selectpicker">
                                                                <option @if ($mode==='EDIT' ) @if ($item->status ===
                                                                    'Rent') {{ 'selected' }} @endif
                                                                    @endif>Rent</option>
                                                                <option @if ($mode==='EDIT' ) @if ($item->status ===
                                                                    'Sale') {{ 'selected' }} @endif
                                                                    @endif>Sale</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb30">
                                                        <label class="heading-color ff-heading fw600 mb10">Price in AED
                                                        </label>
                                                        <input type="number" @if ($mode==='EDIT' )
                                                            value="{{ $item->price }}" @endif name="price"
                                                            class="form-control" placeholder="Ex: 1200">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb30">
                                                        <label class="heading-color ff-heading fw600 mb10">Size in
                                                            ft/m</label>
                                                        <input type="number" @if ($mode==='EDIT' )
                                                            value="{{ $item->size }}" @endif name="size"
                                                            class="form-control" placeholder="Ex: 200">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb30">
                                                        <label
                                                            class="heading-color ff-heading fw600 mb10">Bedrooms</label>
                                                        <input type="number" required @if ($mode==='EDIT' )
                                                            value="{{ $item->bedrooms }}" @endif name="bedrooms"
                                                            class="form-control" placeholder="Ex: 5">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb30">
                                                        <label
                                                            class="heading-color ff-heading fw600 mb10">Bathrooms</label>
                                                        <input type="number" required @if ($mode==='EDIT' )
                                                            value="{{ $item->bathrooms }}" @endif name="bathrooms"
                                                            class="form-control" placeholder="Ex: 4">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb30">
                                                        <label class="heading-color ff-heading fw600 mb10">Build
                                                            Year</label>
                                                        <input type="date" required @if ($mode==='EDIT' )
                                                            value="{{ $item->year_built }}" @endif name="build_year"
                                                            class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb30">
                                                        <label
                                                            class="heading-color ff-heading fw600 mb10">Thumbnail</label>
                                                        <input type="file" @if ($mode==='ADD' ) required @endif
                                                            name="thumbnail" class="form-control" placeholder="">
                                                    </div>
                                                </div>
                                                @if ($mode === 'EDIT')
                                                <div class="col-sm-6 col-lg-4">
                                                    <div class="profile-box position-relative d-md-flex align-items-end mb50"
                                                        style="top: 25px">
                                                        <div
                                                            class="profile-img position-relative overflow-hidden bdrs12 mb20-sm">
                                                            <img style="width: 200px !important;" class="w-100"
                                                                src="{{ asset($item->thumbnail) }}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                                @endif
                                                <div class="col-md-12">
                                                    <div class="d-sm-flex text-right"
                                                        style="!important; justify-content: right;">
                                                        <a class="ud-btn btn-white"
                                                            href="{{ route('property.view') }}">Back</a>
                                                        <button type="submit" style="margin-left: 20px"
                                                            class="ud-btn btn-dark">Save Changes</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-item2" role="tabpanel"
                                    aria-labelledby="nav-item2-tab">
                                    <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                        <h4 class="title fz17 mb30">Upload photos of your property</h4>
                                        <div class="col-lg-12">
                                            <div
                                                class="upload-img position-relative overflow-hidden bdrs12 text-center mb30 px-2">
                                                <div class="icon mb30"><span class="flaticon-upload"></span></div>
                                                <h4 class="title fz17 mb10">Upload photos of your property</h4>
                                                <p class="text mb25">Photos must be JPEG or PNG format and least
                                                    500x500</p>
                                                <form id="imageUploadForm" enctype="multipart/form-data">
                                                    <input id="image" required name="image" type="file"
                                                        class="ud-btn btn-white" style="cursor: pointer" />
                                                    <input type="button" @if ($mode==='EDIT' )
                                                        onclick="uploadImage({{ $item->id }})" @endif
                                                        class="ud-btn btn-red custom-red-btn" value="Upload">
                                                </form>
                                                <div id="gallary_loader" class="text-center mt-3">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="profile-box position-relative d-md-flex align-items-end mb50"
                                                id="data-container">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-item3" role="tabpanel"
                                    aria-labelledby="nav-item3-tab">
                                    <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                        <form class="form-style1">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="mb20">
                                                        <label
                                                            class="heading-color ff-heading fw600 mb10">Address</label>
                                                        <input type="text" required @if ($mode==='EDIT' )
                                                            value="{{ $item->address }}" @endif name="address"
                                                            id="address" class="form-control"
                                                            placeholder="Full address">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb20">
                                                        <label class="heading-color ff-heading fw600 mb10">Country /
                                                            State</label>
                                                        <input type="text" required name="country" @if ($mode==='EDIT' )
                                                            value="{{ $item->country }}" @endif id="country"
                                                            class="form-control" placeholder="Ex: USA, UK, UAE...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb20">
                                                        <label class="heading-color ff-heading fw600 mb10">City</label>
                                                        <input type="text" required name="city" @if ($mode==='EDIT' )
                                                            value="{{ $item->city }}" @endif id="city"
                                                            class="form-control" placeholder="Ex: Paris, Kabul...">
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="mb20 mt30">
                                                        <label class="heading-color ff-heading fw600 mb30">Place the
                                                            listing pin on the map</label>
                                                        <div id="map"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb30">
                                                        <label
                                                            class="heading-color ff-heading fw600 mb10">Latitude</label>
                                                        <input id="latitude" type="number" @if ($mode==='EDIT' )
                                                            value="{{ $item->latitude }}" @endif class="form-control"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 col-xl-4">
                                                    <div class="mb30">
                                                        <label
                                                            class="heading-color ff-heading fw600 mb10">Longitude</label>
                                                        <input id="longitude" type="number" @if ($mode==='EDIT' )
                                                            value="{{ $item->longitude }}" @endif class="form-control"
                                                            placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <div id="address_loader" class="text-center">
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="d-sm-flex text-right"
                                                        style="!important; justify-content: right;">
                                                        <button type="button" @if ($mode==='EDIT' )
                                                            onclick="updateAddress({{ $item->id }})" @endif
                                                            style="margin-left: 20px" class="ud-btn btn-dark">
                                                            Save Changes
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="nav-item4" role="tabpanel"
                                    aria-labelledby="nav-item4-tab">
                                    <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                        <div class="row">
                                            <div class="col-sm-6 col-xl-12">
                                                <div class="mb30 flex">
                                                    <label class="heading-color ff-heading fw600 mb10">Feature</label>
                                                    <div style="display: flex;">
                                                        <input style="width: 300px; margin-right: 10px" id="feature"
                                                            type="text" class="form-control" placeholder="Ex. Pool">
                                                        <input class="ud-btn btn-dark " @if ($mode==='EDIT' )
                                                            onclick="addFeature({{ $item->id }})" @endif type="button"
                                                            value="Add New">
                                                    </div>
                                                    <div class="mt-2" id="feature_loader" style="width: 300px">

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-lg-3 col-xxl-2">
                                                <div class="feature_list" id="data-feature">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @section('scripts')
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    @if ($mode === 'EDIT')
    <script>
        function displayGallary(data) {
                    let container = $('#data-container');
                    container.empty();
                    data.forEach(gall => {
                        container.append(`
                        <div class="profile-img position-relative overflow-hidden bdrs12 ml20 ml0-sm">
                            <img class="w-100" src="{{ asset('${gall?.image}') }}" alt="">
                            <button onclick="removeImage(${gall?.id})" class="tag-del" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-original-title="Delete Image" aria-label="Delete Item"><span class="fas fa-trash-can"></span></button>
                        </div>
                    `);
                    });
                }

                function displayFeature(data) {
                    let container = $('#data-feature');
                    container.empty();
                    data.forEach(item => {
                        container.append(`
                        <div class="flex">
                            <span onclick="removeFeature(${item?.id})" style="cursor: pointer" class="fas fa-trash-can"></span>
                            <span style="margin-left: 10px">${item?.feature}</span>
                        </div>
                    `);
                    });
                }

                function getGallary(id) {
                    $.ajax({
                        type: 'GET',
                        url: `/dashboard/gallary/list/${id}/property`,
                        success: function(response) {
                            displayGallary(response?.gallary);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }

                function getFeatures(id) {
                    $.ajax({
                        type: 'GET',
                        url: `/dashboard/feature/list/${id}/property`,
                        success: function(response) {
                            displayFeature(response.feature);
                        },
                        error: function(error) {
                            console.log(error);
                        }
                    });
                }

                function uploadImage(propertyId) {
                    $('#gallary_loader').html(`
                        <img src="{{ asset('assets/icon/loader.gif') }}"
                            width="50" height="50" alt="loader"/>
                    `);
                    const formData = new FormData($('#imageUploadForm')[0]);
                    $.ajax({
                        type: 'POST',
                        url: `/dashboard/gallary/upload/${propertyId}/property`,
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            getGallary('{{ $item->id }}');
                            $('#gallary_loader').html(`
                            <div class="alert alert-success">
                                Media Uploaded Successfully.
	                        </div>
                        `);
                            setTimeout(() => {
                                $('#gallary_loader').empty();
                            }, 3000);
                        },
                        error: function(error) {
                            $('#gallary_loader').html(`
                            <div class="alert alert-danger">
                                There is something wrong.
	                        </div>
                        `);
                            setTimeout(() => {
                                $('#gallary_loader').empty();
                            }, 3000);
                        }
                    });
                }


                function removeImage(id) {
                    const ans = confirm('Are you sure to remove image?');
                    if (ans) {
                        $('#gallary_loader').html(`
                        <img src="{{ asset('assets/icon/loader.gif') }}"
                            width="50" height="50" alt="loader"/>
                    `);
                        $.ajax({
                            type: 'GET',
                            url: `/dashboard/gallary/delete/${id}`,

                            success: function(response) {
                                getGallary('{{ $item->id }}');
                                $('#gallary_loader').html(`
                            <div class="alert alert-success">
                                Media Deleted Successfully.
	                        </div>
                        `);
                                setTimeout(() => {
                                    $('#gallary_loader').empty();
                                }, 3000);
                            },
                            error: function(error) {
                                $('#gallary_loader').html(`
                            <div class="alert alert-danger">
                                There is something wrong.
	                        </div>
                        `);
                                setTimeout(() => {
                                    $('#gallary_loader').empty();
                                }, 3000);
                            }
                        });
                    }
                }

                function removeFeature(id) {
                    const ans = confirm('Are you sure to remove Feature?');
                    if (ans) {
                        $.ajax({
                            type: 'GET',
                            url: `/dashboard/feature/delete/${id}`,
                            success: function(response) {
                                getFeatures('{{ $item->id }}');
                                $('#feature_loader').html(`
                                <div class="alert alert-success">
                                    Feature Deleted successfully.
                                </div>
                            `);
                                setTimeout(() => {
                                    $('#feature_loader').empty();
                                }, 3000);
                            },
                            error: function(error) {
                                $('#feature_loader').html(`
                                <div class="alert alert-danger">
                                    There is something wrong.
                                </div>
                            `);
                                setTimeout(() => {
                                    $('#feature_loader').empty();
                                }, 3000);
                            }
                        });
                    }
                }


                function updateAddress(id) {
                    const formData = new FormData();
                    formData.append('address', $('#address').val())
                    formData.append('city', $('#city').val())
                    formData.append('country', $('#country').val())
                    formData.append('latitude', $('#latitude').val())
                    formData.append('longitude', $('#longitude').val())
                    $.ajax({
                        type: 'POST',
                        url: `/dashboard/property/update/address/${id}`,
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            $('#address_loader').html(`
                                <div class="alert alert-success">
                                    Address Updated Successfully.
                                </div>
                            `);
                                setTimeout(() => {
                                    $('#address_loader').empty();
                                }, 3000);
                        },
                        error: function(error) {
                            $('#address_loader').html(`
                                <div class="alert alert-success">
                                    There is something wrong.
                                </div>
                            `);
                                setTimeout(() => {
                                    $('#address_loader').empty();
                                }, 3000);
                        }
                    });
                }

                function addFeature(propertyId) {
                    const formData = new FormData();
                    formData.append('feature', $('#feature').val());
                    if($('#feature').val()){
                        $.ajax({
                            type: 'POST',
                            url: `/dashboard/feature/store/${propertyId}/property`,
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                getFeatures('{{ $item->id }}');
                                $('#feature').val('')
                                $('#feature_loader').html(`
                                    <div class="alert alert-success">
                                        Feature added successfully.
                                    </div>
                                `);
                                    setTimeout(() => {
                                        $('#feature_loader').empty();
                                    }, 3000);
                            },
                            error: function(error) {

                                $('#feature_loader').html(`
                                    <div class="alert alert-danger">
                                        There is something wrong.
                                    </div>
                                `);
                                    setTimeout(() => {
                                        $('#feature_loader').empty();
                                    }, 3000);
                            }
                        });
                    }else{
                        $('#feature_loader').html(`
                                    <div class="alert alert-danger">
                                        Please type something.
                                    </div>
                                `);
                                    setTimeout(() => {
                                        $('#feature_loader').empty();
                                    }, 3000);
                    }
                }



                getGallary('{{ $item->id }}');
                getFeatures('{{ $item->id }}');

                let mapOptions = {
                    center: [$('#latitude').val(), $('#longitude').val()],
                    zoom: 3
                }

                let map = new L.map('map', mapOptions);
                L.marker([$('#latitude').val(), $('#longitude').val()]).addTo(map);

                let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
                map.addLayer(layer);


                let marker = null;
                map.on('click', (event) => {

                    if (marker !== null) {
                        map.removeLayer(marker);
                    }

                    marker = L.marker([event.latlng.lat, event.latlng.lng]).addTo(map);

                    document.getElementById('latitude').value = event.latlng.lat;
                    document.getElementById('longitude').value = event.latlng.lng;

                })
    </script>
    @endif
    @endsection

    @endsection
