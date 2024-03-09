@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Website') }}</h1>

    @if (session('success'))
        <div class="alert alert-success border-left-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if ($errors->any())
        <div class="alert alert-danger border-left-danger" role="alert">
            <ul class="pl-4 my-2">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">

        <div class="col-lg-12 order-lg-1">

            <div class="card shadow mb-4">

                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Website details</h6>
                </div>

                <div class="card-body">

                    <form method="POST" action="{{ route('website.update') }}" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        {{-- <h6 class="heading-small text-muted mb-4">User information</h6> --}}

                        <div class="pl-lg-4">

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websitename">Website Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="websitename" class="form-control" name="websitename" placeholder="Website Name" value="{{ old('websitename', isset($website)?$website->websitename:(isset($request)?$request->websitename:'')) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websiteemail">Website Email<span class="small text-danger">*</span></label>
                                        <input type="text" id="websiteemail" class="form-control" name="websiteemail" placeholder="Website Email" value="{{ old('websiteemail', isset($website)?$website->websiteemail:(isset($request)?$request->websiteemail:'')) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websitecontact">Website Contact<span class="small text-danger">*</span></label>
                                        <input type="text" id="websitecontact" class="form-control" name="websitecontact" placeholder="Website Contact" value="{{ old('websitecontact', isset($website)?$website->websitecontact:(isset($request)?$request->websitecontact:'')) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websitetiming">Website Timing<span class="small text-danger">*</span></label>
                                        <input type="text" id="websitetiming" class="form-control" name="websitetiming" placeholder="Website Timing" value="{{ old('websitetiming', isset($website)?$website->websitetiming:(isset($request)?$request->websitetiming:'')) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websitelocation">Website Location<span class="small text-danger">*</span></label>
                                        <input type="text" id="websitelocation" class="form-control" name="websitelocation" placeholder="Website Location" value="{{ old('websitelocation', isset($website)?$website->websitelocation:(isset($request)?$request->websitelocation:'')) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websitelocationiframe">Website Location Iframe<span class="small text-danger">*</span></label>
                                        <input type="text" id="websitelocationiframe" class="form-control" name="websitelocationiframe" placeholder="Website Location Iframe" value="{{ old('websitelocationiframe', isset($website)?$website->websitelocationiframe:(isset($request)?$request->websitelocationiframe:'')) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <div id="websitelogo-image-sec" style="{{ isset($website)?'display: block':'display: none' }}">
                                            <div id="closewebsitelogo" onclick="closewebsitelogo()" style="{{ isset($website)?'display: block':'display: none' }}">X</div>
                                            <img src="{{ isset($website)?$website->websitelogo:(isset($request)?$request->websitelogo:'') }}" id="websitelogo-image-preview" class="img-fluid border-5" width="200" />
                                        </div>
                                        <label class="form-control-label websitelogo-image" for="websitelogo-image">
                                            <input type="file" id="websitelogo-image" class="d-none" onchange="show_websitelogo(this.files[0])" name="websitelogo" value="{{ old('websitelogo', (isset($request)?$request->websitelogo:'')) }}">
                                        </label>
                                        <script>
                                            function show_websitelogo(event){
                                                let imgSrc = window.URL.createObjectURL(event);

                                                console.log(event);
                                                console.log(imgSrc);
                                                document.getElementById('websitelogo-image-preview').style.display = "block";
                                                document.getElementById('websitelogo-image-sec').style.display = "block";
                                                document.getElementById('closewebsitelogo').style.display = "block";
                                                document.getElementById('websitelogo-image-preview').src = imgSrc;
                                            }

                                            function closewebsitelogo(event){
                                                document.getElementById('websitelogo-image-preview').style.display = "none";
                                                document.getElementById('websitelogo-image-sec').style.display = "none";
                                                document.getElementById('closewebsitelogo').style.display = "none";
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <div id="websitefav-image-sec" style="{{ isset($website)?'display: block':'display: none' }}">
                                            <div id="closewebsitefav" onclick="closewebsitefav()" style="{{ isset($website)?'display: block':'display: none' }}">X</div>
                                            <img src="{{ isset($website)?$website->websitefav:(isset($request)?$request->websitefav:'') }}" id="websitefav-image-preview" class="img-fluid border-5" width="200" />
                                        </div>
                                        <label class="form-control-label websitefav-image" for="websitefav-image">
                                            <input type="file" id="websitefav-image" class="d-none" onchange="show_websitefav(this.files[0])" name="websitefav" value="{{ old('websitefav', (isset($request)?$request->websitefav:'')) }}">
                                        </label>
                                        <script>
                                            function show_websitefav(event){
                                                let imgSrc = window.URL.createObjectURL(event);

                                                console.log(event);
                                                console.log(imgSrc);
                                                document.getElementById('websitefav-image-preview').style.display = "block";
                                                document.getElementById('websitefav-image-sec').style.display = "block";
                                                document.getElementById('closewebsitefav').style.display = "block";
                                                document.getElementById('websitefav-image-preview').src = imgSrc;
                                            }

                                            function closewebsitefav(event){
                                                document.getElementById('websitefav-image-preview').style.display = "none";
                                                document.getElementById('websitefav-image-sec').style.display = "none";
                                                document.getElementById('closewebsitefav').style.display = "none";
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <div id="websitelogofooter-image-sec" style="{{ isset($website)?'display: block':'display: none' }}">
                                            <div id="closewebsitelogofooter" onclick="closewebsitelogofooter()" style="{{ isset($website)?'display: block':'display: none' }}">X</div>
                                            <img src="{{ isset($website)?$website->websitelogofooter:(isset($request)?$request->websitelogofooter:'') }}" id="websitelogofooter-image-preview" class="img-fluid border-5" width="200" />
                                        </div>
                                        <label class="form-control-label websitelogofooter-image" for="websitelogofooter-image">
                                            <input type="file" id="websitelogofooter-image" class="d-none" onchange="show_websitelogofooter(this.files[0])" name="websitelogofooter" value="{{ old('websitelogofooter', (isset($request)?$request->websitelogofooter:'')) }}">
                                        </label>
                                        <script>
                                            function show_websitelogofooter(event){
                                                let imgSrc = window.URL.createObjectURL(event);

                                                console.log(event);
                                                console.log(imgSrc);
                                                document.getElementById('websitelogofooter-image-preview').style.display = "block";
                                                document.getElementById('websitelogofooter-image-sec').style.display = "block";
                                                document.getElementById('closewebsitelogofooter').style.display = "block";
                                                document.getElementById('websitelogofooter-image-preview').src = imgSrc;
                                            }

                                            function closewebsitelogofooter(event){
                                                document.getElementById('websitelogofooter-image-preview').style.display = "none";
                                                document.getElementById('websitelogofooter-image-sec').style.display = "none";
                                                document.getElementById('closewebsitelogofooter').style.display = "none";
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websitefacebook">Website Facebook<span class="small text-danger">*</span></label>
                                        <input type="text" id="websitefacebook" class="form-control" name="websitefacebook" placeholder="Website Facebook" value="{{ old('websitefacebook', isset($website)?$website->websitefacebook:(isset($request)?$request->websitefacebook:'')) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websitetwitter">Website Twitter<span class="small text-danger">*</span></label>
                                        <input type="text" id="websitetwitter" class="form-control" name="websitetwitter" placeholder="Website Twitter" value="{{ old('websitetwitter', isset($website)?$website->websitetwitter:(isset($request)?$request->websitetwitter:'')) }}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websiteinstagram">Website Instagram<span class="small text-danger">*</span></label>
                                        <input type="text" id="websiteinstagram" class="form-control" name="websiteinstagram" placeholder="Website Instagram" value="{{ old('websiteinstagram', isset($website)?$website->websiteinstagram:(isset($request)?$request->websiteinstagram:'')) }}">
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websiteyoutube">Website YouTube<span class="small text-danger">*</span></label>
                                        <input type="text" id="websiteyoutube" class="form-control" name="websiteyoutube" placeholder="Website YouTube" value="{{ old('websiteyoutube', isset($website)?$website->websiteyoutube:(isset($request)?$request->websiteyoutube:'')) }}">
                                    </div>
                                </div>



                                <div class="col-lg-6">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="websiteyoutube">Globe Locations<span class="small text-danger">*</span></label>
                                        @php

                                            $array = json_decode($website->globe_locations);

                                        @endphp
                                        @foreach($array as $globe_location)
                                        <div>
                                            <label class="d-flex align-items-center">
                                                <input type="checkbox" class="mr-1" {{ $globe_location->status?"checked":"" }} name="globe_location[]" value="{{ $globe_location->name }}" />
                                                <span>{{ $globe_location->name }}</span>
                                            </label>
                                        </div>
                                        @endforeach
                                        {{-- <input type="text" id="websiteyoutube" class="form-control" name="websiteyoutube" placeholder="Website YouTube" value="{{ old('websiteyoutube', isset($website)?$website->websiteyoutube:(isset($request)?$request->websiteyoutube:'')) }}"> --}}
                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- Button -->
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col text-center">
                                    <button type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
