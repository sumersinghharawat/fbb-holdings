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
                    <h6 class="m-0 font-weight-bold text-primary">View Slide</h6>
                    <a href="{{ route('slider.create') }}" class="m-0 font-weight-bold bg-primary text-white btn">Add Slide</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <td>S.No.</td>
                                <td>Title</td>
                                <td>Sub Title</td>
                                <td>Image</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($sliders as $sliderKey => $sliderValue)
                            <tr>
                                <td>{{ $sliderKey+1 }}</td>
                                <td>{{ $sliderValue->title }}</td>
                                <td>{{ $sliderValue->subtitle }}</td>
                                <td><img src="{{ asset($sliderValue->image) }}" width="200" class="img-fluid"/></td>
                                <td>
                                    <a href="{{ route('slider.edit',['slider_id'=>$sliderValue->id]) }}" class="btn btn-primary btn-circle">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('slider.delete',['slider_id'=>$sliderValue->id]) }}" class="btn btn-danger btn-circle">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>S.No.</td>
                                <td>Title</td>
                                <td>Sub Title</td>
                                <td>Image</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

            </div>

        </div>

    </div>

@endsection
