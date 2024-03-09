@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Team') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Add Team</h6>
                    <a href="{{ route('team.show') }}" class="m-0 font-weight-bold bg-primary text-white btn">View Team</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ isset($team_single)?route('team.update',['team_id'=>$team_single->id]):route('team.store') }}" autocomplete="off" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="{{ isset($team_single)?'PUT':'POST' }}">

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="name">Name<span class="small text-danger">*</span></label>
                                        <input type="text" id="name" class="form-control" name="name" placeholder="Name" value="{{ old('name', isset($team_single)?$team_single->name:'') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="position">position<span class="small text-danger">*</span></label>
                                        <input type="text" id="position" class="form-control" name="position" placeholder="Position" value="{{ old('position', isset($team_single)?$team_single->position:'') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <div id="slider-image-sec" style="{{ isset($team_single)?'display: block':'display: none' }}">
                                            <div id="closeImage" onclick="closeImage()" style="{{ isset($team_single)?'display: block':'display: none' }}">X</div>
                                            <img src="{{ isset($team_single)?$team_single->image:'' }}" id="slide-image-preview" class="img-fluid border-1" width="200" />
                                        </div>
                                        <label class="form-control-label slide-image" for="slide-image">
                                            <input type="file" id="slide-image" class="d-none" onchange="show_image(this.files[0])" name="image" value="{{ old('image', '') }}">
                                        </label>
                                        <script>
                                            function show_image(event){
                                                let imgSrc = window.URL.createObjectURL(event);
                                                document.getElementById('slide-image-preview').style.display = "block";
                                                document.getElementById('slider-image-sec').style.display = "block";
                                                document.getElementById('closeImage').style.display = "block";
                                                document.getElementById('slide-image-preview').src = imgSrc;
                                            }

                                            function closeImage(event){
                                                document.getElementById('slide-image-preview').style.display = "none";
                                                document.getElementById('slider-image-sec').style.display = "none";
                                                document.getElementById('closeImage').style.display = "none";
                                            }
                                        </script>
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
