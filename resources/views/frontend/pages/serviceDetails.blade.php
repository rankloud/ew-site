@extends('frontend.layouts.app')
@section('title', 'Service Details')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Web Design</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Service Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('/assets/images/banner/banner.jpg') }}" alt="Banner">
                </div>
                <span class="marquee-wrap">
                    <span class="marquee-inner left">
                        <span class="marquee-item">Web Design Agency</span>
                   </span>
                   <span class="marquee-inner left">
                        <span class="marquee-item">Web Design Agency</span>
                   </span>
                   <span class="marquee-inner left">
                        <span class="marquee-item">Web Design Agency</span>
                   </span>
                </span>
            </div>
            
        </section>
        <!-- Page Banner End -->
        
        
        <!-- Services Area start -->
        <section class="service-details-area rel z-1">
            <div class="container bordered-x py-130 rpy-100 px-sm-0">
                <div class="section-title mb-50">
                    <h2>Creating a modern website design involves combining aesthetics, functionality, and user experience to create a visually appealing and easy-to-navigate website. Here are some key steps to help you create a modern website design</h2>
                </div>
                <p>Web design is the process of creating a website's visual layout and user experience, combining elements such as color, typography, images, and interactive features to create a cohesive and engaging online presence. A well-designed website is both aesthetically pleasing and functional, providing seamless experience for users as they navigate through its content.</p>
                <div class="image my-55">
                    <img src="{{ asset('/assets/images/services/service-details.jpg') }}" alt="Service Details">
                </div>
                <h3>Define Your Purpose and Audience</h3>
                <p>Web design is the process of creating a website's visual layout and user experience, combining elements such as color, typography, images, and interactive features to create a cohesive and engaging online presence. A well-designed website is both aesthetically pleasing and functional, providing seamless experience for users as they navigate through its content.</p>
                <ul class="list-style-one mt-25 mb-35">
                    <li>Choose a Clean and Simple Layout</li>
                    <li>Select a Color Scheme</li>
                    <li>Pick Modern Typography</li>
                    <li>Incorporate High-Quality Visuals</li>
                </ul>
                <p>Grid System A grid-based layout helps organize content in a structured manner, ensuring consistency across different pages. Responsive Design Websites should be designed to be fully responsive, meaning they adapt to different screen sizes and devices, such as smartphones, tablets, and desktops. This simple roadmap can be adapted to fit different types of projects or initiatives, providing a clear path from start to finish.</p>
                <br>
                <h3>Very Our Simple Roadmap</h3>
                <p>A simple roadmap is a strategic plan that outlines the key steps and milestones needed to achieve a specific goal. It provides a clear, step-by-step guide that helps teams and individuals stay focused and organized, ensuring that everyone is aligned with the project's</p>
                <div class="row text-center justify-content-center pt-25 pb-15 rel">
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">01</span>
                            <h6>Discovery & Analysis</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">02</span>
                            <h6>Website Optimization</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">03</span>
                            <h6>Content Strategy</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="work-process-item-two style-two">
                            <span class="number">04</span>
                            <h6>Discovery & Analysis</h6>
                        </div>
                    </div>
                </div>
                <p>Starting with defining the goals and objectives, the roadmap progresses through stages such as research and planning, design and development, and implementation and execution. It also includes steps for testing, feedback, and optimization to ensure the project meets its targets effectively. By following a simple roadmap, teams can manage their resources efficiently, adapt to changes, and achieve successful outcomes with clarity and purpose.</p>
                <br>
                <h3>How to Benefits to Choose us</h3>
                <p>To maximize the benefits of using your website, it's important to highlight the unique value it offers to users and ensure it provides a positive experience. Here are some key strategies to effectively communicate the benefits of using your website:</p>
                <ul class="list-style-one mt-25">
                    <li>Clear Value Proposition</li>
                    <li>User-Friendly Design and Navigation</li>
                    <li>High-Quality Content</li>
                    <li>Interactive Features</li>
                    <li>Secure and Trustworthy Experience</li>
                    <li>Call-to-Actions (CTAs)</li>
                </ul>
            </div>
        </section>
        <!-- Services Area end -->
        
        
        <!-- CTA Area start -->
        <section class="cta-area-two rel z-1">
            <div class="container px-sm-0 bordered-x bordered-top py-130 rpy-100" style="background-image: url(assets/images/background/cta-bg-dots.png);">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mx-xl-3 mb-30">
                            <h2>Get In Touch and start growing your startup today</h2>
                            <p>Have any questions? Don’t hesitate to contact us!</p>
                        </div>
                        <a href="{{ route('contact') }}" class="theme-btn hover-primary" data-hover="Get Started">
                            <span>Get Started</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection