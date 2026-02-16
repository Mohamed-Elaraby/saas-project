// get all permissions for role
$(document).on('click', '.rolePermissions', function () {
    let that = $(this);
    load_permissions_by_role(that);
}); // end of function

function load_permissions_by_role (that){
    let group_namespace = 'G_';
    let role_id = that.attr('id');
    let role_name = that.data('name');
    let url = route('admin.rolesManager.getRolePermissions');
    $('#permission_name_in_model_title').html(role_name);
    $('#selectAll').attr('data-role-id', role_id);
    $.ajax({
        url: url,
        data: {role_id: role_id},
        success: function (data) {
            let content = '';
            $.each(data.elements_list, function (key, value) {

                content += '    <div class="table-responsive">\n' +
                    '        <table class="table text-nowrap">\n' +
                    '            <tr>\n' +
                    '                <th scope="row"><input name="'+ group_namespace + value.name +'" data-role-id="'+ role_id +'" class="form-check-input select_group" type="checkbox">'+ '  ' + value.name +'</th>\n' +
                    '                <td>\n' +
                    '                    <div class="hstack fs-15">\n' +
                    '                        <button id="delete_permission" data-permission-name="'+value.name+'" class="btn btn-icon btn-sm btn-danger btn-wave"><i class="ri-delete-bin-line"></i></button>\n' +
                    '                    </div>\n' +
                    '                </td>\n' +
                    '            </tr>\n' +
                    '        </table>\n' +
                    '        <table class="table text-nowrap">\n' +
                    '            <tr>\n' +
                    // '                <td><input id="create_'+value.name+'" data-role-id="'+ role_id +'" data-group-name="'+ group_namespace +value.name+'" class="form-check-input permission" type="checkbox" name="create-'+value.name+'" '+ (checked_in_array(data.role_permissions, 'create-' + value.name )) +'><label for="create_'+value.name+'">CREATE</label></td>\n' +
                    '                <td><input id="create_'+value.name+'" data-role-id="'+ role_id +'" data-group-name="'+ group_namespace +value.name+'" class="form-check-input permission" type="checkbox"  name="create-'+value.name+'" '+ (checked_in_array(data.role_permissions, 'create-' + value.name )) +'><label for="create_'+value.name+'">CREATE</label></td>\n' +
                    '                <td><input id="read_'+value.name+'" data-role-id="'+ role_id +'" data-group-name="'+ group_namespace +value.name+'" class="form-check-input permission" type="checkbox"  name="read-'+value.name+'" '+ (checked_in_array(data.role_permissions, 'read-' + value.name )) +'><label for="read_'+value.name+'">READ</label></td>\n' +
                    '                <td><input id="update_'+value.name+'" data-role-id="'+ role_id +'" data-group-name="'+ group_namespace +value.name+'" class="form-check-input permission" type="checkbox"  name="update-'+value.name+'" '+ (checked_in_array(data.role_permissions, 'update-' + value.name )) +'><label for="update_'+value.name+'">UPDATE</label></td>\n' +
                    '                <td><input id="delete_'+value.name+'" data-role-id="'+ role_id +'" data-group-name="'+ group_namespace +value.name+'" class="form-check-input permission" type="checkbox"  name="delete-'+value.name+'" '+ (checked_in_array(data.role_permissions, 'delete-' + value.name )) +'><label for="delete_'+value.name+'">DELETE</label></td>\n' +
                    '            </tr>\n' +
                    '        </table>\n' +
                    '    </div>';


            })
            $('.role_permissions_body').empty();
            $('.role_permissions_body').html(content);
            get_all_checkbox_has_group(data.elements_list, group_namespace);
            change_checkAll_checkbox_status();
        } // end of success
    }); // end of ajax
};
