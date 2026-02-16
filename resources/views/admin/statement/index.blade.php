@extends('admin.layouts.master')

@section('title', __('trans.statement'))

@section('styles')
    <link rel="stylesheet" href="https://printjs-4de6.kxcdn.com/print.min.css">
    <!-- FlatPickr CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/flatpickr/flatpickr.min.css')}}">

    <style>

    </style>
@endsection

@section('title', __('trans.statement'))

@section('content')


    <!-- Start::app-content -->
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
                        <div class="card-header">
                            <div class="card-title">
                                {{ __('trans.statement') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="bd-example mb-3">
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="p-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-text text-muted"> <i class="ri-calendar-line"></i> </div>
                                                <input type="text" class="form-control statement_date" id="statement_date" placeholder="{{ __('trans.from') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="p-2">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <select id="branch_id" name="branch_id" class="form-control" data-trigger>
                                                    <option value="">{{ __('trans.branch') }}</option>
                                                    @foreach ($branch_list as $branch)
                                                        <option value="{{ $branch -> id }}">{{ $branch -> display_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <br><br>
                            <div class="show_data"></div>
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

    <script src="https://printjs-4de6.kxcdn.com/print.min.js"></script>

    <!-- Date & Time Picker JS -->
    <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>
    @vite('resources/assets/js/date&time_pickers.js')
    <script>
        let startDate,
            endDate;
        //Date range as a button

        let branch_id = $('#branch_id').val();

        $('#statement_date').flatpickr({
            mode: "range",
            dateFormat: "Y-m-d",
            onChange: function(selectedDates, dateStr, instance) {
                if (selectedDates.length === 2) {
                    const start_date = selectedDates[0];
                    const end_date = selectedDates[1];

                    startDate = `${start_date.getFullYear()}-${pad(start_date.getMonth() + 1)}-${pad(start_date.getDate())}`;
                    endDate = `${end_date.getFullYear()}-${pad(end_date.getMonth() + 1)}-${pad(end_date.getDate())}`;
                    getFilterResult(startDate, endDate);
                }
            }
        });
        function pad(number) {
            return (number < 10 ? '0' : '') + number;
        }

        function getFilterResult(start_d, end_d) {

            start_d = startDate || '';
            end_d = endDate || '';
            let branch_id = $('#branch_id').val();
            getStatementByBranchAndDate(start_d, end_d, branch_id);
        }

        $('#branch_id').on('change', function () {
            getFilterResult();
        });

        function getStatementByBranchAndDate(startDate, endDate, branchId) {
            $.ajax({
                url: "{{ route('admin.statement.table') }}",
                method: 'GET',
                data: {startDate: startDate, endDate: endDate, branchId: branchId},
                success: function (data) {
                    let show_data = $('.show_data');
                    show_data.empty();
                    show_data.html(data);
                }
            })
        }

        $(document).on('click', '#reload_btn', function () {
            getFilterResult();
        })

    </script>

@endsection
