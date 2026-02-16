@extends('front.layouts.landing-master')
@section('title', 'Web Development Services | ' . config('app.name'))
@section('styles')

    <meta name="description" content="SEVEN S CAPITAL offers custom web development services with responsive design, SEO-friendly code, fast loading, and secure platforms.">
    <meta name="keywords" content="web development services, custom web development, responsive design, SEO-friendly websites, secure platforms, fast loading websites">
    <meta name="author" content="SEVEN S CAPITAL">
    <meta name="robots" content="index, follow">

    <!-- Open Graph Meta Tags (for social sharing) -->
    <meta property="og:title" content="Web Development Services | {{ config('app.name') }}">
    <meta property="og:description" content="Explore professional web development services that help businesses build secure, high-quality, and custom websites optimized for performance.">
    <meta property="og:type" content="article">
    <meta property="og:url" content="{{ route('services.webDevelopment') }}">
    <meta property="og:image" content="{{ asset('storage/front/services/webDevelopment/main-web-development.webp') }}">

    <!-- Twitter Card Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Web Development Services | {{ config('app.name') }}">
    <meta name="twitter:description" content="Get customized web development solutions for your business, from frontend to backend development and e-commerce platforms.">
    <meta name="twitter:image" content="{{ asset('storage/front/services/webDevelopment/main-web-development.webp') }}">


    <!-- Additional SEO Tags -->
    <link rel="canonical" href="{{ route('services.webDevelopment') }}">
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
                                        <h1>Web Development Services</h1>
                                        <p>At SEVEN S CAPITAL, we specialize in providing top-notch web development services that help businesses grow and thrive in the digital world. Our team of experienced developers is dedicated to building high-performance websites tailored to your business needs.</p>
                                        <img class="img-fluid" src="{{ asset('storage/front/services/webDevelopment/main-web-development.webp') }}" alt="Professional Web Development Services"  loading="lazy">
                                    </header>
                                </div>
                                <div class="card-body">
                                    <section>
                                        <h2>Why Choose Our Web Development Services?</h2>
                                        <p>We offer comprehensive web development services that cater to a wide range of business requirements. Whether you need a simple website or a complex e-commerce platform, we have the expertise to deliver results that exceed expectations.</p>
                                        <ul>
                                            <li><strong>Custom Solutions:</strong> We build websites that are tailored to your specific business needs, ensuring your brand stands out from the competition.</li>
                                            <li><strong>Responsive Design:</strong> All our websites are designed to be fully responsive, meaning they will look great on any device – from desktops to smartphones.</li>
                                            <li><strong>SEO-Friendly Code:</strong> We use best practices for coding, ensuring that your website is optimized for search engines, which will help it rank higher on Google and other search platforms.</li>
                                            <li><strong>Fast Loading Speed:</strong> We optimize every page for fast loading, which not only improves user experience but also boosts your search engine rankings.</li>
                                            <li><strong>Secure Platforms:</strong> We implement the highest security standards to protect your website from any vulnerabilities, ensuring your data and your users’ information is safe.</li>
                                        </ul>
                                        <img class="img-fluid" src="{{ asset('storage/front/services/webDevelopment/secure-platform.jpg') }}" alt="Secure Web Development Services" width="400" height="400" loading="lazy">
                                    </section>

                                    <section>
                                        <h2>Our Process</h2>
                                        <p>Our web development process is designed to ensure that we meet your business goals while delivering a seamless and high-quality user experience. From the initial consultation to the final launch, we make sure you’re involved every step of the way.</p>
                                        <ol>
                                            <li><strong>Understanding Your Needs:</strong> We start by listening to your requirements, goals, and target audience to create a personalized web development strategy.</li>
                                            <li><strong>Planning and Design:</strong> Our design team works on creating wireframes and prototypes that visualize the structure and design of your website.</li>
                                            <li><strong>Development and Testing:</strong> After finalizing the design, we move on to development and rigorous testing to ensure that everything works as intended.</li>
                                            <li><strong>Launch and Maintenance:</strong> Once your website is live, we provide continuous support and maintenance to ensure it stays up-to-date and secure.</li>
                                        </ol>
                                        <img class="img-fluid" src="{{ asset('storage/front/services/webDevelopment/development-process.png') }}" alt="Web Development Process" width="400" height="400" loading="lazy">
                                    </section>

                                    <section>
                                        <h2>Technologies We Use</h2>
                                        <p>At SEVEN S CAPITAL, we use the latest technologies and frameworks to ensure that your website is built using the most advanced and reliable tools available. Some of the technologies we specialize in include:</p>
                                        <ul>
                                            <li><strong>HTML5, CSS3, and JavaScript:</strong> We use the latest standards in HTML, CSS, and JavaScript to create fast and dynamic websites.</li>
                                            <li><strong>Frameworks:</strong> We are proficient in popular frameworks like React, Angular, and Vue.js for building responsive and high-performance web applications.</li>
                                            <li><strong>Backend Development:</strong> Our backend development expertise includes technologies such as Node.js, PHP, and Python, ensuring your website is powered by reliable, scalable systems.</li>
                                            <li><strong>Content Management Systems (CMS):</strong> We work with CMS platforms like WordPress, Shopify, and Magento to create flexible and user-friendly websites that you can easily manage.</li>
                                        </ul>
                                        <img class="img-fluid" src="{{ asset('storage/front/services/webDevelopment/latest-technologies.jpg') }}" alt="Latest Web Development Technologies" width="400" height="400" loading="lazy">
                                    </section>

                                    <footer>
                                        <h2>Let’s Build Something Amazing!</h2>
                                        <p>Your website is often the first impression customers have of your business. Make it count by working with a professional web development team that understands your needs and delivers results.</p>
                                        <p><strong><a target="_blank" class="text-danger" href="{{ route('home') }}#contact">contact us today</a></strong> to discuss your project and elevate your online presence.</p>
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
                                            <a target="_blank" href="{{ route('services.UIUXDesign') }}">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="avatar avatar-xs bg-secondary">
                                                                W
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-medium ms-2">UI/UX Design</span>
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
                                            <a target="_blank" href="{{ route('services.softwareSolutions') }}">
                                                <div class="d-flex align-items-center justify-content-between">
                                                    <div class="d-flex align-items-center">
                                                        <div>
                                                            <span class="avatar avatar-xs bg-secondary">
                                                                U
                                                            </span>
                                                        </div>
                                                        <div>
                                                            <span class="fw-medium ms-2">Software Solutions</span>
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
                                        @foreach($webDevelopmentTags as $tag)
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
