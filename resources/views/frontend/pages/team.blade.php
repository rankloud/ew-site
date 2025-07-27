@extends('frontend.layouts.app')
@section('title', 'Team Member')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Team</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">Team Member</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape">
                    <img src="assets/images/shapes/hero-shape.png" alt="Shape">
                </div>
                <div class="banner-image" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                    <img src="assets/images/banner/banner.jpg" alt="Banner">
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
        <section class="team-page-about-area rel z-1">
            <div class="container px-sm-0 bordered-x pt-130 rpt-100">
                <div class="row gap-50 align-items-center">
                    <div class="col-lg-6 rmb-55" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-page-about-content me-xl-5">
                            <div class="section-title mb-35">
                                <h2>Most Experience For Digital Product and Web Design</h2>
                            </div>
                            <p>Web design agency, we specialize in creating visually stunning and highly functional websites that help businesses stand out in the digital world team talented designers and developers are passionate about crafting</p>
                            <ul class="list-style-two mt-30">
                                <li>Digital Product Design</li>
                                <li>SEO Optimization</li>
                                <li>Web Development</li>
                                <li>Mobile Apps Design</li>
                            </ul>
                            <a href="#team" class="theme-btn hover-primary mt-35" data-hover="Meet Our Experience Team">
                                <span>Meet Our Experience Team</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img class="br-5" src="assets/images/about/team-page.jpg" alt="Team">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area end -->
        

        <!-- Team Area start -->
        <section id="team" class="team-area-two">
            <div class="container bordered-x px-sm-0 pt-130 rpt-100">
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
                                <img src="assets/images/team/team-two1.png" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="team-details.html">Kenneth S. Brown</a></h5>
                                <span class="designation">Ceo & Founder</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="assets/images/team/team-two2.png" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="team-details.html">Norman D. Hogan</a></h5>
                                <span class="designation">Web Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="assets/images/team/team-two3.png" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="team-details.html">Mike L. Quattlebaum</a></h5>
                                <span class="designation">Apps Developer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="assets/images/team/team-two4.png" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="team-details.html">Kenneth M. Smith</a></h5>
                                <span class="designation">Graphics Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="assets/images/team/team-two5.png" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="team-details.html">James J. Altamirano</a></h5>
                                <span class="designation">Digital Consultant</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="assets/images/team/team-two6.png" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="team-details.html">Michael T. Johnson</a></h5>
                                <span class="designation">Business Marketer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="assets/images/team/team-two7.png" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="team-details.html">William M. Phelan</a></h5>
                                <span class="designation">Graphics Designer</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-sm-6" data-aos="flip-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="team-item style-two">
                            <div class="image">
                                <img src="assets/images/team/team-two8.png" alt="Team Member">
                                <div class="social-style-one">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                            <div class="content">
                                <h5><a href="team-details.html">Frank R. Holland</a></h5>
                                <span class="designation">Apps Developer</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="text-center mt-10">
                    <a href="team.html" class="theme-btn hover-primary" data-hover="View All Member">
                        <span>View All Member</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Team Area end -->
        
        
        <!-- CTA Area start -->
        <section class="cta-area-two rel z-1">
            <div class="container px-sm-0 bordered-x py-130 rpy-100 ">
                <div class="py-100 rpy-70 bgc-lighter" style="background-image: url(assets/images/background/cta-bg-dots.png);">
                    <div class="row justify-content-center">
                        <div class="col-xl-7 col-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mx-xl-3 mb-30">
                                <h2>Get In Touch and start growing your startup today</h2>
                                <p>Have any questions? Don’t hesitate to contact us!</p>
                            </div>
                            <a href="contact.html" class="theme-btn hover-primary" data-hover="Get Started">
                                <span>Get Started</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- CTA Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection