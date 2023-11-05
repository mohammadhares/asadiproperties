@foreach ($result as $item)
    <div class="col-sm-6 col-lg-4">
        <a href="{{ route('single.property', ['id' => $item->id]) }}">
        <div class="listing-style1 ">
            <div class="list-thumb">
                <img class="w-100 h-400" src="{{ asset($item->thumbnail) }}" alt="">
                <div class="list-tag fz12"><span class="flaticon-electricity me-2"></span>FEATURED</div>
                <div class="list-price">AED {{ $item->price }} / <span>mo</span></div>
            </div>
            <div class="list-content">
                <h6 class="list-title text-single-line">
                    <a href="{{ route('single.property', ['id' => $item->id]) }}">{{ $item->title }} </a>
                </h6>
                <p class="list-text">{{ $item->city }}, {{ $item->country }}</p>
                <div class="list-meta d-flex align-items-center">
                    <a href="#"><span class="flaticon-bed"></span>{{ $item->bedrooms }} bed</a>
                    <a href="#"><span class="flaticon-shower"></span>{{ $item->bathrooms }} bath</a>
                    <a href="#"><span class="flaticon-expand"></span>{{ $item->size }} sqft</a>
                </div>
                <hr class="mt-2 mb-2">
                <div class="list-meta2 d-flex justify-content-between align-items-center">
                    <span class="for-what">For {{ $item->status }}</span>
                    <div class="icons d-flex align-items-center">
                        <a href="callto:{{ $siteInfo['phones'][0]['phone'] }}"><span class="flaticon-call"></span></a>
                        <a href="mailto:{{ $siteInfo['emails'][0]['email'] }}"><span class="flaticon-email"></span></a>
                        <a href="callto:{{ $siteInfo['phones'][0]['phone'] }}"><span class="flaticon-whatsapp"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </a>
    </div>
@endforeach
