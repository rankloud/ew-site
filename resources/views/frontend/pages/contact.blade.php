@extends('frontend.layouts.app')
@section('title', 'Contact')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Contact</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Contact</li>
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
        
        
        <!-- Why Choose Us Area start -->
        <section class="why-choose-contact-page rel z-1">
            <div class="container bordered-x pt-130 rpt-100 pb-70 px-sm-0">
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
           
           
        <!-- Contact Form Area start -->
        <section class="contact-form-area">
            <div class="container bordered-x px-sm-0 pb-120 rpb-90">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="contact-info-part style-two rmb-55" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <div class="section-title mb-50">
                                <h2>Ready to get started? Fill out the form below, and we'll be in touch shortly</h2>
                            </div>
                            <div class="contact-info-wrap bordered br-10 overflow-hidden">
                                <div class="row no-gap">
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-map-marker-alt"></i></div>
                                            <div class="text">Kanpur, UP, India</div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-envelope"></i></div>
                                            <div class="text">
                                                <a href="mailto:info@empireword.com">info@empireword.com</a><br>
                                                <a href="www.sayan.net" target="_blank">www.sayan.net</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-phone-volume"></i></div>
                                            <div class="text">
                                                <a href="callto:+880(123)45688">+880 (123) 456 88</a><br>
                                                <a href="callto:+001(234)56897">+001 (234) 56897</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="contact-info-item" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                                            <div class="icon"><i class="far fa-clock"></i></div>
                                            <div class="text">Monday - Friday <br>08:00am - 05:00pm</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                       <div class="contact-form style-three bgc-lighter z-1 rel">
                            <form id="contactForm" class="contactForm" name="contactForm" action="assets/php/form-process.php" method="post" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <h3>Get In Touch</h3>
                                <p>Contact us today to schedule consultation to expert team</p>
                                <div class="row gap-20 mt-20">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="name">Full Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Fernando H. Cruz" value="" required data-error="Please enter your Name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="phone_number">Phone</label>
                                            <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone Number" value="" required data-error="Please enter your Number">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <label for="email">Email Address</label>
                                            <input type="email" id="email" name="email" class="form-control" placeholder="Enter email" value="" required data-error="Please enter your Email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 mb-25">
                                        <div class="form-group">
                                            <label for="subject">Subject</label>
                                            <input type="text" id="subject" name="subject" class="form-control" value="" placeholder="Subject" required data-error="Please enter your Subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <label for="message">Message Us</label>
                                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="write here" required data-error="Please enter your Message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-0">
                                            <button type="submit" class="theme-btn" data-hover="Send Message">
                                                <span>Send Message</span>
                                            </button>
                                            <div id="msgSubmit" class="hidden"></div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                       </div>
                    </div>
                </div>
                
                <div class="our-location mt-100" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d96777.16150026117!2d-74.00840582560909!3d40.71171357405996!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1706508986625!5m2!1sen!2sbd" style="border:0; width: 100%;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </section>
        <!-- Contact Form Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
