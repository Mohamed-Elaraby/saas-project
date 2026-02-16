<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>يومية</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
    }
    .container {
        padding-right: 15px;
        padding-left: 15px;
        margin-right: auto;
        margin-left: auto;
    }
    @media (min-width: 768px) {
        .container {
            width: 750px;
        }
    }
    @media (min-width: 992px) {
        .container {
            width: 970px;
        }
    }
    @media (min-width: 1200px) {
        .container {
            width: 1170px;
        }
    }
    .items, .items th, .items td,
    .notes_table, .notes_table th, .notes_table td
    {
        border: #0a0a0a 1px solid;
        border-collapse: collapse;
    }
    .footer-info td{
        padding-left: 10px;
    }
    .lightgrey
    {
        background-color: lightgrey;
    }
    .report-container {
        page-break-after:always;
    }
    .repair_order
    {
        padding: 5px 2px;
        border: 1px solid #000;
        text-align: center;
        width: 200px;
        margin: 0 auto;
    }
    body {

        /*direction: rtl;*/
        font-size: 10px;
    }
    .no_wrapping
    {
        white-space: nowrap;
    }
    @page {
        header: page-header;
        footer: page-footer;
    }
</style>
<body>

<htmlpageheader name="page-header">
    <div class="header">
        <h2 class="lightgrey" style="text-align: center">
            {{ __('trans.statement') }}
            [ {{ $branch -> display_name }} ]
            {{ __('trans.statement period') }}
            {{ __('trans.from') }}
            [ {{ \Carbon\Carbon::parse($startDate)->dayName . ' ' . $startDate }} ]
            {{ __('trans.to') }}
            [ {{ \Carbon\Carbon::parse($endDate)->dayName . ' ' . $endDate }} ]
        </h2>
    </div>
</htmlpageheader>

<div class="body_content">
    <div class="container">
        <table border="1" width="100%" style="font-size: 20px">

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
                <th rowspan="2">{{ __('trans.statement') }}</th>
                <th colspan="2">{{ __('trans.advances and salaries') }}</th>
                <th rowspan="2">{{ __('trans.cash to administration') }}</th>
                <th colspan="2">{{ __('trans.financial custody from the administration') }}</th>
                <th colspan="2">{{ __('trans.expenses') }}</th>
                <th colspan="4" class="card_details_title">{{ __('trans.card details') }}</th>
                <th colspan="3">{{ __('trans.incoming') }}</th>
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

            </tr>

            </thead>
            <tbody>
                @foreach($statements as $statement)
                    <tr>
                        <td class="no_wrapping">{{ $statement -> notes }}</td>
                        <td>{{ $statement -> advances_and_salaries_cash }}</td>
                        <td>{{ $statement -> advances_and_salaries_network }}</td>
                        <td>{{ $statement -> cash_to_administration }}</td>
                        <td>{{ $statement -> custody_administration_cash }}</td>
                        <td>{{ $statement -> custody_administration_network }}</td>
                        <td>{{ $statement -> expenses_cash }}</td>
                        <td>{{ $statement -> expenses_network }}</td>
                        <td>{{ $statement -> card_details_hand_labour }}</td>
                        <td>{{ $statement -> card_details_new_parts }}</td>
                        <td>{{ $statement -> card_details_used_parts }}</td>
                        <td>{{ $statement -> card_details_tax }}</td>
                        <td>{{ $statement -> imports_cash }}</td>
                        <td>{{ $statement -> imports_network }}</td>
                        <td>{{ $statement -> imports_bank_transfer }}</td>
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
                </tr>

                <tr>
                    <th colspan="2">{{ $total_advances_and_salaries_formatted }}</th>
                    <th colspan="2">{{ $total_custody_administration_formatted }}</th>
                    <th colspan="2">{{ $total_expenses_formatted }}</th>
                    <th colspan="4">{{ $total_card_details_formatted }}</th>
                    <th colspan="3">{{ $total_imports_formatted }}</th>

                </tr>
            </tbody>
        </table>
        <div style="page-break-after: always;"></div> <!-- page break -->

        <table border="1" width="100%" style="font-size: 20px; background-color:#aeaeae">
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

<htmlpagefooter name="page-footer">
{{--    <hr style="border-top: 1px solid #000">--}}
    <div class="footer-info" style=" margin-top: 10px; ">
        Page {PAGENO} of {nb}
    </div>
</htmlpagefooter>
</body>
</html>
