let current_currency = document.getElementById('current_currency').value;
let amount_paid_in_money_safe_place_holder = document.getElementById('amount_paid_in_money_safe_place_holder').value;
$('input[name="payment_method"]').on('change', function () {
    if ($(this).is(':checked'))
    {
        if (!$('#safe_amount_field').length)
        {
            let content =
                '<div id="safe_amount_field" class="col-xl-12">\n' +
                '    <table class="table table-sm text-nowrap mb-0 table-borderless">\n' +
                '    <tbody>\n' +
                '    <tr>\n' +
                '        <th scope="row">\n' +
                '            <div class="fw-medium">'+ amount_paid_in_money_safe_place_holder +' :</div>\n' +
                '        </th>\n' +
                '        <td>\n' +
                '        <input type="text" class="form-control invoice-amount-input amount_paid" name="amount_paid" id="amount_paid" placeholder="00.00 '+ current_currency +'" autocomplete="off">\n' +
                '        </td>\n' +
                '    </tr>\n' +
                '    </tbody>\n' +
                '</table>';
            $('#amounts_group_field').prepend(content);
        }

    }else{
        if ($('#safe_amount_field').length)
        {
            $('#safe_amount_field').remove();
        }
    }
})
