@extends('frontend.layouts.app')
@section('title', 'Services')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Service</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Service_01</li>
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
        
        
        <!-- What We ProvideArea start -->
        <section class="what-we-provide-area rel z-1">
            <div class="container px-sm-0 bordered-x py-130 rpy-100">
                <div class="row justify-content-between">
                    <div class="col-lg-6 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-50">
                            <span class="subtitle mt-10 mb-15">What We Provide</span>
                            <h2>The Complete Suite of Services We Provide for Your Online Success</h2>
                        </div>
                        <img src="{{ asset('/assets/images/about/what-we-provide.jpg') }}" alt="What We Provide">
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image mb-40">
                            <img src="{{ asset('/assets/images/about/what-we-provide2.jpg') }}" alt="What We Provide">
                        </div>
                        <p>Understanding your marketing videos’ performance can be like looking for needle in a haystack. Vidyard’s online video marketing platform is a  magnet  We'll discuss your project needs, goals, and budget, and provide</p>
                        <a href="{{ route('about') }}" class="theme-btn hover-primary mt-25" data-hover="Learn More Us">
                            <span>Learn More Us</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- What We ProvideArea end -->
        
        
        <!-- Working Process Area Start -->
        <section class="services-area">
            <div class="container px-0 bordered-x pb-130 rpb-100">
                <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title mb-50 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Our Working Process</span>
                            <h2>Step-by-Step The Video Marketing Journey</h2>
                        </div>
                    </div>
                </div>
                <div class="working-step-wrap">
                    <div class="work-step-item hover-item">
                        <span class="number">01</span>
                        <h6>Consultation</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                    <div class="work-step-item hover-item">
                        <span class="number">02</span>
                        <h6>Planning</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                    <div class="work-step-item hover-item">
                        <span class="number">03</span>
                        <h6>Production</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                    <div class="work-step-item hover-item">
                        <span class="number">04</span>
                        <h6>Distribution</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                    <div class="work-step-item hover-item">
                        <span class="number">05</span>
                        <h6>Optimization</h6>
                        <div class="hover-content">
                            Planning is the foundational stage any successful project or strategy where goals defined resources are allocated
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Working Process Area End -->
        
        
        <!-- Services Area Start -->
        <section class="services-area bgc-black text-white">
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
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-two-area rel z-1">
            <div class="container bordered-x pt-130 rpt-100 pb-100 rpb-70 px-sm-0">
                <div class="row justify-content-center pb-35">
                    <div class="col-xl-5 col-lg-7 col-md-10 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mt-10 mb-30">
                            <span class="subtitle mb-15">Why Choose Us</span>
                            <h2>Discover the advantages of our services</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two">
                            <div class="icon"><i class="flaticon-curve"></i></div>
                            <h5><a href="{{ route('serviceDetails') }}">Modern & Creative Design</a></h5>
                            <p>We design are mobile-friendly and fully responsive. This means they will look and function perfectly on all devices.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two">
                            <div class="icon"><i class="flaticon-leadership"></i></div>
                            <h5><a href="{{ route('serviceDetails') }}">Dedicated Team Member</a></h5>
                            <p>We design are mobile-friendly and fully responsive. This means they will look and function perfectly on all devices.</p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6" data-aos="flip-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-two-item style-two">
                            <div class="icon"><i class="flaticon-satisfaction"></i></div>
                            <h5><a href="{{ route('serviceDetails') }}">Satisfaction guaranteed</a></h5>
                            <p>We design are mobile-friendly and fully responsive. This means they will look and function perfectly on all devices.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
        <!-- FAQs Area start -->
        <section class="faqs-area rel z-1">
            <div class="container bordered-x px-sm-0 pb-120 rpb-90">
                <div class="row justify-content-between">
                    <div class="col-lg-4 rmb-55" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-35">
                            <span class="subtitle mt-10 mb-15">FAQs</span>
                            <h2>Frequently Asked Questions</h2>
                        </div>
                        <p>We incorporate SEO best practices into website build this includes optimizing site structure page load speed, mobile responsiveness.</p>
                        <a href="{{ route('contact') }}" class="theme-btn style-two mt-15" data-hover="Get A Quote">
                            <span>Get A Quote</span>
                        </a>
                    </div>
                    <div class="col-lg-8">
                        <div class="accordion-one" id="faq-accordion">
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                       1. What services does your web design agency provide?
                                    </button>
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapseTwo">
                                        2. How long does it take to design and develop a website?
                                    </button>
                                </h6>
                                <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>SEO is a long-term strategy, and results can typically take 3 to 6 months to become noticeable. The timeline can vary depending on factors such as the competitiveness of the industry, the current state of your website, and the effectiveness of the SEO strategy implemented.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree">
                                        3. How much does a new website cost?
                                    </button>
                                </h6>
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFour">
                                        4. Will my website be mobile-friendly and responsive?
                                    </button>
                                </h6>
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseFive">
                                        5. Can you update or redesign my existing website?
                                    </button>
                                </h6>
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- FAQs Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection