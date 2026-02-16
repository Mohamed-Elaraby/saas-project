@extends('admin.layouts.master')

@section('title', __('trans.operation on the money safe'))

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
                                {{ __('trans.create') . ' ' . __('trans.operation on the money safe') . ' ( ' . $branch -> display_name . ' )' }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.moneySafe.store') }}" method="POST">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="branch_id" value="{{ request()->branch_id }}">
                                <div class="mb-3">
                                    <label for="amount_paid" class="form-label fs-14 text-dark">{{ __('trans.amount paid in money safe') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-exchange-dollar-fill"></i></div>
                                        <input name="amount_paid" type="text" class="form-control" id="amount_paid" placeholder="250 {{ \App\Traits\SettingTrait::getSetting()->currency }}" value="{{ old('amount_paid') }}">
                                    </div>
                                    @error('amount_paid')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">{{ __('trans.process type') }}</label>
                                        <select class="form-select" aria-label="process_type"name="process_type" id="process_type">
                                        <option value="" selected disabled>{{ __('trans.safe money process type place holder') }}</option>
                                        <option value="withDraw">{{ __('trans.withdrawal') }}</option>
                                        <option value="deposit">{{ __('trans.deposit') }}</option>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="notes" class="form-label">{{ __('trans.notes') }}</label>
                                    <textarea name="notes" class="form-control" id="notes" cols="30" rows="10"></textarea>
                                </div>

                                <input class="btn btn-primary" type="submit" value="{{ __('trans.send') }}">
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
