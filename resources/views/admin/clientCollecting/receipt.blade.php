{{--
<!doctype html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- CSS Files -->
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('asset/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- RTL Files -->


    <link rel="stylesheet" href="{{ asset('asset/receipt/css/payments&collecting_receipt.css') }}">
    <style>
        @font-face {
            font-family: myFirstFont;
            src:url({{ asset('asset/fonts/sst-arabic-medium.ttf') }});
        }
        .payment_receipt
        {
            width: 90%;
            padding: 10px;
            /*margin: auto;*/
            border: 1px solid #0d0d0d;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
    <title>ايصال سند صرف الى العميل </title>
</head>
<body>
<div class="buttons_area">
    <button id="printBTN" class="btn btn-primary btn-sm btn-block" onclick="window.print()" >
        <span>طباعة <i class="fa fa-print"></i></span>
    </button>

    <a href="{{ route('admin.clientPayments.index') }}" class="btn btn-warning btn-sm btn-block">
        <span>الذهاب الى صفحة سندات صرف العملاء <i class="fa fa-backward"></i></span>
    </a>

</div>
<div class="container">
    <div class="payment_receipt">
        <div class="receipt_title" style="height: 100px;">
            <table style="width: 100%; table-layout: fixed">
                <tr>
                    <td style="width: 33.33%; text-align: right">
                        <div style="text-align: center">
                            <p>مركز الشيخ</p>
                            <p>لصيانة السيارات الاوروبية</p>
                        </div>
                    </td>
                    <td style="width: 33.33%; text-align: center">
                        <h6 class="text-center" style="font-weight: bold">سند صرف رقم {{ $collecting_data -> receipt_number ?? '-----' }}</h6>
                        <hr style="border-bottom: 1px solid #000; width: 70px; margin: auto">
                    </td>
                    <td style="width: 33.33%; text-align: left">
                        <img src="{{ asset('storage/logo.png') }}" alt="" width="150">
                    </td>
                </tr>
            </table>
        </div>
        <div class="receipt_body">
            <table style="width: 100%">
                <tr>
                    <td style="width: 30%">تم دفع مبلغ وقدره:</td>
                    <td style="width: 70%">{{ $collecting_data -> amount_paid + $collecting_data -> amount_paid_bank }} ريال</td>
                </tr>
                <tr>
                    <td style="width: 30%">عن طريق :</td>
                    <td style="width: 70%">
                        @if($collecting_data -> payment_method && $collecting_data -> payment_method_bank)

                            {{ ' جزء '. $collecting_data -> payment_method . ' و جزء ' . $collecting_data -> payment_method_bank }}

                        @elseif ($collecting_data -> payment_method)

                            {{ $collecting_data -> payment_method }}

                        @elseif($collecting_data -> payment_method_bank)

                            {{ $collecting_data -> payment_method_bank }}

                        @endif
                    </td>
                </tr>
                <tr>
                    <td>الى العميل:</td>
                    <td>{{ $collecting_data -> client -> name }}</td>
                </tr>
                <tr>
                    <td>في فرع:</td>
                    <td>{{ $collecting_data -> branch -> display_name }}</td>
                </tr>

                <tr>
                    <td>وذلك قيمة:</td>
                    <td>{{ $collecting_data -> notes ? $collecting_data -> notes : '-----------' }}</td>
                </tr>
                <tr>
                    <td>بتاريخ:</td>
                    <td>{{ $collecting_data -> created_at -> format('d/m/Y') }}</td>
                </tr>
            </table>
        </div>
        <div class="receipt_footer">
            <table style="width: 100%">
                <tr>
                    <td style="width: 50%"><h6 class="text-center" style="font-weight: bold">توقيع المستلم</h6></td>
                    <td style="width: 50%"><h6 class="text-center" style="font-weight: bold">الختم</h6></td>
                </tr>
                <tr>
                    <td style="width: 50%"><p class="text-center">..........</p></td>
                    <td style="width: 50%"><p class="text-center">..........</p></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<hr style="border-bottom: 1px solid #000; width: 20px">
<!-- Java Script Files -->
<!-- jQuery 3 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!-- Bootstrap  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{ asset('asset/receipt/js/mainReceipt.js') }}"></script>

<script>

</script>
</body>
</html>
--}}

{{--<html lang="{{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'ar' : 'en' }}" dir="{{ LaravelLocalization::getCurrentLocale() === 'ar' ? 'rtl' : 'ltr' }}">--}}

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('trans.collection receipt') . ' ' . __('trans.from client') . ' ' . $collecting_data -> client -> name }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" integrity="sha512-MqL4+Io386IOPMKKyplKII0pVW5e+kb+PI/I3N87G3fHIfrgNNsRpzIXEi+0MQC0sR9xZNqZqCYVcC61fL5+Vg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('asset/receipt/css/payments&collecting_receipt.css') }}">
    <!---->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rajdhani:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: "Rajdhani", sans-serif;
            margin: 0;
        }

        .receipt-container {
            width: 800px;
            margin: 20px auto;
            padding: 20px;
            border: 1px solid #ddd;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);

        }

        header {
            background-color: #f0f0f0;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        footer {
            padding: 10px;
            background-color: #f0f0f0;
            border-top: 1px solid #ddd;
            text-align: center;

        }
        .company-info img {
            width: 50px;
            height: 50px;
            margin-right: 10px;
        }

        h2 {
            margin-top: 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f0f0f0;
        }

        .table_no_border, .table_no_border th, .table_no_border tr, .table_no_border td
        {
            border-collapse: collapse;
            border: none;
        }

        /* Print styles */
        @media print {
            body{
                font-family: "Rajdhani", sans-serif;
                -webkit-print-color-adjust:exact !important;
                print-color-adjust:exact !important;
            }
            .receipt-container {
                width: 800px;
                height: 90vh;
                margin: 20px auto;
                padding: 20px;
                border: none!important;
                box-shadow: none!important;

            }
            .details_table
            {
                margin-bottom: 80px;
            }
            header {
                margin-bottom: 80px;
            }
            footer
            {
                position: absolute;
                bottom: 20px;
                right: 20px;
                left: 20px;
                text-align: center;
            }
            .buttons_area
            {
                visibility: hidden;
            }
        }
        /*@media print {
            header
            {
                background-color: #0a53be !important;
            }
            body {
                margin: 0;
                padding: 50px;
            }

            .receipt-container {
                width: 100%;
                margin: 0;
                padding: 0;
                border: none;
                box-shadow: none;
                position: relative;
            }

            header {
                margin-bottom: 20px;
            }

            header, footer {
                background-color: #f0553f;
            }

            table {
                border-collapse: collapse;
            }

            th, td {
                border: 1px solid #000;
            }
            footer {
                 text-align: center;
                position: absolute;
                bottom: 0;
            }
            .table_no_border, .table_no_border th, .table_no_border tr, .table_no_border td
            {
                border-collapse: collapse;
                border: none;
            }
        }*/
    </style>
