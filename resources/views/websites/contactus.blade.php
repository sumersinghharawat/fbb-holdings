<!doctype html>
<html lang="{{ str_replace('_', '-', session()->get('locale')) }}" dir="{{ str_replace('_', '-', session()->get('locale'))=='ar'?'RTL':'LTR' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ $website->websitefav }}" rel="icon" />

        <title>{{ __('Contact Us') }} | {{ config('app.name') }}</title>

        <!-- Fonts -->
        @include('websites.sections.style')
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP6k2lwAidQ7vGNQEcrz6W6hFpimwEJOw&callback=initMap&libraries=places&v=weekly" defer></script>
    </head>
    <body>
        {{-- @include('websites.sections.loader') --}}
        @include('websites.sections.header')
        <div class="pt-5 mt-5"></div>
        <div class="pt-5 mt-5"></div>
        <section id="contact-us">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-5 location-map order-2 order-md-1" data-aos="fade-up" data-aos-offset="300" data-aos-easing="ease-in-sine">
                        <div id="map"></div>
                        <script>
                            let map;
                            let service;
                            let infowindow;

                            function initMap() {
                            const sydney = new google.maps.LatLng(-33.867, 151.195);

                            infowindow = new google.maps.InfoWindow();
                            map = new google.maps.Map(document.getElementById("map"), {
                                center: sydney,
                                zoom: 15,
                                styles:
                                [
                                    {
                                        "featureType": "all",
                                        "elementType": "labels.text.fill",
                                        "stylers": [
                                            {
                                                "saturation": 36
                                            },
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 40
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "all",
                                        "elementType": "labels.text.stroke",
                                        "stylers": [
                                            {
                                                "visibility": "on"
                                            },
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 16
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "all",
                                        "elementType": "labels.icon",
                                        "stylers": [
                                            {
                                                "visibility": "off"
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "geometry.fill",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 20
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "administrative",
                                        "elementType": "geometry.stroke",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 17
                                            },
                                            {
                                                "weight": 1.2
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "landscape",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 20
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "poi",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 21
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.fill",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 17
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.highway",
                                        "elementType": "geometry.stroke",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 29
                                            },
                                            {
                                                "weight": 0.2
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.arterial",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 18
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "road.local",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 16
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "transit",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 19
                                            }
                                        ]
                                    },
                                    {
                                        "featureType": "water",
                                        "elementType": "geometry",
                                        "stylers": [
                                            {
                                                "color": "#000000"
                                            },
                                            {
                                                "lightness": 17
                                            }
                                        ]
                                    }
                                ]
                            });

                            const request = {
                                query: "Fifty One Tower - Marasi Dr - Business Bay - Dubai",
                                fields: ["name", "geometry"],
                            };

                            service = new google.maps.places.PlacesService(map);
                            service.findPlaceFromQuery(request, (results, status) => {
                                if (status === google.maps.places.PlacesServiceStatus.OK && results) {
                                for (let i = 0; i < results.length; i++) {
                                    if(i == 0){
                                        createMarker(results[i]);
                                    }
                                }

                                map.setCenter(results[0].geometry.location);
                                }
                            });
                            }

                            function createMarker(place) {
                                const labels = "FBB";
                                let labelIndex = 0;

                                if (!place.geometry || !place.geometry.location) return;
                                const image = "{{ asset('/img/svg/map-markers.svg') }}";

                                const marker = new google.maps.Marker({
                                    map,
                                    position: place.geometry.location,
                                    animation: google.maps.Animation.DROP,
                                    icon: image,
                                    title: place.name
                                });

                                google.maps.event.addListener(marker, "click", () => {
                                    infowindow.setContent(place.name || "");
                                    infowindow.open(map);
                                });
                            }

                            function toggleBounce() {
                                if (marker.getAnimation() !== null) {
                                    marker.setAnimation(null);
                                } else {
                                    marker.setAnimation(google.maps.Animation.BOUNCE);
                                }
                            }

                            window.initMap = initMap;
                        </script>

                    </div>
                    <div class="col-12 col-md-1"></div>
                    <div class="col-12 col-md-6 order-1 order-md-2">
                        <h2>{{ __("Get in Touch") }}</h2>
                        <p>{{ __("We are always here to help you with any inquiries or feedback you may have. Please feel free to contact us.") }}</p>
                        <form method="post" id="contactformaction" data-aos="fade-up" data-aos-offset="100" data-aos-delay="300" data-aos-easing="ease-in-sine">
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            <div class="col-12">
                                <input type="text" name="name" id="name" class="form-control" placeholder="{{ __("Name*") }}"/>
                            </div>
                            <div class="col-12">
                                <input type="text" name="email" id="email" class="form-control" placeholder="{{ __("Email*") }}"/>
                            </div>
                            <div class="col-12">
                                <input type="text" name="phonenumber" id="phonenumber" class="form-control" placeholder="{{ __("Phone number*") }}"/>
                            </div>
                            <div class="col-12">
                                <textarea class="form-control" name="message" id="message" placeholder="{{ __("Your message*") }}"></textarea>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-golden">{{ __("Send") }}</button>
                            </div>
                        </form>
                        <div class="d-flex flex-wrap align-items-center py-5 business-details order-3 order-md-3">
                            <div class="col-12 col-md-1 text-center pt-4 pt-md-0">
                                <img src="{{ asset('./img/svg/business-location.svg') }}" class="img-fluid"/>
                            </div>
                            <div class="col-12 col-md-3 text-center text-md-start">
                                <p>{{ __("$website->websitelocation") }}</p>
                            </div>
                            <div class="col-12 col-md-1 text-center pt-4 pt-md-0">
                                <img src="{{ asset('./img/svg/call.svg') }}" class="img-fluid"/>
                            </div>
                            <div class="col-12 col-md-3 text-center text-md-start">
                                <p>{{ $website->websitecontact }}</p>
                            </div>
                            <div class="col-12 col-md-1 text-center pt-4 pt-md-0">
                                <img src="{{ asset('./img/svg/email.svg') }}" class="img-fluid"/>
                            </div>
                            <div class="col-12 col-md-3 text-center text-md-start">
                                <p>{{ $website->websiteemail }}</p>
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
