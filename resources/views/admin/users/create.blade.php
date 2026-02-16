@extends('admin.layouts.master')

@section('title', __('trans.create user'))

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
                                {{ __('trans.create') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('admin.users.store') }}" method="POST">
                                @method('POST')
                                @csrf
                                <div class="mb-3">
                                    <label for="form-text1" class="form-label fs-14 text-dark">{{ __('trans.username') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-user-line"></i></div>
                                        <input name="name" type="text" class="form-control" id="form-text1" placeholder="" value="{{ old('name') }}">
                                    </div>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="email" class="form-label fs-14 text-dark">{{ __('trans.email') }}</label>
                                    <div class="input-group">
                                        <div class="input-group-text"><i class="ri-mail-line"></i></div>
                                        <input name="email" type="text" class="form-control" id="email" placeholder="" value="{{ old('email') }}">
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
                                    @error('password_confirmation')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="mb-3">
                                    <label for="branch_id" class="form-label">{{ __('trans.branch') }}</label>
                                    <select id="branch_id" name="branch_id" class="form-select" aria-label="select the branch">
                                        <option value="">{{ __('trans.branch') }}</option>
                                        @foreach ($branches as $branch)
                                            <option value="{{ $branch -> id }}">{{ $branch -> name }}</option>
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
                                                    <div class="form-check form-check-inline">
                                                        <input data-role-name="{{ $role -> name }}" class="form-check-input" type="radio" name="role_id"
                                                               id="role_{{ $role -> display_name }}" value="{{ $role -> id }}">
                                                        <label class="form-check-label" for="role_{{ $role -> display_name }}">{{ $role -> display_name }}</label>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    <span id="branch_error" style="color: red; display: none"></span>
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
                                                                        <input id="{{ $value .'_'. $element->name }}" name="permissions[]" type="checkbox" class="permission form-check-input" data-group-name="{{ $group_namespace.$element->name }}" value="{{ $value.'-'.$element->name }}">
                                                                        <label for="{{ $value .'_'. $element->name }}">{{ $value . '-' . $element->name }}</label>
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
                                <button id="submit_button" class="btn btn-primary" type="submit">{{ __('trans.create') }}</button>
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
                // let group_name = that.data('target-name');
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
        let branch_id = $('#branch_id');
        let role_not_required_branch = ['superAdministrator', 'administrator'];

        $('input[name="role_id"]').on('change', function() {
            let role_selected = $(this).data('role-name');
            if (role_not_required_branch.includes(role_selected)) {
                // Field is disabled
                branch_id.prop('disabled', true);
                $('#branch_error').css('display', 'none').text('');
            } else {
                // Field is enabled
                branch_id.prop('disabled', false);
            }
        });

        $('#submit_button').on('click', function (e) {
            let branch_input_error_msg = '{{ __('trans.branch required') }}';
            if (!branch_id.prop('disabled')) // filed is enabled
            {
                if ($('#branch_id').val() == '')
                {
                    e.preventDefault();
                    $('#branch_id').focus();
                    $('#branch_error').css('display', 'block').text(branch_input_error_msg);
                }
            }else // filed is disabled
            {
                $('#branch_error').css('display', 'none').text();
            }
        })
    </script>
@endsection
