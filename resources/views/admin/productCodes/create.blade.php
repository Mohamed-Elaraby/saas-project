@extends('admin.layouts.master')

@section('title', __('trans.product code'))

@section('styles')

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
                            <div class="d-flex justify-content-center mb-3">
                                <button class="btn btn-primary" id="addNewRow">اضافة صف جديد</button>
                            </div>
                            <form action="{{ route('admin.productCodes.store') }}" method="POST">
                                @method('POST')
                                @csrf
                                <table class="table table-bordered mb-3">
                                    <thead>
                                    <th></th>
                                    <th></th>
                                    <th>{{ __('trans.product code') }}</th>
                                    <th>{{ __('trans.product name') }}</th>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>
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
    <script>
        $(document).ready(function () {
            let tableContent,
                selectedRow,
                count = 1;
            $('#addNewRow').on('click', function () {

                tableContent =
                    '<tr>\n' +
                    '    <td>\n' +
                    '       <div class="btn btn-danger remove_row"><i class="ri ri-delete-bin-line"></i></div> \n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '       <div class="btn btn-info">'+ count +'</div> \n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <input class="code form-control" type="text" name="data['+ count +'][code]" id="code_'+ count +'">\n' +
                    '    </td>\n' +
                    '    <td>\n' +
                    '        <input class="name form-control" type="text" name="data['+ count +'][name]" id="name_'+ count +'">\n' +
                    '    </td>\n' +
                    '</tr>';
                $('table tbody').prepend(tableContent);
                count ++
            })

            $(document).on('click', '.remove_row', function () {
                selectedRow = $(this).closest('tr');
                selectedRow.remove();
            })

        })
    </script>
@endsection
