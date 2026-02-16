        <div class="model_area">
            <div class="modal fade" id="modal-default">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title text-center">تعديل تفاصيل الكارت</h4>
                        </div>
                        <div class="modal-body card_details_content"></div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">{{ __('trans.close') }}</button>
                            <button type="button" class="btn btn-default" id="update_button" style="display: none" data-dismiss="modal">{{ __('trans.update') }}</button>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            <!-- /.modal -->
        </div>

        <div class="buttons_area">
            <div class="d-flex justify-content-center mb-3">
                <button id="reload_btn" class="btn btn-primary btn-sm btn-block m-1" type="reset">{{ __('trans.reload') }} <i class="ri-loop-right-line"></i></button>
                <a target="_blank" href="{{ route('admin.statement.print', ['startDate'=>$startDate, 'endDate'=>$endDate, 'branchId'=> $branch->id, 'download' => true]) }}"
                   class="btn btn-success btn-sm btn-block m-1">
                    <span>{{ __('trans.download') }} <i class="ri ri-download-line"></i></span>
                </a>
                <a target="_blank" href="{{ route('admin.statement.print', ['startDate'=>$startDate, 'endDate'=>$endDate, 'branchId'=> $branch->id]) }}"
                   class="btn btn-warning btn-sm btn-block m-1">
                    <span>{{ __('trans.pdf') }} <i class="ri ri-file-pdf-line"></i></span>
                </a>
                <button
                    id="statement_print"
                    class="btn btn-info btn-sm btn-block m-1"
                    data-link="{{ route('admin.statement.print', ['startDate'=>$startDate, 'endDate'=>$endDate, 'branchId'=> $branch->id]) }}"
                    href="javascript:void(0);"
                    onclick="printJS($(this).data('link'))"
                >
                    <span>{{ __('trans.print') }} <i class="ri ri-printer-line"></i></span>
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="text-center table text-nowrap table-bordered table-sm table-hover">
                <colgroup>
                    <col span="1">
                    <col span="2" style="background-color: rgba(255,255,255,0.11)">
                    <col span="1">
                    <col span="2" style="background-color: rgba(255,255,255,0.11)">
                    <col span="2">
                    <col span="4" style="background-color: rgba(255,255,255,0.11)">
                    <col span="3">
                </colgroup>

                <thead>
                <tr>
                    <th colspan="16">
                        {{ __('trans.statement') }}
                        [ {{ $branch -> display_name }} ]
                        {{ __('trans.statement period') }}
                        {{ __('trans.from') }}
                        [ {{ \Carbon\Carbon::parse($startDate)->dayName . ' ' . $startDate }} ]
                        {{ __('trans.to') }}
                        [ {{ \Carbon\Carbon::parse($endDate)->dayName . ' ' . $endDate }} ]


                        <input type="hidden" id="start_date" value="{{ $startDate }}">
                        <input type="hidden" id="end_date" value="{{ $endDate }}">
                        <input type="hidden" id="branch_id" value="{{ $branch -> id }}">
                    </th>
                </tr>
                <tr>
                    <th rowspan="2">{{ __('trans.statement') }}</th>
                    <th colspan="2">{{ __('trans.advances and salaries') }}</th>
                    <th rowspan="2">{{ __('trans.cash to administration') }}</th>
                    <th colspan="2">{{ __('trans.financial custody from the administration') }}</th>
                    <th colspan="2">{{ __('trans.expenses') }}</th>
                    <th colspan="4" class="card_details_title">{{ __('trans.card details') }}</th>
                    <th colspan="3">{{ __('trans.incoming') }}</th>
                    <th colspan="1"></th>
                </tr>
                <tr>
                    <td>{{ __('trans.cash') }}</td>
                    <td>{{ __('trans.network') }}</td>

                    <td>{{ __('trans.cash') }}</td>
                    <td>{{ __('trans.network') }}</td>

                    <td>{{ __('trans.cash') }}</td>
                    <td>{{ __('trans.network') }}</td>

                    <td>{{ __('trans.hand labour') }}</td>
                    <td>{{ __('trans.new parts') }}</td>
                    <td>{{ __('trans.used parts') }}</td>
                    <td>{{ __('trans.vat') }}</td>

                    <td>{{ __('trans.cash') }}</td>
                    <td>{{ __('trans.network') }}</td>
                    <td>{{ __('trans.transfer') }}</td>
                    <td></td>
                </tr>

                </thead>
                <tbody>
                @foreach($statements as $statement)
                    <tr id="{{ $statement -> id }}">

                        <td>{{ $statement -> notes }}</td>
                        <td>{{ $statement -> advances_and_salaries_cash }}</td>
                        <td>{{ $statement -> advances_and_salaries_network }}</td>
                        <td>{{ $statement -> cash_to_administration }}</td>
                        <td>{{ $statement -> custody_administration_cash }}</td>
                        <td>{{ $statement -> custody_administration_network }}</td>
                        <td>{{ $statement -> expenses_cash }}</td>
                        <td>{{ $statement -> expenses_network }}</td>
                        <td class="card_details_item hand_labour_edit">{{ $statement -> card_details_hand_labour }}</td>
                        <td class="card_details_item new_parts_edit">{{ $statement -> card_details_new_parts }}</td>
                        <td class="card_details_item used_parts_edit">{{ $statement -> card_details_used_parts }}</td>
                        <td class="card_details_item tax_edit">{{ $statement -> card_details_tax }}</td>
                        <td class="imports_cash">{{ $statement -> imports_cash }}</td>
                        <td class="imports_network">{{ $statement -> imports_network }}</td>
                        <td class="imports_bank_transfer">{{ $statement -> imports_bank_transfer }}</td>
                        <td>
{{--                            {{ dd($statement -> imports_cash, $statement -> imports_network ,$statement -> imports_bank_transfer) }}--}}
                            @if($statement -> card_details_hand_labour || $statement -> card_details_new_parts || $statement -> card_details_used_parts || $statement -> card_details_tax)
                                <i class="fa fa-edit card_details_edit" data-toggle="modal" data-target="#modal-default"></i>
                            @endif
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <th rowspan="2">{{ __('trans.total') }}</th>
                    <th>{{ $total_advances_and_salaries_cash_formatted }}</th>
                    <th>{{ $total_advances_and_salaries_network_formatted }}</th>
                    <th rowspan="2">{{ $total_cash_to_administration_formatted }}</th>
                    <th>{{ $total_custody_administration_cash_formatted }}</th>
                    <th>{{ $total_custody_administration_network_formatted }}</th>
                    <th>{{ $total_expenses_cash_formatted }}</th>
                    <th>{{ $total_expenses_network_formatted }}</th>
                    <th>{{ $total_card_details_hand_labour_formatted }}</th>
                    <th>{{ $total_card_details_new_parts_formatted }}</th>
                    <th>{{ $total_card_details_used_parts_formatted }}</th>
                    <th>{{ $total_card_details_tax_formatted }}</th>
                    <th>{{ $total_imports_cash_formatted }}</th>
                    <th>{{ $total_imports_network_formatted }}</th>
                    <th>{{ $total_imports_bank_transfer_formatted }}</th>
                    <th></th>
                </tr>

                <tr>
                    <th colspan="2">{{ $total_advances_and_salaries_formatted }}</th>
                    <th colspan="2">{{ $total_custody_administration_formatted }}</th>
                    <th colspan="2">{{ $total_expenses_formatted }}</th>
                    <th colspan="4">{{ $total_card_details_formatted }}</th>
                    <th colspan="3">{{ $total_imports_formatted }}</th>
                    <th colspan="1"></th>
                </tr>
                </tbody>
            </table>
        </div>

        <br><br>


        <div class="row">
            <div class="d-flex justify-content-center mb-3">
                <div class="col-sm-6">
                    <div class="table-responsive">
                        <table class="text-center table text-nowrap table-bordered table-sm table-hover">
                            <tbody>
                            <tr>
                                <th colspan="2">
                                    {{ __('trans.statement') }}
                                    [ {{ $branch -> display_name }} ]
                                    {{ __('trans.statement period') }}
                                    {{ __('trans.from') }}
                                    [ {{ \Carbon\Carbon::parse($startDate)->dayName . ' ' . $startDate }} ]
                                    {{ __('trans.to') }}
                                    [ {{ \Carbon\Carbon::parse($endDate)->dayName . ' ' . $endDate }} ]
                                </th>
                            </tr>
                            <tr>
                                <td width="70%">{{ __('trans.previous balance') }}</td>
                                <td width="30%">{{ $money_safe_opening_balance_formatted }}</td>
                            </tr>
                            <tr>
                                <td width="70%">{{ __('trans.total incoming') }}</td>
                                <td width="30%">{{ $total_imports_cash_formatted }}</td>
                            </tr>
                            <tr>
                                <td width="70%">{{ __('trans.financial custody from the administration') }}</td>
                                <td width="30%">{{ $total_custody_administration_formatted }}</td>
                            </tr>
                            <tr>
                                <td width="70%">{{ __('trans.expenses') }}</td>
                                <td width="30%">{{ $total_expenses_formatted }}</td>
                            </tr>
                            <tr>
                                <td width="70%">{{ __('trans.advances and salaries') }}</td>
                                <td width="30%">{{ $total_advances_and_salaries_cash_formatted }}</td>
                            </tr>
                            <tr>
                                <td width="70%">{{ __('trans.cash to administration') }}</td>
                                <td width="30%">{{ $total_cash_to_administration_formatted }}</td>
                            </tr>
                            <tr>
                                <td width="70%">{{ __('trans.bank and transfer and network') }}</td>
                                <td width="30%">{{ $total_bank_transfer_and_network_formatted }}</td>
                            </tr>
                            <tr>
                                <td width="70%">{{ __('trans.current balance') }}</td>
                                <td width="30%"> {{ $current_balance_formatted }} </td>
                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
