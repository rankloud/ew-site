@extends('frontend.layouts.app')
@section('title', 'Project Masonry')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Project Grid</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Project Grid</li>
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
        
        
        <!-- Project Grid Area start -->
        <section class="project-grid py-130 rpy-100">
            <div class="container container-1290">
               <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-65" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Popular Works</span>
                            <h2>Explore Our Latest Projects</h2>
                        </div>
                    </div>
                </div>
               
               <div class="row">
                   <div class="col-lg-6">
                        <div class="project-grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/projects/project-grid1.jpg') }}" alt="Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Design</a>
                                    <a href="#">Template</a>
                                    <a href="#">UX/UI</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Email Newsletter Template Design</a></h4>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-6">
                        <div class="project-grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/projects/project-grid2.jpg') }}" alt="Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Graphics</a>
                                    <a href="#">SEO</a>
                                    <a href="#">Illustration</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">SEO Strategy Illustration Design</a></h4>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-6">
                        <div class="project-grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/projects/project-grid3.jpg') }}" alt="Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Design</a>
                                    <a href="#">Modern</a>
                                    <a href="#">Illustration</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Modern 5G Concept Illustration Design</a></h4>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-6">
                        <div class="project-grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/projects/project-grid4.jpg') }}" alt="Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Website</a>
                                    <a href="#">Landing Pages</a>
                                    <a href="#">UX/UI</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Responsive Website Design</a></h4>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-6">
                        <div class="project-grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/projects/project-grid5.jpg') }}" alt="Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Apps</a>
                                    <a href="#">Travel</a>
                                    <a href="#">Booking</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Travel Booking Mobile Application Design</a></h4>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-6">
                        <div class="project-grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/projects/project-grid6.jpg') }}" alt="Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Design</a>
                                    <a href="#">Template</a>
                                    <a href="#">UX/UI</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Email Newsletter Template Design</a></h4>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-6">
                        <div class="project-grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/projects/project-grid7.jpg') }}" alt="Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Dashboard</a>
                                    <a href="#">Template</a>
                                    <a href="#">UX/UI</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Cloud hosting dashboard Realtime resource</a></h4>
                            </div>
                        </div>
                   </div>
                   <div class="col-lg-6">
                        <div class="project-grid-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/projects/project-grid8.jpg') }}" alt="Project">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Design</a>
                                    <a href="#">Template</a>
                                    <a href="#">UX/UI</a>
                                </div>
                                <h4><a href="{{ route('projectDetails') }}">Website UI/UX Landing Page Design</a></h4>
                            </div>
                        </div>
                   </div>
               </div>
                
                <div class="text-center pt-20">
                    <a href="{{ route('projectList') }}" class="theme-btn hover-primary" data-hover="Project Details">
                        <span>View More Projects</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Project Grid Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection