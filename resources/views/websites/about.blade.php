<!doctype html>
<html lang="{{ str_replace('_', '-', session()->get('locale')) }}" dir="{{ str_replace('_', '-', session()->get('locale'))=='ar'?'RTL':'LTR' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ $website->websitefav }}" rel="icon" />

        <title>{{ __('About Us') }} | {{ config('app.name') }}</title>

        <!-- Fonts -->
        @include('websites.sections.style')
        {{-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAgd5IzCFy27NIuEimbQRrLH2ouRb9xMOg&callback=initMap&libraries=places&v=weekly" defer></script> --}}

    </head>
    <body>
        {!! __("About Us") !!}
        @include('websites.sections.header')
        <div class="pt-5 mt-5"></div>
        <div class="pt-5 mt-5"></div>
        <section id="about-us">
            <div class="container">
                <div class="row">
                    <div class="col-12 about-us-description">
                        <h4>{{ __("Welcome to FBB Holding L.L.C, a leading global trading company established on April 1st, 2019, and headquartered in Dubai, UAE. As a diversified holding company with a proven track record of success, we have a strong portfolio of companies operating across various sectors in Belgium, Germany, Libya, Egypt, Cyprus, Jordan, Bahrain, and UAE. Our unwavering commitment to excellence and professionalism enables us to offer tailored solutions that cater to all your business needs, making us the ideal partner for your growth and success.") }}
                        </h4>
                    </div>
                    <div class="col-12 about-us-title">
                        <h2>{{ __("About Us") }}</h2>
                    </div>
                </div>
            </div>
            <div class="about-us-main">
                <div class="container">
                    <div class="row">
                        <div class="col-12 about-us-image">
                            <img src="./img/about-us.jpg" class="img-fluid" width="100%"/>
                        </div>
                    </div>
                </div>
                <div class="container about-us-content">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-4" data-aos="fade-right" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <h2 class="about-us-heading">{{ __("Exceeding Expectations") }}</h2>
                        </div>
                        <div class="col-0 col-md-1"></div>
                        <div class="col-12 col-md-7" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                            <p class="about-us-paragraph">{{ __("FBB Holding L.L.C is a global holding company with a portfolio of companies that offer a wide range of products and services. Our parent company is based in Dubai, UAE, and our subsidiaries are located in different countries around the world. We strive to maintain the highest standards of excellence and professionalism in everything we do.") }}</p>
                            {{-- <button class="btn-about-us">Learn More</button> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-mission">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <h2 data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">{{ __("Our mission") }}</h2>
                        <ul class="text-white pt-5">
                            <li>
                                <p>{{ __("Achieve Complete Customers Satisfaction.") }}</p>
                            </li>
                            <li>
                                <p>{{ __("Provide A High-Quality Product To The Market.") }}</p>
                            </li>
                            <li>
                                <p>{{ __("Respond Immediately To Our Customers Needs.") }}</p>
                            </li>
                            <li>
                                <p>{{ __("Creating A New Level In The Wholesale And Retail Field.") }}</p>
                            </li>
                            <li>
                                <p>{{ __("Maintaining A Professional Relationship With Our Suppliers And Customers By Hiring A Well Experienced Team.") }}</p>
                            </li>
                        </ul>
                    </div>
                    {{-- <div class="col-0 col-md-1"></div> --}}
                    <div class="col-12 col-md-5 our-mission-image" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="./img/our-mission-min.jpg" class="img-fluid" width="100%"/>
                    </div>
                </div>
            </div>


            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-5 our-mission-image" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="./img/our-values-min.jpg" class="img-fluid" width="100%"/>
                    </div>
                    <div class="col-12 col-md-6">
                        <h2 data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">{{ __("Our Values") }}</h2>
                        <ul class="text-white pt-5">
                            <li><p>{{ __("Innovation: We strive to offer innovative solutions and services to our customers.") }}</p></li>
                            <li><p>{{ __("Excellence: We aim to maintain the highest standards of excellence and professionalism in everything we do.") }}</p></li>
                            <li><p>{{ __("Customer satisfaction: We are committed to achieving complete customer satisfaction by providing high-quality products and responding promptly to our customers' needs.") }}</p></li>
                            <li><p>{{ __("Social responsibility: We believe in making a positive impact on society and the environment through our corporate social responsibility initiatives.") }}</p></li>
                        </ul>
                    </div>
                    {{-- <div class="col-0 col-md-1"></div> --}}
                </div>
            </div>


            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6">
                        <h2 data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">{{ __("Our Vision") }}</h2>
                        <p class="text-white pt-5">{{ __("Our vision is to revolutionize the market by providing exceptional high-quality and high-end products while also introducing innovative marketing solutions in both wholesale and retail sectors. Our goal is to take inspiration from the world's most prominent companies in investment fields to expand our portfolio and increase our market share. We are committed to achieving sustainable growth and success for our holdings while remaining at the forefront of the industry.") }}</p>
                    </div>
                    {{-- <div class="col-0 col-md-1"></div> --}}
                    <div class="col-12 col-md-5 our-mission-image" data-aos="fade-left" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <img src="./img/our-vision-min.jpg" class="img-fluid" width="100%"/>
                    </div>
                </div>
            </div>
        </section>
        <section id="our-globe">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 text-center mx-auto">
                        <h2 data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">{{ __("Our Global Presence") }}</h2>
                    </div>
                    <div class="col-12 col-md-12 text-center globe-map">
                        <canvas id="c"></canvas>
                    </div>
                </div>
            </div>
        </section>

        @include('websites.sections.fbb-teams')

        <section id="fbb-family-of-businesses">
            <div class="container my-2 corporate-social-header">
                <div class="row align-items-center">
                    <div class="col-12 col-md-6 mb-5" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h2>{{ __("Corporate Social Responsibility") }}</h2>
                    </div>
                    <div class="col-12 col-md-6 mb-5" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p>{{ __("FBB Holding L.L.C is committed to sustainability, social responsibility, and ethical business practices. We believe in making a positive impact on society and the environment. Our corporate social responsibility initiatives focus on supporting local communities, reducing our carbon footprint, and promoting diversity and inclusion in the workplace.") }}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="business-portfolio-details">
            <div class="container">
                <div class="row justify-content-center py-2">
                    <div class="col-12 col-md-12 text-center corporate-social-header" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h2>{{ __("Sectors") }}</h2>
                    </div>
                    <div class="col-12 col-md-3"></div>
                    <div class="col-12 col-md-6" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <p>{{ __("FBB Holdings is a diverse company that operates across a wide range of sectors to provide high-quality products and services to its customers. Some of the sectors in which FBB Holdings operates include:") }}</p>
                    </div>
                    <div class="col-12 col-md-3"></div>
                </div>
                <div class="row justify-content-center py-2">
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/cars.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Brand new cars trading") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/cars.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Importing cars") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/electronics.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Electronics and home appliances") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/food.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Food stuff trading and manufacturing") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/import-and-export.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Import and export") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/medicine-and-health.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Medical equipment and supplies") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/medicine-and-health.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Medical services and pharmaceuticals") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/petroleum.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Petroleum, handling, and aviation services") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/shipping-logistics.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Shipping and logistics services") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/real-estate.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Real estate") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/travel.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Travel and tourism") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/finance.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Financial services") }}</p>
                        </div>
                        <div class="col-6 col-md-3 text-center p-5 box-for-sectors">
                            <img src="{{ asset('./img/sectors/car-rental.png') }}" class="img-fluid p-2" width="80"/>
                            <p>{{ __("Car rental") }}</p>
                        </div>
                </div>
            </div>
        </section>
        <section id="fbb-family-of-businesses">
            <div class="container my-2 our-partners">
                <div class="row align-items-center">
                    <div class="col-12 col-md-12 mb-5 text-center" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <h2>{{ __("Our Partners") }}</h2>
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
