@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Businesses') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">View Business</h6>
                    <a href="{{ route('business.create') }}" class="m-0 font-weight-bold bg-primary text-white btn">Add Business</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <td>S.No.</td>
                                <td>Title</td>
                                <td>Slug</td>
                                <td>Brand</td>
                                <td>Location</td>
                                <td>Phone Number</td>
                                <td>E-Mail</td>
                                <td>Website</td>
                                <td>Logo</td>
                                <td>Cover Image</td>
                                <td>Header Image</td>
                                <td>Status</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($businesses as $businessesKey => $businessesValue)
                            <tr>
                                <td>{{ $businessesKey+1 }}</td>
                                <td>{{ $businessesValue->title }}</td>
                                <td>{{ $businessesValue->slug }}</td>
                                <td>{{ $businessesValue->brand }}</td>
                                <td>{{ $businessesValue->location }}</td>
                                <td>{{ $businessesValue->phonenumber }}</td>
                                <td>{{ $businessesValue->email }}</td>
                                <td>{{ $businessesValue->website }}</td>
                                <td>
                                    @if(!empty($businessesValue->logo))
                                        <img src="{{ asset($businessesValue->logo) }}" width="200" class="img-fluid"/>
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($businessesValue->logo))
                                        <img src="{{ asset($businessesValue->cover) }}" width="200" class="img-fluid"/>
                                    @endif
                                </td>
                                <td>
                                    @if(!empty($businessesValue->headimage))
                                        <img src="{{ asset($businessesValue->headimage) }}" width="200" class="img-fluid"/>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('business.status',['business_id'=>$businessesValue->id]) }}" class="btn @if($businessesValue->status == 1) btn-success @else btn-danger @endif btn-circle">
                                        <i class="fa fa-btn"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('business.edit',['business_id'=>$businessesValue->id]) }}" class="btn btn-primary btn-circle">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('business.delete',['business_id'=>$businessesValue->id]) }}" class="btn btn-danger btn-circle">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>

    </div>

@endsection
