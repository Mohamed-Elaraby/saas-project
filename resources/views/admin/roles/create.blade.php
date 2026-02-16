@extends('admin.layouts.master')

@section('title', __('trans.create role'))

@section('styles')

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">

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
                                ADD NEW ROLE
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.roles.store') }}" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="role_name" class="form-label fs-14 text-dark">ENTER ROLE NAME</label>
                                    <div class="input-group">
                                        <div class="input-group-text">role-</div>
                                        <input name="name" type="text" class="form-control" id="role_name" placeholder="" readonly="">
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label for="role_display_name" class="form-label fs-14 text-dark">ENTER ROLE DISPLAY NAME</label>
                                    <select class="form-control" data-trigger name="display_name" id="role_display_name">
                                        <option value="">CHOOSE ROLE DISPLAY NAME</option>
                                        @foreach ($roleLeader_list as $leader)

                                            <option value="{{ $leader->name }}">{{ $leader->display_name }}</option>
                                        @endforeach
                                    </select>
                                    @error('role_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="text-area" class="form-label">ENTER ROLE DESCRIPTION</label>
                                    <textarea name="description" class="form-control" id="text-area" rows="5"></textarea>
                                </div>

                                <button class="btn btn-primary" type="submit">CREATE</button>
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
    <script src="{{ asset('js/includes/global/global_functions.js') }}"></script>
    <script>

    let field_display_name = $('#role_display_name');
    let field_name = $('#role_name');

    initText_with_select_box(field_display_name,field_name);

    </script>

    <!-- Prism JS -->
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')


@endsection