</head>
<body>
<div class="buttons_area d-grid gap-2">
    <button id="printBTN" class="btn btn-primary btn-sm " onclick="window.print()" >
        <span>{{ __('trans.print') }} <i class="ri ri-printer-line"></i></span>
    </button>

    <a href="{{ route('admin.clientCollecting.index') }}" class="btn btn-warning btn-sm ">
        <span>{{ __('trans.all client collecting') }} <i class="ri-arrow-go-back-line"></i></span>
    </a>

    <a href="{{ route('admin.clientTransactions', $collecting_data -> client -> id) }}" class="btn btn-info btn-sm ">
        <span>{{ __('trans.client transactions') }} <i class="ri-arrow-go-back-line"></i></span>
    </a>

</div>
<section class="receipt-container">
    <htmlpageheader name="page-header">
        <header>
            <table class="table_no_border" width="100%">
                <tr>
                    <td width="50%">
                        <table class="table_no_border">
                            <tr>
                                <th width="20%">{{ __('trans.branch') }}</th>
                                <td width="80%">: {{ $collecting_data -> branch -> display_name }}</td>
                            </tr>
                            <tr>
                                <th width="20%">{{ __('trans.phone') }}</th>
                                <td width="80%">: {{ $collecting_data -> branch -> phone }}</td>
                            </tr>
                            @if($collecting_data -> branch -> vat_number)
                                <tr>
                                    <th width="20%">{{ __('trans.vat number') }}</th>
                                    <td width="80%">: {{ $collecting_data -> branch -> vat_number }}</td>
                                </tr>
                            @endif
                        </table>
                    </td>
                    <td width="50%" style="text-align: end"><img src="{{ asset('storage/default.png') }}" alt="" width="100"></td>
                </tr>
            </table>
        </header>
    </htmlpageheader>
    <main>
        <h3 style="text-align: center">{{ __('trans.collection receipt') . ' ' . __('trans.from client') . ' ' . $collecting_data -> client -> name }}</h3>
        <table style="width: 100%" class="details_table">
            <tr>
                <th style="width: 30%">{{ __('trans.Amount collected') }}</th>
                <td style="width: 70%">{{ $collecting_data -> amount_paid + $collecting_data -> amount_paid_bank .' '. \App\Traits\SettingTrait::getSetting()->currency}} </td>
            </tr>
            <tr>
                <th style="width: 30%">{{ __('trans.payment method') }}</th>
                <td style="width: 70%">
                    @if($collecting_data -> payment_method && $collecting_data -> payment_method_bank)

                        {{  __('trans.part') .' '. $collecting_data -> payment_method  .' '.   __('trans.and part') .' '.  $collecting_data -> payment_method_bank }}

                    @elseif ($collecting_data -> payment_method)

                        {{ $collecting_data -> payment_method }}

                    @elseif($collecting_data -> payment_method_bank)

                        {{ $collecting_data -> payment_method_bank }}

                    @endif
                </td>
            </tr>
            <tr>
                <th>{{ __('trans.from client') }}</th>
                <td>{{ $collecting_data -> client -> name }}</td>
            </tr>
            <tr>
                <th>{{ __('trans.in branch') }}</th>
                <td>{{ $collecting_data -> branch -> display_name }}</td>
            </tr>

            <tr>
                <th>{{ __('trans.this is for') }}</th>
                <td>{{ $collecting_data -> notes ? $collecting_data -> notes : '-----------' }}</td>
            </tr>
            <tr>
                <th>{{ __('trans.date') }}</th>
                <td>{{ $collecting_data -> created_at -> format('d/m/Y') }}</td>
            </tr>
        </table>

        <table class="table_no_border" style="width: 100%">
            <tr>
                <td style="width: 50%; text-align: center"><h4>{{ __('trans.client signature') }}</h4></td>
                <td style="width: 50%; text-align: center"><h4>{{ __('trans.company stamp') }}</h4></td>
            </tr>
            <tr>
                <td style="width: 50%; text-align: center"><p>..........</p></td>
                <td style="width: 50%; text-align: center"><p>..........</p></td>
            </tr>
        </table>
    </main>
    <htmlpagefooter name="page-footer">
        <footer>
            <p style="margin: 1rem !important;">Copyright &copy; {{ \Carbon\Carbon::now()->year }} {{ !empty(\App\Traits\SettingTrait::getSetting()->site_name)? \App\Traits\SettingTrait::getSetting()->site_name: '' }}. All Rights Reserved</p>
        </footer>
    </htmlpagefooter>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>
