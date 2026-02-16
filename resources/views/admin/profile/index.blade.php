@extends('admin.layouts.master')

@section('title', __('trans.profile'))

@section('styles')

    <!-- Choices Css -->
    <link rel="stylesheet" href="{{asset('build/assets/libs/glightbox/css/glightbox.min.css')}}">

@endsection

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Start:: row-1 -->
            <div class="row">
                <div class="col-xl-12">
                    <div class="card custom-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="d-sm-flex flex-wrap align-items-start gap-5 p-2 border-bottom-0">
                                <div>
                                    <div class="d-flex align-items-center gap-2 mb-4">
                                        <div class="lh-1">
                                                    <span class="avatar avatar-xxl online me-3">
                                                        <img src="{{asset('build/assets/images/faces/22.jpg')}}" alt="">
                                                    </span>
                                        </div>
                                        <div class="flex-fill main-profile-info">
                                            <div class="d-flex align-items-center justify-content-between mb-1">
                                                <h5 class="fw-medium mb-1">Anthony Richel</h5>
                                            </div>
                                            <p class="mb-1 text-muted op-7">Managing Director(M.D)</p>
                                            <p class="fs-12 mb-0 op-5">
                                                <span class=""><i class="ri-map-pin-line me-1 d-inline-block"></i>Suite 456,New York,</span>
                                                <span> USA</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ms-auto">
                                    <a href="{{url('profile-settings')}}" class="btn btn-outline-primary"><i class="ri-settings-3-line me-1 d-inline-block"></i>Profile Settings</a>
                                </div>
                            </div>
                            <div class="d-sm-flex flex-wrap align-items-top gap-5 justify-content-between p-2 border-bottom-0">



                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- End:: row-1 -->

            <!-- Start::row-2 -->
            <div class="row">
                <div class="col-xxl-9 col-xl-12">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="top-left"></div>
                                <div class="top-right"></div>
                                <div class="bottom-left"></div>
                                <div class="bottom-right"></div>
                                <div class="card-body p-0">
                                    <div class="p-3 border-bottom border-block-end-dashed d-flex align-items-center justify-content-center">
                                        <div>
                                            <ul class="nav nav-tabs mb-0 tab-style-6 justify-content-start bg-transparent" id="myTab" role="tablist">
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link active" id="activity-tab" data-bs-toggle="tab"
                                                            data-bs-target="#activity-tab-pane" type="button" role="tab"
                                                            aria-controls="activity-tab-pane" aria-selected="true"><i
                                                            class="ri-gift-line me-1 align-middle d-inline-block"></i>TAP 1</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="posts-tab" data-bs-toggle="tab"
                                                            data-bs-target="#posts-tab-pane" type="button" role="tab"
                                                            aria-controls="posts-tab-pane" aria-selected="false"><i
                                                            class="ri-bill-line me-1 align-middle d-inline-block"></i>TAP 2</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="followers-tab" data-bs-toggle="tab"
                                                            data-bs-target="#followers-tab-pane" type="button" role="tab"
                                                            aria-controls="followers-tab-pane" aria-selected="false"><i
                                                            class="ri-money-dollar-box-line me-1 align-middle d-inline-block"></i>TAP 3</button>
                                                </li>
                                                <li class="nav-item" role="presentation">
                                                    <button class="nav-link" id="gallery-tab" data-bs-toggle="tab"
                                                            data-bs-target="#gallery-tab-pane" type="button" role="tab"
                                                            aria-controls="gallery-tab-pane" aria-selected="false"><i
                                                            class="ri-exchange-box-line me-1 align-middle d-inline-block"></i>TAP 3</button>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="p-3">
                                        <div class="tab-content" id="myTabContent">
                                            <div class="tab-pane show active fade p-0 border-0" id="activity-tab-pane" role="tabpanel" aria-labelledby="activity-tab" tabindex="0">
                                                TAP 1 Content
                                            </div>
                                            <div class="tab-pane fade p-0 border-0" id="posts-tab-pane" role="tabpanel" aria-labelledby="posts-tab" tabindex="0">
                                                TAP 2 Content
                                            </div>
                                            <div class="tab-pane fade p-0 border-0" id="followers-tab-pane" role="tabpanel" aria-labelledby="followers-tab" tabindex="0">
                                                TAP 3 Content
                                            </div>
                                            <div class="tab-pane fade p-0 border-0" id="gallery-tab-pane" role="tabpanel" aria-labelledby="gallery-tab" tabindex="0">
                                                TAP 4 Content
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <!--End::row-2 -->

        </div>
    </div>
    <!-- End::app-content -->

@endsection

@section('scripts')

    <!-- Gallery JS -->
    <script src="{{asset('build/assets/libs/glightbox/js/glightbox.min.js')}}"></script>

    <!-- Internal Profile JS -->
    @vite('resources/assets/js/profile.js')


@endsection
