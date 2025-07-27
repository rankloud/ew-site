@extends('frontend.layouts.app')
@section('title', 'Faq')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">FAQ</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">FAQs</li>
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
        
        
        <!-- FAQs Area start -->
        <section class="faqs-area rel z-1">
            <div class="container bordered-x px-sm-0 pt-50 rpt-100 pb-120 rpb-90">
                <div class="row justify-content-between">
                    <div class="col-lg-4 mt-80 rmt-0">
                        <div class="faq-tab-wrap rmb-45">
                            <div class="section-title mb-40">
                                <span class="subtitle mt-10 mb-15">FAQs</span>
                                <h2>Frequently Asked Questions</h2>
                            </div>
                            <ul class="faq-nav">
                                <li><a href="#faq-accordion-one" class="active">General Questions</a></li>
                                <li><a href="#faq-accordion-two">Support & Services</a></li>
                                <li><a href="#faq-accordion-three">Pricing Package</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="accordion-one pt-80 rpt-0" id="faq-accordion-one">
                           <h4>General Questions</h4>
                           <div class="text pt-10 pb-25">
                               <p>Web designer is a creative professional responsible for crafting visually appealing and functional sites that effectively communicate a brand's message. Combining artistic talent with technical skills designers create layouts, graphics, and interactive elements that enhance.</p>
                           </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                                       1. What services does your web design agency provide?
                                    </button>
                                </h6>
                                <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-one">
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
                                <div id="collapseTwo" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion-one">
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
                                <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-one">
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
                                <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-one">
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
                                <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-one">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-one pt-80 rpt-60" id="faq-accordion-two">
                           <h4>Support & Services</h4>
                           <div class="text pt-10 pb-25">
                               <p>Web designer is a creative professional responsible for crafting visually appealing and functional sites that effectively communicate a brand's message. Combining artistic talent with technical skills designers create layouts, graphics, and interactive elements that enhance.</p>
                           </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2One">
                                       1. What services does your web design agency provide?
                                    </button>
                                </h6>
                                <div id="collapse2One" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-two">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse2Two">
                                        2. How long does it take to design and develop a website?
                                    </button>
                                </h6>
                                <div id="collapse2Two" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion-two">
                                    <div class="accordion-body">
                                        <p>SEO is a long-term strategy, and results can typically take 3 to 6 months to become noticeable. The timeline can vary depending on factors such as the competitiveness of the industry, the current state of your website, and the effectiveness of the SEO strategy implemented.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2Three">
                                        3. How much does a new website cost?
                                    </button>
                                </h6>
                                <div id="collapse2Three" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-two">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2Four">
                                        4. Will my website be mobile-friendly and responsive?
                                    </button>
                                </h6>
                                <div id="collapse2Four" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-two">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse2Five">
                                        5. Can you update or redesign my existing website?
                                    </button>
                                </h6>
                                <div id="collapse2Five" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-two">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                          
                        <div class="accordion-one pt-80 rpt-60" id="faq-accordion-three">
                           <h4>Pricing Package</h4>
                           <div class="text pt-10 pb-25">
                               <p>Web designer is a creative professional responsible for crafting visually appealing and functional sites that effectively communicate a brand's message. Combining artistic talent with technical skills designers create layouts, graphics, and interactive elements that enhance.</p>
                           </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3One">
                                       1. What services does your web design agency provide?
                                    </button>
                                </h6>
                                <div id="collapse3One" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-three">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="for-sticky"></div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button" data-bs-toggle="collapse" data-bs-target="#collapse3Two">
                                        2. How long does it take to design and develop a website?
                                    </button>
                                </h6>
                                <div id="collapse3Two" class="accordion-collapse collapse show" data-bs-parent="#faq-accordion-three">
                                    <div class="accordion-body">
                                        <p>SEO is a long-term strategy, and results can typically take 3 to 6 months to become noticeable. The timeline can vary depending on factors such as the competitiveness of the industry, the current state of your website, and the effectiveness of the SEO strategy implemented.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3Three">
                                        3. How much does a new website cost?
                                    </button>
                                </h6>
                                <div id="collapse3Three" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-three">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3Four">
                                        4. Will my website be mobile-friendly and responsive?
                                    </button>
                                </h6>
                                <div id="collapse3Four" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-three">
                                    <div class="accordion-body">
                                        <p>To take a trivial example which undertakes laborious physical exercise except to obtain some advantage pleasure annoying consequences</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h6 class="accordion-header">
                                    <button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#collapse3Five">
                                        5. Can you update or redesign my existing website?
                                    </button>
                                </h6>
                                <div id="collapse3Five" class="accordion-collapse collapse" data-bs-parent="#faq-accordion-three">
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