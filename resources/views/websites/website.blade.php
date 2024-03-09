<!doctype html>
<html lang="{{ str_replace('_', '-', session()->get('locale')) }}" dir="{{ str_replace('_', '-', session()->get('locale'))=='ar'?'RTL':'LTR' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ $website->websitefav }}" rel="icon" />

        <title>{{ __('Home') }} | {{ config('app.name') }}</title>

        <!-- Fonts -->
        @include('websites.sections.style')
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgd5IzCFy27NIuEimbQRrLH2ouRb9xMOg&callback=initMap&libraries=places&v=weekly" defer></script>

    </head>
    <body>
        @include('websites.sections.loader')
        @include('websites.sections.header')
        @include('websites.sections.slider')
        @include('websites.sections.who-we-are')
        @include('websites.sections.about-us')
        @include('websites.sections.our-mission')
        @include('websites.sections.fbb-family-of-businesses')
        <section id="our-globe">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center mx-auto">
                        <h2 data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">{{ __('Our Global Presence') }}</h2>
                    </div>
                    <div class="col-12 col-md-12 text-center globe-map">
                        <canvas id="c"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <section id="fbb-family-of-businesses">
            <div class="container my-2 our-partners">
                <div class="row align-items-enter">
                    <div class="col-12 col-md-12 mb-5 text-center" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h2>{{ __('Our Partners') }}</h2>
                        {{-- <p>At FBB Holding L.L.C., we are people with passion and experience, coming from many different backgrounds, disciplines, and countries. We believe in the power of diversity and collaboration, and we work together to achieve our goals and deliver the best results to our customers.</p> --}}
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-4 partner-items" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="partner-portfolio-box" style="transition: 0.5s;">
                            <div class="partner-logo">
                                <img class="img-fluid" width="200" src="{{ asset('./img/our-partners/hongdi.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 partner-items" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="partner-portfolio-box" style="transition: 0.5s;">
                            <div class="partner-logo">
                                <img class="img-fluid" width="200" src="{{ asset('./img/our-partners/carrera-jeans-logo.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 partner-items" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="partner-portfolio-box" style="transition: 0.5s;">
                            <div class="partner-logo">
                                <img class="img-fluid" width="200" src="{{ asset('./img/our-partners/hisense-logo.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 partner-items" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="partner-portfolio-box" style="transition: 0.5s;">
                            <div class="partner-logo">
                                <img class="img-fluid" width="200" src="{{ asset('./img/our-partners/lenovo-logo.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 partner-items" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="partner-portfolio-box" style="transition: 0.5s;">
                            <div class="partner-logo">
                                <img class="img-fluid" width="200" src="{{ asset('./img/our-partners/naffco-aviation.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 partner-items" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="partner-portfolio-box" style="transition: 0.5s;">
                            <div class="partner-logo">
                                <img class="img-fluid" width="200" src="{{ asset('./img/our-partners/temenos.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 partner-items" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="partner-portfolio-box" style="transition: 0.5s;">
                            <div class="partner-logo">
                                <img class="img-fluid" width="200" src="{{ asset('./img/our-partners/siemens-healthineers.png') }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 partner-items" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div class="partner-portfolio-box" style="transition: 0.5s;">
                            <div class="partner-logo">
                                <img class="img-fluid" width="200" src="{{ asset('./img/our-partners/segafredo-zanetti-min.png') }}" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        @include('websites.sections.footer')
        @include('websites.sections.script')
    </body>
</html>
