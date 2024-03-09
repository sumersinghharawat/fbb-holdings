<!doctype html>
<html lang="{{ str_replace('_', '-', session()->get('locale')) }}" dir="{{ str_replace('_', '-', session()->get('locale'))=='ar'?'RTL':'LTR' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ $website->websitefav }}" rel="icon" />

        <title>{{ $business->title }} | {{ config('app.name') }}</title>

        <!-- Fonts -->
        @include('websites.sections.style')
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAP6k2lwAidQ7vGNQEcrz6W6hFpimwEJOw&callback=initMap&libraries=places&v=weekly" defer></script>


    </head>
    <body>
        @include('websites.sections.header')
        <section class="single-business-portfolio">
            <div class="pt-5 mt-5"></div>
            <div class="pt-5 mt-5"></div>
            <div class="pt-5 mt-5"></div>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="business-portfolio-logo text-center">
                            <img src="{!! __($business->logo) !!}" class="img-fluid" width="200" />
                        </div>
                        <div class="business-portfolio-title text-center">
                            <h2>{!! __($business->title) !!}</h2>
                        </div>
                    </div>
                    <div class="col-12">
                        <img src="{{ $business->headimage }}" class="img-fluid" width="100%"/>
                    </div>
                </div>
            </div>
        </section>
        @if(!empty($business->description))
        <section class="business-portfolio-description">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p>{!! __($business->description) !!}</p>
                    </div>
                </div>
            </div>
        </section>
        @endif

        <section class="business-portfolio-details">
            <div class="container">
                <div class="row justify-content-center py-5">
                    @if(!empty($business->location))
                        <div class="col-6 col-md-3 text-center">
                            <img src="{{ asset('./img/svg/business-location.svg') }}" class="img-fluid"/>
                            <p>{!! __($business->location) !!}</p>
                        </div>
                    @endif
                    @if(!empty($business->brand))
                        <div class="col-6 col-md-2 text-center">
                            <img src="{{ asset('./img/svg/brand.svg') }}" class="img-fluid"/>
                            <p>{!! __($business->brand) !!}</p>
                        </div>
                    @endif
                    @if(!empty($business->phonenumber))
                        <div class="col-6 col-md-2 text-center">
                            <img src="{{ asset('./img/svg/call.svg') }}" class="img-fluid"/>
                            <p><a href="tel:{{ $business->phonenumber }}" target="_blank">{{ $business->phonenumber }}</a></p>
                        </div>
                    @endif
                    @if(!empty($business->email))
                        <div class="col-6 col-md-2 text-center">
                            <img src="{{ asset('./img/svg/email.svg') }}" class="img-fluid"/>
                            <p><a href="mailto:{{ $business->email }}" target="_blank">{{ $business->email }}</a></p>
                        </div>
                    @endif
                    @if(!empty($business->website))
                        <div class="col-6 col-md-3 text-center">
                            <img src="{{ asset('./img/svg/web.svg') }}" class="img-fluid"/>
                            <p><a href="https://{{ $business->website }}" target="_blank">{{ $business->website }}</a></p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="slideshow">
                <swiper-container  init="false">
                    @if(!empty($business->gallery))
                        @php
                            $gallery = json_decode($business->gallery);
                        @endphp
                        @if($gallery)
                            @foreach($gallery as $galleryImageKey => $galleryImage)
                                <swiper-slide>
                                    <img src={{ str_replace('"',"",$galleryImage) }} class="img-fluid" alt="{{ $galleryImage }}" width="100%">
                                </swiper-slide>
                            @endforeach
                        @endif
                    @endif
                </swiper-container>
            </div>
            @if(!empty($business->location_iframe))
                <div class="container my-2 business-iframe-location">
                    <div class="row align-items-end">
                        <div class="col-12 col-md-12 py-5 my-5 text-center">
                            <h2>{!! __("Location") !!}</h2>
                        </div>
                    </div>
                </div>
                <div class="location mb-5">
                    <style>
                        #map{
                            height: 400px;
                        }
                        .location {
                            filter: none;
                        }
                    </style>
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
                                query: "{{ $business->location_iframe }}",
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
                                    // icon: image,
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
            @endif
        </section>
        @include('websites.sections.footer')
        @include('websites.sections.script')
    </body>
</html>
