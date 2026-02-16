function load_roles_list (){
    let url = route('admin.rolesManager.load_roles_list');
    $.ajax({
        url: url,
        success: function(data)
        {
            let content = '';
            $.each(data.roles_list.reverse(), function (key, value) {
                content += '<tr>';
                content += '<td>'+ (key+1) +'</td>';
                content += '<td>'+value.name+'</td>';
                content += '<td><a id="'+value.id+'" data-name="'+value.name+'"  class="modal-effect btn btn-sm btn-primary-gradient btn-wave rolePermissions" data-bs-effect="effect-newspaper" data-bs-toggle="modal" href="#modaldemo8">PERMISSIONS</a></td>';
                content += '<td><button id="delete_role" data-role-id="'+value.id+'" type="button" class="btn btn-sm btn-danger-gradient btn-wave">DELETE</button></td>';
                content += '<tr>';
            });
            $('#roles_list_body').html(content);
        }
    }); // end of ajax
    // $('#roles_body')
}
load_roles_list();
