@extends('layout.dashboard')
@section('dashboard')
@section('styles')
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
@endsection
    <div class="dashboard__main pl0-md">
        <div class="dashboard__content bgc-f7">
            <div class="row align-items-center pb40">
                <div class="row">
                    <div class="col-xl-12">
                        <div
                            class="ps-widget bgc-white bdrs12 default-box-shadow2 pt30 mb30 overflow-hidden position-relative">
                            <div class="navtab-style1">
                                <nav>
                                    <div class="nav nav-tabs" id="nav-tab2" role="tablist">
                                        <button class="nav-link active fw600 ms-3" id="nav-item1-tab" data-bs-toggle="tab"
                                            data-bs-target="#nav-item1" type="button" role="tab"
                                            aria-controls="nav-item1" aria-selected="true">Settings</button>
                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-item1" role="tabpanel"
                                        aria-labelledby="nav-item1-tab">
                                        <div class="ps-widget bgc-white bdrs12 p30 overflow-hidden position-relative">
                                            <form class="form-style1" method="POST"
                                                action="{{ route('setting.update', ['id' => $setting->id]) }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="row">
                                                    <div class="col-sm-12">
                                                        <div class="mb20">
                                                          <label class="heading-color ff-heading fw600 mb10">About</label>
                                                          <textarea cols="30" rows="5" name="about" placeholder="Please write about for  website.">{{ $setting->about }}</textarea>
                                                        </div>
                                                      </div>

                                                      <div class="col-sm-12">
                                                        <div class="mb20">
                                                          <label class="heading-color ff-heading fw600 mb10">Privacy Policy</label>
                                                          <textarea cols="30" rows="5" name="privacy" placeholder="Please write privacy for website.">{{ $setting->privacy }}</textarea>
                                                        </div>
                                                      </div>

                                                      <div class="col-sm-12">
                                                        <div class="mb20">
                                                          <label class="heading-color ff-heading fw600 mb10">Term and Condation</label>
                                                          <textarea cols="30" rows="5" name="condation" placeholder="Please write Term and Condation for website.">{{ $setting->condation }}</textarea>
                                                        </div>
                                                      </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label class="heading-color ff-heading fw600 mb10">Phone Number</label>
                                                            <input value="{{ $setting->phone_number }}" type="text" name="phone_number"
                                                                required class="form-control" placeholder="+91xxxxxxx">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label class="heading-color ff-heading fw600 mb10">WhatsApp Number</label>
                                                            <input value="{{ $setting->whatsapp_number }}" type="text" name="whatsapp_number"
                                                                required class="form-control" placeholder="+91xxxxxxx">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label class="heading-color ff-heading fw600 mb10">Primary Email</label>
                                                            <input value="{{ $setting->primary_email }}" type="email" name="primary_email"
                                                                required class="form-control" placeholder="Ex. info@example.com">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label class="heading-color ff-heading fw600 mb10">Secondary Email</label>
                                                            <input value="{{ $setting->secondary_email }}" type="email" name="secondary_email"
                                                                required class="form-control" placeholder="Ex. info@example.com">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label
                                                                class="heading-color ff-heading fw600 mb10">Facebook</label>
                                                            <input value="{{ $setting->facebook }}" type="text"
                                                                name="facebook" required class="form-control"
                                                                placeholder="https://url.com/username">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label
                                                                class="heading-color ff-heading fw600 mb10">Instagram</label>
                                                            <input value="{{ $setting->instagram }}" type="text"
                                                                name="instagram" required class="form-control"
                                                                placeholder="https://url.com/username">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label
                                                                class="heading-color ff-heading fw600 mb10">Twitter</label>
                                                            <input value="{{ $setting->twitter }}" type="text"
                                                                name="twitter" required class="form-control"
                                                                placeholder="https://url.com/username">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12 col-lg-6">
                                                        <div class="mb20">
                                                            <label
                                                                class="heading-color ff-heading fw600 mb10">LinkedIn</label>
                                                            <input value="{{ $setting->linkedin }}" type="text"
                                                                name="linkedin" required class="form-control"
                                                                placeholder="https://url.com/username">
                                                        </div>
                                                    </div>

                                                    <div class="col-sm-12">
                                                        <div class="mb20">
                                                          <label class="heading-color ff-heading fw600 mb10">Address</label>
                                                          <input type="text" required value="{{ $setting->address }}"  name="address" id="address" class="form-control" placeholder="Full address">
                                                        </div>
                                                      </div>

                                                      <div class="col-sm-12">
                                                        <div class="mb20 mt30">
                                                          <label class="heading-color ff-heading fw600 mb30">Place the listing pin on the map</label>
                                                          <div id="map"></div>
                                                        </div>
                                                      </div>

                                                    </div>
                                                    <div class="row">
                                                      <div class="col-sm-6 col-xl-4">
                                                        <div class="mb30">
                                                          <label class="heading-color ff-heading fw600 mb10">Latitude</label>
                                                          <input id="latitude" type="number"  value="{{ $setting->latitude }}"  class="form-control" placeholder="">
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-6 col-xl-4">
                                                        <div class="mb30">
                                                          <label class="heading-color ff-heading fw600 mb10">Longitude</label>
                                                          <input id="longitude" type="number"  value="{{ $setting->longitude }}"  class="form-control" placeholder="">
                                                        </div>
                                                      </div>

                                                    <div class="col-md-12">
                                                        <div class="d-sm-flex text-right"
                                                            style="!important; justify-content: right;">
                                                            <button type="submit" style="margin-left: 20px"
                                                                class="ud-btn btn-dark">Save Changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
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
        <script>
               let mapOptions = {
                center:[ $('#latitude').val() , $('#longitude').val()],
                zoom:10
            }

            let map = new L.map('map' , mapOptions);

            let layer = new L.TileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png');
            map.addLayer(layer);


            let marker = null;
            map.on('click', (event)=> {

                if(marker !== null){
                    map.removeLayer(marker);
                }

                marker = L.marker([event.latlng.lat , event.latlng.lng]).addTo(map);

                document.getElementById('latitude').value = event.latlng.lat;
                document.getElementById('longitude').value = event.latlng.lng;

            })

        </script>
    @endsection
    @endsection
