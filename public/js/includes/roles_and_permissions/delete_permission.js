$(document).on('click', '#delete_permission', function(e) {

    let that = $(this);
    let permission_name = that.data('permission-name');
    let url = route('admin.rolesManager.delete_permission');
    $.ajax({
        url: url,
        data: {permission_name: permission_name},
        success: function () {
            // console.log('Delete__permission_success');
            // console.log()
            load_elements();
            load_permissions_by_role(that.closest('body').find('.rolePermissions').first());
            // console.log('Delete__permission_success');
            // load_roles_list();
            // location.reload();
        }
    });// }); // end of ajax
}); // end of submit function

