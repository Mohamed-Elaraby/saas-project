<!doctype html>
<html lang="{{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'ar' : 'en' }}" dir="{{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>supplier transactions</title>
    <style>
        /* General styles */
        body {
            font-family: Arial, sans-serif;
        }

        /* Header styles */
        header {
            text-align: center;
            /*padding: 20px;*/
            border-bottom: 1px solid #ccc;
        }

        header img {
            max-width: 100px;
        }


        #supplier_info_table, #supplier_info_table th, #supplier_info_table tr, #supplier_info_table td{
            border: none;
            text-align: left;
        }

        /* Table styles */
        #supplier_transaction_table  {
            width: 100%;
            border-collapse: collapse;
        }

        #supplier_transaction_table th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        #supplier_transaction_table th {
            background-color: #f2f2f2;
        }
        @if( LaravelLocalization::getCurrentLocale() == 'ar')

        #supplier_info_table, #supplier_info_table th, #supplier_info_table td,
        #supplier_transaction_table, #supplier_transaction_table th, #supplier_transaction_table td
        {
            text-align: right;
            direction: rtl;
        }

        @endif
        /* Footer styles */
        footer {
            text-align: center;
            /*padding: 10px;*/
            border-top: 1px solid #ccc;
        }

        @page {
            header: page-header;
            footer: page-footer;
        }
    </style>
</head>
<body>
<htmlpageheader name="page-header">
    <header>
        @php
            $profile_picture_path = \App\Traits\SettingTrait::getSetting() -> image_name == 'default.png' ? 'storage' .DIRECTORY_SEPARATOR. 'default.png' : 'storage' .DIRECTORY_SEPARATOR.\App\Traits\SettingTrait::getSetting() -> image_path.DIRECTORY_SEPARATOR. \App\Traits\SettingTrait::getSetting() -> image_name;
        @endphp
{{--        <img src="{{ asset($profile_picture_path)}}" alt="" class="profile-img">--}}
        <img src="{{ $profile_picture_path }}" alt="" class="profile-img">
        <h2>{{ !empty(\App\Traits\SettingTrait::getSetting()->site_name)? \App\Traits\SettingTrait::getSetting()->site_name: '' }}</h2>
        <p>{{ !empty(\App\Traits\SettingTrait::getSetting()->description )? \App\Traits\SettingTrait::getSetting()->description : '' }}</p>
    </header>
</htmlpageheader>
<main>
    <table id="supplier_info_table">
        <tr>
            <th>{{ __('trans.name') }}</th>
            <td>: {{ $supplier -> name }}</td>
        </tr>
        <tr>
            <th>{{ __('trans.balance') }}</th>
            <td>: {{ $supplier -> balance . ' ' . \App\Traits\SettingTrait::getSetting()->currency}}</td>
        </tr>
        <tr>
            <th>{{ __('trans.issue date') }}</th>
            <td>: {{ \Carbon\Carbon::now()->format('d/m/Y') }}</td>
        </tr>

        <tr>
            <th>{{ __('trans.statement period') }}</th>
            <td>: {{ $start_date ? __('trans.from').'  '.$start_date : '' }} {{ $end_date ? __('trans.to').'  '.$end_date : '' }}</td>
        </tr>
    </table>

    <table id="supplier_transaction_table">

        <tr>
            <th>{{ __('trans.date') }}</th>
            <th>{{ __('trans.details') }}</th>
            <th>{{ __('trans.debit') }}</th>
            <th>{{ __('trans.credit') }}</th>
            <th>{{ __('trans.balance') }}</th>
        </tr>

        @foreach ($supplier_transaction as $transaction)
            <tr>
                <td>{{ $transaction -> transaction_date }}</td>
                <td>{{ $transaction -> details }}</td>
                <td>{{ $transaction -> debit }}</td>
                <td>{{ $transaction -> credit }}</td>
                <td>{{ $transaction -> supplier_balance }}</td>
            </tr>
        @endforeach
        <tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr><tr>
            <td>25-03-2024</td>
            <td>oifjgohrfghjorgnorfgiu</td>
            <td></td>
            <td>1752</td>
            <td>17900</td>
        </tr>
    </table>
</main>
<htmlpagefooter name="page-footer">
    <footer>
        <p>Copyright &copy; {{ \Carbon\Carbon::now()->year }} {{ !empty(\App\Traits\SettingTrait::getSetting()->site_name)? \App\Traits\SettingTrait::getSetting()->site_name: '' }}. All Rights Reserved
        </p>
    </footer>
</htmlpagefooter>
</body>
</html>
