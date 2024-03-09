@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Slider') }}</h1>

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

                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Add Business</h6>
                    <a href="{{ route('business.show') }}" class="m-0 font-weight-bold bg-primary text-white btn">View Business</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($business_single)?route('business.update',['business_id'=>$business_single->id]):route('business.store') }}" autocomplete="off" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="{{ isset($business_single)?'PUT':'POST' }}">

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="title">Title<span class="small text-danger">*</span></label>
                                        <input type="text" id="title" class="form-control" name="title" placeholder="Title" value="{{ old('title', isset($business_single)?$business_single->title:(isset($request)?$request->title:'')) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="slug">Slug<span class="small text-danger">*</span></label>
                                        <input type="text" id="slug" class="form-control" name="slug" placeholder="Slug" value="{{ old('slug', isset($business_single)?$business_single->slug:(isset($request)?$request->slug:'')) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="brand">Brand<span class="small text-danger">*</span></label>
                                        <input type="text" id="brand" class="form-control" name="brand" placeholder="Brand" value="{{ old('brand', isset($business_single)?$business_single->brand:(isset($request)?$request->brand:'')) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="location">Location<span class="small text-danger">*</span></label>
                                        <input type="text" id="location" class="form-control" name="location" placeholder="Location" value="{{ old('location', isset($business_single)?$business_single->location:(isset($request)?$request->location:'')) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="phonenumber">Phone Number<span class="small text-danger">*</span></label>
                                        <input type="text" id="phonenumber" class="form-control" name="phonenumber" placeholder="phonenumber" value="{{ old('phonenumber', isset($business_single)?$business_single->phonenumber:(isset($request)?$request->phonenumber:'')) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="email">Email<span class="small text-danger">*</span></label>
                                        <input type="text" id="email" class="form-control" name="email" placeholder="email" value="{{ old('email', isset($business_single)?$business_single->email:(isset($request)?$request->email:'')) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="website">Website<span class="small text-danger">*</span></label>
                                        <input type="text" id="website" class="form-control" name="website" placeholder="website" value="{{ old('website', isset($business_single)?$business_single->website:(isset($request)?$request->website:'')) }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="description">Description<span class="small text-danger">*</span></label>
                                        <textarea type="text" id="description" class="form-control" name="description" placeholder="description">{{ old('website', isset($business_single)?$business_single->description:(isset($request)?$request->description:'')) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="location_iframe">Location iframe<span class="small text-danger">*</span></label>
                                        <textarea type="text" id="location_iframe" class="form-control" name="location_iframe" placeholder="location_iframe">{{ old('location_iframe', isset($business_single)?$business_single->location_iframe:(isset($request)?$request->location_iframe:'')) }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <div id="logo-image-sec" style="{{ isset($business_single)?'display: block':'display: none' }}">
                                            <div id="closelogo" onclick="closelogo()" style="{{ isset($business_single)?'display: block':'display: none' }}">X</div>
                                            <img src="{{ isset($business_single)?$business_single->logo:'' }}" id="logo-image-preview" class="img-fluid border-1" width="200" height="100%"/>
                                        </div>
                                        <label class="form-control-label logo-image" for="logo-image">
                                            <input type="file" id="logo-image" class="d-none" onchange="show_logo(this.files[0])" name="logo" value="{{ old('logo', '') }}">
                                        </label>
                                        <script>
                                            function show_logo(event){
                                                let imgSrc = window.URL.createObjectURL(event);

                                                console.log(event);
                                                console.log(imgSrc);
                                                document.getElementById('logo-image-preview').style.display = "block";
                                                document.getElementById('logo-image-sec').style.display = "block";
                                                document.getElementById('closelogo').style.display = "block";
                                                document.getElementById('logo-image-preview').src = imgSrc;
                                            }

                                            function closelogo(event){
                                                document.getElementById('logo-image-preview').style.display = "none";
                                                document.getElementById('logo-image-sec').style.display = "none";
                                                document.getElementById('closelogo').style.display = "none";
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <div id="cover-image-sec" style="{{ isset($business_single)?'display: block':'display: none' }}">
                                            <div id="closecover" onclick="closecover()" style="{{ isset($business_single)?'display: block':'display: none' }}">X</div>
                                            <img src="{{ isset($business_single)?$business_single->cover:'' }}" id="cover-image-preview" class="img-fluid border-1" width="200" />
                                        </div>
                                        <label class="form-control-label cover-image" for="cover-image">
                                            <input type="file" id="cover-image" class="d-none" onchange="show_cover(this.files[0])" name="cover" value="{{ old('cover', '') }}">
                                        </label>
                                        <script>
                                            function show_cover(event){
                                                let imgSrc = window.URL.createObjectURL(event);

                                                console.log(event);
                                                console.log(imgSrc);
                                                document.getElementById('cover-image-preview').style.display = "block";
                                                document.getElementById('cover-image-sec').style.display = "block";
                                                document.getElementById('closecover').style.display = "block";
                                                document.getElementById('cover-image-preview').src = imgSrc;
                                            }

                                            function closecover(event){
                                                document.getElementById('cover-image-preview').style.display = "none";
                                                document.getElementById('cover-image-sec').style.display = "none";
                                                document.getElementById('closecover').style.display = "none";
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <div id="headimage-image-sec" style="{{ isset($business_single)?(!empty($business_single->headimage)?'display: block':'display: none'):'display: none' }}">
                                            <div id="closeheadimage" onclick="closeheadimage()" style="{{ isset($business_single)?'display: block':'display: none' }}">X</div>
                                            <img src="{{ isset($business_single)?$business_single->headimage:'' }}" id="headimage-image-preview" class="img-fluid border-1" width="200" />
                                        </div>
                                        <label class="form-control-label headimage-image" for="headimage-image">
                                            <input type="hidden" id="headimage-valid" name="headimagevalid" value="{{ isset($business_single)?($business_single->headimage?1:0):0 }}" />
                                            <input type="file" id="headimage-image" class="d-none" onchange="show_headimage(this.files[0])" name="headimage" value="{{ old('headimage', '') }}">
                                        </label>
                                        <script>
                                            function show_headimage(event){
                                                let imgSrc = window.URL.createObjectURL(event);

                                                console.log(event);
                                                console.log(imgSrc);
                                                document.getElementById('headimage-image-preview').style.display = "block";
                                                document.getElementById('headimage-image-sec').style.display = "block";
                                                document.getElementById('closeheadimage').style.display = "block";
                                                document.getElementById('headimage-image-preview').src = imgSrc;
                                                $("#headimage-valid").val(1);
                                            }

                                            function closeheadimage(event){
                                                document.getElementById('headimage-image-preview').style.display = "none";
                                                document.getElementById('headimage-image-sec').style.display = "none";
                                                document.getElementById('closeheadimage').style.display = "none";
                                                $("#headimage-valid").val(0);
                                            }
                                        </script>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="action-button">
                                        <div class="d-grid gap-2 d-md-block">
                                            <button type="button" class="btn btn-primary btn-icon-split my-2" onclick="add_new_gallery()">
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-plus"></i>
                                                </span>
                                                <span class="text">Add Image</span>
                                            </button>
                                            <div class="show-image-gallery d-flex flex-wrap" id="show-image-gallery"></div>
                                            <label class="form-control-label d-none" for="gallery-image">
                                                <input type="file" id="gallery-image" class="d-none" onchange="show_gallery(this.files[0])">
                                                <input type="file" name="galleryimage[]" id="gallery-image-inputs" class="d-none" multiple>
                                                <input type="text" name="image-gallery-array" id="gallery-image-input" class="d-none" value="{{ isset($business_single)?$business_single->gallery:'' }}">
                                            </label>
                                        </div>
                                        <script>
                                            var gallery_items = document.getElementById("gallery-image-input").value;
                                            if(gallery_items!=""){
                                                gallery_items = JSON.parse(gallery_items);
                                                gallery_items = Object.values(gallery_items);
                                                console.log(gallery_items);
                                            }else{
                                                gallery_items = [];
                                            }
                                            var gallery_upload_items = [];
                                            // gallery_items = gallery_items.slice(1,-1).split(",");
                                            window.onload = () =>{
                                                load_image();
                                            }
                                            function add_new_gallery(){
                                                // var
                                                $("#gallery-image").click();
                                            }

                                            function show_gallery(event){
                                                gallery_upload_items.push(event);
                                                let imgSrc = window.URL.createObjectURL(event);
                                                gallery_items.push(imgSrc);
                                                load_image();
                                                console.log(gallery_upload_items);
                                                // $("#gallery-image").val(gallery_upload_items);

                                                const filesList = new DataTransfer(); // create a new empty FileList
                                                for (const file of gallery_upload_items) {
                                                    filesList.items.add(file); // add each file to the FileList
                                                }
                                                const fileInput = document.getElementById('gallery-image-inputs');
                                                fileInput.files = filesList.files;
                                                console.log(filesList.files);

                                                // const fileInput = $('#gallery-image-inputs');
                                                // fileInput.prop('files', filesList);
                                            }

                                            // Load Image from gallery_items variable
                                            function load_image(){
                                                $("#show-image-gallery").html("");
                                                // console.log(gallery_items);
                                                if(gallery_items.length > 0){
                                                    gallery_items.forEach((element,index) => {
                                                        // console.log(index);
                                                        $("#show-image-gallery").append('<div class="gallery-item my-2 col-4"><button type="button" onclick="remove_item('+index+')" value="'+index+'" class="btn btn-danger btn-circle"><i class="fas fa-trash"></i></button><img src='+element+' class="img-fluid"></div>');
                                                    });

                                                    $("#gallery-image-input").val(gallery_items.toString());
                                                }
                                                // console.log(gallery_upload_items);
                                            }

                                            function remove_item(i){
                                                console.log("remove_element", i);
                                                gallery_items.splice(i,1);

                                                load_image();
                                            }
                                        </script>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group focused" id="image-gallery">
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
