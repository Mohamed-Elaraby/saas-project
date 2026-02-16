@extends('admin.layouts.master')

@section('title', __('trans.create client payment'))

@section('styles')

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

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
                                {{ __('trans.create client payment') . ' ' . __('trans.to') . ' ' . $client -> name }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.clientPayments.store') }}" method="POST">
                                @method('POST')
                                @csrf
                                <input type="hidden" name="client_id" value="{{ $client -> id }}">
                                <div class="mb-3">
                                    <label for=""><b>{{ __('trans.payment method') }}</b></label>
                                </div>
                                <div class="mb-3">
                                    <div class="form-group">
                                        <input class="form-check-input payment_method" type="checkbox" name="payment_method" id="cash" value="cash" checked>
                                        <label class="form-check-label" for="cash">{{ __('trans.cash') }}</label>
                                    </div>

                                    <div class="form-group">
                                        <input class="form-check-input payment_method" type="checkbox" name="payment_method_bank" id="bank_transfer" value="bank_transfer">
                                        <label class="form-check-label" for="bank_transfer">{{ __('trans.bank transfer') }}</label>

                                        <input class="form-check-input payment_method" type="checkbox" name="payment_method_bank" id="network" value="network">
                                        <label class="form-check-label" for="network">{{ __('trans.network') }}</label>

                                        <input class="form-check-input payment_method" type="checkbox" name="payment_method_bank" id="other_method" value="other">
                                        <label class="form-check-label" for="other_method">{{ __('trans.other') }}</label>
                                    </div>
                                    <span id="payment_method_error" style="color: red; display: none"></span>
                                </div>
                                <div id="amounts_group_field">
                                    <div id="safe_amount_field" class="form-group row mb-3">
                                        <label for="amount_paid" class="col-sm-2 col-form-label">{{ __('trans.amount paid in cash') }}</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="amount_paid" class="form-control amount_paid" id="amount_paid" autocomplete="off" placeholder="250 {{ \App\Traits\SettingTrait::getSetting()->currency }}">
                                        </div>
                                    </div>
                                </div>
                                @php($branch_id = auth()->user()->branch? auth()->user()->branch -> id: '')
                                <div class="mb-3">
                                    <label for="branch_id" class="form-label">{{ __('trans.branch') }}</label>
                                    <select id="branch_id" name="branch_id" class="form-select" aria-label="select the branch">
                                        <option selected>{{ __('trans.branch') }}</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch -> id }}" {{ $branch_id == $branch -> id ?'selected':'' }}>{{ $branch -> name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-xl-12 mb-3">
                                    <label for="payment_date" class="form-label">{{ __('trans.payment date') }}</label>
                                    <input name="payment_date" type="text" class="form-control" id="payment_date">
                                </div>

                                <div class="col-xl-12 mb-3">
                                    <label for="notes" class="form-label">{{ __('trans.notes') }}</label>
                                    <textarea name="notes" class="form-control" id="notes" rows="5"></textarea>
                                </div>

                                <button class="btn btn-primary" type="submit">{{ __('trans.pay') }}</button>
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
    <!-- Date & Time Picker JS -->
    <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')
    <script>
        flatpickr('#payment_date', {
            defaultDate: new Date()
        });
        // $("#payment_date").datepicker().datepicker("setDate", new Date()); // set datepicker

        let title_amount_paid_in_cash = ' {{ __('trans.amount paid in cash') }} ';
        let title_amount_paid_into_the_bank = ' {{ __('trans.amount paid into the bank') }} ';
        let placeholder_payment_method_inputs_currency = '{{ \App\Traits\SettingTrait::getSetting()->currency }}';

        $('input[name="payment_method"]').on('change', function () {
            // checkPaymentMethodExist();

            if ($(this).is(':checked'))
            {
                if (!$('#safe_amount_field').length)
                {
                    let content =
                        '<div id="safe_amount_field" class="form-group row mb-3">\n' +
                        '<label for="amount_paid" class="col-sm-2 col-form-label">'+ title_amount_paid_in_cash +'</label>\n' +
                        '<div class="col-sm-10">\n' +
                        '<input type="number" name="amount_paid" class="form-control amount_paid" id="amount_paid" autocomplete="off" placeholder="250 '+ placeholder_payment_method_inputs_currency +'">\n' +
                        '</div>\n' +
                        '</div>';
                    $('#amounts_group_field').prepend(content);
                }

            }else{
                if ($('#safe_amount_field').length)
                {
                    $('#safe_amount_field').remove();
                }
            }
        })

        // on change payment method create new field to pay into bank
        $('input[name="payment_method_bank"]').on('change', function () {
            $(this).siblings('input[type="checkbox"]').not(this).prop('checked', false);
            // checkPaymentMethodExist();
            if ($('input[name="payment_method_bank"]:checked').length > 0)
            {
                if (!$('#bank_field').length)
                {
                    let content =
                        '<div id="bank_field" class="form-group row mb-3">\n' +
                        '<label for="amount_paid_bank" class="col-sm-2 col-form-label">'+ title_amount_paid_into_the_bank +'</label>\n' +
                        '<div class="col-sm-10">\n' +
                        '<input type="number" name="amount_paid_bank"  class="form-control amount_paid_bank" id="amount_paid_bank" autocomplete="off" placeholder="250 '+ placeholder_payment_method_inputs_currency +'">\n' +
                        '</div>\n'+
                        '</div>';
                    $('#amounts_group_field').append(content);
                }

            }else{
                if ($('#bank_field').length)
                {
                    $('#bank_field').remove();
                }
            }
        })
    </script>
@endsection
