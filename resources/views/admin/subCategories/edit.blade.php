@extends('admin.layouts.master')

@section('title', __('trans.edit sub category'))

@section('styles')

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
                                {{ __('trans.edit') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.subCategories.update', $subCategory -> id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label fs-14 text-dark">{{ __('trans.sub category name') }}</label>
                                    <div class="input-group">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="" value="{{ $subCategory -> name }}">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">{{ __('trans.update') }}</button>
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

@endsection
