@extends('frontend.layouts.app')
@section('title', 'Pricing')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Pricing</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Pricing table</li>
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
        
        
        <!-- Pricing Area start -->
        <section class="pricing-area rel z-2">
            <div class="container px-sm-0 bordered-x pt-130 rpt-100 pb-100 rpb-70">
                <div class="row justify-content-center">
                    <div class="col-xl-7 co-lg-9 col-md-11 text-center" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mb-50">
                            <span class="subtitle mt-10 mb-15">Pricing Package</span>
                            <h2>Premium Web Design Services Without the Premium Price</h2>
                        </div>
                    </div>
                    <div class="col-lg-7 text-center" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                        <ul class="nav pricing-tab mb-55" role="tablist">
                            <li>
                                <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#monthly">Monthly</button>
                            </li>
                            <li>
                                <button class="nav-link" data-bs-toggle="tab" data-bs-target="#yearly">Yearly</button>
                            </li>
                        </ul>
                        <span class="save-percent">Save 25%</span>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="monthly">
                       <div class="row justify-content-center">
                            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item style-two">
                                    <h6 class="title">Regular</h6>
                                    <span class="price">$15<span class="after-text">/per month user</span></span>
                                    <div class="text">Great for individuals and small projects.</div>
                                    <ul class="list-style-two">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li>1 round of revisions</li>
                                    </ul>
                                    <a href="{{ route('contact') }}" class="theme-btn style-three" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <div class="note-text">No credit card required</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item style-two">
                                    <h6 class="title">Standard</h6>
                                    <span class="price">$45<span class="after-text">/per month user</span></span>
                                    <div class="text">Great for individuals and small projects.</div>
                                    <ul class="list-style-two">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li>1 round of revisions</li>
                                    </ul>
                                    <a href="{{ route('contact') }}" class="theme-btn style-three" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <div class="note-text">No credit card required</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item style-two">
                                    <h6 class="title">Premium</h6>
                                    <span class="price">$105<span class="after-text">/per month user</span></span>
                                    <div class="text">Great for individuals and small projects.</div>
                                    <ul class="list-style-two">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li>1 round of revisions</li>
                                    </ul>
                                    <a href="{{ route('contact') }}" class="theme-btn style-three" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <div class="note-text">No credit card required</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="yearly">
                        <div class="row justify-content-center">
                            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item style-two">
                                    <h6 class="title">Regular</h6>
                                    <span class="price">$15<span class="after-text">/per year user</span></span>
                                    <div class="text">Great for individuals and small projects.</div>
                                    <ul class="list-style-two">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li>1 round of revisions</li>
                                    </ul>
                                    <a href="{{ route('contact') }}" class="theme-btn style-three" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <div class="note-text">No credit card required</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item style-two">
                                    <h6 class="title">Standard</h6>
                                    <span class="price">$45<span class="after-text">/per year user</span></span>
                                    <div class="text">Great for individuals and small projects.</div>
                                    <ul class="list-style-two">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li>1 round of revisions</li>
                                    </ul>
                                    <a href="{{ route('contact') }}" class="theme-btn style-three" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <div class="note-text">No credit card required</div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="pricing-item style-two">
                                    <h6 class="title">Premium</h6>
                                    <span class="price">$105<span class="after-text">/per year user</span></span>
                                    <div class="text">Great for individuals and small projects.</div>
                                    <ul class="list-style-two">
                                        <li>Up to 5-7 pages design</li>
                                        <li>1 GB storage per site</li>
                                        <li>Standard theme customization</li>
                                        <li>Social media integration</li>
                                        <li>Basic SEO setup</li>
                                        <li>1 round of revisions</li>
                                    </ul>
                                    <a href="{{ route('contact') }}" class="theme-btn style-three" data-hover="Choose Package">
                                        <span>Choose Package</span>
                                    </a>
                                    <div class="note-text">No credit card required</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Pricing Area end -->
        
        
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