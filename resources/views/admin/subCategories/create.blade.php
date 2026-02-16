@extends('admin.layouts.master')

@section('title', __('trans.create sub category'))

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
                                {{ __('trans.create') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.subCategories.store') }}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label fs-14 text-dark">{{ __('trans.sub category name') }}</label>
                                    <div class="input-group">
                                        <input name="name" type="text" class="form-control" id="name" placeholder="" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">{{ __('trans.sub category of') }}</label>
                                    <select id="category_id" name="category_id" class="form-select" aria-label="select sub category">
                                        <option value="">{{ __('trans.choose main category') }}</option>
                                        @foreach ($main_categories as $category)
                                            <option value="{{ $category -> id }}">{{ $category -> name }}</option>
                                        @endforeach
                                    </select>
                                    @error('category_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <button class="btn btn-primary" type="submit">{{ __('trans.create') }}</button>
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
