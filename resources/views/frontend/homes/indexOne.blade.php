@extends('frontend.layouts.app')
@section('title', 'Index One')
@section('content')

    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <!-- Hero Area Start -->
        <section class="hero-area-four bgc-black text-white rel z-2">
            <div class="container px-xxl-0 bordered-x pt-180 rpt-90">
                <div class="row pt-50">
                    <div class="col-xl-10">
                        <div class="hero-content-four" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h1>Building Responsive Websites</h1>
                            <p>Web design is a critical aspect of creating an effective online presence for any business or individual. A well-designed website not only reflects a brand's identity but also enhances user experience, ensuring visitors can easily</p>
                            <a href="{{ route('projectGrid') }}" class="theme-btn mt-30 rmt-15 mb-65 rmb-30" data-hover="Explore Our Projects">
                                <span>Explore Our Projects</span>
                            </a>
                            <h5>5m+ Trusted Clients</h5>
                            <div class="trusted-clients mt-25">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="50" src="{{ asset('/assets/images/hero/author1.jpg') }}" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="100" src="{{ asset('/assets/images/hero/author2.jpg') }}" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="150" src="{{ asset('/assets/images/hero/author3.jpg') }}" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="200" src="{{ asset('/assets/images/hero/author4.jpg') }}" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="250" src="{{ asset('/assets/images/hero/author5.jpg') }}" alt="Author">
                                <img data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300" src="{{ asset('/assets/images/hero/author6.jpg') }}" alt="Author">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-area-shapes">
                <div class="shape"><img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape"></div>
                <div class="hero-image">
                    <img src="{{ asset('/assets/images/hero/hero-four.jpg') }}" alt="">
                </div>
            </div>
        </section>
        <!-- Hero Area End -->
        
        
        <!-- Counter Area start -->
        <div class="counter-area bgc-black pt-120 rpt-100 rel z-1">
            <div class="row gap-80 align-items-center">
                <div class="col-xxl-5" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <div class="counter-left-image">
                        <img src="{{ asset('/assets/images/counter/counter.jpg') }}" alt="Counter">
                    </div>
                </div>
                <div class="col-xxl-7">
                    <div class="counter-wrap br-10" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50" style="background-image: url(assets/images/background/counter-bg-with-dots.png);">
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text k-plus" data-speed="3000" data-stop="25">0</span>
                                    <span class="counter-title">Project Complete</span>
                                    <div class="text">Completing a mobile application development</div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text k-plus" data-speed="3000" data-stop="10">0</span>
                                    <span class="counter-title">Happy Customers</span>
                                    <div class="text">Completing a mobile application development</div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6">
                                <div class="counter-item counter-text-wrap">
                                    <span class="count-text plus" data-speed="3000" data-stop="18">0</span>
                                    <span class="counter-title">Years Of Experience</span>
                                    <div class="text">Completing a mobile application development</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container text-white blank-container bordered-x"></div>
            <div class="counter-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/counter.png') }}" alt="Shape">
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
        </div>
        <!-- Counter Area end -->
        
        
        <!-- About Area start -->
        <section class="about-area rel z-1">
            <div class="container bordered-x pt-130 rpt-100 pb-100">
                <div class="row px-xl-5 justify-content-between align-items-center">
                    <div class="col-xl-4 col-lg-5">
                        <div class="about-circles rmb-55">
                            <div class="circle" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">Development</div>
                            <div class="circle mx-auto bgc-black text-white" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">Web Design</div>
                            <div class="circle ms-auto bgc-primary" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">Mobile Apps Design</div>
                        </div>
                    </div>
                    <div class="col-lg-7" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="about-content-four">
                            <div class="section-title mb-40">
                                <span class="subtitle mt-10 mb-15">About Agency</span>
                                <h2>Technology Transforming Ideas into Reality Empowering Brands with Engaging <span>Empireword</span> Agency</h2>
                            </div>
                            <p>At our web design agency, we specialize in creating visually stunning and highly functional websites that help businesses stand out in the digital world. Our team of talented designers and developers are passionate about crafting</p>
                            <ul class="list-style-one my-30">
                                <li>Digital Product Design</li>
                                <li>SEO Optimization</li>
                                <li>Web Development</li>
                                <li>Mobile Apps Design</li>
                            </ul>
                            <a href="{{ route('projectList') }}" class="theme-btn style-two" data-hover="Explore Our Projects">
                                <span>Explore Our Projects</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container bordered-x px-0">
                <img src="{{ asset('/assets/images/about/about.png') }}" alt="About">
            </div>
        </section>
        <!-- About Area end -->
        
        
        <!-- Services Area Start -->
        <section class="services-area">
            <div class="container px-0 bordered-x bordered-top py-130 rpy-100">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-11">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Services</span>
                            <h2>Creative & Modern Services</h2>
                        </div>
                    </div>
                </div>
                <div class="service-limeline-item">
                    <span class="number">01</span>
                    <span class="h1"><a href="{{ route('serviceDetails') }}">Web Design</a></span>
                    <div class="image"><img src="{{ asset('/assets/images/services/service-timeline1.jpg') }}" alt="Service"></div>
                    <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                </div>
                <div class="service-limeline-item">
                    <span class="number">02</span>
                    <span class="h1"><a href="{{ route('serviceDetails') }}">Branding</a></span>
                    <div class="image"><img src="{{ asset('/assets/images/services/service-timeline2.jpg') }}" alt="Service"></div>
                    <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                </div>
                <div class="service-limeline-item">
                    <span class="number">03</span>
                    <span class="h1"><a href="{{ route('serviceDetails') }}">SEO</a></span>
                    <div class="image"><img src="{{ asset('/assets/images/services/service-timeline3.jpg') }}" alt="Service"></div>
                    <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                </div>
                <div class="service-limeline-item">
                    <span class="number">04</span>
                    <span class="h1"><a href="{{ route('serviceDetails') }}">Motion Design</a></span>
                    <div class="image"><img src="{{ asset('/assets/images/services/service-timeline4.jpg') }}" alt="Service"></div>
                    <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                </div>
                <div class="service-limeline-item">
                    <span class="number">05</span>
                    <span class="h1"><a href="{{ route('serviceDetails') }}">3D Animation</a></span>
                    <div class="image"><img src="{{ asset('/assets/images/services/service-timeline5.jpg') }}" alt="Service"></div>
                    <a href="{{ route('serviceDetails') }}" class="detail-btn"><i class="far fa-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- Services Area End -->
        
        
        <!-- Working Process Area Start -->
        <section class="working-process-area bgc-black text-white rel z-1">
            <div class="container bordered-x pt-130 rpt-100 pb-80 rpb-50">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9 col-md-11">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">How IT Works</span>
                            <h2>Step by Step Working Process</h2>
                        </div>
                    </div>
                </div>
                <div class="row gap-50 justify-content-center rel">
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="work-process-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/work-process/work-process1.jpg') }}" alt="Work Process">
                            </div>
                            <div class="circle"></div>
                            <div class="content">
                                <h5>Discovery and<br> Strategy</h5>
                                <p>We begin by understanding your brand, goals, and target audience competitive</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="work-process-item" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="content">
                                <h5>Design and<br> Prototyping</h5>
                                <p>We begin by understanding your brand, goals, and target audience competitive</p>
                            </div>
                            <div class="circle"></div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/work-process/work-process2.jpg') }}" alt="Work Process">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="work-process-item" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/work-process/work-process3.jpg') }}" alt="Work Process">
                            </div>
                            <div class="circle"></div>
                            <div class="content">
                                <h5>Development<br> and Testing</h5>
                                <p>We begin by understanding your brand, goals, and target audience competitive</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6">
                        <div class="work-process-item" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="content">
                                <h5>Launch and<br> Support</h5>
                                <p>We begin by understanding your brand, goals, and target audience competitive</p>
                            </div>
                            <div class="circle"></div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/work-process/work-process4.jpg') }}" alt="Work Process">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="work-process-line">
                            <img src="{{ asset('/assets/images/work-process/work-step-line.png') }}" alt="Line">
                        </div>
                    </div>
                </div>
            </div>
            <div class="work-process-shapes"></div>
        </section>
        <!-- Working Process Area End -->
        
        
        <!-- Projects Area start -->
        <section class="project-area rel z-1">
            <div class="container bordered-x px-sm-0 py-130 rpy-100">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mb-15">Popular Works</span>
                            <h2>Explore Our Latest Projects</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-8">
                        <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <a href="{{ asset('/assets/images/projects/project-image1.jpg') }}" class="image">
                                <img src="{{ asset('/assets/images/projects/project-image1.jpg') }}" alt="Project">
                            </a>
                            <div class="content">
                                <span class="category">Marketing</span>
                                <h4><a href="{{ route('projectDetails') }}">Website Development</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <a href="{{ asset('/assets/images/projects/project-image2.jpg') }}" class="image">
                                <img src="{{ asset('/assets/images/projects/project-image2.jpg') }}" alt="Project">
                            </a>
                            <div class="content">
                                <span class="category">Marketing</span>
                                <h6><a href="{{ route('projectDetails') }}">Website Development</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <a href="{{ asset('/assets/images/projects/project-image2.jpg') }}" class="image">
                                <img src="{{ asset('/assets/images/projects/project-image2.jpg') }}" alt="Project">
                            </a>
                            <div class="content">
                                <span class="category">Marketing</span>
                                <h6><a href="{{ route('projectDetails') }}">Website Development</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <a href="{{ asset('/assets/images/projects/project-image4.jpg') }}" class="image">
                                <img src="{{ asset('/assets/images/projects/project-image4.jpg') }}" alt="Project">
                            </a>
                            <div class="content">
                                <span class="category">Marketing</span>
                                <h4><a href="{{ route('projectDetails') }}">Website Development</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-8">
                        <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <a href="{{ asset('/assets/images/projects/project-image5.jpg') }}" class="image">
                                <img src="{{ asset('/assets/images/projects/project-image5.jpg') }}" alt="Project">
                            </a>
                            <div class="content">
                                <span class="category">Marketing</span>
                                <h4><a href="{{ route('projectDetails') }}">Website Development</a></h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="project-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <a href="{{ asset('/assets/images/projects/project-image6.jpg') }}" class="image">
                                <img src="{{ asset('/assets/images/projects/project-image6.jpg') }}" alt="Project">
                            </a>
                            <div class="content">
                                <span class="category">Marketing</span>
                                <h6><a href="{{ route('projectDetails') }}">Website Development</a></h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 text-center">
                        <a href="{{ route('projectGrid') }}" class="theme-btn style-two mt-20" data-hover="Explore Projects">
                            <span>Explore Projects</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Projects Area end -->
        
        
        <!-- Testimonials Area Start -->
        <section class="testimonials-two-area bgc-lighter rel z-1">
            <div class="container px-0 bordered-x pt-130 rpt-100 pb-170 rpb-140">
                <div class="testimonials-and-clients bg-white br-10 bordered">
                    <div class="row">
                        <div class="col-lg-5">
                            <div class="testimonials-content rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <div class="section-title mb-30">
                                    <span class="subtitle mt-10 mb-15">Out Testimonials</span>
                                    <h2>1580+ Customer Say About Our Services</h2>
                                </div>
                                <p>A web design agency is dedicated to creating visually stunning and highly functional websites.</p>
                                <div class="testimonial-dots mt-45"></div>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="testimonials-two-active" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="testimonial-item style-two">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                        <div class="logo"><img src="{{ asset('/assets/images/testimonials/logo3.png') }}" alt="Logo"></div>
                                    </div>
                                    <div class="text">" Working with Empireword has been game-changer for our see social media presence. Their strategic to approach and the attention too detail have help reach heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="{{ asset('/assets/images/testimonials/author1.jpg') }}" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-two">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                        <div class="logo"><img src="{{ asset('/assets/images/testimonials/logo1.png') }}" alt="Logo"></div>
                                    </div>
                                    <div class="text">" Working with Empireword has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="{{ asset('/assets/images/testimonials/author2.jpg') }}" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-two">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                        <div class="logo"><img src="{{ asset('/assets/images/testimonials/logo3.png') }}" alt="Logo"></div>
                                    </div>
                                    <div class="text">" Working with Empireword has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="{{ asset('/assets/images/testimonials/author1.jpg') }}" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                                <div class="testimonial-item style-two">
                                    <div class="author-logo">
                                        <div class="quote"><i class="flaticon-quotation-mark"></i></div>
                                        <div class="logo"><img src="{{ asset('/assets/images/testimonials/logo1.png') }}" alt="Logo"></div>
                                    </div>
                                    <div class="text">" Working with Empireword has been game-changer for our social media presence. Their strategic to approach and attention too detail have helped us reach new heights"</div>
                                    <div class="quote-title">
                                        <div class="author"><img src="{{ asset('/assets/images/testimonials/author2.jpg') }}" alt="Author"></div>
                                        <h6>Randall J. Ferguson</h6>
                                        <span class="designation">/CEO & Founder</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt-45 mb-40" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <h6>Trusted by industry leaders</h6>
                    </div>
                    <div class="client-logo-active">
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo1.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo2.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo3.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo4.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo5.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo6.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo1.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo2.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo3.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo4.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo5.png') }}" alt="Client Logo"></a>
                        </div>
                        <div class="client-logo-item" data-aos="flip-up" data-aos-delay="250" data-aos-duration="1500" data-aos-offset="50">
                            <a href="#"><img src="{{ asset('/assets/images/client-logos/client-logo6.png') }}" alt="Client Logo"></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonials Area End -->
        
        
        <!-- Blog Area start -->
        <section class="blog-two-area rel z-1">
            <div class="container px-sm-0 bordered-x pt-130 rpt-100">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mb-15">Blog & News</span>
                            <h2>Explore Latest Insights</h2>
                        </div>
                    </div>
                </div>
                <div class="blog-timeline-item hover-item">
                    <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>September 15, 2024</a></span>
                    <div class="content">
                        <h4><a href="{{ route('blogDetails') }}">How to Craft they Winning Socials Media Strategy from Scratch</a></h4>
                        <div class="hover-content">
                            <div class="text">
                                <p>Web design agency dedicated creating visually up highly functional websites that help businesses out landscape combining creative design</p>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-timeline1.jpg') }}" alt="Blog">
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('blogDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                </div>
                <div class="blog-timeline-item hover-item">
                    <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>September 15, 2024</a></span>
                    <div class="content">
                        <h4><a href="{{ route('blogDetails') }}">The Importance of Responsive Design in Today’s Digital Landscape</a></h4>
                        <div class="hover-content">
                            <div class="text">
                                <p>Web design agency dedicated creating visually up highly functional websites that help businesses out landscape combining creative design</p>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-timeline2.jpg') }}" alt="Blog">
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('blogDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                </div>
                <div class="blog-timeline-item hover-item">
                    <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>September 15, 2024</a></span>
                    <div class="content">
                        <h4><a href="{{ route('blogDetails') }}">How to Improve Your Website’s Loading Speed Performance</a></h4>
                        <div class="hover-content">
                            <div class="text">
                                <p>Web design agency dedicated creating visually up highly functional websites that help businesses out landscape combining creative design</p>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-timeline3.jpg') }}" alt="Blog">
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('blogDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                </div>
                <div class="blog-timeline-item hover-item">
                    <span class="date"><a href="#"><i class="far fa-calendar-alt"></i>September 15, 2024</a></span>
                    <div class="content">
                        <h4><a href="{{ route('blogDetails') }}">How to Choose the Right Web Design Agency for Your Business</a></h4>
                        <div class="hover-content">
                            <div class="text">
                                <p>Web design agency dedicated creating visually up highly functional websites that help businesses out landscape combining creative design</p>
                            </div>
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-timeline4.jpg') }}" alt="Blog">
                            </div>
                        </div>
                    </div>
                    <a href="{{ route('blogDetails') }}" class="detail-btn"><i class="fal fa-arrow-right"></i></a>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->
         
         
        <!-- CTA Area start -->
        <section class="cta-area-two rel z-1">
            <div class="container px-sm-0 bordered-x py-130 rpy-100" style="background-image: url(assets/images/background/cta-bg-dots.png);">
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
