<!doctype html>
<html lang="{{ str_replace('_', '-', session()->get('locale')) }}" dir="{{ str_replace('_', '-', session()->get('locale'))=='ar'?'RTL':'LTR' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ $website->websitefav }}" rel="icon" />

        <title>{{ __('Our Business') }} | {{ config('app.name') }}</title>

        <!-- Fonts -->
        @include('websites.sections.style')
    </head>
    <body>
        {{-- @include('websites.sections.loader') --}}
        @include('websites.sections.header')
        <div class="pt-5 mt-5"></div>
        <div class="pt-5 mt-5"></div>
        {{-- @include('websites.sections.slider') --}}
        {{-- @include('websites.sections.who-we-are')
        @include('websites.sections.about-us') --}}
        {{-- @include('websites.sections.our-mission') --}}
        <section id="fbb-family-of-businesses">
            <div class="container my-2 business-header">
                <div class="row align-items-end">
                    <div class="col-12 col-md-8 mb-5">
                        <h2>{{ __("Fbb Family of Businesses") }}</h2>
                        <p>{{ __("FBB Holding L.L.C is holding of several companies in UAE, Jordan and Libya in different kinds of activities.") }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($businesses as $businessKey => $business)
                        @if($business->slug)
                            <div class="col-12 col-md-4 business-items" data-aos="fade-up" data-aos-offset="{{ 300 }}" data-aos-easing="ease-in-sine">
                                <a class="business-portfolio-box" href="{{ route('businessportfolio',['business_id'=>$business->slug]) }}" style="transition: 0.5s;background-image: url({{ $business->cover }})">
                                    <div class="business-logo">
                                        <img class="img-fluid" width="200" src="{{ $business->logo }}" />
                                    </div>
                                    <h3>{{ __($business->title) }}</h3>
                                    <p>{{ __($business->brand) }}</p>
                                </a>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </section>
        @include('websites.sections.footer')
        @include('websites.sections.script')
    </body>
</html>
