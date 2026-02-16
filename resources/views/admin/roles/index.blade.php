@extends('admin.layouts.master')

@section('title', __('trans.roles'))

@section('styles')

@endsection

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <div class="alert alert-secondary alert-dismissible fs-15 fade show mb-4">
                {{ !empty(\App\Traits\SettingTrait::getSetting()->site_name)? \App\Traits\SettingTrait::getSetting()->site_name: '' }} Beta Version
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
            </div>
            <!-- Start:: row-2 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-header">
                            <div class="card-title">
                                Teams
                            </div>
                        </div>
                        <div class="card-body">
                            {{ $dataTable->table(['class' => 'table table-bordered table-striped']) }}
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-2 -->

        </div>
    </div>
    <!-- End::app-content -->

@endsection

@section('scripts')
    {{ $dataTable->scripts() }}
@endsection
