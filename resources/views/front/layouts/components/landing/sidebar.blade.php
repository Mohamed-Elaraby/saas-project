
            <aside class="app-sidebar sticky" id="sidebar">

                <div class="container-xl">
                    <!-- Start::main-sidebar -->
                    <div class="main-sidebar">

                        <!-- Start::nav -->
                        <nav class="main-menu-container nav nav-pills sub-open">
                            <div class="landing-logo-container">
                                <div class="horizontal-logo">
                                    <a href="{{ route('home') }}" class="header-logo">
                                        <img src="{{asset('storage/front/header/logo_transparent.png')}}" alt="logo" class="desktop-logo">
                                        <img src="{{asset('storage/front/header/logo_transparent.png')}}" alt="logo" class="desktop-dark">
                                    </a>
                                </div>
                            </div>
                            <div class="slide-left" id="slide-left"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg></div>
                            <ul class="main-menu">
                                <!-- Start::slide -->
                                <li class="slide">
                                    <a class="side-menu__item" href="{{ route('home') }}">
                                        <span class="side-menu__label">{{ __('trans.home') }}</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class="slide">
                                    <a href="{{ route('home') }}#glance" class="side-menu__item">
                                        <span class="side-menu__label">Glance</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <span class="side-menu__label me-2">{{ __('trans.services') }}</span>
                                        <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide">
                                            <a href="{{ route('services.webDevelopment') }}" class="side-menu__item">Web Development</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('services.softwareSolutions') }}" class="side-menu__item">Software Solutions</a>
                                        </li>
                                        {{--<li class="slide">
                                            <a href="#mobile-apps" class="side-menu__item">Mobile Applications</a>
                                        </li>--}}
                                        <li class="slide">
                                            <a href="{{ route('services.UIUXDesign') }}" class="side-menu__item">UI/UX Design</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('services.digitalTransformation') }}" class="side-menu__item">Digital Transformation</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End::slide -->

                                <!-- Start::slide -->
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <span class="side-menu__label me-2">{{ __('trans.products') }}</span>
                                        <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide">
                                            <a target="_blank" href="{{ route('products.automotiveServiceCenterManagementSystem') }}" class="side-menu__item">Automotive Service Center Management System</a>
                                        </li>
                                        <li class="slide">
                                            <a target="_blank" href="{{ route('products.sparePartsManagementSystem') }}" class="side-menu__item">Spare Parts Management System</a>
                                        </li>
                                    </ul>
                                </li>
                                <!-- End::slide -->


                                <!-- Start::slide -->
                                {{--<li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <span class="side-menu__label me-2">{{ __('trans.services') }}</span>
                                        <i class="fe fe-chevron-right side-menu__angle op-8"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide">
                                            <a href="#about-us" class="side-menu__item">About Us</a>
                                        </li>
                                        <li class="slide">
                                            <a href="#services" class="side-menu__item">Services</a>
                                        </li>
                                        <li class="slide">
                                            <a href="#features" class="side-menu__item">Features</a>
                                        </li>
                                        <li class="slide has-sub">
                                            <a href="javascript:void(0);" class="side-menu__item">Level-2
                                                <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                            <ul class="slide-menu child2">
                                                <li class="slide">
                                                    <a href="javascript:void(0);" class="side-menu__item">Level-2-1</a>
                                                </li>
                                                <li class="slide has-sub">
                                                    <a href="javascript:void(0);" class="side-menu__item">Level-2-2
                                                        <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                    <ul class="slide-menu child3">
                                                        <li class="slide">
                                                            <a href="javascript:void(0);" class="side-menu__item">Level-2-2-1</a>
                                                        </li>
                                                        <li class="slide has-sub">
                                                            <a href="javascript:void(0);" class="side-menu__item">Level-2-2-2</a>
                                                        </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>--}}
                                <!-- End::slide -->

                                <!-- Start::slide -->
                                {{--<li class="slide">
                                    <a href="#pricing" class="side-menu__item">
                                        <span class="side-menu__label">Pricing</span>
                                    </a>
                                </li>--}}
                                <!-- End::slide -->
                                <!-- Start::slide -->
{{--                                <li class="slide">
                                    <a href="#testimonials" class="side-menu__item">
                                        <span class="side-menu__label">Testimonials</span>
                                    </a>
                                </li>--}}
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                {{--<li class="slide">
                                    <a href="#faqs" class="side-menu__item">
                                        <span class="side-menu__label">FAQ's</span>
                                    </a>
                                </li>--}}
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                {{--<li class="slide">
                                    <a href="#team" class="side-menu__item">
                                        <span class="side-menu__label">Team</span>
                                    </a>
                                </li>--}}
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class="slide">
                                    <a href="{{ route('home') }}#about-us" class="side-menu__item">
                                        <span class="side-menu__label">About Us</span>
                                    </a>
                                </li>
                                <!-- End::slide -->
                                <!-- Start::slide -->
                                <li class="slide">
                                    <a href="{{ route('home') }}#contact" class="side-menu__item">
                                        <span class="side-menu__label">Contact Us</span>
                                    </a>
                                </li>
                                <!-- End::slide -->

                            </ul>
                            <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                            <div class="d-lg-flex d-none">
                                <div class="btn-list d-lg-flex d-none mt-lg-2 mt-xl-0 mt-0">
                                    <a href="{{route('register')}}" class="btn btn-wave btn-primary">
{{--                                    <a href="javascript:void(0);" class="btn btn-wave btn-primary">--}}
                                        Sign Up
                                    </a>
                                    <button class="btn btn-wave btn-icon btn-success switcher-icon" data-bs-toggle="offcanvas" data-bs-target="#switcher-canvas">
                                        <i class="ri-settings-3-line"></i>
                                    </button>
                                </div>
                            </div>
                        </nav>
                        <!-- End::nav -->

                    </div>
                    <!-- End::main-sidebar -->
                </div>

            </aside>
