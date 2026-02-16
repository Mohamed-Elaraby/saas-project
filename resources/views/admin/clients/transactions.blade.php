@extends('admin.layouts.master')

@section('title', __('trans.client transactions'))

@section('styles')
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.4/css/dataTables.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/3.1.1/css/buttons.dataTables.css">
    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
    <style>
                    .date_dir_setting {
                        direction: ltr;
                        text-align: right;
                    }
                    .balance_column_color
                    {
                        background-color: #c4cfd4;
                    }
    </style>
@endsection

@section('title', __('trans.client transactions'))

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
                                {{ __('trans.client transactions') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="bd-example mb-3">
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="p-2">{{ $client -> name }}</div>
                                    <div class="p-2">{{ __('trans.balance') .'  '.number_format($client -> balance, 2).'  ' . \App\Traits\SettingTrait::getSetting()->currency }}</div>
                                    <div class="p-2">
                                        @if (Auth::user()->hasPermission('create-clientPayment'))
                                            <a class="btn btn-outline-primary btn-sm" href="{{ route('admin.clientPayments.create', ['client_id' => $client->id]) }}">{{ __('trans.pay')}}</a>
                                        @endif

                                        @if (Auth::user()->hasPermission('create-clientCollecting'))
                                            <a class="btn btn-outline-primary btn-sm" href="{{ route('admin.clientCollecting.create', ['client_id' => $client->id]) }}">{{ __('trans.collect')}}</a>
                                        @endif
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mb-3">

                                    <div class="p-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                <input type="text" class="form-control start_date" id="date" placeholder="{{ __('trans.from') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                <input type="text" class="form-control end_date" id="date" placeholder="{{ __('trans.to') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="p-2"><button type="button" id="filter_date_button" class="btn btn-success btn-xs">{{ __('trans.search') }} <i class="ri-filter-line"></i> </button></div>
                                    <div class="p-2"><button type="button" id="refresh_date_button" class="btn btn-info btn-xs">{{ __('trans.reload') }} <i class="ri-refresh-line"></i> </button></div>

                                    <div class="p-2">
                                        <button
                                            id="print_date_button"
                                            class="btn btn-primary btn-xs"
                                            data-link="{{ route('admin.clientTransactions.print', ['client_id' => $client->id]) }}"
                                            href="javascript:void(0);"
{{--                                            onclick="printJS($(this).data('link'))"--}}
                                        >
                                            <span>{{ __('trans.print') }} <i class="ri-printer-line"></i></span>
                                        </button>

                                    </div>

                                </div>
                            </div>
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

{{--    <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script>--}}
{{--    <script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script>--}}


    {{ $dataTable->scripts() }}


<script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>
<script src="https://cdn.datatables.net/2.1.4/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.1/js/dataTables.buttons.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.dataTables.js"></script>
<script src="https://cdn.datatables.net/buttons/3.1.1/js/buttons.print.min.js"></script>
    <!-- Date & Time Picker JS -->
    <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    @vite('resources/assets/js/date&time_pickers.js')
<script>
    $('.start_date').flatpickr({
        // autoclose: true,
        // todayBtn: "linked",
        dateFormat: "yyyy-mm-dd"
    });
    $('.end_date').flatpickr({
        // autoclose: true,
        // todayBtn: "linked",
        dateFormat: "yyyy-mm-dd"
    });


    $('#filter_date_button').on('click', function () {
        let start_date = $('.start_date').val();
        let end_date = $('.end_date').val();
        let table = $('#clienttransaction-table');

        table.on('preXhr.dt', function (e, settings, data) {
            data.start_date = start_date;
            data.end_date = end_date;

        })
        table.DataTable().ajax.reload();
        $('#refresh_date_button').on('click', function () {
            table.on('preXhr.dt', function (e, settings, data) {
                $('.start_date').val('');
                $('.end_date').val('');
                data.start_date = '';
                data.end_date = '';
            })
            table.DataTable().ajax.reload();
        })

    })

    $('#print_date_button').on('click', function() {

        let start_date = $('.start_date').val();
        let end_date = $('.end_date').val();
        let search = $('#clienttransaction-table_filter input[type="search"]').val();

        printJS("{{ route('admin.clientTransactions.print', ['client_id' => $client->id]) }}" + '?start_date=' + start_date + '&end_date=' + end_date + '&search=' + search);
    })


</script>

@endsection
