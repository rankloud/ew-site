@extends('frontend.layouts.app')
@section('title', 'About')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

    <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">About Us</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">About Us</li>
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
        
        
        <!-- About Area start -->
        <section class="about-area rel z-1">
            <div class="container bordered-x pt-130 rpt-100 pb-80">
                <div class="row px-xl-5 justify-content-between align-items-center">
                    <div class="col-xl-4 col-lg-5">
                        <div class="about-circles rmb-55">
                            <div class="circle" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">Web Design</div>
                            <div class="circle mx-auto bgc-black text-white" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">Development</div>
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
                            <ul class="list-style-one mt-30">
                                <li>Digital Product Design</li>
                                <li>SEO Optimization</li>
                                <li>Web Development</li>
                                <li>Mobile Apps Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container about-counter rel bordered-x px-0">
                <img src="{{ asset('/assets/images/about/counter.jpg') }}" alt="About">
                <div class="counter-wrap m-0 br-10" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50" style="background-image: url(assets/images/background/counter-bg-with-dots.png);">
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
        </section>
        <!-- About Area end -->
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-us-area rel z-1">
            <div class="container bordered-x py-130 rpy-100">
                <div class="row mx-xl-1 justify-content-between">
                    <div class="col-lg-6 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-45">
                            <span class="subtitle mt-10 mb-15">Why Choose Us?</span>
                            <h2>SEO Strategies Tailored to Your Business Needs</h2>
                        </div>
                        <img class="br-5" src="{{ asset('/assets/images/services/why-choose-us.jpg') }}" alt="Why Choose Us">
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-tools"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Expertise and Experience</a></h6>
                                <p>With over 10+ years of experience in the industry team seasoned SEO professionals brings knowledge</p>
                            </div>
                        </div>
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-anchor"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Customized Solutions</a></h6>
                                <p>We understand that every business is unique. That's why we take a tailored approach to SEO</p>
                            </div>
                        </div>
                        <div class="service-item style-two">
                            <div class="icon"><i class="fas fa-comments"></i></div>
                            <div class="content">
                                <h6><a href="{{ route('serviceDetails') }}">Transparency & Communication</a></h6>
                                <p>We believe in open and transparent communication with our clients every step of the way.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Why Choose Us Area end -->
        
        
        <!-- Team Area start -->
        <section class="team-area-two bgc-lighter">
            <div class="container bordered-x pt-130 rpt-100 pb-100 rpb-70 px-sm-0">
               <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Meet Our Team</span>
                            <h2>Meet Our Experience Team Memeber</h2>
                        </div>
                    </div>
                </div>
               
                <div class="row justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('/assets/images/team/team-two1.png') }}" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Kenneth S. Brown</a></h5>
                                <span class="designation">Ceo & Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('/assets/images/team/team-two2.png') }}" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Norman D. Hogan</a></h5>
                                <span class="designation">Web Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('/assets/images/team/team-two3.png') }}" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Mike L. Quattlebaum</a></h5>
                                <span class="designation">Apps Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="{{ asset('/assets/images/team/team-two4.png') }}" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="{{ route('teamDetails') }}">Kenneth M. Smith</a></h5>
                                <span class="designation">Graphics Designer</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Area end -->
        
        
        <!-- Testimonials Area Start -->
        <section class="testimonials-two-area rel z-1">
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
        <section class="blog-area rel z-1">
            <div class="container bordered-x pb-100 rpb-70 px-sm-0">
                <div class="row justify-content-center">
                    <div class="col-lg-9">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Blog & News</span>
                            <h2>Explore Latest Insights</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-two4.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="#">Video Marketing</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">How to Craft they Winning Socials Media Strategy from Scratch</a></h5>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-two5.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="#">Research & Marketing</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">Unlocking the Power of Paid Ads A Social Media Marketing</a></h5>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="blog-item style-three" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-two6.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <ul class="blog-meta">
                                    <li><a href="#">SEO Marketing</a></li>
                                </ul>
                                <h5><a href="{{ route('blogDetails') }}">Boosting Local Visibility a Client Dominated Market with SEO</a></h5>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-two" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
