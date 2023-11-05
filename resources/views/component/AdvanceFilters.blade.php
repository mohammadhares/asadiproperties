<div class="advance-feature-modal">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header pl30 pr30">
                    <h5 class="modal-title" id="exampleModalLabel">More Filter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-0">
                    <form id="advance-search" method="GET" action="{{ route('advance.search')}}">
                        <input type="hidden" name="status" value="{{ $property_status }}">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Price Range (AED)</h6>
                                    <!-- Range Slider Desktop Version -->
                                    <div class="range-slider-style modal-version" style="display:none;">
                                        <div class="range-wrapper">
                                            <div class="mb30 mt35" id="slider"></div>
                                            <div class="d-flex align-items-center">
                                                <span id="slider-range-value1"></span><i
                                                    class="fa-sharp fa-solid fa-minus mx-2 dark-color icon"></i>
                                                <span id="slider-range-value2"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="range-slider-style large-version">
                                        <div class="range-wrapper">
                                            <div class="slider-range mb30 mt20"></div>
                                            <div class="text-center">
                                                <input type="number" name="min_price" class="amount" placeholder="$20"><span
                                                    class="fa-sharp fa-solid fa-minus mx-2 dark-color"></span>
                                                <input type="text" name="max_price" class="amount2" placeholder="$70987">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Type</h6>
                                    <div class="form-style2 input-group">
                                        <select name="property_type" class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="" value="">Property</option>
                                            <option data-tokens="Apartments">Apartments</option>
                                            <option data-tokens="Bungalow">Bungalow</option>
                                            <option data-tokens="Houses">Houses</option>
                                            <option data-tokens="Loft">Loft</option>
                                            <option data-tokens="Office">Office</option>
                                            <option data-tokens="Townhome">Townhome</option>
                                            <option data-tokens="Villa">Villa</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Property ID</h6>
                                    <div class="form-style2">
                                        <input name="property_id" type="number" class="form-control" placeholder="04949213">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Bedrooms</h6>
                                    <div class="d-flex">
                                        <div class="selection">
                                            <input id="xany" name="beds" value="0" type="radio" checked>
                                            <label for="xany">any</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xoneplus" name="beds" value="1" type="radio">
                                            <label for="xoneplus">1+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xtwoplus" name="beds" value="2" type="radio">
                                            <label for="xtwoplus">2+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xthreeplus" name="beds" value="3" type="radio">
                                            <label for="xthreeplus">3+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xfourplus" name="beds" value="4" type="radio">
                                            <label for="xfourplus">4+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="xfiveplus" name="beds" value="5" type="radio">
                                            <label for="xfiveplus">5+</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Bathrooms</h6>
                                    <div class="d-flex">
                                        <div class="selection">
                                            <input id="yany" name="baths" value="0" type="radio" checked>
                                            <label for="yany">any</label>
                                        </div>
                                        <div class="selection">
                                            <input id="yoneplus" name="baths" value="1" type="radio">
                                            <label for="yoneplus">1+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="ytwoplus" name="baths" value="2" type="radio">
                                            <label for="ytwoplus">2+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="ythreeplus" name="baths" value="3" type="radio">
                                            <label for="ythreeplus">3+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="yfourplus" name="baths" value="4" type="radio">
                                            <label for="yfourplus">4+</label>
                                        </div>
                                        <div class="selection">
                                            <input id="yfiveplus" name="baths" value="5" type="radio">
                                            <label for="yfiveplus">5+</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Location</h6>
                                    <div class="form-style2 input-group">
                                        <select name="city" class="selectpicker" data-live-search="true" data-width="100%">
                                            <option data-tokens="" value="">All Cities</option>
                                            <option data-tokens="California">California</option>
                                            <option data-tokens="Chicago">Chicago</option>
                                            <option data-tokens="LosAngeles">Los Angeles</option>
                                            <option data-tokens="Manhattan">Manhattan</option>
                                            <option data-tokens="NewJersey">New Jersey</option>
                                            <option data-tokens="NewYork">New York</option>
                                            <option data-tokens="SanDiego">San Diego</option>
                                            <option data-tokens="SanFrancisco">San Francisco</option>
                                            <option data-tokens="Texas">Texas</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="widget-wrapper">
                                    <h6 class="list-title">Square Feet</h6>
                                    <div class="space-area">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div class="form-style1">
                                                <input name="min_size" type="number" class="form-control" placeholder="Min.">
                                            </div>
                                            <span class="dark-color">-</span>
                                            <div class="form-style1">
                                                <input name="max_size" type="number" class="form-control" placeholder="Max">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer justify-content-between">
                    <a class="reset-button" href="" onclick="return false"></a>
                    <div class="btn-area">
                        <button
                            type="submit"
                            form="advance-search"
                            class="ud-btn btn-thm">
                            <span class="flaticon-search align-text-top pr10" style="position: relative; bottom: 2px"></span>
                            Search
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
