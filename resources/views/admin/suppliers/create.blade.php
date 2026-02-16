@extends('admin.layouts.master')

@section('title', __('trans.create supplier'))

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
                                {{ __('trans.create') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.suppliers.store') }}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="mb-3">
                                    <label for="supplier_name" class="form-label fs-14 text-dark">{{ __('trans.supplier name') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-user-5-fill"></i></div>
                                        <input name="name" type="text" class="form-control" id="supplier_name" placeholder="" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label fs-14 text-dark">{{ __('trans.phone') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-phone-fill"></i></div>
                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="" value="{{ old('phone') }}">
                                    </div>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="building_number" class="form-label fs-14 text-dark">{{ __('trans.building number') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-home-office-line"></i></div>
                                        <input name="building_number" type="text" class="form-control" id="building_number" value="{{ old('building_number') }}">
                                    </div>
                                    @error('building_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="street_name" class="form-label fs-14 text-dark">{{ __('trans.street name') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-luggage-deposit-line"></i></div>
                                        <input name="street_name" type="text" class="form-control" id="street_name" placeholder="" value="{{ old('street_name') }}">
                                    </div>
                                    @error('street_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="district" class="form-label fs-14 text-dark">{{ __('trans.district') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-building-2-line"></i></div>
                                        <input name="district" type="text" class="form-control" id="district" placeholder="" value="{{ old('district') }}">
                                    </div>
                                    @error('district')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label fs-14 text-dark">{{ __('trans.city') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-building-line"></i></div>
                                        <input name="city" type="text" class="form-control" id="city" placeholder="" value="{{ old('city') }}">
                                    </div>
                                    @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label fs-14 text-dark">{{ __('trans.country') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-global-line"></i></div>
                                        <input name="country" type="text" class="form-control" id="country" placeholder="" value="{{ old('country') }}">
                                    </div>
                                    @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="postal_code" class="form-label fs-14 text-dark">{{ __('trans.postal code') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-signpost-line"></i></div>
                                        <input name="postal_code" type="text" class="form-control" id="postal_code" placeholder="" value="{{ old('postal_code') }}">
                                    </div>
                                    @error('postal_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="vat_number" class="form-label fs-14 text-dark">{{ __('trans.vat number') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-money-dollar-box-line"></i></div>
                                        <input name="vat_number" type="text" class="form-control" id="vat_number" placeholder="" value="{{ old('vat_number') }}">
                                    </div>
                                    @error('vat_number')
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
