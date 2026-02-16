let current_currency_ = document.getElementById('current_currency').value;
let amount_paid_in_bank_place_holder = document.getElementById('amount_paid_in_bank_place_holder').value;
// on change payment method create new field to pay into bank
$('input[name="payment_method_bank"]').on('change', function () {
    $(this).siblings('input[type="checkbox"]').not(this).prop('checked', false);
    if ($('input[name="payment_method_bank"]:checked').length > 0)
    {
        if (!$('#bank_field').length)
        {
            let content =
                '<div id="bank_field" class="col-xl-12">\n' +
                '    <table class="table table-sm text-nowrap mb-0 table-borderless">\n' +
                '    <tbody>\n' +
                '    <tr>\n' +
                '        <th scope="row">\n' +
                '            <div class="fw-medium">'+ amount_paid_in_bank_place_holder +' :</div>\n' +
                '        </th>\n' +
                '        <td>\n' +
                '        <input type="text" class="form-control invoice-amount-input amount_paid_bank" name="amount_paid_bank" id="amount_paid_bank" placeholder="00.00 '+ current_currency_ +'" autocomplete="off">\n' +
                '        </td>\n' +
                '    </tr>\n' +
                '    </tbody>\n' +
                '</table>';
            $('#amounts_group_field').append(content);
        }

    }else{
        if ($('#bank_field').length)
        {
            $('#bank_field').remove();
        }
    }
})
