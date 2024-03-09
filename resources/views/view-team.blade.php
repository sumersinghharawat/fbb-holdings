@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Teams') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">View Team</h6>
                    <a href="{{ route('team.create') }}" class="m-0 font-weight-bold bg-primary text-white btn">Add Team</a>
                </div>

                <div class="card-body">
                    <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid" aria-describedby="dataTable_info" style="width: 100%;">
                        <thead>
                            <tr>
                                <td>S.No.</td>
                                <td>Name</td>
                                <td>Position</td>
                                <td>Image</td>
                                <td>Edit</td>
                                <td>Delete</td>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($teams as $teamKey => $teamValue)
                            <tr>
                                <td>{{ $teamKey+1 }}</td>
                                <td>{{ $teamValue->name }}</td>
                                <td>{{ $teamValue->position }}</td>
                                <td><img src="{{ asset($teamValue->image) }}" width="200" class="img-fluid"/></td>
                                <td>
                                    <a href="{{ route('team.edit',['team_id'=>$teamValue->id]) }}" class="btn btn-primary btn-circle">
                                        <i class="fa fa-pen"></i>
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('team.delete',['team_id'=>$teamValue->id]) }}" class="btn btn-danger btn-circle">
                                        <i class="fa fa-minus"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>S.No.</td>
                                <td>Name</td>
                                <td>Position</td>
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
