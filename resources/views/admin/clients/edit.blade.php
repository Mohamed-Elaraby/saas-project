@extends('admin.layouts.master')

@section('title', __('trans.edit client'))

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
                                {{ __('trans.edit') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.clients.update', $client -> id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="client_name" class="form-label fs-14 text-dark">{{ __('trans.client name') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-user-5-fill"></i></div>
                                        <input name="name" type="text" class="form-control" id="client_name" placeholder="" value="{{ $client -> name }}">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="phone" class="form-label fs-14 text-dark">{{ __('trans.phone') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-phone-fill"></i></div>
                                        <input name="phone" type="text" class="form-control" id="phone" placeholder="" value="{{  $client -> phone }}">
                                    </div>
                                    @error('phone')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="building_number" class="form-label fs-14 text-dark">{{ __('trans.building number') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-home-office-line"></i></div>
                                        <input name="building_number" type="text" class="form-control" id="building_number" value="{{ $client -> building_number }}">
                                    </div>
                                    @error('building_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="street_name" class="form-label fs-14 text-dark">{{ __('trans.street name') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-luggage-deposit-line"></i></div>
                                        <input name="street_name" type="text" class="form-control" id="street_name" placeholder="" value="{{ $client -> street_name }}">
                                    </div>
                                    @error('street_name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="district" class="form-label fs-14 text-dark">{{ __('trans.district') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-building-2-line"></i></div>
                                        <input name="district" type="text" class="form-control" id="district" placeholder="" value="{{ $client -> district }}">
                                    </div>
                                    @error('district')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="city" class="form-label fs-14 text-dark">{{ __('trans.city') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-building-line"></i></div>
                                        <input name="city" type="text" class="form-control" id="city" placeholder="" value="{{ $client -> city }}">
                                    </div>
                                    @error('city')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="country" class="form-label fs-14 text-dark">{{ __('trans.country') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-global-line"></i></div>
                                        <input name="country" type="text" class="form-control" id="country" placeholder="" value="{{ $client -> country }}">
                                    </div>
                                    @error('country')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="postal_code" class="form-label fs-14 text-dark">{{ __('trans.postal code') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-signpost-line"></i></div>
                                        <input name="postal_code" type="text" class="form-control" id="postal_code" placeholder="" value="{{ $client -> postal_code }}">
                                    </div>
                                    @error('postal_code')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="vat_number" class="form-label fs-14 text-dark">{{ __('trans.vat number') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-money-dollar-box-line"></i></div>
                                        <input name="vat_number" type="text" class="form-control" id="vat_number" placeholder="" value="{{ $client -> vat_number }}">
                                    </div>
                                    @error('vat_number')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="employer" class="form-label fs-14 text-dark">{{ __('trans.employer') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-home-office-fill"></i></div>
                                        <input name="employer" type="text" class="form-control" id="employer" placeholder="" value="{{ $client -> employer }}">
                                    </div>
                                    @error('employer')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="how_you_now_us" class="form-label fs-14 text-dark">{{ __('trans.how you now us') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-question-line"></i></div>
                                        <input name="how_you_now_us" type="text" class="form-control" id="how_you_now_us" placeholder="" value="{{ $client -> how_you_now_us }}">
                                    </div>
                                    @error('how_you_now_us')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="other_car" class="form-label fs-14 text-dark">{{ __('trans.other car') }}</label>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-success" type="radio" name="other_car_status" id="other_car_status" value="1"{{ $client -> other_car ? 'checked': '' }}>
                                        <label class="form-check-label" for="other_car_status">
                                            {{ __('trans.yes') }}
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input form-checked-outline form-checked-danger" type="radio" name="other_car_status" id="other_car_status" value="0"{{ !$client -> other_car ? 'checked': '' }}>
                                        <label class="form-check-label" for="other_car_status">
                                            {{ __('trans.no') }}
                                        </label>
                                    </div>

                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-car-line"></i></div>
                                        <input name="other_car" type="text" class="form-control" id="other_car" placeholder="" value="{{ $client -> other_car }}" {{ !$client -> other_car ? 'disabled': '' }}>
                                    </div>

                                    @error('other_car')
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
