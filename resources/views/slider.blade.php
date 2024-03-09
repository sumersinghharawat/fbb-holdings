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
                    <h6 class="m-0 font-weight-bold text-primary">Add Slide</h6>
                    <a href="#" class="m-0 font-weight-bold bg-primary text-white btn">View Slide</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}" autocomplete="off">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <input type="hidden" name="_method" value="PUT">

                        {{-- <h6 class="heading-small text-muted mb-4">User information</h6> --}}

                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="title">Title<span class="small text-danger">*</span></label>
                                        <input type="text" id="title" class="form-control" name="title" placeholder="Title" value="{{ old('title', '') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <label class="form-control-label" for="subtitle">Subtitle<span class="small text-danger">*</span></label>
                                        <input type="text" id="subtitle" class="form-control" name="subtitle" placeholder="Subtitle" value="{{ old('subtitle', '') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group focused">
                                        <img src="" id="slide-image-preview" class="img-fluid border-1" width="200" />
                                        <label class="form-control-label slide-image" for="slide-image">
                                            <input type="file" id="slide-image" class="d-none" onchange="show_image(this.files[0])" name="image" value="{{ old('subtitle', '') }}">
                                        </label>
                                        <script>
                                            function show_image(event){
                                                let imgSrc = window.URL.createObjectURL(event);

                                                console.log(event);
                                                console.log(imgSrc);
                                                document.getElementById('slide-image-preview').src = imgSrc;
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
