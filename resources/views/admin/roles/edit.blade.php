@extends('admin.layouts.master')

@section('title', __('trans.edit role'))

@section('styles')

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">
{{--            @if ($errors->any())--}}
{{--                <div class="alert alert-danger">--}}
{{--                    <ul>--}}
{{--                        @foreach ($errors->all() as $error)--}}
{{--                            <li>{{ $error }}</li>--}}
{{--                        @endforeach--}}
{{--                    </ul>--}}
{{--                </div>--}}
{{--            @endif--}}
            <!-- Start:: row-2 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                EDIT ROLE
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.roles.update', $role) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="form-text1" class="form-label fs-14 text-dark">ENTER ROLE NAME</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-user-line"></i></div>
                                        <input name="name" type="text" class="form-control" id="form-text1" placeholder="" value="{{ $role->name }}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="form-text1" class="form-label fs-14 text-dark">ENTER ROLE DISPLAY NAME</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-user-line"></i></div>
                                        <input name="display_name" type="text" class="form-control" id="form-text1" placeholder="" value="{{ $role->display_name }}">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="text-area" class="form-label">ENTER ROLE DESCRIPTION</label>
                                    <textarea name="description" class="form-control" id="text-area" rows="5">{{ $role->description }}</textarea>
                                </div>

                                <input class="btn btn-success" type="submit" value="Update">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End:: row-2 -->

        </div>
    </div>
    <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

    <!-- Prism JS -->
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')
@endsection
