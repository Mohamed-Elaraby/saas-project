@extends('admin.layouts.master')

@section('title', __('trans.supplier payment'))

@section('styles')
    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">
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
                                {{ __('trans.all supplier payments list') }}
                            </div>
                        </div>
                        <div class="card-body">
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

    {{ $dataTable->scripts() }}
    <!-- Custom Function -->

    <!-- Date & Time Picker JS -->
    <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    @vite('resources/assets/js/date&time_pickers.js')

    <script>

        // Show Confirm Message For Delete Any Item
        function showDeleteMessage() {
            let deleteMessage = '{{ __('trans.are you sure delete this') }}';
            return confirm(deleteMessage);
        }
    </script>

    <script>
        $(document).on('change', '#selectAction', function () {
            let url = $(this).children('option:selected').attr('value');
            location.href = url;
        }) // end on change
    </script>
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
            let table = $('#supplierpayment-table');

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
    </script>
@endsection
