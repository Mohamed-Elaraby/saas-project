@extends('admin.layouts.master')

@section('title', __('trans.edit user'))

@section('styles')

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')

    <!--APP-CONTENT START-->
    <div class="main-content app-content">
        <div class="container-fluid">
            <!-- Start:: row-2 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-header justify-content-between">
                            <div class="card-title">
                                {{ __('trans.edit') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
                                @method('PUT')
                                @csrf
                                <div class="mb-3">
                                    <label for="form-text1" class="form-label fs-14 text-dark">{{ __('trans.username') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-user-line"></i></div>
                                        <input name="name" type="text" class="form-control" id="form-text1" placeholder="" value="{{ $user->name }}">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="form-email" class="form-label fs-14 text-dark">{{ __('trans.email') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-mail-line"></i></div>
                                        <input name="email" type="text" class="form-control" id="form-email" placeholder="" value="{{ $user->email }}">
                                    </div>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="form-password1" class="form-label fs-14 text-dark">{{ __('trans.password') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-lock-line"></i></div>
                                        <input name="password" type="password" class="form-control" id="form-password1" placeholder="">
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="form-password_confirmation" class="form-label fs-14 text-dark">{{ __('trans.password confirmation') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-lock-line"></i></div>
                                        <input name="password_confirmation" type="password" class="form-control" id="form-password_confirmation" placeholder="">
                                    </div>
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="branch_id" class="form-label">{{ __('trans.branch') }}</label>
                                    <select id="branch_id" name="branch_id" class="form-select" aria-label="select the branch">
                                        <option value="">{{ __('trans.branch') }}</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch -> id }}" {{ $user -> branch_id == $branch -> id? 'selected': '' }}>{{ $branch -> name }}</option>
                                        @endforeach
                                    </select>
                                    <div id="branch_error" class="alert alert-danger" role="alert" style="display: none"></div>
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fs-14 text-dark">{{ __('trans.roles') }}</label>
                                    <div class="row">
                                        <div class="input-group">
                                            @foreach ($roles_list as $role)
                                                <div class="col-3">
                                                    <div class="form-check form-check-inline" id="role_id">
                                                        <input class="form-check-input role_id" type="radio" name="role_id"
                                                               data-role-name="{{ $role -> name }}" id="role_{{ $role -> display_name }}" value="{{ $role -> id }}" {{ $user->hasRole($role -> name)? 'checked': '' }}>
                                                        <label class="form-check-label" for="role_{{ $role -> display_name }}">{{ $role -> display_name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @error('role_id')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label class="form-label fs-14 text-dark">{{ __('trans.permissions') }}</label>
                                    <div class="role_permissions_body">
                                        <input type="checkbox" id="selectAll" class="form-check-input">
                                        <label for="selectAll">Select All</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                @php $crud = ['create', 'read', 'update', 'delete']; @endphp
                                                @php $group_namespace = 'G_' ; @endphp
                                                <ul>
                                                    @foreach ($elements_list as $element)
                                                        <li>
                                                            {{ $element->name }}
                                                            <input type="checkbox" name="{{ $group_namespace.$element->name }}" class="select_group form-check-input">
                                                        </li>
                                                        <table width="100%">
                                                            <tr>
                                                                @foreach ($crud as $value)
                                                                    <td>
                                                                        <input id="{{ $value .'_'. $element->name }}" name="permissions[]" type="checkbox" class="permission form-check-input" data-group-name="{{ $group_namespace.$element->name }}" value="{{ $value.'-'.$element->name }}" {{ $user->hasPermission($value.'-'.$element->name)? 'checked': '' }}>
                                                                        <label for="{{ $value .'_'. $element->name }}">{{ $value . '-' . $element->name}}</label>
                                                                    </td>
                                                                @endforeach
                                                            </tr>
                                                        </table>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @error('permissions')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <input class="btn btn-success" type="submit" value="{{ __('trans.edit') }}">
                            </form>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End:: row-2 -->

        </div>
    </div>
    <!--APP-CONTENT CLOSE-->

@endsection

@section('scripts')

    <!-- Prism JS -->
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')

    <script>
        $(document).ready(function () {
            let select_all_element = $("#selectAll");

            check_if_all_group_item_selected_on_reload_page();
            function check_if_all_group_item_selected_on_reload_page() {
                $.each($('.select_group'), function(index, element) {
                    let group_items_length = $("input[data-group-name='"+element.name+"']").length;
                    let group_items_checked_length = $("input[data-group-name='"+element.name+"']:checked").length;
                    let status = group_items_length == group_items_checked_length ?  true : false ;
                    $("input[name='"+element.name+"']").prop('checked', status);
                    change_checkAll_checkbox_status ();
                });
            }

            function change_group_checkbox_status (group_name) {
                let parent_checkbox_group = $("input[name='"+group_name+"']");
                let elements_selected_checked = $("input[data-group-name='"+group_name+"']:checked").length;
                let elements_selected = $("input[data-group-name='"+group_name+"']").length;
                let status = elements_selected == elements_selected_checked ?  true : false ;
                parent_checkbox_group.prop('checked', status);
            }

            function change_checkAll_checkbox_status ()
            {
                let all_checkbox_elements = $('.role_permissions_body input[type="checkbox"]:not("#selectAll")').length;
                let all_checkbox_elements_checked = $('.role_permissions_body input[type="checkbox"]:not("#selectAll"):checked').length;
                let status  = all_checkbox_elements == all_checkbox_elements_checked ? true : false;
                select_all_element.prop('checked', status) ;
            }

            $(document).on('change', '.permission', function () {

                let that = $(this);
                let group_name = that.data('group-name');
                change_group_checkbox_status(group_name)
                if (that.is(':checked')){

                }else
                {
                    select_all_element.prop("checked", false); // unchecked select all checkbox
                }
                change_checkAll_checkbox_status();
            });

            // select group
            $(document).on('change', '.select_group', function () {
                let that = $(this);
                let group_name = that.attr('name');
                let permissions_selected_list = $('input[data-group-name="'+group_name+'"]');
                let permissions_name_list = [];
                $.each(permissions_selected_list, function (key, value) {
                    permissions_name_list.push(value.name);
                });
                $('input[data-group-name="'+group_name+'"]').prop('checked', $(this).prop('checked'));
                change_checkAll_checkbox_status();
            })

            // select all
            $("#selectAll").click(function(){
                // on change select all checkbox to checked change all checkbox in page to checked and remove checked remove on all checkbox in page
                $(".role_permissions_body input[type=checkbox]").prop('checked', $(this).prop('checked'));
                let that = $(this);
                // get all checkbox checked for class permission
                let permissions_selected_list = $('.permission:checkbox:checked');
                let permissions_name_list = []; // get all checkbox checked name property list
                $.each(permissions_selected_list, function (key, value) {
                    permissions_name_list.push(value.name);
                });
            });
        })
    </script>

    <script>
        $(document).ready(function () {
            let branch_id = $('#branch_id');
            let role_not_required_branch = ['superAdministrator', 'administrator'];
            let branch_input_error_msg = '{{ __('trans.branch required') }}';
            function checkBranch() {
                if (branch_id.val() == '')
                {
                    $('#branch_error').css('display', 'block').text(branch_input_error_msg);
                }else
                {
                    $('#branch_error').css('display', 'none').text();
                }
            }

            branch_id.on('change', function () {
                checkBranch();
            });

            checkRole();
            function checkRole() {
                // Get all checked checkboxes
                let role_selected = $('input[type="radio"][name="role_id"]:checked').data('role-name');

                if (role_not_required_branch.includes(role_selected))
                {
                    branch_id.prop('disabled', true);
                }else
                {
                    if (branch_id.val() == '')
                    {
                        branch_id.focus();
                        $('#branch_error').css('display', 'block').text(branch_input_error_msg);
                        branch_id.prop('disabled', false);
                    }

                }
            }

            $('input[type="radio"][name="role_id"]').on('change', function () {

                let role_selected = $(this).data('role-name');
                if (role_not_required_branch.includes(role_selected) || $(this).val() == '') // filed is disabled
                {
                    branch_id.prop('disabled', true);
                    branch_id.prop('readonly', true);
                    $('#branch_error').css('display', 'none').text();
                }else // filed is enabled
                {
                    checkBranch();
                    branch_id.prop('disabled', false);
                    branch_id.prop('readonly', false);
                }
            })

            $('input[type="submit"]').on('click', function (e) {
                if (!branch_id.prop('disabled')) // filed is enabled
                {
                    if (branch_id.val() == '')
                    {
                        e.preventDefault();
                        branch_id.focus();
                        $('#branch_error').css('display', 'block').text(branch_input_error_msg);
                    }
                }else // filed is disabled
                {
                    $('#branch_error').css('display', 'none').text();
                }
            })
        })
    </script>
@endsection
