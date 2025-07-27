@extends('frontend.layouts.app')
@section('title', '404')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-100 rpt-60 rpb-80">
                <div class="banner-inner text-center px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">404</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active">404 Error</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
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
        
        
        <!-- 404 Error Area start -->
        <section class="error-area py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-xl-8 col-lg-10">
                        <div class="error-content text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image mb-40">
                                <img class="w-75" src="assets/images/about/404.png" alt="404 Error">
                            </div>
                            <div class="section-title mt-15 mb-25">
                                <h2><span class="h1">OPPS! </span> Page Can’t be Found</h2>
                            </div>
                            <p>Best features to include on business landing page are those that quickly convey your value proposition, build trust, and encourage action. Here are six essential features</p>
                            <a href="index.html" class="theme-btn hover-primary mt-25" data-hover="Back To Home">
                                <span>Back To Home</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- 404 Error Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
