@extends('admin.layouts.master')

@section('title', __('trans.edit expenses type'))

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
                                {{ __('trans.update') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.expensesTypes.update', $expensesType -> id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="expensesType_name" class="form-label fs-14 text-dark">{{ __('trans.expenses type') }}</label>
                                    <div class="input-group">
                                        <input name="name" type="text" class="form-control" id="expensesType_name" placeholder="" value="{{ $expensesType -> name }}">
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

    <!-- Prism JS -->
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')

    <script>
        $("input[name='other_car_status']").change(function(){
            if($(this).val() == 0) {
                $("#other_car").val('').prop('disabled', true);
            } else if($(this).val() == 1) {
                $("#other_car").prop('disabled', false).focus();
            }
        });
    </script>
@endsection
