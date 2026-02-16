@extends('admin.layouts.master')

@section('title', __('trans.roles manager'))

@section('styles')

    <!-- Prism CSS -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <div class="alert alert-secondary alert-dismissible fs-15 fade show mb-4">
                {{ !empty(\App\Traits\SettingTrait::getSetting()->site_name)? \App\Traits\SettingTrait::getSetting()->site_name: '' }} Beta Version
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
            </div>

            <!-- Start:: row-5 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-header">
                            <div class="card-title">
                                {{ __('trans.manage roles and permissions and teams') }}
                            </div>
                        </div>
                        <div class="card-body">
                            <ul class="nav nav-pills justify-content-center nav-style-2 mb-3" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link active" data-bs-toggle="tab" role="tab" aria-current="page"
                                       href="#elements-center" aria-selected="true">{{ __('trans.elements') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"
                                       href="#roles-center" aria-selected="true">{{ __('trans.roles') }}</a>
                                </li>

{{--                                <li class="nav-item">--}}
{{--                                    <a class="nav-link" data-bs-toggle="tab" role="tab" aria-current="page"--}}
{{--                                       href="#roles-center" aria-selected="true">PERMISSIONS</a>--}}
{{--                                </li>--}}

                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane show active text-muted" id="elements-center" role="tabpanel">
                                    <div class="row">
                                        <div class="col-12">
                                            <form class="row align-items-center" id="create_new_element_form" action="{{ route('admin.roleElements.store') }}" method="POST">
                                                @method('POST')
                                                @csrf
                                                <div class="col-10">
                                                    <label class="visually-hidden" for="element_name"></label>
                                                    <div class="input-group">
                                                                                                        <div class="input-group-text">@</div>
                                                        <input type="text" name="name" class="form-control" id="element_name" placeholder="{{ __('trans.enter element name') }}" onkeyup="this.value = this.value.replace(/[^a-zA-Z0-9]/g, '')">
                                                    </div>
                                                </div>
                                                <div class="col-2">
                                                    <button type="submit" class="btn btn-primary-gradient btn-wave btn-w-lg">{{ __('trans.create element') }}</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12">
                                            <table class="table table-responsive">
                                                <thead>
                                                <th>#</th>
                                                <th>{{ __('trans.element name') }}</th>
                                                <th>{{ __('trans.action') }}</th>
                                                </thead>
                                                <tbody id="elements_body"></tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>

                                <div class="tab-pane text-muted" id="roles-center" role="tabpanel">

                                    <!-- Start:: row-1 -->
                                    <div class="row">
                                        <div class="col-xl-6">
                                            <div class="card custom-card">
                                                <div class="top-left"></div>
                                                <div class="top-right"></div>
                                                <div class="bottom-left"></div>
                                                <div class="bottom-right"></div>
                                                <div class="card-header justify-content-between">
                                                    <div class="card-title">
                                                        {{ __('trans.create role') }}
                                                    </div>
                                                </div>
                                                <div class="card-body">
{{--                                                    <form action="{{ route('admin.roles.store') }}" method="post">--}}
                                                    <form id="create_new_role" action="{{ route('admin.rolesManager.store') }}" method="POST">
                                                        @method('POST')
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="role_name" class="form-label fs-14 text-dark">{{ __('trans.enter role name') }}</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text">{{ __('trans.role') }}</div>
                                                                <input name="name" type="text" class="form-control" id="role_name" placeholder="" readonly="">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="role_display_name" class="form-label fs-14 text-dark">{{ __('trans.enter role display name') }}</label>
                                                            <div class="input-group">
                                                                <div class="input-group-text">{{ __('trans.role display name') }}</div>
                                                                <input name="display_name" type="text" class="form-control" id="role_display_name" placeholder="">
                                                            </div>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label for="text-area" class="form-label">{{ __('trans.enter role description') }}</label>
                                                            <textarea name="description" class="form-control" id="text-area" rows="5"></textarea>
                                                        </div>

                                                        <button class="btn btn-primary" type="submit">{{ __('trans.create') }}</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-6">
                                            <table class="table table-responsive">
                                                <thead>
                                                <th>#</th>
                                                <th>{{ __('trans.role name') }}</th>
                                                <th>{{ __('trans.permissions') }}</th>
                                                <th>{{ __('trans.action') }}</th>
                                                </thead>
                                                <tbody id="roles_list_body"></tbody>
                                            </table>
                                        </div>
                                        {{-- The Model --}}
                                        <div id="formmodal"></div>
                                        <div class="modal fade" id="modaldemo8">
                                            <div class="modal-dialog modal-dialog-centered text-center" role="document">
                                                <div class="modal-content modal-content-demo">
                                                    <div class="modal-header">
                                                        <h6 class="modal-title">{{ __('trans.permissions') }}</h6><button aria-label="Close" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>
                                                    <div class="modal-body text-start">
                                                        <div class="role_permissions_body"></div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-light" data-bs-dismiss="modal" >{{ __('trans.close') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End:: row-1 -->

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End:: row-5 -->

        </div>
    </div>
    <!-- End::app-content -->

@endsection


@section('scripts')

    <!-- Custom Function Role and Permissions Scripts -->
    <script src="{{ asset('js/includes/roles_and_permissions/global_functions.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/get_role_permissions.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/load_site_elements.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/load_roles_list.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/create_new_site_element.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/create_new_role.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/select_all_permissions.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/select_group_permissions.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/select_permission.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/delete_site_element.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/delete_role.js') }}"></script>
    <script src="{{ asset('js/includes/roles_and_permissions/delete_permission.js') }}"></script>

    <script src="{{ asset('js/includes/global/global_functions.js') }}"></script>
    <script>
        // Restrict Special Characters From Create Element Input
        let field_display_name = $('#role_display_name');
        let field_name = $('#role_name');

        field_display_name.on('keyup', function() {
            initText_with_text_input($(this), field_name);
        });

        // Restrict Special Characters From Create Element Input
        let element_name = $('#element_name');
        element_name.on('keyup', function () {
            restrictSpecialCharacters($(this))
        })

    </script>

    <!-- Prism JS -->
    <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
    @vite('resources/assets/js/prism-custom.js')


    <!-- Modal JS -->
    @vite('resources/assets/js/modal.js')

@endsection
