@extends('frontend.layouts.app')
@section('title', 'Project List')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Project List</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Project List</li>
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
        
        
        <!-- Project List Area start -->
        <section class="project-list py-130 rpy-100">
            <div class="container container-1290">
               <div class="row justify-content-center">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-65" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <span class="subtitle mt-10 mb-15">Popular Works</span>
                            <h2>Explore Our Latest Projects</h2>
                        </div>
                    </div>
                </div>
               
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">Design</a>
                                <a href="#">Template</a>
                                <a href="#">UX/UI</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Email Newsletter Template Design</a></h4>
                        </div>
                        <div class="bottom">
                            <p>Elevate your online presence exceptional website design services specialize in creating visually stunning</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('/assets/images/projects/project-list1.jpg') }}" alt="Project">
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">Design</a>
                                <a href="#">Template</a>
                                <a href="#">UX/UI</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Mobile Application Design</a></h4>
                        </div>
                        <div class="bottom">
                            <p>Elevate your online presence exceptional website design services specialize in creating visually stunning</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('/assets/images/projects/project-list2.jpg') }}" alt="Project">
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">Design</a>
                                <a href="#">Template</a>
                                <a href="#">UX/UI</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Cloud hosting dashboard Realtime resource</a></h4>
                        </div>
                        <div class="bottom">
                            <p>Elevate your online presence exceptional website design services specialize in creating visually stunning</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('/assets/images/projects/project-list3.jpg') }}" alt="Project">
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">Design</a>
                                <a href="#">Template</a>
                                <a href="#">UX/UI</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Responsive Website Design</a></h4>
                        </div>
                        <div class="bottom">
                            <p>Elevate your online presence exceptional website design services specialize in creating visually stunning</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('/assets/images/projects/project-list4.jpg') }}" alt="Project">
                    </div>
                </div>
                <div class="project-list-item">
                    <div class="content">
                        <div class="top">
                            <div class="project-tags">
                                <a href="#">Design</a>
                                <a href="#">Template</a>
                                <a href="#">UX/UI</a>
                            </div>
                            <h4><a href="{{ route('projectDetails') }}">Modern 5G Concept Illustration Design</a></h4>
                        </div>
                        <div class="bottom">
                            <p>Elevate your online presence exceptional website design services specialize in creating visually stunning</p>
                            <a href="{{ route('projectDetails') }}" class="theme-btn style-two" data-hover="Project Details">
                                <span>Project Details</span>
                            </a>
                        </div>
                    </div>
                    <div class="image">
                        <img src="{{ asset('/assets/images/projects/project-list5.jpg') }}" alt="Project">
                    </div>
                </div>
                
                <div class="text-center pt-20">
                    <a href="{{ route('projectGrid') }}" class="theme-btn hover-primary" data-hover="Project Details">
                        <span>View More Projects</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Project List Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection