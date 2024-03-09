@extends('layouts.admin')

@section('main-content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">{{ __('Translations') }}</h1>

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
                    <h6 class="m-0 font-weight-bold text-primary">Arabic Translations</h6>
                </div>

                <div class="card-body">
                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('translation.edit',['lang'=>$lang]) }}" id="translate">
                        @csrf
                        @php
                            $translationsIndex = 0;

                        @endphp

                        <div class="translation-list" id="translation-list">
                        @foreach ($translations as $key => $value)
                            <div class="mb-3 d-flex align-items-top" id="translation-block-{{ $translationsIndex }}">
                                {{-- <label for="{{ $key }}" class="form-label">{{ $key }}</label> --}}
                                <textarea type="text" class="form-control bg-light border-1 small mr-2" name="translations[key][]" id="{{ $value[0] }}" style="height: 100px">{{ $value[0] }}</textarea>
                                <textarea type="text" class="form-control bg-light border-1 small ml-2" name="translations[value][]" id="{{ $value[0] }}" style="direction: rtl;height: 100px">{{ $value[1] }}</textarea>
                                <div class="d-flex gap-2 justify-content-center align-items-center py-5 ml-2">
                                    <button class="btn btn-danger rounded-pill px-3 ml-2" type="button" onclick="removeElement('translation-block-{{ $translationsIndex }}')">Remove</button>
                                </div>
                            </div>
                            @php
                                $translationsIndex++;
                            @endphp
                        @endforeach
                        </div>
                        <div class="mb-3 d-flex">
                            <button type="button" class="btn btn-primary mr-2" onclick="addElement()">Add More</button>
                            <button type="submit" class="btn btn-primary ml-2">Save Changes</button>
                        </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

@endsection
