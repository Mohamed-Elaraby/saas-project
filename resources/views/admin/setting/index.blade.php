@extends('admin.layouts.master')

@section('title', __('trans.setting'))

@section('styles')

    <!-- glightbox Css -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Start:: row-1 -->
            <form action="{{ route('admin.setting.update') }}" method="POST" id="setting_form" enctype="multipart/form-data">
                @method('POST')
                @csrf
                <div class="row justify-content-center">
                <div class="col-xl-9">
                    <div class="mb-4">
                        <h5 class="fw-medium mb-0">{{ __('trans.general setting') }}</h5>
                        <div class="text-muted fs-13 op-8 mb-3">
                            {{ __('trans.update your site settings') }}
                        </div>
                    </div>
                    <div class="card custom-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="row mt-4 justify-content-center">
                                <div class="col-md-3">
                                    <div class="nav flex-column nav-pills me-3 tab-style-7" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                        <h6 class="fw-medium mb-3 text-info  fs-12 pb-1 d-inline-block">
                                            {{ __('trans.general setting') }}
                                        </h6>
                                        <button class="nav-link text-start active" id="main-profile-tab" data-bs-toggle="pill" data-bs-target="#main-profile" type="button" role="tab" aria-controls="main-profile" aria-selected="true"><i class="ri-settings-2-line me-2 align-middle d-inline-block"></i>{{ __('trans.setting') }}</button>
                                        <button class="nav-link text-start" id="man-password-tab" data-bs-toggle="pill" data-bs-target="#man-password" type="button" role="tab" aria-controls="man-password" aria-selected="false" tabindex="-1"><i class="ri-exchange-dollar-line me-2 align-middle d-inline-block"></i>{{ __('trans.currency') }}</button>
                                        <button class="nav-link text-start" id="main-security-tab" data-bs-toggle="pill" data-bs-target="#main-security" type="button" role="tab" aria-controls="main-security" aria-selected="false" tabindex="-1"><i class="ri-global-fill me-2 align-middle d-inline-block"></i>{{ __('trans.language') }}</button>
                                        <button class="nav-link text-start" id="main-contacts-tab" data-bs-toggle="pill" data-bs-target="#main-contacts" type="button" role="tab" aria-controls="main-contacts" aria-selected="false" tabindex="-1"><i class="ri-wallet-3-fill me-2 align-middle d-inline-block"></i>{{ __('trans.vat') }}</button>
                                        <button class="nav-link text-start" id="main-permissions-tab" data-bs-toggle="pill" data-bs-target="#main-permissions" type="button" role="tab" aria-controls="main-permissions" aria-selected="false"><i class="ri-image-line me-2 align-middle d-inline-block"></i>{{ __('trans.logo') }}</button>
{{--                                        <button class="nav-link text-start" id="main-notifications-tab" data-bs-toggle="pill" data-bs-target="#main-notifications" type="button" role="tab" aria-controls="main-notifications" aria-selected="false" tabindex="-1"><i class="ri-notification-3-line me-2 align-center d-inline-block"></i>Notifications</button>--}}
                                    </div>
                                </div>
                                <div class="col-md-9">
                                    <div class="tab-content" id="v-pills-tabContent">
                                        <div class="tab-pane show active" id="main-profile" role="tabpanel" tabindex="0" aria-labelledby="main-profile-tab">
                                            <div class="mb-4 d-sm-flex align-items-center gap-1 flex-wrap">
                                                {{--<span class="mb-0 me-3 avatar avatar-xxl">
                                                    <img src="{{asset('build/assets/images/faces/22.jpg')}}" alt="" class="profile-img">
                                                    <span class="badge bg-primary avatar-badge cursor-pointer">
                                                        <input type="file" name="photo" class="position-absolute w-100 op-0 profile-change">
                                                        <i class="fe fe-camera"></i>
                                                    </span>
                                                </span>
                                                <div class="">
                                                    <div class="fw-medium lh-1"> Anthony Richel</div>
                                                    <div class="fs-12 text-muted">@anthonyrich144</div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="d-flex gap-2">
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn btn-primary-light"><i class="fe fe-upload me-2 d-inline-block"></i>Upload Photo</button>
                                                            <input type="file" class="profile-change" name="myfile" />
                                                        </div>
                                                        <button class="btn btn-danger-light"><i class="fe fe-x me-2 d-inline-block"></i>Delete Photo</button>
                                                    </div>
                                                </div>--}}
                                            </div>
                                            <div class="row gy-4 mb-4">
                                                <div class="col-xl-6">
                                                    <label for="site-name" class="form-label">{{ __('trans.site name') }}</label>
                                                    <input type="text" name="site_name" class="form-control" id="site-name" value="{{ !empty($setting -> site_name) ? $setting -> site_name : '' }}">
                                                </div>
                                                <div class="col-xl-6">
                                                    <label for="title" class="form-label">{{ __('trans.title') }}</label>
                                                    <input type="text" name="title" class="form-control" id="title" value="{{ !empty($setting -> title) ? $setting -> title : '' }}">
                                                </div>
                                                <div class="col-xl-12">
                                                    <label for="description" class="form-label">{{ __('trans.description') }}</label>
                                                    <textarea name="description" class="form-control" id="description" cols="30" rows="10">{{ !empty($setting -> description) ? $setting -> description : '' }}</textarea>
                                                </div>

                                                <div class="col-xl-12">
                                                    <label for="keywords" class="form-label">{{ __('trans.keywords') }}</label>
                                                    <textarea name="keywords" class="form-control" id="keywords" cols="30" rows="10">{{ !empty($setting -> keywords) ? $setting -> keywords : '' }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="man-password" role="tabpanel" tabindex="0" aria-labelledby="man-password-tab">
                                            <div>
                                                <div class="col-xl-12">
                                                    <label class="form-label">{{ __('trans.currencies') }}</label>
                                                    <select class="form-control" data-trigger name="currency" id="currency">
                                                        <option ></option>
                                                        <option value="AED" {{ !empty($setting -> currency) && $setting -> currency == 'AED' ? 'selected': '' }}>AED</option>
                                                        <option value="SAR" {{ !empty($setting -> currency) && $setting -> currency == 'SAR' ? 'selected': '' }}>SAR</option>
                                                        <option value="USD" {{ !empty($setting -> currency) && $setting -> currency == 'USD' ? 'selected': '' }}>USD</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
{{--                                        {{ dd(LaravelLocalization::getSupportedLocales()) }}--}}
                                        <div class="tab-pane" id="main-security" role="tabpanel" aria-labelledby="main-security-tab" tabindex="0">
                                            <div>
                                                <div class="col-xl-12">
                                                    <label class="form-label">{{ __('trans.languages') }}</label>

                                                    <select class="form-control" data-trigger name="language" id="language">
                                                        @foreach(LaravelLocalization::getSupportedLocales() as $locale => $language)
                                                            <option ></option>
                                                            <option value="{{ $locale }}" {{ !empty($setting -> language) && $setting -> language == $locale ? 'selected': '' }}>{{ $language['native'] }}</option>
                                                        @endforeach
                                                    </select>

{{--                                                    <select class="form-control" data-trigger name="language" id="language">--}}
{{--                                                        <option></option>--}}
{{--                                                        <option value="ar" {{ !empty($setting -> language) && $setting -> language == 'ar' ? 'selected': '' }}>ARABIC</option>--}}
{{--                                                        <option value="en" {{ !empty($setting -> language) && $setting -> language == 'en' ? 'selected': '' }}>ENGLISH</option>--}}
{{--                                                    </select>--}}
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane" id="main-contacts" role="tabpanel" aria-labelledby="main-contacts-tab" tabindex="0">
                                            <label for="vat" class="form-label">{{ __('trans.vat') }}</label>
                                            <div class="form-check form-switch mb-2">
                                                <input class="form-check-input form-checked-success" type="checkbox" role="switch" id="switch-vat" {{ !empty($setting->vat) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="switch-vat">{{ __('trans.enable') }}/{{ __('trans.disable') }}</label>
                                                <div class="col-md-6">
                                                    <label for="vat_percentage" class="form-label">{{ __('trans.tax percentage') }}</label>
                                                    <div class="input-group">
                                                        <span class="input-group-text" id="inputGroupPrepend2">%</span>
                                                        <input type="number" class="form-control" id="vat_percentage" aria-describedby="inputGroupPrepend2" name="vat" placeholder="ENTER TAX VALUE PERCENTAGE LIKE 15" VALUE="{{ !empty($setting->vat) ? $setting->vat : '' }}" {{ empty($setting->vat) ? 'disabled' : '' }}>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="tab-pane" id="main-permissions" role="tabpanel" aria-labelledby="main-permissions-tab" tabindex="0">
                                            <div class="mb-4 d-sm-flex align-items-center gap-1 flex-wrap">
                                                <span class="mb-0 me-3 avatar avatar-xxl">
                                                    @php
                                                        $profile_picture_path = $setting -> image_name == 'default.png' ? 'storage' .DIRECTORY_SEPARATOR. 'default.png' : 'storage' .DIRECTORY_SEPARATOR.$setting -> image_path.DIRECTORY_SEPARATOR. $setting -> image_name;
                                                    @endphp
                                                    <img src="{{ asset($profile_picture_path)}}" alt="" class="profile-img">
{{--                                                    <span class="badge bg-primary avatar-badge cursor-pointer">--}}
{{--                                                        <input type="file" name="company_logo2" class="position-absolute w-100 op-0 profile-change">--}}
{{--                                                        <i class="fe fe-camera"></i>--}}
{{--                                                    </span>--}}
                                                </span>
                                                <div class="">
                                                    <div class="fw-medium lh-1">{{ __('trans.pleas upload your company logo') }}</div>
                                                    <div class="fs-12 text-muted">{{ __('trans.company logo notice') }}</div>
                                                </div>
                                                <div class="ms-auto">
                                                    <div class="d-flex gap-2">
                                                        <div class="upload-btn-wrapper">
                                                            <button class="btn btn-primary-light"><i class="fe fe-upload me-2 d-inline-block"></i>{{ __('trans.upload photo') }}</button>
                                                            <input type="file" class="profile-change" name="image_name" />
                                                        </div>
                                                        <button type="button" onclick="document.getElementById('remove_company_logo').submit()" class="btn btn-danger-light"><i class="fe fe-x me-2 d-inline-block"></i>{{ __('trans.remove photo') }}</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        {{--<div class="tab-pane" id="main-notifications" role="tabpanel" aria-labelledby="main-notifications-tab" tabindex="0">
                                            <h6 class="mb-4">Email Notifications :</h6>
                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between px-2">
                                                <div>
                                                    <p class="fs-14 mb-1 fw-medium">Comments</p>
                                                    <p class="fs-12 text-muted mb-0">You will receive notifications when someone comments on your post.</p>
                                                </div>
                                                <div class="custom-toggle-switch ms-sm-2 ms-0">
                                                    <input id="email-comments" name="toggleswitchsize" type="checkbox" checked="">
                                                    <label for="email-comments" class="label-primary mb-1"></label>
                                                </div>
                                            </div>
                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between px-2">
                                                <div>
                                                    <p class="fs-14 mb-1 fw-medium">News and Updates</p>
                                                    <p class="fs-12 text-muted mb-0">You will receive notifications for news and any updates.</p>
                                                </div>
                                                <div class="custom-toggle-switch ms-sm-2 ms-0">
                                                    <input id="email-update" name="toggleswitchsize" type="checkbox">
                                                    <label for="email-update" class="label-primary mb-1"></label>
                                                </div>
                                            </div>
                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between px-2">
                                                <div>
                                                    <p class="fs-14 mb-1 fw-medium">Remaiders</p>
                                                    <p class="fs-12 text-muted mb-0">This will enable when the notification is pushed on your device</p>
                                                </div>
                                                <div class="custom-toggle-switch ms-sm-2 ms-0">
                                                    <input id="email-notify" name="toggleswitchsize" type="checkbox" checked="">
                                                    <label for="email-notify" class="label-primary mb-1"></label>
                                                </div>
                                            </div>
                                            <h6 class="mb-4">Push Notifications :</h6>
                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between px-2">
                                                <div>
                                                    <p class="fs-14 mb-1 fw-medium">Comments</p>
                                                    <p class="fs-12 text-muted mb-0">You will receive notifications when someone comments on your post.</p>
                                                </div>
                                                <div class="custom-toggle-switch ms-sm-2 ms-0">
                                                    <input id="push-comments" name="toggleswitchsize" type="checkbox" checked="">
                                                    <label for="push-comments" class="label-primary mb-1"></label>
                                                </div>
                                            </div>
                                            <div class="d-sm-flex d-block align-items-top mb-4 justify-content-between px-2">
                                                <div>
                                                    <p class="fs-14 mb-1 fw-medium">Remaiders</p>
                                                    <p class="fs-12 text-muted mb-0">You will receive notifications for remainders.</p>
                                                </div>
                                                <div class="custom-toggle-switch ms-sm-2 ms-0">
                                                    <input id="push-update" name="toggleswitchsize" type="checkbox">
                                                    <label for="push-update" class="label-primary mb-1"></label>
                                                </div>
                                            </div>
                                        </div>--}}
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-end">
                            <div class="btn-list">
                                <button type="submit" class="btn btn-primary">{{ __('trans.save') }}</button>
                                <button class="btn btn-primary-light">{{ __('trans.close') }}</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </form>

            <form id="remove_company_logo" action="{{ route('admin.setting.remove.company_logo') }}" method="POST" style="display: none">
                @method('POST')
                @csrf
            </form>
            <!-- End:: row-1 -->

        </div>
    </div>
    <!-- End::app-content -->

@endsection

@section('scripts')

    <!-- Gallery JS -->
    <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Profile-setting JS -->
    @vite('resources/assets/js/profile-settings.js')

    <script>
        $(document).ready(function() {
            $('#switch-vat').change(function() {
                $('#vat_percentage').prop('disabled', !$(this).is(':checked'));
            });

            // change site direction base on language setting
            $('#setting_form').on('submit', function (e) {
                if ($(this).serializeArray()[8]['value'] === 'ar')
                {
                    $('#switcher-rtl').delay(5000).queue(function() {
                        $(this).click();
                    });
                }

                if ($(this).serializeArray()[8]['value'] === 'en')
                {
                    $('#switcher-ltr').delay(5000).queue(function() {
                        $(this).click();
                    });
                }
            })

        });
    </script>

@endsection
