<section id="fbb-family-of-businesses">
    <div class="container my-2 business-header">
        <div class="row align-items-end mb-4">
            <div class="col-12 col-md-7" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                <h2>{!! __("Fbb Family of Businesses") !!}</h2>
                <p>{!! __("FBB Holding L.L.C is holding of several companies in UAE, Jordan and Libya in different kinds of activities.") !!}</p>
            </div>
            <div class="col-12 col-md-5">
                <div class="d-flex gap-3 justify-content-end flex-column flex-md-row">
                    <a href="{{ route('contactus') }}" class="btn-link-1 ml-md-2" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <button class="btn-1 w-100">{!! __("Contact Us") !!}</button>
                    </a>
                    <a href="{{ route('ourbusiness') }}" class="btn-link-2" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <button class="btn-2 w-100">{!! __("Our Business") !!}</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($businesses as $businessKey => $business)
            @if($businessKey <= 8)
                @if($business->slug)
                    <div class="col-12 col-md-4 business-items" data-aos="fade-up" data-aos-offset="{{ 300 }}" data-aos-easing="ease-in-sine">
                        <a class="business-portfolio-box" href="{{ route('businessportfolio',['business_id'=>$business->slug]) }}" style="transition: 0.5s;background-image: url({{ $business->cover }})">
                            <div class="business-logo">
                                <img class="img-fluid" width="200" src="{{ $business->logo }}" />
                            </div>
                            <h3>{!! __($business->title) !!}</h3>
                            <p>{!! __($business->brand) !!}</p>
                        </a>
                    </div>
                @endif
            @endif
            @endforeach
        </div>
        <div class="row">
            <div class="col-12 text-center btn-view-more">
                <a href="{{ route('ourbusiness') }}" class="btn-link-1" data-aos="fade-right" data-aos-offset="200" data-aos-easing="ease-in-sine">
                    <button class="btn-1 w-100">{!! __("View More") !!}</button>
                </a>
            </div>
        </div>
    </div>
</section>
