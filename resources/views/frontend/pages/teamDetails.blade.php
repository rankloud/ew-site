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
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Team Details</h1>
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
        

        <!-- Team Details Area start -->
        <section class="team-details-area">
            <div class="container bordered-x py-130 rpy-100">
               <div class="row gap-80 justify-content-center">
                    <div class="col-lg-5">
                        <div class="team-details-image text-xl-center rmb-55">
                            <img src="assets/images/team/team-details.jpg" alt="Team Member">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-7">
                        <div class="team-details-content">
                            <div class="section-title mb-25">
                                <h2>Kenneth S. Brown</h2>
                                <span class="designation">Web Designer</span>
                            </div>
                            <p>Web designer is creative professional responsible for crafting visually appealing an functional websites effectively communicate brand's message. Combining artistic talent.</p>
                            <br>
                            <h4>Skills</h4>
                            <p>Must stay updated on the latest design trends and technologies to produce innovative and responsive designs various</p>
                            <div class="row justify-content-between pt-10">
                                <div class="col-xl-3 col-sm-4 col-6">
                                    <div class="circle-progress one">
                                        <span class="counting">0</span>
                                        <h6>Web Design</h6>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-4 col-6">
                                    <div class="circle-progress two">
                                        <span class="counting">0</span>
                                        <h6>Development</h6>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-sm-4 col-6">
                                    <div class="circle-progress three">
                                        <span class="counting">0</span>
                                        <h6>Marketing</h6>
                                    </div>
                                </div>
                            </div>
                            <h4>Experience</h4>
                            <p>Must stay updated on the latest design trends and technologies to produce innovative and responsive designs various</p>
                            <div class="experience-item mt-40">
                                <div class="icon"><i class="flaticon-job-search"></i></div>
                                <div class="content">
                                    <h6>Senior Product Designer</h6>
                                    <span class="years">2020-Present</span>
                                </div>
                                <span class="company">Google</span>
                            </div>
                            <div class="experience-item">
                                <div class="icon"><i class="flaticon-job-search"></i></div>
                                <div class="content">
                                    <h6>Web Designer</h6>
                                    <span class="years">2018-2020</span>
                                </div>
                                <span class="company">Dribbble</span>
                            </div>
                            <div class="experience-item">
                                <div class="icon"><i class="flaticon-job-search"></i></div>
                                <div class="content">
                                    <h6>Graphics Designer</h6>
                                    <span class="years">2015-2017</span>
                                </div>
                                <span class="company">Behance</span>
                            </div>
                            <div class="experience-item">
                                <div class="icon"><i class="flaticon-job-search"></i></div>
                                <div class="content">
                                    <h6>Lead UI Designer</h6>
                                    <span class="years">2013-2014</span>
                                </div>
                                <span class="company">Amazon</span>
                            </div>
                            
                            <br>
                            <h4>Experience</h4>
                            <p>Must stay updated on the latest design trends and technologies to produce innovative and responsive designs various</p>
                            
                            <form class="contact-form bgc-lighter mt-40 z-1 rel" name="contactForm" action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="form-group mt-10">
                                    <label for="name">Full Name</label>
                                    <input type="text" id="name" name="name" class="form-control" placeholder="your name here" value="" required>
                                </div>
                                <div class="form-group">
                                    <label for="email">Email Address</label>
                                    <input type="email" id="email" name="email" class="form-control" placeholder="email address" value="" required >
                                </div>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" class="form-control" rows="4" placeholder="write message" required></textarea>
                                </div>
                                <div class="form-group mb-10">
                                    <button type="submit" class="theme-btn" data-hover="Send Message">
                                        <span>Send Message</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Team Details Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection