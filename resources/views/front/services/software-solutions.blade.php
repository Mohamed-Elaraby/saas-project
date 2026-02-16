@extends('front.layouts.landing-master')
@section('title', 'Software Solutions | ' . config('app.name'))
@section('styles')

    <meta name="description" content="SEVEN S CAPITAL provides custom software solutions, enterprise systems, and secure platforms to enhance business efficiency.">
    <meta name="keywords" content="software solutions, custom software development, enterprise systems, secure platforms, scalable software, business software solutions">
    <meta name="author" content="SEVEN S CAPITAL">
    <meta name="robots" content="index, follow">
    <meta name="title" content="Software Solutions | {{ config('app.name') }}">

    <!-- Open Graph Meta Tags (for social sharing) -->
    <meta property="og:title" content="Web Development Services: Build Your Online Presence">
    <meta property="og:description" content="Explore professional web development services that help businesses build secure, high-quality, and custom websites optimized for performance.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ route('services.softwareSolutions') }}">
    <meta property="og:image" content="{{ asset('storage/front/services/softwareSolutions/main-software-solutions.webp') }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Development Services: Build Your Online Presence">
    <meta name="twitter:description" content="Get customized web development solutions for your business, from frontend to backend development and e-commerce platforms.">
    <meta name="twitter:image" content="{{ asset('storage/front/services/softwareSolutions/main-software-solutions.webp') }}">
    <meta name="twitter:site" content="@sevenscapital">

    <!-- Additional SEO Tags -->
    <link rel="canonical" href="{{ route('services.softwareSolutions') }}">
    <meta name="language" content="en">
@endsection

@section('content')

    <!-- Start::app-content -->
    <div class="main-content app-content">
        <div class="container-fluid">

            <!-- Start::row-1 -->
            <div class="row">
                <div class="col-xl-8">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="top-left"></div>
                                <div class="top-right"></div>
                                <div class="bottom-left"></div>
                                <div class="bottom-right"></div>
                                <div class="card-body pb-2">
                                    <header>
                                        <h1>Software Solutions</h1>
                                        <p>SEVEN S CAPITAL specializes in crafting innovative software solutions designed to elevate your business operations. Whether you're looking for custom software, enterprise systems, or secure platforms, our team delivers top-tier solutions that prioritize scalability, security, and performance.</p>
                                        <img class="img-fluid" src="{{ asset('storage/front/services/softwareSolutions/main-software-solutions.webp') }}" alt="Professional Software Solutions Services" loading="lazy">
                                    </header>
                                </div>
                                <div class="card-body">
                                    <section>
                                        <h2>Why Choose Our Software Solutions?</h2>
                                        <p>In today's competitive landscape, having reliable and tailored software is a game changer. SEVEN S CAPITAL focuses on delivering solutions that simplify your processes, improve productivity, and enhance overall efficiency.</p>
                                        <ul>
                                            <li><strong>Custom Software Development:</strong> Our experts design software tailored to your specific needs, ensuring unique solutions for every client.</li>
                                            <li><strong>Enterprise Systems:</strong> From ERP to CRM systems, we offer robust software that handles complex business requirements seamlessly.</li>
                                            <li><strong>Scalable Platforms:</strong> Whether you're a startup or an established enterprise, our platforms grow with your business needs.</li>
                                            <li><strong>Security First:</strong> Protect your data and maintain operational integrity with our highly secure software solutions.</li>
                                            <li><strong>Innovative Technologies:</strong> Our team utilizes the latest tools to ensure your software is future-proof and efficient.</li>
                                        </ul>
                                        <img class="img-fluid" src="{{ asset('storage/front/services/softwareSolutions/enterprise-systems.jpg') }}" alt="Enterprise Software Systems" width="400" height="400" loading="lazy">
                                    </section>

                                    <section>
                                        <h2>Our Development Process</h2>
                                        <p>Our comprehensive development process ensures that every project we deliver aligns perfectly with your objectives. Here's how we work:</p>
                                        <ol>
                                            <li><strong>Requirement Analysis:</strong> Understanding your needs and mapping out the best possible solutions.</li>
                                            <li><strong>Design and Development:</strong> Crafting intuitive designs and developing software using agile methodologies.</li>
                                            <li><strong>Quality Assurance:</strong> Rigorous testing to ensure flawless performance.</li>
                                            <li><strong>Deployment and Support:</strong> Seamlessly launching your software and offering ongoing maintenance.</li>
                                        </ol>
                                        <p>Our commitment to quality and client satisfaction sets us apart, making us a trusted partner in your business's digital transformation journey.</p>
                                        <img class="img-fluid" src="{{ asset('storage/front/services/softwareSolutions/development-process.jpg') }}" alt="Software Development Process" width="400" height="400" loading="lazy">
                                    </section>

                                    <section>
                                        <h2>Technologies We Use</h2>
                                        <p>We stay ahead of the curve by leveraging cutting-edge technologies that power our software solutions:</p>
                                        <ul>
                                            <li><strong>Programming Languages:</strong> Python, Java, C#, JavaScript</li>
                                            <li><strong>Frameworks:</strong> .NET, Spring Boot, Django, Flask</li>
                                            <li><strong>Cloud Platforms:</strong> AWS, Azure, Google Cloud</li>
                                            <li><strong>Databases:</strong> MySQL, PostgreSQL, MongoDB, Oracle</li>
                                        </ul>
                                        <img class="img-fluid" src="{{ asset('storage/front/services/softwareSolutions/latest-technologies.jpg') }}" alt="Latest Technologies for Software Solutions" width="400" height="400" loading="lazy">
                                    </section>

                                    <footer>
                                        <h2>Transform Your Business with Our Software Solutions</h2>
                                        <p>Ready to revolutionize your operations with innovative software? SEVEN S CAPITAL is here to provide scalable and reliable solutions tailored to your needs.</p>
                                        <p><strong><a target="_blank" class="text-danger" href="{{ route('home') }}#contact">Get in Touch Today</a></strong> and let's discuss your project!</p>
                                    </footer>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="top-left"></div>
                                <div class="top-right"></div>
                                <div class="bottom-left"></div>
                                <div class="bottom-right"></div>
                                <div class="card-header">
                                    <div class="card-title">
                                        Related Topics
                                    </div>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <a target="_blank" href="{{ route('services.webDevelopment') }}">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="avatar avatar-xs bg-secondary">
                                                                W
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-medium ms-2">Web Development</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a target="_blank" href="{{ route('services.digitalTransformation') }}">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="avatar avatar-xs bg-secondary">
                                                                S
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-medium ms-2">Digital Transformation</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-group-item">
                                            <a target="_blank" href="{{ route('services.UIUXDesign') }}">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="avatar avatar-xs bg-secondary">
                                                                U
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-medium ms-2">UI/UX Design</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12">
                            <div class="card custom-card">
                                <div class="top-left"></div>
                                <div class="top-right"></div>
                                <div class="bottom-left"></div>
                                <div class="bottom-right"></div>
                                <div class="card-header">
                                    <div class="card-title">
                                        Related Tags
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="blog-popular-tags">
                                        @foreach($softwareSolutionsTags as $tag)
                                            <a href="javascript:void(0);">
                                                <span class="badge bg-primary-transparent text-muted">#{{ $tag }}</span>
                                            </a>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End::row-1 -->

        </div>
    </div>
    <!-- End::app-content -->

@endsection

@section('scripts')

@endsection
