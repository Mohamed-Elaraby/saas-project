$(document).on('change', '.permission', function () {
    let that = $(this);
    let role_id = that.data('role-id');
    let permission_name = that.attr('name');
    let url = route('admin.rolesManager.syncPermissions');
    let group_name = that.data('group-name');
    let input_status = that.is(':checked');
    !input_status ?  select_all_element.prop("checked", false) : ''; // if unchecked permission unchecked select all input
    $.ajax({
        url: url,
        data: {permission_name: permission_name, role_id: role_id, checked: input_status}
    }); // end of ajax

    change_group_checkbox_status(group_name);
    change_checkAll_checkbox_status();
});
