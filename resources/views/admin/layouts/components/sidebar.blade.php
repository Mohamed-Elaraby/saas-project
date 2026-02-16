
<aside class="app-sidebar sticky" id="sidebar">

                <div class="top-left"></div>
                <div class="top-right"></div>
                <div class="bottom-left"></div>
                <div class="bottom-right"></div>
                <!-- Start::main-sidebar-header -->
                <div class="main-sidebar-header">
                    <a href="{{url('index')}}" class="header-logo">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
                    </a>
                </div>
                <!-- End::main-sidebar-header -->

                <!-- Start::main-sidebar -->
                <div class="main-sidebar" id="sidebar-scroll">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="slide-left" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                        </div>
                        <ul class="main-menu">

{{--
                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z" opacity="0.2"/><path d="M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Dashboards</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Dashboards</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index')}}" class="side-menu__item">Gaming</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index2')}}" class="side-menu__item">Sales</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index3')}}" class="side-menu__item">Analytics</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index4')}}" class="side-menu__item">Ecommerce</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index5')}}" class="side-menu__item">Crypto</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index6')}}" class="side-menu__item">NFT</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index7')}}" class="side-menu__item">CRM</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index8')}}" class="side-menu__item">HRM</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index9')}}" class="side-menu__item">Jobs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index10')}}" class="side-menu__item">Projects</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index11')}}" class="side-menu__item">Stocks</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index12')}}" class="side-menu__item">Courses</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M200,224H56a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96l56,56V216A8,8,0,0,1,200,224Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Pages</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1 pages-ul">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Pages</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('profile')}}" class="side-menu__item">Profile</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('profile-settings')}}" class="side-menu__item">Profile settings</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('chat')}}" class="side-menu__item">Chat</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('contacts')}}" class="side-menu__item">Contacts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('contact-us')}}" class="side-menu__item">Contact Us</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Blog
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('blog')}}" class="side-menu__item">Blog</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('blog-details')}}" class="side-menu__item">Blog Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('blog-create')}}" class="side-menu__item">Create Blog</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Email
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('mail')}}" class="side-menu__item">Mail App</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('mail-settings')}}" class="side-menu__item">Mail Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('empty-page')}}" class="side-menu__item">Empty</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('faqs')}}" class="side-menu__item">FAQ's</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Invoice
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('invoice-create')}}" class="side-menu__item">Create Invoice</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('invoice-details')}}" class="side-menu__item">Invoice Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('invoice-list')}}" class="side-menu__item">Invoice List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('landing')}}" class="side-menu__item">Landing</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('landing-jobs')}}" class="side-menu__item">Jobs Landing</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('notifications')}}" class="side-menu__item">Notifications</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('pricing')}}" class="side-menu__item">Pricing</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('reviews')}}" class="side-menu__item">Reviews</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('search-page')}}" class="side-menu__item">Search Page</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('team')}}" class="side-menu__item">Team</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('terms-conditions')}}" class="side-menu__item">Terms & Conditions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('timeline')}}" class="side-menu__item">Timeline</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('todo-list')}}" class="side-menu__item">To Do List</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M216,96v96a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V96Z" opacity="0.2"/><rect x="24" y="56" width="208" height="40" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M216,96v96a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="104" y1="136" x2="152" y2="136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Ui Elements</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1 mega-menu">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Ui Elements</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('alerts')}}" class="side-menu__item">Alerts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('badges')}}" class="side-menu__item">Badges</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('breadcrumbs')}}" class="side-menu__item">Breadcrumbs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('buttons')}}" class="side-menu__item">Buttons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('buttongroups')}}" class="side-menu__item">Button Groups</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('cards')}}" class="side-menu__item">Cards</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('dropdowns')}}" class="side-menu__item">Dropdowns</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('images-figures')}}" class="side-menu__item">Images & Figures</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('links-interactions')}}" class="side-menu__item">Links & Interactions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('listgroups')}}" class="side-menu__item">List Groups</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('navs-tabs')}}" class="side-menu__item">Navs & Tabs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('object-fit')}}" class="side-menu__item">Object Fit</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('paginations')}}" class="side-menu__item">Paginations</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('popovers')}}" class="side-menu__item">Popovers</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('progress')}}" class="side-menu__item">Progress</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('spinners')}}" class="side-menu__item">Spinners</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('toasts')}}" class="side-menu__item">Toasts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('tooltips')}}" class="side-menu__item">Tooltips</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('typography')}}" class="side-menu__item">Typography</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M128,32A96,96,0,0,0,63.8,199.38h0A72,72,0,0,1,128,160a40,40,0,1,1,40-40,40,40,0,0,1-40,40,72,72,0,0,1,64.2,39.37A96,96,0,0,0,128,32Z" opacity="0.2"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M63.8,199.37a72,72,0,0,1,128.4,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="200 128 224 152 248 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="8 128 32 104 56 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M32,104v24a96,96,0,0,0,174,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M224,152V128A96,96,0,0,0,50,72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Authentication</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Authentication</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('coming-soon')}}" class="side-menu__item">Coming Soon</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Create Password
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('createpassword-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('createpassword-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('lockscreen-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('lockscreen-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('resetpassword-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('resetpassword-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('signup-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('signup-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Sign In
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('signin-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('signin-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('twostep-verification-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('twostep-verification-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('under-maintenance')}}" class="side-menu__item">Under Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M142.41,40.22l87.46,151.87C236,202.79,228.08,216,215.46,216H40.54C27.92,216,20,202.79,26.13,192.09L113.59,40.22C119.89,29.26,136.11,29.26,142.41,40.22Z" opacity="0.2"/><path d="M142.41,40.22l87.46,151.87C236,202.79,228.08,216,215.46,216H40.54C27.92,216,20,202.79,26.13,192.09L113.59,40.22C119.89,29.26,136.11,29.26,142.41,40.22Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="144" x2="128" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="180" r="12"/></svg>
                                    <span class="side-menu__label">Error</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Error</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('error401')}}" class="side-menu__item">401 - Error</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('error404')}}" class="side-menu__item">404 - Error</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('error500')}}" class="side-menu__item">500 - Error</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="152" y="40" width="56" height="168" opacity="0.2"/><polyline points="48 208 48 136 96 136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="224" y1="208" x2="32" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="96 208 96 88 152 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 208 152 40 208 40 208 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Charts</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Charts</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('apex-line-charts')}}" class="side-menu__item">Line Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-area-charts')}}" class="side-menu__item">Area Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-column-charts')}}" class="side-menu__item">Column Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-bar-charts')}}" class="side-menu__item">Bar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-mixed-charts')}}" class="side-menu__item">Mixed Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-rangearea-charts')}}" class="side-menu__item">Range Area Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-timeline-charts')}}" class="side-menu__item">Timeline Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-funnel-charts')}}" class="side-menu__item">Funnel Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-candlestick-charts')}}" class="side-menu__item">CandleStick
                                                    Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-boxplot-charts')}}" class="side-menu__item">Boxplot Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-bubble-charts')}}" class="side-menu__item">Bubble Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-scatter-charts')}}" class="side-menu__item">Scatter Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-heatmap-charts')}}" class="side-menu__item">Heatmap Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-treemap-charts')}}" class="side-menu__item">Treemap Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-pie-charts')}}" class="side-menu__item">Pie Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-radialbar-charts')}}" class="side-menu__item">Radialbar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-radar-charts')}}" class="side-menu__item">Radar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-polararea-charts')}}" class="side-menu__item">Polararea Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('chartjs-charts')}}" class="side-menu__item">Chartjs Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('echarts')}}" class="side-menu__item">Echart Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="48" y="48" width="64" height="64" rx="8" opacity="0.2"/><rect x="144" y="48" width="64" height="64" rx="8" opacity="0.2"/><rect x="48" y="144" width="64" height="64" rx="8" opacity="0.2"/><rect x="144" y="144" width="64" height="64" rx="8" opacity="0.2"/><rect x="144" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="48" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="144" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="48" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Apps</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Apps</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">File Manager
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('file-manager')}}" class="side-menu__item">File Manager</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('add-products')}}" class="side-menu__item">Add Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('cart')}}" class="side-menu__item">Cart</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('checkout')}}" class="side-menu__item">Checkout</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('edit-products')}}" class="side-menu__item">Edit Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('order-details')}}" class="side-menu__item">Order Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('orders')}}" class="side-menu__item">Orders</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('products')}}" class="side-menu__item">Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('product-details')}}" class="side-menu__item">Product Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('product-list')}}" class="side-menu__item">Product List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('wishlist')}}" class="side-menu__item">Wishlist</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('full-calendar')}}" class="side-menu__item">Full Calendar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('gallery')}}" class="side-menu__item">Gallery</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('sweet-alerts')}}" class="side-menu__item">Sweet Alerts</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Projects
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('projects-create')}}" class="side-menu__item">Create Project</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('projects-list')}}" class="side-menu__item">Projects List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('projects-overview')}}" class="side-menu__item">Project Overview</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Crypto
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('crypto-buy-sell')}}" class="side-menu__item">Buy & Sell</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crypto-marketcap')}}" class="side-menu__item">Marketcap</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crypto-wallet')}}" class="side-menu__item">Wallet</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crypto-currency-exchange')}}" class="side-menu__item">Currency Exchange</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crypto-transactions')}}" class="side-menu__item">Transactions</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Task
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('task-kanban-board')}}" class="side-menu__item">Kanban Board</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('task-details')}}" class="side-menu__item">Task Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('task-list-view')}}" class="side-menu__item">List View</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">NFT
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('nft-create')}}" class="side-menu__item">Create NFT</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('nft-details')}}" class="side-menu__item">NFT Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('nft-marketplace')}}" class="side-menu__item">Market Place</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('nft-live-auction')}}" class="side-menu__item">Live Auction</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('nft-wallet-integration')}}" class="side-menu__item">Wallet Integration</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">CRM
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('crm-companies')}}" class="side-menu__item">Companies</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crm-contacts')}}" class="side-menu__item">Contacts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crm-leads')}}" class="side-menu__item">Leads</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crm-deals')}}" class="side-menu__item">Deals</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Jobs
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('job-details')}}" class="side-menu__item">Job Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-post')}}" class="side-menu__item">Job Post</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-list')}}" class="side-menu__item">Jobs List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-candidate-search')}}" class="side-menu__item">Search Candidate</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-candidate-details')}}" class="side-menu__item">Candidate Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-company-search')}}" class="side-menu__item">Search Company</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-search')}}" class="side-menu__item">Search Jobs</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="32 80 128 136 224 80 128 24 32 80" opacity="0.2"/><polyline points="32 176 128 232 224 176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="32 128 128 184 224 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="32 80 128 136 224 80 128 24 32 80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Nested Menu</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Nested Menu</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2.1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2.2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.1</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M128,36a92,92,0,1,0,92,92A92.1,92.1,0,0,0,128,36Z" opacity="0.2"/><line x1="128" y1="64" x2="128" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="104 40 128 64 152 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="104 216 128 192 152 216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="72.57" y1="96" x2="183.43" y2="160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="40 104 72.57 96 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="192 192 183.43 160 216 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="72.57" y1="160" x2="183.43" y2="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="64 192 72.57 160 40 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="216 104 183.43 96 192 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Advanced UI</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Advanced Ui</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('accordions-collapse')}}" class="side-menu__item">Accordions & Collapse</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('carousel')}}" class="side-menu__item">Carousel</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('draggable-cards')}}" class="side-menu__item">Draggable Cards</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('modals-closes')}}" class="side-menu__item">Modals & Closes</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('navbars')}}" class="side-menu__item">Navbars</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('offcanvas')}}" class="side-menu__item">Offcanvas</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('placeholders')}}" class="side-menu__item">Placeholders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('ratings')}}" class="side-menu__item">Ratings</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('ribbons')}}" class="side-menu__item">Ribbons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('scrollspy')}}" class="side-menu__item">Scrollspy</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('swiperjs')}}" class="side-menu__item">Swiper JS</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('sortable-list')}}" class="side-menu__item">Sortable JS</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="96" r="48" opacity="0.2"/><circle cx="128" cy="96" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="176 160 176 240 127.99 216 80 240 80 160.01" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Utilities</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Utilities</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('avatars')}}" class="side-menu__item">Avatars</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('borders')}}" class="side-menu__item">Borders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('breakpoints')}}" class="side-menu__item">Breakpoints</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('colors')}}" class="side-menu__item">Colors</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('columns')}}" class="side-menu__item">Columns</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('flex')}}" class="side-menu__item">Flex</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('gutters')}}" class="side-menu__item">Gutters</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('helpers')}}" class="side-menu__item">Helpers</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('positions')}}" class="side-menu__item">Positions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('more')}}" class="side-menu__item">Additional Content</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M200,224H56a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96l56,56V216A8,8,0,0,1,200,224Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Forms</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Forms</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('form-inputs')}}" class="side-menu__item">Inputs</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-check-radios')}}" class="side-menu__item">Checks & Radios</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-input-groups')}}" class="side-menu__item">Input Groups</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-select')}}" class="side-menu__item">Form Select</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-range')}}" class="side-menu__item">Range Slider</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-input-masks')}}" class="side-menu__item">Input Masks</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-file-uploads')}}" class="side-menu__item">File Uploads</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-datetime-pickers')}}" class="side-menu__item">Date,Time Picker</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-color-pickers')}}" class="side-menu__item">Color Pickers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-advanced')}}" class="side-menu__item">Form Advanced</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('floating-labels')}}" class="side-menu__item">Floating Labels</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-layouts')}}" class="side-menu__item">Form Layouts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-wizards')}}" class="side-menu__item">Form Wizards</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('quill-editor')}}" class="side-menu__item">Quill Editor</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-validations')}}" class="side-menu__item">Validations</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-select2')}}" class="side-menu__item">Select2</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="{{url('widgets')}}" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128Z" opacity="0.2"/><rect x="32" y="80" width="192" height="48" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="80" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176.79,31.21c9.34,9.34,9.89,25.06,0,33.82C159.88,80,128,80,128,80s0-31.88,15-48.79C151.73,21.32,167.45,21.87,176.79,31.21Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M79.21,31.21c-9.34,9.34-9.89,25.06,0,33.82C96.12,80,128,80,128,80s0-31.88-15-48.79C104.27,21.32,88.55,21.87,79.21,31.21Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Widgets</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="48" y="48" width="160" height="160" rx="8" opacity="0.2"/><rect x="48" y="48" width="160" height="160" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="48" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="48" y1="128" x2="208" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Tables</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('tables')}}" class="side-menu__item">Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('grid-tables')}}" class="side-menu__item">Grid JS Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('data-tables')}}" class="side-menu__item">Data Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M128,24a80,80,0,0,0-80,80c0,72,80,128,80,128s80-56,80-128A80,80,0,0,0,128,24Zm0,112a32,32,0,1,1,32-32A32,32,0,0,1,128,136Z" opacity="0.2"/><circle cx="128" cy="104" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Maps</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('google-maps')}}" class="side-menu__item">Google Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('leaflet-maps')}}" class="side-menu__item">Leaflet Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('vector-maps')}}" class="side-menu__item">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->
--}}

                            <!-- Start::slide -->
{{--                            <li class="slide">--}}
{{--                                <a href="{{ route('admin.users.index') }}" class="side-menu__item">--}}
{{--                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11ZM18.2837 14.7028C21.0644 15.9561 23 18.752 23 22H21C21 19.564 19.5483 17.4671 17.4628 16.5271L18.2837 14.7028ZM17.5962 3.41321C19.5944 4.23703 21 6.20361 21 8.5C21 11.3702 18.8042 13.7252 16 13.9776V11.9646C17.6967 11.7222 19 10.264 19 8.5C19 7.11935 18.2016 5.92603 17.041 5.35635L17.5962 3.41321Z"></path></svg>--}}
{{--                                    <span class="side-menu__label">HOME</span>--}}
{{--                                </a>--}}
{{--                            </li>--}}
                            <!-- End::slide -->


                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-user'))
                                <li class="slide">
                                    <a href="{{ route('admin.users.index') }}" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11ZM18.2837 14.7028C21.0644 15.9561 23 18.752 23 22H21C21 19.564 19.5483 17.4671 17.4628 16.5271L18.2837 14.7028ZM17.5962 3.41321C19.5944 4.23703 21 6.20361 21 8.5C21 11.3702 18.8042 13.7252 16 13.9776V11.9646C17.6967 11.7222 19 10.264 19 8.5C19 7.11935 18.2016 5.92603 17.041 5.35635L17.5962 3.41321Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.users') }}</span>
                                    </a>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-rolesManager'))
                                <li class="slide">
                                    <a href="{{ route('admin.rolesManager.index') }}" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M12 14V16C8.68629 16 6 18.6863 6 22H4C4 17.5817 7.58172 14 12 14ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13ZM12 11C14.21 11 16 9.21 16 7C16 4.79 14.21 3 12 3C9.79 3 8 4.79 8 7C8 9.21 9.79 11 12 11ZM21 17H22V22H14V17H15V16C15 14.3431 16.3431 13 18 13C19.6569 13 21 14.3431 21 16V17ZM19 17V16C19 15.4477 18.5523 15 18 15C17.4477 15 17 15.4477 17 16V17H19Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.roles manager') }}</span>
                                    </a>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-profile'))
                                <li class="slide">
                                    <a href="{{ route('admin.profiles.index') }}" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M21.0082 3C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082ZM20 5H4V19H20V5ZM18 15V17H6V15H18ZM12 7V13H6V7H12ZM18 11V13H14V11H18ZM10 9H8V11H10V9ZM18 7V9H14V7H18Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.profile') }}</span>
                                    </a>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-setting'))
                                <li class="slide">
                                    <a href="{{ route('admin.setting.index') }}" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M3.33946 17.0002C2.90721 16.2515 2.58277 15.4702 2.36133 14.6741C3.3338 14.1779 3.99972 13.1668 3.99972 12.0002C3.99972 10.8345 3.3348 9.824 2.36353 9.32741C2.81025 7.71651 3.65857 6.21627 4.86474 4.99001C5.7807 5.58416 6.98935 5.65534 7.99972 5.072C9.01009 4.48866 9.55277 3.40635 9.4962 2.31604C11.1613 1.8846 12.8847 1.90004 14.5031 2.31862C14.4475 3.40806 14.9901 4.48912 15.9997 5.072C17.0101 5.65532 18.2187 5.58416 19.1346 4.99007C19.7133 5.57986 20.2277 6.25151 20.66 7.00021C21.0922 7.7489 21.4167 8.53025 21.6381 9.32628C20.6656 9.82247 19.9997 10.8336 19.9997 12.0002C19.9997 13.166 20.6646 14.1764 21.6359 14.673C21.1892 16.2839 20.3409 17.7841 19.1347 19.0104C18.2187 18.4163 17.0101 18.3451 15.9997 18.9284C14.9893 19.5117 14.4467 20.5941 14.5032 21.6844C12.8382 22.1158 11.1148 22.1004 9.49633 21.6818C9.55191 20.5923 9.00929 19.5113 7.99972 18.9284C6.98938 18.3451 5.78079 18.4162 4.86484 19.0103C4.28617 18.4205 3.77172 17.7489 3.33946 17.0002ZM8.99972 17.1964C10.0911 17.8265 10.8749 18.8227 11.2503 19.9659C11.7486 20.0133 12.2502 20.014 12.7486 19.9675C13.1238 18.8237 13.9078 17.8268 14.9997 17.1964C16.0916 16.5659 17.347 16.3855 18.5252 16.6324C18.8146 16.224 19.0648 15.7892 19.2729 15.334C18.4706 14.4373 17.9997 13.2604 17.9997 12.0002C17.9997 10.74 18.4706 9.5632 19.2729 8.6665C19.1688 8.4405 19.0538 8.21822 18.9279 8.00021C18.802 7.78219 18.667 7.57148 18.5233 7.36842C17.3457 7.61476 16.0911 7.43414 14.9997 6.80405C13.9083 6.17395 13.1246 5.17768 12.7491 4.03455C12.2509 3.98714 11.7492 3.98646 11.2509 4.03292C10.8756 5.17671 10.0916 6.17364 8.99972 6.80405C7.9078 7.43447 6.65245 7.61494 5.47428 7.36803C5.18485 7.77641 4.93463 8.21117 4.72656 8.66637C5.52881 9.56311 5.99972 10.74 5.99972 12.0002C5.99972 13.2604 5.52883 14.4372 4.72656 15.3339C4.83067 15.5599 4.94564 15.7822 5.07152 16.0002C5.19739 16.2182 5.3324 16.4289 5.47612 16.632C6.65377 16.3857 7.90838 16.5663 8.99972 17.1964ZM11.9997 15.0002C10.3429 15.0002 8.99972 13.6571 8.99972 12.0002C8.99972 10.3434 10.3429 9.00021 11.9997 9.00021C13.6566 9.00021 14.9997 10.3434 14.9997 12.0002C14.9997 13.6571 13.6566 15.0002 11.9997 15.0002ZM11.9997 13.0002C12.552 13.0002 12.9997 12.5525 12.9997 12.0002C12.9997 11.4479 12.552 11.0002 11.9997 11.0002C11.4474 11.0002 10.9997 11.4479 10.9997 12.0002C10.9997 12.5525 11.4474 13.0002 11.9997 13.0002Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.setting') }}</span>
                                    </a>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-branch'))
                                <li class="slide">
                                    <a href="{{ route('admin.branches.index') }}" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M20.7999 9H12V17H11V21.0001H5C4.44772 21.0001 4 20.5524 4 20.0001V11.0001L1 11.0001 11.3273 1.61162C11.7087 1.26488 12.2913 1.26488 12.6727 1.61162L20.7999 9ZM14 11H23V18H14V11ZM13 21H24V19H13V21Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.branches') }}</span>
                                    </a>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-statement'))
                                <li class="slide">
                                    <a href="{{ route('admin.statement.index') }}" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M6 4V8H18V4H20.0066C20.5552 4 21 4.44495 21 4.9934V21.0066C21 21.5552 20.5551 22 20.0066 22H3.9934C3.44476 22 3 21.5551 3 21.0066V4.9934C3 4.44476 3.44495 4 3.9934 4H6ZM9 17H7V19H9V17ZM9 14H7V16H9V14ZM9 11H7V13H9V11ZM16 2V6H8V2H16Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.statement') }}</span>
                                    </a>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-product'))
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M12.001 22C6.47813 22 2.00098 17.5228 2.00098 12C2.00098 6.47715 6.47813 2 12.001 2C17.5238 2 22.001 6.47715 22.001 12C22.001 17.5228 17.5238 22 12.001 22ZM12.001 20C16.4193 20 20.001 16.4183 20.001 12C20.001 7.58172 16.4193 4 12.001 4C7.5827 4 4.00098 7.58172 4.00098 12C4.00098 16.4183 7.5827 20 12.001 20ZM13.3345 12C14.1629 12 14.8345 11.3284 14.8345 10.5C14.8345 9.67157 14.1629 9 13.3345 9H10.501V12H13.3345ZM13.3345 7C15.2675 7 16.8345 8.567 16.8345 10.5C16.8345 12.433 15.2675 14 13.3345 14H10.501V17H8.50098V7H13.3345Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.products management') }}</span>
                                        <i class="fe fe-chevron-right side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide side-menu__label1">
                                            <a href="javascript:void(0)">{{ __('trans.products management') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.products.index') }}" class="side-menu__item">{{ __('trans.product') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.productCodes.index') }}" class="side-menu__item">{{ __('trans.product code') }}</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-saleOrder') || auth()->user()->hasPermission('read-purchaseOrder'))
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M20 22H4C3.44772 22 3 21.5523 3 21V3C3 2.44772 3.44772 2 4 2H20C20.5523 2 21 2.44772 21 3V21C21 21.5523 20.5523 22 20 22ZM19 20V4H5V20H19ZM8 9H16V11H8V9ZM8 13H16V15H8V13Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.bills management') }}</span>
                                        <i class="fe fe-chevron-right side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide side-menu__label1">
                                            <a href="javascript:void(0)">{{ __('trans.bills management') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.purchaseOrders.index') }}" class="side-menu__item">{{ __('trans.purchase orders') }}</a>
                                        </li>

                                    </ul>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-client'))
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M8.5 7C8.5 8.10457 7.60457 9 6.5 9C5.39543 9 4.5 8.10457 4.5 7C4.5 5.89543 5.39543 5 6.5 5C7.60457 5 8.5 5.89543 8.5 7ZM2.5 7C2.5 9.20914 4.29086 11 6.5 11C8.70914 11 10.5 9.20914 10.5 7C10.5 4.79086 8.70914 3 6.5 3C4.29086 3 2.5 4.79086 2.5 7ZM9 16.5C9 15.1193 7.88071 14 6.5 14C5.11929 14 4 15.1193 4 16.5V19H9V16.5ZM11 21H2V16.5C2 14.0147 4.01472 12 6.5 12C8.98528 12 11 14.0147 11 16.5V21ZM19.5 7C19.5 8.10457 18.6046 9 17.5 9C16.3954 9 15.5 8.10457 15.5 7C15.5 5.89543 16.3954 5 17.5 5C18.6046 5 19.5 5.89543 19.5 7ZM13.5 7C13.5 9.20914 15.2909 11 17.5 11C19.7091 11 21.5 9.20914 21.5 7C21.5 4.79086 19.7091 3 17.5 3C15.2909 3 13.5 4.79086 13.5 7ZM20 16.5C20 15.1193 18.8807 14 17.5 14C16.1193 14 15 15.1193 15 16.5V19H20V16.5ZM13 19V16.5C13 14.0147 15.0147 12 17.5 12C19.9853 12 22 14.0147 22 16.5V21H13V19Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.clients management') }}</span>
                                        <i class="fe fe-chevron-right side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide side-menu__label1">
                                            <a href="javascript:void(0)">{{ __('trans.clients management') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.clients.index') }}" class="side-menu__item">{{ __('trans.clients') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.clientPayments.index') }}" class="side-menu__item">{{ __('trans.client payment') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.clientCollecting.index') }}" class="side-menu__item">{{ __('trans.client collecting') }}</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-supplier'))
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M2.5 7C2.5 9.20914 4.29086 11 6.5 11C8.70914 11 10.5 9.20914 10.5 7C10.5 4.79086 8.70914 3 6.5 3C4.29086 3 2.5 4.79086 2.5 7ZM2 21V16.5C2 14.0147 4.01472 12 6.5 12C8.98528 12 11 14.0147 11 16.5V21H2ZM17.5 11C15.2909 11 13.5 9.20914 13.5 7C13.5 4.79086 15.2909 3 17.5 3C19.7091 3 21.5 4.79086 21.5 7C21.5 9.20914 19.7091 11 17.5 11ZM13 21V16.5C13 14.0147 15.0147 12 17.5 12C19.9853 12 22 14.0147 22 16.5V21H13Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.suppliers management') }}</span>
                                        <i class="fe fe-chevron-right side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide side-menu__label1">
                                            <a href="javascript:void(0)">{{ __('trans.suppliers management') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.suppliers.index') }}" class="side-menu__item">{{ __('trans.suppliers') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.supplierPayments.index') }}" class="side-menu__item">{{ __('trans.supplier payment') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.supplierCollecting.index') }}" class="side-menu__item">{{ __('trans.supplier collecting') }}</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            @if(auth()->user()->hasPermission('read-expenses'))
                                <li class="slide has-sub">
                                    <a href="javascript:void(0);" class="side-menu__item">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path fill="none" d="M0 0h24v24H0z"></path><path d="M22.0049 6.99979H23.0049V16.9998H22.0049V19.9998C22.0049 20.5521 21.5572 20.9998 21.0049 20.9998H3.00488C2.4526 20.9998 2.00488 20.5521 2.00488 19.9998V3.99979C2.00488 3.4475 2.4526 2.99979 3.00488 2.99979H21.0049C21.5572 2.99979 22.0049 3.4475 22.0049 3.99979V6.99979ZM20.0049 16.9998H14.0049C11.2435 16.9998 9.00488 14.7612 9.00488 11.9998C9.00488 9.23836 11.2435 6.99979 14.0049 6.99979H20.0049V4.99979H4.00488V18.9998H20.0049V16.9998ZM21.0049 14.9998V8.99979H14.0049C12.348 8.99979 11.0049 10.3429 11.0049 11.9998C11.0049 13.6566 12.348 14.9998 14.0049 14.9998H21.0049ZM14.0049 10.9998H17.0049V12.9998H14.0049V10.9998Z"></path></svg>
                                        <span class="side-menu__label">{{ __('trans.expenses management') }}</span>
                                        <i class="fe fe-chevron-right side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu child1">
                                        <li class="slide side-menu__label1">
                                            <a href="javascript:void(0)">{{ __('trans.expenses management') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.expenses.index') }}" class="side-menu__item">{{ __('trans.expenses') }}</a>
                                        </li>
                                        <li class="slide">
                                            <a href="{{ route('admin.expensesTypes.index') }}" class="side-menu__item">{{ __('trans.expenses type') }}</a>
                                        </li>
                                    </ul>
                                </li>
                            @endif
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->

            </aside>







{{-- my sidebar --}}
{{--<aside class="app-sidebar sticky" id="sidebar">

                <div class="top-left"></div>
                <div class="top-right"></div>
                <div class="bottom-left"></div>
                <div class="bottom-right"></div>
                <!-- Start::main-sidebar-header -->
                <div class="main-sidebar-header">
                    <a href="{{url('index')}}" class="header-logo">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-dark.png')}}" alt="logo" class="toggle-dark">
                        <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                        <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="logo" class="toggle-logo">
                    </a>
                </div>
                <!-- End::main-sidebar-header -->

                <!-- Start::main-sidebar -->
                <div class="main-sidebar" id="sidebar-scroll">

                    <!-- Start::nav -->
                    <nav class="main-menu-container nav nav-pills flex-column sub-open">
                        <div class="slide-left" id="slide-left">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M13.293 6.293 7.586 12l5.707 5.707 1.414-1.414L10.414 12l4.293-4.293z"></path> </svg>
                        </div>
                        <ul class="main-menu">

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z" opacity="0.2"/><path d="M152,208V160a8,8,0,0,0-8-8H112a8,8,0,0,0-8,8v48a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V115.54a8,8,0,0,1,2.62-5.92l80-75.54a8,8,0,0,1,10.77,0l80,75.54a8,8,0,0,1,2.62,5.92V208a8,8,0,0,1-8,8H160A8,8,0,0,1,152,208Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Dashboards</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Dashboards</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index')}}" class="side-menu__item">Gaming</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index2')}}" class="side-menu__item">Sales</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index3')}}" class="side-menu__item">Analytics</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index4')}}" class="side-menu__item">Ecommerce</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index5')}}" class="side-menu__item">Crypto</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index6')}}" class="side-menu__item">NFT</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index7')}}" class="side-menu__item">CRM</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index8')}}" class="side-menu__item">HRM</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index9')}}" class="side-menu__item">Jobs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index10')}}" class="side-menu__item">Projects</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index11')}}" class="side-menu__item">Stocks</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('index12')}}" class="side-menu__item">Courses</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M200,224H56a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96l56,56V216A8,8,0,0,1,200,224Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Pages</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1 pages-ul">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Pages</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('profile')}}" class="side-menu__item">Profile</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('profile-settings')}}" class="side-menu__item">Profile settings</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('chat')}}" class="side-menu__item">Chat</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('contacts')}}" class="side-menu__item">Contacts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('contact-us')}}" class="side-menu__item">Contact Us</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Blog
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('blog')}}" class="side-menu__item">Blog</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('blog-details')}}" class="side-menu__item">Blog Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('blog-create')}}" class="side-menu__item">Create Blog</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Email
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('mail')}}" class="side-menu__item">Mail App</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('mail-settings')}}" class="side-menu__item">Mail Settings</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('empty-page')}}" class="side-menu__item">Empty</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('faqs')}}" class="side-menu__item">FAQ's</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Invoice
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('invoice-create')}}" class="side-menu__item">Create Invoice</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('invoice-details')}}" class="side-menu__item">Invoice Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('invoice-list')}}" class="side-menu__item">Invoice List</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('landing')}}" class="side-menu__item">Landing</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('landing-jobs')}}" class="side-menu__item">Jobs Landing</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('notifications')}}" class="side-menu__item">Notifications</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('pricing')}}" class="side-menu__item">Pricing</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('reviews')}}" class="side-menu__item">Reviews</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('search-page')}}" class="side-menu__item">Search Page</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('team')}}" class="side-menu__item">Team</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('terms-conditions')}}" class="side-menu__item">Terms & Conditions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('timeline')}}" class="side-menu__item">Timeline</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('todo-list')}}" class="side-menu__item">To Do List</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M216,96v96a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V96Z" opacity="0.2"/><rect x="24" y="56" width="208" height="40" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M216,96v96a8,8,0,0,1-8,8H48a8,8,0,0,1-8-8V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="104" y1="136" x2="152" y2="136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Ui Elements</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1 mega-menu">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Ui Elements</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('alerts')}}" class="side-menu__item">Alerts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('badges')}}" class="side-menu__item">Badges</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('breadcrumbs')}}" class="side-menu__item">Breadcrumbs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('buttons')}}" class="side-menu__item">Buttons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('buttongroups')}}" class="side-menu__item">Button Groups</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('cards')}}" class="side-menu__item">Cards</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('dropdowns')}}" class="side-menu__item">Dropdowns</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('images-figures')}}" class="side-menu__item">Images & Figures</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('links-interactions')}}" class="side-menu__item">Links & Interactions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('listgroups')}}" class="side-menu__item">List Groups</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('navs-tabs')}}" class="side-menu__item">Navs & Tabs</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('object-fit')}}" class="side-menu__item">Object Fit</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('paginations')}}" class="side-menu__item">Paginations</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('popovers')}}" class="side-menu__item">Popovers</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('progress')}}" class="side-menu__item">Progress</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('spinners')}}" class="side-menu__item">Spinners</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('toasts')}}" class="side-menu__item">Toasts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('tooltips')}}" class="side-menu__item">Tooltips</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('typography')}}" class="side-menu__item">Typography</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M128,32A96,96,0,0,0,63.8,199.38h0A72,72,0,0,1,128,160a40,40,0,1,1,40-40,40,40,0,0,1-40,40,72,72,0,0,1,64.2,39.37A96,96,0,0,0,128,32Z" opacity="0.2"/><circle cx="128" cy="120" r="40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M63.8,199.37a72,72,0,0,1,128.4,0" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="200 128 224 152 248 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="8 128 32 104 56 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M32,104v24a96,96,0,0,0,174,56" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M224,152V128A96,96,0,0,0,50,72" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Authentication</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Authentication</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('coming-soon')}}" class="side-menu__item">Coming Soon</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Create Password
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('createpassword-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('createpassword-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Lock Screen
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('lockscreen-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('lockscreen-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Reset Password
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('resetpassword-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('resetpassword-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Sign Up
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('signup-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('signup-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Sign In
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('signin-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('signin-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Two Step Verification
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('twostep-verification-basic')}}" class="side-menu__item">Basic</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('twostep-verification-cover')}}" class="side-menu__item">Cover</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('under-maintenance')}}" class="side-menu__item">Under Maintenance</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M142.41,40.22l87.46,151.87C236,202.79,228.08,216,215.46,216H40.54C27.92,216,20,202.79,26.13,192.09L113.59,40.22C119.89,29.26,136.11,29.26,142.41,40.22Z" opacity="0.2"/><path d="M142.41,40.22l87.46,151.87C236,202.79,228.08,216,215.46,216H40.54C27.92,216,20,202.79,26.13,192.09L113.59,40.22C119.89,29.26,136.11,29.26,142.41,40.22Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="144" x2="128" y2="104" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="180" r="12"/></svg>
                                    <span class="side-menu__label">Error</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Error</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('error401')}}" class="side-menu__item">401 - Error</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('error404')}}" class="side-menu__item">404 - Error</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('error500')}}" class="side-menu__item">500 - Error</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="152" y="40" width="56" height="168" opacity="0.2"/><polyline points="48 208 48 136 96 136" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="224" y1="208" x2="32" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="96 208 96 88 152 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 208 152 40 208 40 208 208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Charts</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Charts</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Apex Charts
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('apex-line-charts')}}" class="side-menu__item">Line Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-area-charts')}}" class="side-menu__item">Area Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-column-charts')}}" class="side-menu__item">Column Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-bar-charts')}}" class="side-menu__item">Bar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-mixed-charts')}}" class="side-menu__item">Mixed Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-rangearea-charts')}}" class="side-menu__item">Range Area Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-timeline-charts')}}" class="side-menu__item">Timeline Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-funnel-charts')}}" class="side-menu__item">Funnel Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-candlestick-charts')}}" class="side-menu__item">CandleStick
                                                    Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-boxplot-charts')}}" class="side-menu__item">Boxplot Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-bubble-charts')}}" class="side-menu__item">Bubble Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-scatter-charts')}}" class="side-menu__item">Scatter Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-heatmap-charts')}}" class="side-menu__item">Heatmap Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-treemap-charts')}}" class="side-menu__item">Treemap Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-pie-charts')}}" class="side-menu__item">Pie Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-radialbar-charts')}}" class="side-menu__item">Radialbar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-radar-charts')}}" class="side-menu__item">Radar Charts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('apex-polararea-charts')}}" class="side-menu__item">Polararea Charts</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('chartjs-charts')}}" class="side-menu__item">Chartjs Charts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('echarts')}}" class="side-menu__item">Echart Charts</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="48" y="48" width="64" height="64" rx="8" opacity="0.2"/><rect x="144" y="48" width="64" height="64" rx="8" opacity="0.2"/><rect x="48" y="144" width="64" height="64" rx="8" opacity="0.2"/><rect x="144" y="144" width="64" height="64" rx="8" opacity="0.2"/><rect x="144" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="48" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="144" y="48" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><rect x="48" y="144" width="64" height="64" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Apps</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Apps</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">File Manager
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('file-manager')}}" class="side-menu__item">File Manager</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Ecommerce
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('add-products')}}" class="side-menu__item">Add Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('cart')}}" class="side-menu__item">Cart</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('checkout')}}" class="side-menu__item">Checkout</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('edit-products')}}" class="side-menu__item">Edit Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('order-details')}}" class="side-menu__item">Order Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('orders')}}" class="side-menu__item">Orders</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('products')}}" class="side-menu__item">Products</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('product-details')}}" class="side-menu__item">Product Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('product-list')}}" class="side-menu__item">Product List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('wishlist')}}" class="side-menu__item">Wishlist</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('full-calendar')}}" class="side-menu__item">Full Calendar</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('gallery')}}" class="side-menu__item">Gallery</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('sweet-alerts')}}" class="side-menu__item">Sweet Alerts</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Projects
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('projects-create')}}" class="side-menu__item">Create Project</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('projects-list')}}" class="side-menu__item">Projects List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('projects-overview')}}" class="side-menu__item">Project Overview</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Crypto
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('crypto-buy-sell')}}" class="side-menu__item">Buy & Sell</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crypto-marketcap')}}" class="side-menu__item">Marketcap</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crypto-wallet')}}" class="side-menu__item">Wallet</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crypto-currency-exchange')}}" class="side-menu__item">Currency Exchange</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crypto-transactions')}}" class="side-menu__item">Transactions</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Task
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('task-kanban-board')}}" class="side-menu__item">Kanban Board</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('task-details')}}" class="side-menu__item">Task Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('task-list-view')}}" class="side-menu__item">List View</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">NFT
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('nft-create')}}" class="side-menu__item">Create NFT</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('nft-details')}}" class="side-menu__item">NFT Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('nft-marketplace')}}" class="side-menu__item">Market Place</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('nft-live-auction')}}" class="side-menu__item">Live Auction</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('nft-wallet-integration')}}" class="side-menu__item">Wallet Integration</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">CRM
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('crm-companies')}}" class="side-menu__item">Companies</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crm-contacts')}}" class="side-menu__item">Contacts</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crm-leads')}}" class="side-menu__item">Leads</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('crm-deals')}}" class="side-menu__item">Deals</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Jobs
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('job-details')}}" class="side-menu__item">Job Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-post')}}" class="side-menu__item">Job Post</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-list')}}" class="side-menu__item">Jobs List</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-candidate-search')}}" class="side-menu__item">Search Candidate</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-candidate-details')}}" class="side-menu__item">Candidate Details</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-company-search')}}" class="side-menu__item">Search Company</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('job-search')}}" class="side-menu__item">Search Jobs</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="32 80 128 136 224 80 128 24 32 80" opacity="0.2"/><polyline points="32 176 128 232 224 176" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="32 128 128 184 224 128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polygon points="32 80 128 136 224 80 128 24 32 80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Nested Menu</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Nested Menu</a>
                                    </li>
                                    <li class="slide">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-1</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2.1</a>
                                            </li>
                                            <li class="slide has-sub">
                                                <a href="javascript:void(0);" class="side-menu__item">Nested-2.2
                                                    <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                                <ul class="slide-menu child3">
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.1</a>
                                                    </li>
                                                    <li class="slide">
                                                        <a href="javascript:void(0);" class="side-menu__item">Nested-2.2.2</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M128,36a92,92,0,1,0,92,92A92.1,92.1,0,0,0,128,36Z" opacity="0.2"/><line x1="128" y1="64" x2="128" y2="192" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="104 40 128 64 152 40" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="104 216 128 192 152 216" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="72.57" y1="96" x2="183.43" y2="160" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="40 104 72.57 96 64 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="192 192 183.43 160 216 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="72.57" y1="160" x2="183.43" y2="96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="64 192 72.57 160 40 152" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="216 104 183.43 96 192 64" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Advanced UI</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Advanced Ui</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('accordions-collapse')}}" class="side-menu__item">Accordions & Collapse</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('carousel')}}" class="side-menu__item">Carousel</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('draggable-cards')}}" class="side-menu__item">Draggable Cards</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('modals-closes')}}" class="side-menu__item">Modals & Closes</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('navbars')}}" class="side-menu__item">Navbars</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('offcanvas')}}" class="side-menu__item">Offcanvas</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('placeholders')}}" class="side-menu__item">Placeholders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('ratings')}}" class="side-menu__item">Ratings</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('ribbons')}}" class="side-menu__item">Ribbons</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('scrollspy')}}" class="side-menu__item">Scrollspy</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('swiperjs')}}" class="side-menu__item">Swiper JS</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('sortable-list')}}" class="side-menu__item">Sortable JS</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><circle cx="128" cy="96" r="48" opacity="0.2"/><circle cx="128" cy="96" r="80" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><circle cx="128" cy="96" r="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="176 160 176 240 127.99 216 80 240 80 160.01" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Utilities</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Utilities</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('avatars')}}" class="side-menu__item">Avatars</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('borders')}}" class="side-menu__item">Borders</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('breakpoints')}}" class="side-menu__item">Breakpoints</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('colors')}}" class="side-menu__item">Colors</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('columns')}}" class="side-menu__item">Columns</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('flex')}}" class="side-menu__item">Flex</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('gutters')}}" class="side-menu__item">Gutters</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('helpers')}}" class="side-menu__item">Helpers</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('positions')}}" class="side-menu__item">Positions</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('more')}}" class="side-menu__item">Additional Content</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><polygon points="152 32 152 88 208 88 152 32" opacity="0.2"/><path d="M200,224H56a8,8,0,0,1-8-8V40a8,8,0,0,1,8-8h96l56,56V216A8,8,0,0,1,200,224Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><polyline points="152 32 152 88 208 88" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Forms</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Forms</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Form Elements
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('form-inputs')}}" class="side-menu__item">Inputs</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-check-radios')}}" class="side-menu__item">Checks & Radios</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-input-groups')}}" class="side-menu__item">Input Groups</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-select')}}" class="side-menu__item">Form Select</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-range')}}" class="side-menu__item">Range Slider</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-input-masks')}}" class="side-menu__item">Input Masks</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-file-uploads')}}" class="side-menu__item">File Uploads</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-datetime-pickers')}}" class="side-menu__item">Date,Time Picker</a>
                                            </li>
                                            <li class="slide">
                                                <a href="{{url('form-color-pickers')}}" class="side-menu__item">Color Pickers</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-advanced')}}" class="side-menu__item">Form Advanced</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('floating-labels')}}" class="side-menu__item">Floating Labels</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-layouts')}}" class="side-menu__item">Form Layouts</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-wizards')}}" class="side-menu__item">Form Wizards</a>
                                    </li>
                                    <li class="slide has-sub">
                                        <a href="javascript:void(0);" class="side-menu__item">Form Editors
                                            <i class="fe fe-chevron-right side-menu__angle"></i></a>
                                        <ul class="slide-menu child2">
                                            <li class="slide">
                                                <a href="{{url('quill-editor')}}" class="side-menu__item">Quill Editor</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-validations')}}" class="side-menu__item">Validations</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('form-select2')}}" class="side-menu__item">Select2</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="{{url('widgets')}}" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128Z" opacity="0.2"/><rect x="32" y="80" width="192" height="48" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M208,128v72a8,8,0,0,1-8,8H56a8,8,0,0,1-8-8V128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="80" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M176.79,31.21c9.34,9.34,9.89,25.06,0,33.82C159.88,80,128,80,128,80s0-31.88,15-48.79C151.73,21.32,167.45,21.87,176.79,31.21Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M79.21,31.21c-9.34,9.34-9.89,25.06,0,33.82C96.12,80,128,80,128,80s0-31.88-15-48.79C104.27,21.32,88.55,21.87,79.21,31.21Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Widgets</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><rect x="48" y="48" width="160" height="160" rx="8" opacity="0.2"/><rect x="48" y="48" width="160" height="160" rx="8" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="128" y1="48" x2="128" y2="208" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><line x1="48" y1="128" x2="208" y2="128" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Tables</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('tables')}}" class="side-menu__item">Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('grid-tables')}}" class="side-menu__item">Grid JS Tables</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('data-tables')}}" class="side-menu__item">Data Tables</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide has-sub">
                                <a href="javascript:void(0);" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M128,24a80,80,0,0,0-80,80c0,72,80,128,80,128s80-56,80-128A80,80,0,0,0,128,24Zm0,112a32,32,0,1,1,32-32A32,32,0,0,1,128,136Z" opacity="0.2"/><circle cx="128" cy="104" r="32" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M208,104c0,72-80,128-80,128S48,176,48,104a80,80,0,0,1,160,0Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Maps</span>
                                    <i class="fe fe-chevron-right side-menu__angle"></i>
                                </a>
                                <ul class="slide-menu child1">
                                    <li class="slide side-menu__label1">
                                        <a href="javascript:void(0)">Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('google-maps')}}" class="side-menu__item">Google Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('leaflet-maps')}}" class="side-menu__item">Leaflet Maps</a>
                                    </li>
                                    <li class="slide">
                                        <a href="{{url('vector-maps')}}" class="side-menu__item">Vector Maps</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- End::slide -->

                            <!-- Start::slide -->
                            <li class="slide">
                                <a href="{{url('icons')}}" class="side-menu__item">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 256 256"><rect width="256" height="256" fill="none"/><path d="M54,40H202a8,8,0,0,1,7.69,5.8L224,96H32L46.34,45.8A8,8,0,0,1,54,40Z" opacity="0.2"/><path d="M96,96v16a32,32,0,0,1-64,0V96Z" opacity="0.2"/><path d="M224,96v16a32,32,0,0,1-64,0V96Z" opacity="0.2"/><path d="M48,139.59V208a8,8,0,0,0,8,8H200a8,8,0,0,0,8-8V139.59" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M54,40H202a8,8,0,0,1,7.69,5.8L224,96H32L46.34,45.8A8,8,0,0,1,54,40Z" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M96,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M160,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/><path d="M224,96v16a32,32,0,0,1-64,0V96" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="16"/></svg>
                                    <span class="side-menu__label">Icons</span>
                                </a>
                            </li>
                            <!-- End::slide -->

                        </ul>
                        <div class="slide-right" id="slide-right"><svg xmlns="http://www.w3.org/2000/svg" fill="#7b8191" width="24" height="24" viewBox="0 0 24 24"> <path d="M10.707 17.707 16.414 12l-5.707-5.707-1.414 1.414L13.586 12l-4.293 4.293z"></path> </svg></div>
                    </nav>
                    <!-- End::nav -->

                </div>
                <!-- End::main-sidebar -->

            </aside>--}}
