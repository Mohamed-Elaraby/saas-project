@extends('front.layouts.landing-master')
@section('title', 'Your Digital Transformation Partner | ' . config('app.name'))
@section('styles')
    <meta name="description" content="Seven S Capital provides cutting-edge solutions in UI/UX design, software development, and digital transformation services.">
    <meta name="keywords" content="UI/UX Design, software development, digital transformation, web development, mobile applications, tech solutions">
    <meta name="robots" content="index, follow">
    <meta name="author" content="SEVEN S CAPITAL">
    <meta property="og:title" content="Seven S Capital - Digital Transformation Partner">
    <meta property="og:description" content="Empowering your business with innovative technology solutions and exceptional design services.">
    <meta property="og:image" content="{{ asset('storage/front/homepage/software-development-and-solutions-seven-s-capital.png') }}">
    <meta property="og:url" content="https://seven-scapital.com">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Seven S Capital - Digital Transformation Partner">
    <meta name="twitter:description" content="Innovative solutions in software development and UI/UX design to transform your digital presence.">
    <meta name="twitter:image" content="{{ asset('storage/front/homepage/software-development-and-solutions-seven-s-capital.png') }}">

@endsection

@section('content')

    <!-- Start:: Section-1 -->
    <div class="landing-banner" id="home">
        <section class="section">
            <div class="container main-banner-container pb-lg-0">
                <div class="row">
                    <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-8">
                        <div class="py-lg-5">
                            <div class="mb-3">
                                <h6 class="fw-medium text-fixed-white op-8 fs-14">- Level Up Your Design Universe</h6>
                            </div>
                            <p class="landing-banner-heading mb-3">Empower your business with innovative solutions from <span class="text-warning">SEVEN S CAPITAL!</span> Design</p>
                            <div class="fs-15 mb-5 text-fixed-white op-7">We design and develop cutting-edge solutions tailored to meet your business needs. From innovative web platforms to robust software systems, SEVEN S CAPITAL is your trusted partner in the digital transformation journey.</div>
                            <a href="#" class="m-1 btn btn-lg btn-secondary">
                                <i class="ri-eye-line me-2 align-middle"></i>
                                Explore Our Services
                            </a>
                            <a href="#" class="m-1 btn btn-lg bg-primary-transparent">
                                <i class="ri-arrow-right-line me-2 align-middle"></i>
                                Get Started
                            </a>
                        </div>
                    </div>
                    <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-4 my-auto">
                        <div class="text-end landing-main-image landing-heading-img">
                            <img src="{{ asset('storage/front/homepage/ui-ux-design-by-seven-s-capital.png') }}" alt="" width="400" height="400" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- End:: Section-1 -->

    <!-- Start:: Section-2 -->
    <section class="section" id="glance">
        <div class="container position-relative">
            <div class="text-center">
                <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">-Glance-</span></p>
                <h3 class="fw-medium mb-2">Why you choose us</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <p class="text-muted fs-15 mb-5 fw-normal">Our mission is to support you in achieving your goals.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card custom-card landing-card border shadow-none text-center">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-xl rounded-2 icon-shadow-primary bg-primary-transparent">
                                            <i class="ri-lightbulb-flash-line fs-3"></i>
                                        </span>
                            </div>
                            <h4 class="fw-medium">Creative Designs</h4>
                            <p class="fs-14 text-muted">Unique and innovative designs crafted to perfectly suit your business objectives and needs.</p>
{{--                            <a href="javascript:void(0);" class="fw-medium text-primary">Read More<i class="ti ti-arrow-narrow-right ms-2 fs-5 align-middle"></i></a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card custom-card landing-card border shadow-none text-center">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-xl rounded-2 icon-shadow-info bg-info-transparent">
                                            <i class="ri-customer-service-2-line fs-3"></i>
                                        </span>
                            </div>
                            <h4 class="fw-medium">24/7 Customer Support</h4>
                            <p class="fs-14 text-muted">Our expert support team is available around the clock to ensure seamless assistance at all times.</p>
{{--                            <a href="javascript:void(0);" class="fw-medium text-info">Read More<i class="ti ti-arrow-narrow-right ms-2 fs-5 al align-middle"></i></a>--}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="card custom-card landing-card border shadow-none text-center">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-xl rounded-2 icon-shadow-warning bg-warning-transparent">
                                            <i class="ri-vip-diamond-line fs-3"></i>
                                        </span>
                            </div>
                            <h4 class="fw-medium">Skilled Staff</h4>
                            <p class="fs-14 text-muted">A highly trained and professional team committed to delivering exceptional results for your success.</p>
{{--                            <a href="javascript:void(0);" class="fw-medium text-warning">Read More<i class="ti ti-arrow-narrow-right ms-2 fs-5 align-middle"></i></a>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Section-2 -->

    <!-- Start:: Section-3 -->
    <section class="section  section-bg" id="about-us">
        <div class="container">
            <div class="row gx-5 mx-0">
                <div class="col-xl-4 d-flex justify-content-center align-items-center">
                    <div class="home-proving-image">
                        <img src="{{asset('storage/front/homepage/digital-transformation-services-seven-s-capital.png')}}" alt="" class="img-fluid rounded">
                    </div>
                    <div class="proving-pattern-1"></div>
                </div>
                <div class="col-xl-8 my-auto">
                    <div class="heading-section text-start mb-4">
                        <div class="heading-subtitle fw-medium"><span class="landing-section-heading text-success">-About Us-</span></div>
                        <h4 class="heading-title">Your Digital Transformation Partner!</h4>
                        <div class="heading-description fs-14 op-8">At SEVEN S CAPITAL, we believe that technology is the driving force behind business success in today's digital age. We offer tailored software solutions designed to meet your specific business needs.</div>
                    </div>

                    <div class="heading-section text-start mb-4">
                        <div class="heading-subtitle fw-medium"><span class="landing-section-heading text-success">-Our Expertise-</span></div>
{{--                        <h4 class="heading-title">Your Digital Transformation Partner!</h4>--}}
                        <div class="heading-description fs-14 op-8">With a team of highly skilled developers and designers, we provide innovative and efficient solutions for all your digital needs. Whether you're a startup seeking a groundbreaking app or a large enterprise looking to streamline your internal systems, we have the expertise to deliver.</div>
                    </div>

                    <div class="heading-section text-start mb-4">
                        <div class="heading-subtitle fw-medium"><span class="landing-section-heading text-success">-What sets us apart-</span></div>
{{--                        <h4 class="heading-title">Your Digital Transformation Partner!</h4>--}}
{{--                        <div class="heading-description fs-14 op-8">With a team of highly skilled developers and designers, we provide innovative and efficient solutions for all your digital needs. Whether you're a startup seeking a groundbreaking app or a large enterprise looking to streamline your internal systems, we have the expertise to deliver.</div>--}}
                    </div>
                    <div class="row gy-3 mb-0 ps-3">
                        <div class="col-xl-12">
                            <div class="d-flex align-items-top">
                                <div class="me-2 home-prove-svg">
                                    <i class="ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block"></i>
                                </div>
                                <div>
                                    <span class="fs-14">Customized Solutions: We deliver tailored solutions that meet your unique needs and exceed expectations.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="d-flex align-items-top">
                                <div class="me-2 home-prove-svg">
                                    <i class="ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block"></i>
                                </div>
                                <div>
                                    <span class="fs-14">
                                        Uncompromising Quality: We are committed to delivering the highest quality of work in everything we do.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="d-flex align-items-top">
                                <div class="me-2 home-prove-svg">
                                    <i class="ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block"></i>
                                </div>
                                <div>
                                    <span class="fs-14">
                                        Comprehensive Support: We provide comprehensive technical support throughout the project lifecycle.
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="d-flex align-items-top">
                                <div class="me-2 home-prove-svg">
                                    <i class="ri-arrow-right-circle-line align-middle fs-16 text-secondary d-inline-block"></i>
                                </div>
                                <div>
                                    <span class="fs-14">
                                        Timely Delivery: We deliver projects on time and within budget.
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="heading-section text-start mt-4">
                        <div class="heading-subtitle fw-medium mb-4"><span class="landing-section-heading text-success">-Ready to transform your business digitally?</span></div>
                        <h4 class="heading-title"><a href="#contact">Contact us today to learn how we can help you achieve your goals.</a></h4>
                        {{--                            <div class="heading-description fs-14 op-8">At SEVEN S CAPITAL, we believe that technology is the driving force behind business success in today's digital age. We offer tailored software solutions designed to meet your specific business needs.</div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Section-3 -->

    <!-- Start:: Section-4 -->
    <section class="section" id="services">
        <div class="container">
            <div class="text-center">
                <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">-SERVICES-</span></p>
                <h3 class="fw-medium mb-2">Our Best Services</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <p class="text-muted fs-15 mb-5 fw-normal">
                            We are a team of passionate software engineers dedicated to helping businesses achieve their full potential through innovative technology solutions. With a focus on [specific industries or technologies], we deliver custom software solutions that are tailored to your unique needs. Our expertise lies in [list of core competencies, e.g., cloud computing, AI, data analytics]. We pride ourselves on our commitment to quality, customer satisfaction, and delivering projects on time and within budget.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3">
                    <div class="card custom-card landing-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-3">
                                        <span class="avatar avatar-lg bg-primary-transparent border border-primary border-opacity-10">
                                            <i class="ri-pencil-ruler-2-line fs-5"></i>
                                        </span>
                            </div>
                            <h5 class="fw-medium">Design</h5>
                            <p class="fs-14 text-muted mb-0">Creative and tailored designs to inspire success.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card custom-card landing-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-lg bg-warning-transparent border border-warning border-opacity-10">
                                            <i class="ri-settings-3-line fs-5"></i>
                                        </span>
                            </div>
                            <h5 class="fw-medium">Development</h5>
                            <p class="fs-14 text-muted mb-0">Efficiently developed solutions to empower your business.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card custom-card landing-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-lg bg-info-transparent border border-info border-opacity-10">
                                            <i class="ri-shield-check-line fs-5"></i>
                                        </span>
                            </div>
                            <h5 class="fw-medium"> Quality Tested</h5>
                            <p class="fs-14 text-muted mb-0">Thoroughly tested for superior quality and performance.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card custom-card landing-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-lg bg-success-transparent border border-success border-opacity-10">
                                            <i class="ri-palette-line fs-5"></i>
                                        </span>
                            </div>
                            <h5 class="fw-medium">Multiple Themes</h5>
                            <p class="fs-14 text-muted mb-0">Choose from various themes for ultimate flexibility.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card custom-card landing-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-lg bg-danger-transparent border border-danger border-opacity-10">
                                            <i class="ri-equalizer-2-line fs-5"></i>
                                        </span>
                            </div>
                            <h5 class="fw-medium">Customization</h5>
                            <p class="fs-14 text-muted mb-0">Customizable solutions tailored to meet unique needs.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card custom-card landing-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-lg bg-secondary-transparent border border-secondary border-opacity-10">
                                            <i class="ri-dashboard-line fs-5"></i>
                                        </span>
                            </div>
                            <h5 class="fw-medium">Multiple Demos</h5>
                            <p class="fs-14 text-muted mb-0">Explore multiple demos to preview your solution.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card custom-card landing-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-lg bg-teal-transparent border border-teal border-opacity-10">
                                            <i class="ri-refresh-line fs-5"></i>
                                        </span>
                            </div>
                            <h5 class="fw-medium">Regular Updates</h5>
                            <p class="fs-14 text-muted mb-0">Stay ahead with frequent updates and improvements.</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3">
                    <div class="card custom-card landing-card">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                        <span class="avatar avatar-lg bg-pink-transparent border border-pink border-opacity-10">
                                            <i class="ri-smartphone-line fs-5"></i>
                                        </span>
                            </div>
                            <h5 class="fw-medium">Fully Responsive</h5>
                            <p class="fs-14 text-muted mb-0">Optimized for seamless performance on all devices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Section-4 -->

    <!-- Start:: Section-5 -->
    {{--<section class="section landing-Features" id="features">
        <div class="container">
            <div class="heading-section text-center mb-0">
                <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">-Features-</span></p>
                <h2 class="text-fixed-white text-center fw-medium">Our Features</h2>
                <div class="fs-16 text-fixed-white text-center op-8 mb-5">Ullamco ea commodo.Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.perspiciatis unde omnis.</div>
            </div>
            <div class="d-flex align-items-center justify-content-center trusted-companies sub-card-companies flex-wrap mb-3 mb-xl-0 gap-5">
                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/1.png')}}" alt="img" class="border-0"></div>
                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/2.png')}}" alt="img" class="border-0"></div>
                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/3.png')}}" alt="img" class="border-0"></div>
                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/4.png')}}" alt="img" class="border-0"></div>
                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/5.png')}}" alt="img" class="border-0"></div>
                <div class="trust-img"><img src="{{asset('build/assets/images/media/landing/web/6.png')}}" alt="img" class="border-0"></div>
                <div class="trust-img me-0"><img src="{{asset('build/assets/images/media/landing/web/1.png')}}" alt="img" class="border-0"></div>
            </div>
        </div>
    </section>--}}
    <!-- End:: Section-5 -->

    <!-- Start:: Section-7 -->
    {{--<section class="section" id="pricing">
        <div class="container">
            <div class="text-center">
                <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">-PRICING-</span></p>
                <h3 class="fw-medium mb-2">Pricing Plans for You</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <p class="text-muted fs-15 mb-5 fw-normal">Our user-friendly plans are carefully tailored to accommodate every category effectively.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card custom-card landing-card pricing-card border shadow-none">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                <p class="fs-18 fw-medium mb-1">Intro</p>
                                <p class="mb-1 fs-14 op-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                <p class="text-justify fw-medium mb-1">
                                    <span class="fs-2">$</span><span class="fs-40 me-1">0</span>
                                    <span class="fs-20 op-6"><span class="fs-20">/</span> month</span>
                                </p>
                                <p class="fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex"><i class="ri-information-line align-middle me-1 d-inline-block fs-11"></i>Billed monthly on regular basis!</p>
                            </div>
                            <ul class="text-justify list-unstyled pricing-body ps-0">
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> 6 Users
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span>10 Days Pack
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Basic serivces
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Backups
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-x-circle align-middle fs-16 op-5 d-inline-block"></i></span> Advanced Security</li>
                                <li class="mb-0"><span class="me-1"><i class="fe fe-x-circle align-middle fs-16 op-5 d-inline-block"></i></span> 24/7 support serivce</li>
                            </ul>
                            <div class="text-center border-top-0 pt-4 d-grid">
                                <button type="button" class="btn btn-lg btn-primary-light">
                                    <span class="ms-4 me-4">Get Plan Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card custom-card landing-card pricing-card border shadow-none">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                <p class="fs-18 fw-medium mb-1">Basic</p>
                                <p class="mb-1 fs-14 op-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                <p class="text-justify fw-medium mb-1">
                                    <span class="fs-2">$</span><span class="fs-40 me-1">29</span>
                                    <span class="fs-20 op-6"><span class="fs-20">/</span> month</span>
                                </p>
                                <p class="fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex"><i class="ri-information-line align-middle me-1 d-inline-block fs-11"></i>Billed monthly on regular basis!</p>
                            </div>
                            <ul class="text-justify list-unstyled pricing-body ps-0">
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> 8 Users
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span>48 Days Pack
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Basic serivces
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Backups
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-x-circle align-middle fs-16 op-5 d-inline-block"></i></span> Advanced Security</li>
                                <li class="mb-0"><span class="me-1"><i class="fe fe-x-circle align-middle fs-16 op-5 d-inline-block"></i></span> 24/7 support serivce</li>
                            </ul>
                            <div class="text-center border-top-0 pt-4 d-grid">
                                <button type="button" class="btn btn-lg btn-primary-light">
                                    <span class="ms-4 me-4">Get Plan Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card pricing-card border custom-card landing-card border-primary shadow-none">
                        <div class="card-body">
                            <span class="popular-pricing-badge"><i class="ri-flashlight-line me-1 d-inline-block"></i>Most Popluar</span>
                            <div class="mb-4">
                                <p class="fs-18 fw-medium mb-1">Popular</p>
                                <p class="mb-1 fs-14 op-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                <p class="text-justify fw-medium mb-1">
                                    <span class="fs-2">$</span><span class="fs-40 me-1">49</span>
                                    <span class="fs-20 op-6"><span class="fs-20">/</span> month</span>
                                </p>
                                <p class="fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex"><i class="ri-information-line align-middle me-1 d-inline-block fs-11"></i>Billed monthly on regular basis!</p>
                            </div>
                            <ul class="text-justify list-unstyled pricing-body ps-0">
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> 8 Users
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> 28 Days Pack
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Basic serivces
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Backups
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Advanced Security</li>
                                <li class="mb-0"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> 24/7 support serivce</li>
                            </ul>
                            <div class="text-center border-top-0 pt-4 d-grid">
                                <button type="button" class="btn btn-lg btn-primary">
                                    <span class="ms-4 me-4">Get Plan Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-lg-6 col-md-12 col-sm-12 col-12">
                    <div class="card custom-card landing-card pricing-card border shadow-none">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <div class="mb-4">
                                <p class="fs-18 fw-medium mb-1">Advanced</p>
                                <p class="mb-1 fs-14 op-8">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed.</p>
                                <p class="text-justify fw-medium mb-1">
                                    <span class="fs-2">$</span><span class="fs-40 me-1">29</span>
                                    <span class="fs-20 op-6"><span class="fs-20">/</span> month</span>
                                </p>
                                <p class="fs-12 mb-2 text-info p-1 lh-1 bg-info-transparent d-inline-flex"><i class="ri-information-line align-middle me-1 d-inline-block fs-11"></i>Billed monthly on regular basis!</p>
                            </div>
                            <ul class="text-justify list-unstyled pricing-body ps-0">
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> 4 Users
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span>28 Days Pack
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Basic serivces
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Backups
                                </li>
                                <li class="mb-3"><span class="me-1"><i class="fe fe-check-circle align-middle fs-14 text-success d-inline-block"></i></span> Advanced Security</li>
                                <li class="mb-0"><span class="me-1"><i class="fe fe-x-circle align-middle fs-16 op-5 d-inline-block"></i></span> 24/7 support serivce</li>
                            </ul>
                            <div class="text-center border-top-0 pt-4 d-grid">
                                <button type="button" class="btn btn-lg btn-primary-light">
                                    <span class="ms-4 me-4">Get Plan Now</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- End:: Section-7 -->

    <!-- Start:: Section-8 -->
    {{--<section class="section section-bg" id="testimonials">
        <div class="container reviews-container">
            <div class="text-center">
                <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">-Testimonials-</span></p>
                <h3 class="fw-medium mb-2">What people think about us</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <p class="text-muted fs-15 mb-5 fw-normal">Here are the testimonials shared by our highly satisfied customers about our product.</p>
                    </div>
                </div>
            </div>
            <div class="swiper pagination-dynamic testimonialSwiperService">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="card custom-card text-fixed-white">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-body">
                                <i class="ri-double-quotes-l text-primary fs-2"></i>
                                <div class="op-9 fs-14 mb-3">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  --
                                    <a href="javascript:void(0);" class="fw-medium fs-11 text-info" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.">Read More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                                    <span class="text-warning d-block me-1">
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-line fs-14 align-middle lh-1"></i>
                                                    </span>
                                            <span class="op-8">4.5 </span>
                                        </div>
                                        <span class="fs-11 op-7">10 days ago</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-end me-2">
                                            <p class="mb-0 fw-medium fs-14">Violet Sofi</p>
                                            <p class="mb-0 fs-11 fw-normal op-7">violetsofi@gmail.com</p>
                                        </div>
                                        <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="" class="img-fluid">
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card text-fixed-white">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-body">
                                <i class="ri-double-quotes-l text-primary fs-2"></i>
                                <div class="op-9 fs-14 mb-3">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  --
                                    <a href="javascript:void(0);" class="fw-medium fs-11 text-info" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.">Read More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                                    <span class="text-warning d-block me-1">
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-half-line fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-line fs-14 align-middle lh-1"></i>
                                                    </span>
                                            <span class="op-8">4.3 </span>
                                        </div>
                                        <span class="fs-11 op-7">5 days ago</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-end me-2">
                                            <p class="mb-0 fw-medium fs-14">David John</p>
                                            <p class="mb-0 fs-11 fw-normal op-7">davidjohn@gmail.com</p>
                                        </div>
                                        <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="" class="img-fluid">
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card text-fixed-white">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-body">
                                <i class="ri-double-quotes-l text-primary fs-2"></i>
                                <div class="op-9 fs-14 mb-3">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  --
                                    <a href="javascript:void(0);" class="fw-medium fs-11 text-info" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.">Read More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                                    <span class="text-warning d-block me-1">
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-half-line fs-14 align-middle lh-1"></i>
                                                    </span>
                                            <span class="op-8">4.3 </span>
                                        </div>
                                        <span class="fs-11 op-7">2 days ago</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-end me-2">
                                            <p class="mb-0 fw-medium fs-14">Arunima Alice</p>
                                            <p class="mb-0 fs-11 fw-normal op-7">Arunimaalice@gmail.com</p>
                                        </div>
                                        <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="" class="img-fluid">
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card text-fixed-white">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-body">
                                <i class="ri-double-quotes-l text-primary fs-2"></i>
                                <div class="op-9 fs-14 mb-3">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  --
                                    <a href="javascript:void(0);" class="fw-medium fs-11 text-info" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.">Read More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                                    <span class="text-warning d-block me-1">
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-half-line fs-14 align-middle lh-1"></i>
                                                    </span>
                                            <span class="op-8">4.3 </span>
                                        </div>
                                        <span class="fs-11 op-7">17 days ago</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-end me-2">
                                            <p class="mb-0 fw-medium fs-14">Isaac Elias</p>
                                            <p class="mb-0 fs-11 fw-normal op-7">isaacelias@gmail.com</p>
                                        </div>
                                        <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="" class="img-fluid">
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card text-fixed-white">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-body">
                                <i class="ri-double-quotes-l text-primary fs-2"></i>
                                <div class="op-9 fs-14 mb-3">Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.  --
                                    <a href="javascript:void(0);" class="fw-medium fs-11 text-info" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Nulla maximus nunc ut euismod condimentum. Nunc vel quam maximus, sagittis ante non, tempor risus. Suspendissei. Nam lacus risus.">Read More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                                    <span class="text-warning d-block me-1">
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-line fs-14 align-middle lh-1"></i>
                                                    </span>
                                            <span class="op-8">4.1 </span>
                                        </div>
                                        <span class="fs-11 op-7">13 days ago</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-end me-2">
                                            <p class="mb-0 fw-medium fs-14">Stella Joy</p>
                                            <p class="mb-0 fs-11 fw-normal op-7">Stellajoy@gmail.com</p>
                                        </div>
                                        <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="" class="img-fluid">
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="card custom-card text-fixed-white">
                            <div class="top-left"></div>
                            <div class="top-right"></div>
                            <div class="bottom-left"></div>
                            <div class="bottom-right"></div>
                            <div class="card-body">
                                <i class="ri-double-quotes-l text-primary fs-2"></i>
                                <div class="op-9 fs-14 mb-3">Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.  --
                                    <a href="javascript:void(0);" class="fw-medium fs-11 text-info" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-primary" data-bs-placement="top" data-bs-title="Mauris quis dolor ut nisl mattis dignissim sed ac massa. Nunc ante nisi, malesuada id leo sit amet, pretium fringilla dolor.">Read More</a>
                                </div>
                                <div class="d-flex align-items-center justify-content-between flex-wrap gap-2">
                                    <div>
                                        <div class="d-flex align-items-center">
                                                    <span class="text-warning d-block me-1">
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-fill fs-14 align-middle lh-1"></i>
                                                        <i class="ri-star-half-line fs-14 align-middle lh-1"></i>
                                                    </span>
                                            <span class="op-8">4.3 </span>
                                        </div>
                                        <span class="fs-11 op-7">2 days ago</span>
                                    </div>
                                    <div class="d-flex align-items-center">
                                        <div class="text-end me-2">
                                            <p class="mb-0 fw-medium fs-14">Reva Saan</p>
                                            <p class="mb-0 fs-11 fw-normal op-7">revasaan@gmail.com</p>
                                        </div>
                                        <span class="avatar">
                                                    <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="" class="img-fluid">
                                                </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
            </div>
        </div>
    </section>--}}
    <!-- End:: Section-8 -->

    <!-- Start:: Section-9 -->
    {{--<section class="section" id="faqs">
        <div class="container text-center">
            <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">-F.A.Q-</span></p>
            <h3 class="fw-medium mb-2">Frequently asked questions ?</h3>
            <div class="row justify-content-center">
                <div class="col-xl-7">
                    <p class="text-muted fs-15 mb-5 fw-normal">We have provided a list of commonly asked questions to assist you..</p>
                </div>
            </div>
            <div class="row text-start">
                <div class="col-xl-12">
                    <div class="row gy-2">
                        <div class="col-xl-6">
                            <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate" id="accordionFAQ1">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1One">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsecustomicon1One" aria-expanded="true"
                                                aria-controls="collapsecustomicon1One">
                                            How do I integrate the template into my project?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1One" class="accordion-collapse collapse show"
                                         aria-labelledby="headingcustomicon1One"
                                         data-bs-parent="#accordionFAQ1">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use to style each element. These classes control the overall appearance,
                                            as well as the showing and hiding via CSS transitions. You can modify
                                            any of this with custom CSS or overriding our default variables. It's
                                            also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Two">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Two"
                                                aria-expanded="false" aria-controls="collapsecustomicon1Two">
                                            How frequently is the template updated?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1Two" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon1Two"
                                         data-bs-parent="#accordionFAQ1">
                                        <div class="accordion-body">
                                            Check the template provider's website or documentation for information on updates. Regular updates may include bug fixes, new features, or compatibility improvements.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Three">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Three"
                                                aria-expanded="false" aria-controls="collapsecustomicon1Three">
                                            What support options are available for landing page services?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1Three" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon1Three"
                                         data-bs-parent="#accordionFAQ1">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use to style each element. These classes control the overall appearance,
                                            as well as the showing and hiding via CSS transitions. You can modify
                                            any of this with custom CSS or overriding our default variables. It's
                                            also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Four">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Four"
                                                aria-expanded="false" aria-controls="collapsecustomicon1Four">
                                            Can I upgrade or downgrade my subscription plan?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1Four" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon1Four"
                                         data-bs-parent="#accordionFAQ1">
                                        <div class="accordion-body">
                                            Yes, you can upgrade or downgrade your subscription plan at any time. Visit your account settings or contact our support team to make changes to your subscription level.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Five">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Five"
                                                aria-expanded="false" aria-controls="collapsecustomicon1Five">
                                            How often will I be billed for my subscription?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1Five" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon1Five"
                                         data-bs-parent="#accordionFAQ1">
                                        <div class="accordion-body">
                                            Billing frequency depends on your chosen subscription plan. We offer monthly, quarterly, and annual billing options. Check your subscription details for the billing cycle information.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon1Six">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon1Six"
                                                aria-expanded="false" aria-controls="collapsecustomicon1Six">
                                            What is included in the subscription service?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon1Six" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon1Six"
                                         data-bs-parent="#accordionFAQ1">
                                        <div class="accordion-body">
                                            Our subscription service typically provides access to premium features, exclusive content, and ongoing updates related to our landing page offerings.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6">
                            <div class="accordion accordion-customicon1 accordion-primary accordions-items-seperate" id="accordionFAQ2">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon2Five">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Five"
                                                aria-expanded="false" aria-controls="collapsecustomicon2Five">
                                            How often will I be billed for my subscription?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon2Five" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon2Five"
                                         data-bs-parent="#accordionFAQ2">
                                        <div class="accordion-body">
                                            Billing frequency depends on your chosen subscription plan. We offer monthly, quarterly, and annual billing options. Check your subscription details for the billing cycle information.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon2Six">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Six"
                                                aria-expanded="false" aria-controls="collapsecustomicon2Six">
                                            What is included in the subscription service?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon2Six" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon2Six"
                                         data-bs-parent="#accordionFAQ2">
                                        <div class="accordion-body">
                                            Our subscription service typically provides access to premium features, exclusive content, and ongoing updates related to our landing page offerings.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon2One">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapsecustomicon2One" aria-expanded="true"
                                                aria-controls="collapsecustomicon2One">
                                            How do I integrate the template into my project?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon2One" class="accordion-collapse collapse "
                                         aria-labelledby="headingcustomicon2One"
                                         data-bs-parent="#accordionFAQ2">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use to style each element. These classes control the overall appearance,
                                            as well as the showing and hiding via CSS transitions. You can modify
                                            any of this with custom CSS or overriding our default variables. It's
                                            also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon2Two">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Two"
                                                aria-expanded="false" aria-controls="collapsecustomicon2Two">
                                            How frequently is the template updated?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon2Two" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon2Two"
                                         data-bs-parent="#accordionFAQ2">
                                        <div class="accordion-body">
                                            Check the template provider's website or documentation for information on updates. Regular updates may include bug fixes, new features, or compatibility improvements.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon2Three">
                                        <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Three"
                                                aria-expanded="false" aria-controls="collapsecustomicon2Three">
                                            What are your opening hours?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon2Three" class="accordion-collapse collapse"
                                         aria-labelledby="headingcustomicon2Three"
                                         data-bs-parent="#accordionFAQ2">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use to style each element. These classes control the overall appearance,
                                            as well as the showing and hiding via CSS transitions. You can modify
                                            any of this with custom CSS or overriding our default variables. It's
                                            also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="headingcustomicon2Four">
                                        <button class="accordion-button" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapsecustomicon2Four"
                                                aria-expanded="false" aria-controls="collapsecustomicon2Four">
                                            Do I have the right to return an item?
                                        </button>
                                    </h2>
                                    <div id="collapsecustomicon2Four" class="accordion-collapse collapse show"
                                         aria-labelledby="headingcustomicon2Four"
                                         data-bs-parent="#accordionFAQ2">
                                        <div class="accordion-body">
                                            <strong>This is the first item's accordion body.</strong> It is shown by
                                            default, until the collapse plugin adds the appropriate classes that we
                                            use to style each element. These classes control the overall appearance,
                                            as well as the showing and hiding via CSS transitions. You can modify
                                            any of this with custom CSS or overriding our default variables. It's
                                            also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- End:: Section-9 -->

    <!-- Start:: Section-10 -->
    {{--<section class="section section-bg" id="team">
        <div class="container">
            <div class="text-center">
                <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">-TEAM-</span></p>
                <h3 class="fw-medium mb-2">Meet our amazing Team</h3>
                <div class="row justify-content-center">
                    <div class="col-xl-7">
                        <p class="text-muted fs-15 mb-5 fw-normal">Our team is made up of real people who are passionate about what they do.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                    <div class="card custom-card  team-card text-center">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <img src="{{asset('build/assets/images/media/landing/team/1.png')}}" class="avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2" alt="...">
                            <div class="text-center py-2">
                                <h5 class="mb-0 fw-medium">Charlie John</h5>
                                <p class="mb-1 fs-14 fw-medium text-primary">HR Manager</p>
                                <p class="mb-0 fs-13 text-muted op-8">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light"><i class="ri-twitter-x-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-facebook-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-instagram-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-linkedin-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                    <div class="card custom-card  team-card text-center">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <img src="{{asset('build/assets/images/media/landing/team/2.png')}}" class="avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2" alt="...">
                            <div class="text-center py-2">
                                <h5 class="mb-0 fw-medium">Marlin Shane</h5>
                                <p class="mb-1 fs-14 fw-medium text-primary">Team Lead</p>
                                <p class="mb-0 fs-13 text-muted op-8">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light"><i class="ri-twitter-x-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-facebook-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-instagram-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-linkedin-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                    <div class="card custom-card  team-card text-center">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <img src="{{asset('build/assets/images/media/landing/team/3.png')}}" class="avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2" alt="...">
                            <div class="text-center py-2">
                                <h5 class="mb-0 fw-medium">Angela Lia</h5>
                                <p class="mb-1 fs-14 fw-medium text-primary">Project Manager</p>
                                <p class="mb-0 fs-13 text-muted op-8">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light"><i class="ri-twitter-x-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-facebook-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-instagram-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-linkedin-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6 col-12 mb-lg-0 mb-4">
                    <div class="card custom-card  team-card text-center">
                        <div class="top-left"></div>
                        <div class="top-right"></div>
                        <div class="bottom-left"></div>
                        <div class="bottom-right"></div>
                        <div class="card-body">
                            <img src="{{asset('build/assets/images/media/landing/team/4.png')}}" class="avatar avatar-xxl mb-4 mb-3 border p-1 bg-primary-transparent landing-team-img mt-2" alt="...">
                            <div class="text-center py-2">
                                <h5 class="mb-0 fw-medium">Stella Daisy</h5>
                                <p class="mb-1 fs-14 fw-medium text-primary">Head of Department</p>
                                <p class="mb-0 fs-13 text-muted op-8">Aliquam ullamcorper neque vitae dui ullamcorper, at varius erat feugiat. Proin aliquam, purus ut.</p>
                                <div class="d-flex justify-content-center mt-4">
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light"><i class="ri-twitter-x-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-facebook-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-instagram-line align-middle"></i></a>
                                    <a aria-label="anchor" href="javascript:void(0);" class="btn btn-sm btn-icon btn-primary-light btn-wave waves-effect waves-light ms-2"><i class="ri-linkedin-line align-middle"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>--}}
    <!-- End:: Section-10 -->

    <!-- Start:: Section-11 -->
    <section class="section section-bg" id="contact">
        <div class="container text-center">
            <p class="fs-12 fw-medium text-success mb-1"><span class="landing-section-heading">-CONTACT US-</span></p>
            <h3 class="fw-medium mb-2">Do you have any questions?</h3>
            <div class="row justify-content-center">
                <div class="col-xl-9">
                    <p class="text-muted fs-15 mb-5 fw-normal"> Have questions, or need help with a product or service, contacting support allows you to connect with a dedicated team of professionals</p>
                </div>
            </div>
            <div class="card custom-card  overflow-hidden section-bg border overflow-hidden shadow-none">
                <div class="top-left"></div>
                <div class="top-right"></div>
                <div class="bottom-left"></div>
                <div class="bottom-right"></div>
                <div class="card-body p-0">
                    <div class="row text-start align-items-center">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="p-4">
                                <div class="row mt-2 px-3">
                                    <div class="col-xl-12">
                                        <div class="row gy-3">
                                            <div class="col-xl-12">
                                                <label for="contact-address-name" class="form-label ">Full Name :</label>
                                                <input type="text" class="form-control " id="contact-address-name" placeholder="Enter Name">
                                            </div>
                                            <div class="col-xl-12">
                                                <label for="contact-address-mail" class="form-label ">Mail Address :</label>
                                                <input type="text" class="form-control " id="contact-address-mail" placeholder="Enter Mail Address">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <label for="contact-address-message" class="form-label ">Message :</label>
                                        <textarea class="form-control " id="contact-address-message" rows="2" placeholder="Type Here"></textarea>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="text-end mt-4">
                                            <button class="btn btn-primary btn-wave">Send Message</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                            <div class="p-4 landing-contact-info">
                                <div class="p-3">
                                    <div class="fs-18 text-primary fw-medium mb-3">Contact Information</div>
                                    <div class="mb-3">
                                        <i class="ri-map-pin-fill me-2 text-primary"></i> Dubai, United Arab Emirates
                                    </div>
                                    <div class="d-flex mb-3">
                                        <i class="ri-phone-fill me-2 d-inline-block text-primary"></i>
                                        <div>
                                            <div>+971 55 401 8911</div>
{{--                                            <span>+121 1234 14511</span>--}}
                                        </div>
                                    </div>
                                    <div class="mb-4"><i class="ri-mail-fill me-2 d-inline-block text-primary"></i> info@seven-scapital.com</div>
                                </div>
{{--                                <div class="p-3 pt-0">--}}
{{--                                    <div class="card custom-card border mb-0 shadow-none overflow-hidden">--}}
{{--                                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d17171.688634690137!2d55.270500889386575!3d25.206498399765678!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai!5e0!3m2!1sen!2sae!4v1731916364594!5m2!1sen!2sae" width="500" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Section-11 -->

    <!-- Start:: Section-12 -->
    <section class="section landing-footer text-fixed-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6 col-12 mb-md-0 mb-3">
                    <div class="px-4">
                        <p class="fw-medium mb-3"><a href="{{ route('home') }}"><img src="{{asset('storage/front/header/logo_transparent.png')}}" alt="" class="landing-footer-logo"></a></p>
                        <p class="mb-2 op-6 fw-normal fs-14">
                            Partner with SEVEN S CAPITAL to achieve your digital goals. As your trusted technology partner, we provide comprehensive software development services to help you stay ahead of the competition. Our solutions are designed to enhance productivity, improve customer experience, and drive business success.
                        </p>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                    <div class="px-4">
                        <h6 class="fw-medium mb-3 text-fixed-white">PAGES</h6>
                        <ul class="list-unstyled op-6 fw-normal landing-footer-list fs-14 mb-lg-0">
                            <li>
                                <a href="{{ route('home') }}" class="text-fixed-white">Home</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#glance" class="text-fixed-white">Glance</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#about-us" class="text-fixed-white">About Us</a>
                            </li>
                            <li>
                                <a href="{{ route('home') }}#contact" class="text-fixed-white">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                    <div class="px-4">
                        <h6 class="fw-medium text-fixed-white">Services</h6>
                        <ul class="list-unstyled op-6 fw-normal landing-footer-list fs-14 mb-lg-0">
                            <li>
                                <a href="{{ route('services.webDevelopment') }}" class="text-fixed-white">Web Development</a>
                            </li>
                            <li>
                                <a href="{{ route('services.softwareSolutions') }}" class="text-fixed-white">Software Solutions</a>
                            </li>
                            <li>
                                <a href="{{ route('services.UIUXDesign') }}" class="text-fixed-white">UI/UX Design</a>
                            </li>
                            <li>
                                <a href="{{ route('services.digitalTransformation') }}" class="text-fixed-white">Digital Transformation</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-6 col-12">
                    <div class="px-4">
                        <h6 class="fw-medium text-fixed-white">Social</h6>
                        <ul class="list-unstyled fw-normal mb-lg-0 landing-footer-list fs-14">
                            <a target="_blank" href="https://www.facebook.com/sevenscapital">
                                <li class="d-flex gap-1 align-items-center">
                                    <button class="btn btn-sm btn-icon btn-facebook btn-wave waves-effect waves-light">
                                        <i class="ri-facebook-line fw-bold"></i>
                                    </button>
                                    <div class="ms-2 op-8">Facebook</div>
                                </li>
                            </a>
                            <a target="_blank" href="https://www.tiktok.com/@sevenscapital">
                                <li class="d-flex gap-1 align-items-center">
                                    <button class="btn btn-sm btn-icon btn-danger btn-wave waves-effect waves-light">
                                        <i class="ri-tiktok-line fw-bold"></i>
                                    </button>
                                    <div class="ms-2 op-8">Tiktok</div>
                                </li>
                            </a>
                            <a target="_blank" href="https://www.instagram.com/sevenscapital">
                                <li class="d-flex gap-1 align-items-center">
                                <button class="btn btn-sm btn-icon btn-instagram btn-wave waves-effect waves-light">
                                    <i class="ri-instagram-line fw-bold"></i>
                                </button>
                                <div class="ms-2 op-8">Instagram</div>
                            </li>
                            </a>
                            <a target="_blank" href="https://www.youtube.com/@sevenscapitalofficial">
                                <li class="d-flex gap-1 align-items-center">
                                <button class="btn btn-sm btn-icon btn-youtube btn-wave waves-effect waves-light">
                                    <i class="ri-youtube-line fw-bold"></i>
                                </button>
                                <div class="ms-2 op-8">Youtube</div>
                            </li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 col-12">
                    <div class="px-4">
                        <h6 class="fw-medium text-fixed-white">CONTACT INFO</h6>
                        <ul class="list-unstyled fw-normal mb-lg-0 landing-footer-list fs-14">
                            <li>
                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-home-4-line me-1 align-middle"></i> Dubai, United Arab Emirates</a>
                            </li>
                            <li>
                                <a href="mailto:info@seven-scapital.com" class="text-fixed-white op-6"><i class="ri-mail-line me-1 align-middle"></i> info@seven-scapital.com</a>
                            </li>
                            <li>
                                <a href="tel:+971554018911" class="text-fixed-white op-6"><i class="ri-phone-line me-1 align-middle"></i> +(971)-55 401 8911</a>
                            </li>
                            <li>
                                <a href="javascript:void(0);" class="text-fixed-white op-6"><i class="ri-printer-line me-1 align-middle"></i> +(971) 55 401 8911</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End:: Section-12 -->

@endsection

@section('scripts')

    <!-- Internal Landing JS -->
    @vite('resources/assets/js/landing.js')


@endsection
