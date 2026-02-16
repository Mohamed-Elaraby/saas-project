@extends('admin.layouts.master')

@section('title', __('trans.create purchase order'))

@section('styles')

@endsection

@section('content')
    @php($current_currency = \App\Traits\SettingTrait::getSetting()->currency )
    @php($current_vat = \App\Traits\SettingTrait::getSetting()->vat )
    <input type="hidden" id="current_currency" value="{{ $current_currency }}">
    <input type="hidden" id="vat_percentage" value="{{ $current_vat }}">
    <input type="hidden" id="amount_paid_in_money_safe_place_holder" value="{{ __('trans.amount paid') }}">
    <input type="hidden" id="amount_paid_in_bank_place_holder" value="{{ __('trans.amount paid in bank') }}">
    <input type="hidden" id="discount_amount_placeholder" value="{{ __('trans.discount amount') }}">
    <input type="hidden" id="amount_due_placeholder" value="{{ __('trans.amount due') }}">
    <input type="hidden" id="rounding_placeholder" value="{{ __('trans.rounding') }}">
    <input type="hidden" id="cancel_rounding_placeholder" value="{{ __('trans.cancel rounding') }}">
    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Start::row-1 -->

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form id="purchaseOrders" action="{{ route('admin.purchaseOrders.store') }}" method="POST">
                @method('POST')
                @csrf
                <input type="hidden" name="supplier_id" id="supplier_id" value="{{ request('supplier_id') }}">
                <div class="row">
                    <div class="col-xl-9">
                        <div class="card custom-card">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-header d-md-flex d-block mb-3">
                                <div class="h5 mb-0 d-sm-flex d-block align-items-center">
                                    <div class="ms-sm-2 ms-0 mt-sm-0 mt-2">

                                        <select required name="branch_id" id="branch_id" class="form-control branch_id" data-trigger>
                                            @foreach ($branches as $branch)
                                                <option value="{{ $branch -> id }}"> {{ $branch -> display_name }} </option>
                                            @endforeach
                                        </select>

                                    </div>

                                </div>
                                <div class="ms-auto mt-md-0 mt-2">
                                    <button class="btn btn-sm btn-primary me-2">Save As PDF<i class="ri-file-pdf-line ms-1 align-middle d-inline-block"></i></button>
                                    <button class="btn btn-sm btn-icon btn-secondary-light me-2"><i class="bi bi-plus-lg"></i></button>
                                    <button class="btn btn-sm btn-icon btn-success-light me-2"><i class="bi bi-download"></i></button>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="row gy-3">
                                            <div class="col-xl-4">
                                                <label for="invoice_number" class="form-label">{{ __('trans.invoice number') }}</label>
                                                <input type="text" class="form-control invoice_number" id="invoice_number" name="invoice_number" placeholder="{{ __('trans.invoice number') }}: #SPTA47512151" required>
                                            </div>
                                            <div class="col-xl-4">
                                                <label for="invoice_date" class="form-label">{{ __('trans.invoice date') }}</label>
                                                <input type="text" class="form-control invoice_date" id="invoice_date" name="invoice_date" placeholder="{{ __('trans.choose date') }}" required>
                                            </div>
                                            <div class="col-xl-4">
                                                <label for="invoice-due-amount" class="form-label">{{ __('trans.supplier balance') }}</label>
                                                <input type="text" class="form-control" id="invoice-due-amount" placeholder="Enter Amount" value="{{ $target_supplier -> balance . ' ' . $current_currency}}" disabled>
                                            </div>
                                            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                                <p class="dw-semibold mb-2">
                                                    Billing From :
                                                </p>
                                                <div class="row gy-2">
                                                    <div class="col-xl-12">
                                                        <input type="text" class="form-control" id="Company-Name" placeholder="Company Name" value="{{ $target_supplier -> name }}" disabled>
                                                    </div>
                                                    <div class="col-xl-12">
                                                        <input type="text" class="form-control" id="company-phone" placeholder="Phone Number" value="{{ $target_supplier -> phone }}" disabled>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="table-responsive">
                                            <div class="purchase_order_products">
                                                <table class="table nowrap text-nowrap table-sm border mt-3" id="purchase_order_products">
                                                    <thead>
                                                    <tr>
                                                        <th>ACTION</th>
                                                        <th>{{ __('trans.code') }}</th>
                                                        <th>{{ __('trans.product') }}</th>
                                                        <th>{{ __('trans.category') }}</th>
                                                        <th>{{ __('trans.quantity') }}</th>
                                                        <th>{{ __('trans.price') }}</th>
                                                        <th>{{ __('trans.amount taxable') }}</th>
                                                        <th>{{ __('trans.discount') }}</th>
                                                        @php($vat = \App\Traits\SettingTrait::getSetting()->vat ? ' ( ' .\App\Traits\SettingTrait::getSetting()->vat. '% )' : ' NV')
                                                        <th class="{{ \App\Traits\SettingTrait::getSetting()->vat == null ? 'text-decoration-line-through': '' }}">{{ __('trans.vat'). $vat }}</th>
                                                        <th>{{ __('trans.total including vat') }}</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    {{--                                                <tr>
                                                                                                        <td>
                                                                                                            <input type="text" class="form-control" placeholder="Enter Product Name">
                                                                                                        </td>
                                                                                                        <td>
                                                                                                            <textarea rows="1" class="form-control" placeholder="Enter Description"></textarea>
                                                                                                        </td>
                                                                                                        <td class="invoice-quantity-container">
                                                                                                            <div class="input-group border rounded flex-nowrap">
                                                                                                                <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-minus"><i class="ri-subtract-line"></i></button>
                                                                                                                <input type="text" class="form-control form-control-sm border-0 text-center w-100" aria-label="quantity" id="product-quantity4" value="1">
                                                                                                                <button class="btn btn-icon btn-primary input-group-text flex-fill product-quantity-plus"><i class="ri-add-line"></i></button>
                                                                                                            </div>
                                                                                                        </td>
                                                                                                        <td><input class="form-control" placeholder="" type="text" value="$25.00"></td>
                                                                                                        <td><input class="form-control" placeholder="" type="text" value="$100.00"></td>
                                                                                                        <td><input class="form-control" placeholder="" type="text" value="$25.00"></td>
                                                                                                        <td><input class="form-control" placeholder="" type="text" value="$100.00"></td>
                                                                                                        <td><input class="form-control" placeholder="" type="text" value="$100.00"></td>
                                                                                                        <td><input class="form-control" placeholder="" type="text" value="$100.00"></td>
                                                                                                        <td>
                                                                                                            <button class="btn btn-sm btn-icon btn-danger-light"><i class="ri-delete-bin-5-line"></i></button>
                                                                                                        </td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="10" class="border-bottom-0"><a class="btn btn-light" href="javascript:void(0);"><i class="bi bi-plus-lg"></i> Add Product</a></td>
                                                                                                    </tr>
                                                                                                    <tr>
                                                                                                        <td colspan="8"></td>
                                                                                                        <td colspan="2">
                                                                                                            <table class="table table-sm text-nowrap mb-0 table-borderless">
                                                                                                                <tbody>
                                                                                                                <tr>
                                                                                                                    <th scope="row">
                                                                                                                        <div class="fw-medium">Sub Total :</div>
                                                                                                                    </th>
                                                                                                                    <td>
                                                                                                                        <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$1,482.08">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <th scope="row">
                                                                                                                        <div class="fw-medium">Avail Discount :</div>
                                                                                                                    </th>
                                                                                                                    <td>
                                                                                                                        <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$13.00">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <th scope="row">
                                                                                                                        <div class="fw-medium">Coupon Discount <span class="text-success">(12%)</span> :</div>
                                                                                                                    </th>
                                                                                                                    <td>
                                                                                                                        <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$115.00">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <th scope="row">
                                                                                                                        <div class="fw-medium">Vat <span class="text-danger">(15%)</span> :</div>
                                                                                                                    </th>
                                                                                                                    <td>
                                                                                                                        <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$211.00">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <th scope="row">
                                                                                                                        <div class="fw-medium">Due Till Date :</div>
                                                                                                                    </th>
                                                                                                                    <td>
                                                                                                                        <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$0.00">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                <tr>
                                                                                                                    <th scope="row">
                                                                                                                        <div class="fs-14 fw-medium">Total :</div>
                                                                                                                    </th>
                                                                                                                    <td>
                                                                                                                        <input type="text" class="form-control invoice-amount-input" placeholder="Enter Amount" value="$1,355.08">
                                                                                                                    </td>
                                                                                                                </tr>
                                                                                                                </tbody>
                                                                                                            </table>
                                                                                                        </td>
                                                                                                    </tr>--}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div>
                                            <label for="notes" class="form-label">{{ __('trans.notes') }}:</label>
                                            <textarea name="notes" class="form-control" id="notes" rows="3" placeholder="After the accounts payable team has verified and recorded the invoice, the final step is to submit it for approval before initiating the payment release."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-end">
                                <button name="soft_save" type="submit" class="btn btn-warning m-1">{{ __('trans.save as draft') }}<i class="ri-sticky-note-add-line ms-1 align-middle d-inline-block"></i></button>
                                <button name="final_save" type="submit" class="btn btn-primary m-1">{{ __('trans.issuing the final invoice') }}<i class="ri-sticky-note-add-fill ms-1 align-middle d-inline-block"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3">
                        <div class="card custom-card">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-header">
                                <div class="card-title">
                                    {{ __('trans.all products') }}
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="product_codes">
                                            <div class="table-responsive table-bordered">
                                                <table class="table text-nowrap table-sm table-bordered table-striped table-hover">
                                                    <thead class="table-info">
                                                    <tr>
                                                        <th scope="col">{{ __('trans.product code') }}</th>
                                                        <th scope="col">{{ __('trans.product name') }}</th>
                                                        <th></th>
                                                    </tr>
                                                    </thead>
                                                    <tbody id="product_code" class="product_code"></tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-header">
                                <div class="card-title">
                                    Total Bill
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">
                                        <div class="table-responsive">
                                            <table class="table text-nowrap table-sm table-borderless table-hover">
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="fw-medium">{{ __('trans.sub total') }} :</div>
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control invoice-amount-input total" name="total" id="total" placeholder="00.00 {{ $current_currency}}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="fw-medium">{{ __('trans.discount') }}  :</div>
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control invoice-amount-input discount" name="discount" id="discount" placeholder="00.00 {{ $current_currency}}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="fw-medium">{{ __('trans.amount taxable') }}  :</div>
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control invoice-amount-input taxable_amount" name="taxable_amount" id="taxable_amount" placeholder="00.00 {{ $current_currency}}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="fw-medium">{{ __('trans.vat') }} <span class="text-danger {{ empty($current_vat) ? 'text-decoration-line-through' : '' }}">{{ $current_vat ? '('. $current_vat . '%)': 'NV' }}</span> :</div>
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control invoice-amount-input total_vat" name="total_vat" id="total_vat" placeholder="00.00 {{ $current_vat}}" readonly>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th scope="row">
                                                    <div class="fw-medium">{{ __('trans.total amount due') }} :</div>
                                                </th>
                                                <td>
                                                    <div class="input-group">
                                                        <input type="text" class="form-control invoice-amount-input total_amount_due" name="total_amount_due" id="total_amount_due" placeholder="00.00 {{ $current_currency}}" readonly>
                                                        <button id="rounding_amount" class="btn btn-sm btn-success me-2">{{ __('trans.rounding') }}</button>
                                                    </div>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card custom-card">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-header">
                                <div class="card-title">
                                    Payment Methods
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row gy-3">
                                    <div class="col-xl-12">

                                        <div class="col-xs-12 col-custom-style">
                                            <div class="form-group">
                                                <input class="form-check-input supplier_discount_button" type="checkbox" id="supplier_discount_button">
                                                <label for="form-check-label supplier_discount_button">{{ __('trans.supplier discount') }}</label>
                                            </div>
                                            <div class="supplier_discount_container"></div>
                                            <span id="supplier_discount_error" style="color: red; display: none"></span>
                                        </div>

                                        <div class="form-check">
                                            <input class="form-check-input payment_method" type="checkbox" name="payment_method" id="cash" value="كاش">
                                            <label class="form-check-label" for="cash"> {{ __('trans.cash') }} </label>
                                        </div>

                                        <div class="form-group">
                                            <input class="form-check-input payment_method" type="checkbox" name="payment_method_bank" id="bank_transfer" value="bank_transfer">
                                            <label class="form-check-label" for="bank_transfer">{{ __('trans.bank transfer') }}</label>

                                            <input class="form-check-input payment_method" type="checkbox" name="payment_method_bank" id="network" value="network">
                                            <label class="form-check-label" for="network">{{ __('trans.network') }}</label>

                                            <input class="form-check-input payment_method" type="checkbox" name="payment_method_bank" id="other" value="other">
                                            <label class="form-check-label" for="other">{{ __('trans.other') }}</label>
                                        </div>
                                        <span id="payment_method_error" style="color: red; display: none"></span>
                                    </div>

                                    <div class="col-xl-12">
                                        <table class="table table-sm text-nowrap mb-0 table-borderless">
                                            <tbody>
                                            <tr>
                                                <th scope="row">
                                                    <div class="fw-medium">{{ __('trans.amount due') }} :</div>
                                                </th>
                                                <td>
                                                    <input type="text" class="form-control invoice-amount-input amount_due" name="amount_due" id="amount_due" placeholder="00.00 {{ $current_currency}}" readonly>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="amounts_group_field"></div>
                                    <div class="col-xl-12">
                                        <div class="alert alert-success" role="alert">
                                            Please pay the invoice within 30 days.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <!--End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->

@endsection

@section('scripts')

    <!-- Calculator Script -->
    <script src="{{ asset('js/purchase_order_calculatorScript.js') }}"></script>
    <!-- includes files -->
    <script src="{{ asset('js/includes/global_js_functions.js') }}"></script>
    <!-- supplier discount -->
    <script src="{{ asset('js/includes/purchase_order/create/supplier_discount.js') }}"></script>
    <!-- jquery_validation -->
    <script src="{{ asset('js/includes/purchase_order/create/jquery_validation.js') }}"></script>
    <!-- create payment method -->
    <script src="{{ asset('js/includes/purchase_order/create/create_payment_method.js') }}"></script>
    <!-- create payment method bank -->
    <script src="{{ asset('js/includes/purchase_order/create/create_payment_method_bank.js') }}"></script>
    <!-- Compare the total amount due and the supplier discount -->
    <script src="{{ asset('js/includes/purchase_order/create/compare_total_amount_due_and_supplier_discount.js') }}"></script>
    <!-- Prevent Double Submission Form -->
{{--    <script src="{{ asset('js/preventDoubleSubmissionForm.js') }}"></script>--}}

    <!-- Date & Time Picker JS -->
    <script src="{{asset('build/assets/libs/flatpickr/flatpickr.min.js')}}"></script>

    <!-- Internal Create Invoice JS -->
    @vite('resources/assets/js/create-invoice.js')
    <script >
        flatpickr('#invoice_date', {
            defaultDate: new Date()
        });
    </script>

    <script>
        $(document).ready(function () {

            $(document).on('keyup change', '#amount_paid, #amount_paid_bank, #branch_id, input[name="payment_method"], input[name="payment_method_bank"]', function () {
                let branch_id = $('#branch_id').val();
                if (branch_id)
                {
                    getPaymentMethod();
                }else
                {
                    $('#amount_paid_error').removeClass('hasError').css('display','none').text();
                    $('#amount_paid_bank_error').removeClass('hasError').css('display','none').text();
                }
            })

            // check if amount paid larger than money in safe money
            function getPaymentMethod() {
                let branch_id = $('#branch_id').val();
                let amount_paid = 0 ;
                let amount_paid_bank = 0 ;
                if (branch_id)
                {
                    if ($('input[name="payment_method"]').is(':checked'))
                    {
                        amount_paid = $('input[name="amount_paid"]').val() || 0;
                    }
                    if ($('input[name="payment_method_bank"]:checked').length > 0)
                    {
                        amount_paid_bank = $('#amount_paid_bank').val() || 0;
                    }
                    // ajax call to send search keyword to get all records like this keyword exception exceptCodes and append result to product_code area
                    $.ajax({
                        url: "{{ route('admin.purchaseOrder.check_amount_from_moneySafe_and_bank') }}",
                        method: 'GET',
                        data: {branch_id: branch_id, amount_paid: amount_paid, amount_paid_bank: amount_paid_bank},
                        success: function (data) {

                            if(amount_paid > data.safe_money_amount)
                            {
                                let messageError = '{{ __('trans.the amount in the safe is not enough') }}';
                                $('#amount_paid_error').addClass('hasError').css('display','inline').text(messageError);
                            }
                            else
                            {
                                $('#amount_paid_error').removeClass('hasError').css('display','none').text();

                            }
                            if(amount_paid_bank > data.bank_amount)
                            {
                                let messageError = '{{ __('trans.the amount in the bank is not enough') }}';
                                $('#amount_paid_bank_error').addClass('hasError').css('display','inline').text(messageError);
                            }
                            else
                            {
                                $('#amount_paid_bank_error').removeClass('hasError').css('display','none').text();

                            }
                        }
                    })
                }
            }

        })
    </script>

    <script>

        $(document).ready(function () {

            //Initialize Select2 Elements
            // $('.select2').select2()

            // ajax setup
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // set datepicker
            // $("#invoice_date").datepicker().datepicker("setDate", new Date());

            getAllProductsInBranch();

            // get all product codes from elements id to excepted records code equal ids coming from database
            function getAllProductsInBranch (keyword = '')
            {
                let html,
                    search,
                    count,
                    productRow,
                    productCode,
                    productName,
                    productPrice,
                    productQuantity,
                    content;


                // ajax call to send search keyword to get all records like this keyword exception exceptCodes and append result to product_code area
                $.ajax({
                    url: "{{ route('admin.search_product_code') }}",
                    method: 'GET',
                    data: {keyword: keyword},
                    success: function (data) {

                        $('#product_code').empty();
                        html = '';

                        $.each(data.result, function (index, element) {
                            let elementCode = element.code.replaceAll(' ', '_');
                            html +=     '<tr>\n' +
                                '    <td class="product_code">'+ elementCode +'</td>\n' +
                                '    <td class="product_name">'+ element.name +'</td>\n' +
                                '    <td><a href="" id="product_code_'+elementCode+'"  class="btn btn-success btn-sm addProduct"><i class="ri ri-add-line"></i></a></td>\n' +
                                '</tr>';
                        })
                        $('#product_code').append(html);

                        $('.purchase_order_products tbody tr').each(function () {
                            let code = $(this).find('.item_code').val();
                            $('#product_code_'+ code).addClass('btn-default disabled').removeClass('btn-success');
                        });
                    }
                })
            }
            // on typing in search input call getAllProductsInBranch function
            $('#search_in_product_code').on('keyup', function () {
                search = $(this).val();
                getAllProductsInBranch(search);
            })
            count = 1;
            categories = JSON.parse('{!! $categories !!}');

            $(document).on('click', '.addProduct',function (e) {
                e.preventDefault();
                let category_place_holder = '{{ __('trans.choose category') }}';
                let item_discount_currency = '{{ $current_currency}}';
                productRow = $(this).closest('tr');
                productName = productRow.find('.product_name').text();
                productCode = productRow.find('.product_code').text().replaceAll(' ', '_');
                productPrice = productRow.find('.product_price').text();
                productQuantity = productRow.find('.product_quantity').text();
                html = '<tr id="'+productCode+'">\n' +
                    '<td><button class="btn btn-sm btn-icon btn-danger-light removeField"><i class="ri-delete-bin-5-line"></i></button></td>\n' +
                    '<td><input id="item_code_' + count + '" name="product_data[' + count + '][item_code]" type="text" class="form-control item_code" value="'+productCode+'" readonly title="'+productCode+'"></td>\n' +
                    '<td><input id="item_name_' + count + '" name="product_data[' + count + '][item_name]" type="text" class="form-control item_name" value="'+productName+'" readonly title="'+productName+'"></td>\n' +
                    '<td>\n' +
                    '    <div class="input-group"> <select required data-trigger class="form-select category category_' + count + '" name="product_data[' + count + '][sub_category_id]">\n' +
                    '       <option></option>\n' +
                    '    </select></div> \n' +
                    '</td>\n' +
                    '<td><input required id="item_quantity_' + count + '" name="product_data[' + count + '][item_quantity]" type="text" class="form-control item_quantity onlyUsedForValidation" autocomplete="off"></td>\n' +
                    '<td><input required id="item_price_' + count + '" name="product_data[' + count + '][item_price]" type="text" class="form-control item_price onlyUsedForValidation" autocomplete="off"></td>\n' +
                    '<td><input id="item_amount_taxable_' + count + '" name="product_data[' + count + '][item_amount_taxable]" type="text" class="form-control item_amount_taxable" readonly></td>\n' +
                    '<td>' +
                    '    <div class="input-group">\n' +
                    '        <select data-trigger id="discount_type_' + count + '" class="form-select discount_type" name="product_data[' + count + '][item_discount_type]">\n' +
                    '            <option value="0">'+ item_discount_currency +'</option>\n' +
                    '            <option value="1">%</option>\n' +
                    '        </select>\n' +
                    '       <input id="item_discount_' + count + '" name="product_data[' + count + '][item_discount]" type="text" class="form-control item_discount" autocomplete="off">\n' +
                    '    </div>\n'+
                    '</td>\n' +
                    '<input  type="hidden" name="product_data[' + count + '][item_discount_amount]" class="item_discount_amount">\n' +
                    '<input  type="hidden" name="product_data[' + count + '][item_sub_total_after_discount]" class="item_sub_total_after_discount">\n' +
                    '<td><input id="item_tax_amount_' + count + '" name="product_data[' + count + '][item_tax_amount]" type="text" class="form-control item_tax_amount" readonly></td>\n' +
                    '<td><input id="item_sub_total_' + count + '" name="product_data[' + count + '][item_sub_total]" type="text" class="form-control item_sub_total" readonly></td>\n' +
                    '</tr>';
                $('#purchase_order_products tbody').append(html);
                $(this).removeClass('btn-success').addClass('btn-default disabled');

                content = '';

                // get and each categories and sub catgories and insert into select box
                $.each(categories, function (index, element) {

                    content += '<optgroup style="background-color: #1b2320" label="' + element.name + '">';

                    $.each(element.sub_categories, function (index, element) {
                        content += '<option value="'+ element.id +'">' + element.name + '</option>';
                    });

                    content += '</optgroup>';
                });
                $(".category_"+count ).append(content);

                count++
            });
        })
    </script>

    <script>

        // $("#purchaseOrders").validate({
        //     submitHandler: function(form) {
        //         form.submit();
        //     }
        // });
        // $('select.branch_id').each(function () {$(this).rules('add', {required: true});});
        // $('input.invoice_number').each(function () {$(this).rules('add', {required: true, digits:true});});
        // $('input.invoice_date').each(function () {$(this).rules('add', {required: true});});
        // $('select.category').each(function () {$(this).rules('add', {required: true});});
        // $('input.item_quantity').each(function () {$(this).rules('add', {required: true, digits:true, range:[1,100000]});});
        // $('input.item_price').each(function () {$(this).rules('add', {required: true, range:[0,1000000]});});
        // $('input#item_discount').each(function () {$(this).rules('add', {digits:true, range:[1,100000]});});
        // $('input#item_amount_paid').each(function () {$(this).rules('add', {required: true, digits:true});});

    </script>

@endsection
