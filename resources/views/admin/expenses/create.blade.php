@extends('admin.layouts.master')

@section('title', __('trans.create expenses'))

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
                                {{ __('trans.create expenses') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.expenses.store') }}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="mb-3">
                                    <label for="amount" class="form-label fs-14 text-dark">{{ __('trans.amount') }}</label>
                                    <div class="input-group">
                                        <input name="amount" type="text" class="form-control" id="amount" placeholder="250 {{ \App\Traits\SettingTrait::getSetting()->currency }}" value="{{ old('amount') }}">
                                    </div>
                                    @error('amount')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="expenses_type_id" class="form-label">{{ __('trans.expenses type') }}</label>
                                    <select id="expenses_type_id" name="expenses_type_id" class="form-select" aria-label="select the branch">
                                        <option value="">{{ __('trans.expenses type') }}</option>
                                        @foreach ($expensesTypes as $type)
                                            <option value="{{ $type -> id }}">{{ $type -> name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="mb-3">
                                    @php($branch_id = auth()->user()->branch? auth()->user()->branch -> id: '')
                                    <label for="branch_id" class="form-label">{{ __('trans.branch') }}</label>
                                    <select id="branch_id" name="branch_id" class="form-select" aria-label="select the branch">
                                        <option value="">{{ __('trans.select branch') }}</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch -> id }}" {{ $branch -> id == $branch_id ? 'selected' : '' }}>{{ $branch -> name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="expenses_date" class="form-label">{{ __('trans.expenses date') }}</label>
                                    <input name="expenses_date" type="text" class="form-control" id="expenses_date">
                                </div>
                                <div class="mb-3">
                                    <label for="notes" class="form-label">{{ __('trans.notes') }}</label>
                                    <textarea name="notes" class="form-control" id="notes" rows="5"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for=""><b>{{ __('trans.payment method') }}</b></label>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <input class="form-check-input payment_method" type="radio" name="payment_method" id="cash" value="cash" checked>
                                        <label class="form-check-label" for="cash">{{ __('trans.cash') }}</label>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-check-input payment_method" type="radio" name="payment_method" id="bank_transfer" value="bank_transfer">
                                        <label class="form-check-label" for="bank_transfer">{{ __('trans.bank transfer') }}</label>

                                        <input class="form-check-input payment_method" type="radio" name="payment_method" id="network" value="network">
                                        <label class="form-check-label" for="network">{{ __('trans.network') }}</label>

                                        <input class="form-check-input payment_method" type="radio" name="payment_method" id="other_method" value="other">
                                        <label class="form-check-label" for="other_method">{{ __('trans.other') }}</label>
                                    </div>
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
    <!-- Date & Time Picker JS -->
    <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

    <!-- Prism JS -->
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')

    <script>
        flatpickr('#expenses_date', {
            defaultDate: new Date()
        });
        $("input[name='other_car_status']").change(function(){
            if($(this).val() == 0) {
                $("#other_car").val('').prop('disabled', true);
            } else if($(this).val() == 1) {
                $("#other_car").prop('disabled', false).focus();
            }
        });
    </script>

@endsection
