@extends('frontend.layouts.app')
@section('title', 'Project Details')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner text-center px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Project Details</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Project Details</li>
                        </ol>
                    </nav>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape position-two">
                    <img src="{{ asset('/assets/images/shapes/hero-shape.png') }}" alt="Shape">
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
        
        
        <!-- Project Details Area start -->
        <section class="project-list pt-130 rpt-100 pb-75 rpb-45">
            <div class="container container-1290">
               <div class="row justify-content-center">
                    <div class="col-xl-9 col-lg-11 text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="project-tags mb-20">
                            <a href="#">Design</a>
                            <a href="#">Template</a>
                            <a href="#">UX/UI</a>
                        </div>
                        <div class="section-title mb-50">
                            <h2>Modern Landing Pages Template Design</h2>
                        </div>
                        <p>We specialize in creating visually stunning, user-friendly websites that not only capture your brand's unique essence but also engage and convert visitors. Our team of skilled designers and developers work closely with you to understand your goals and deliver a customized website that reflects your brand's identity and drives business growth</p>
                    </div>
                    <div class="col-xl-10 mt-15" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <hr>
                        <div class="project-details-info mt-45">
                            <div class="pd-info-item">
                                <h5>Clients:</h5>
                                <p>Bobby K. Carmody</p>
                            </div>
                            <div class="pd-info-item">
                                <h5>Services:</h5>
                                <p>Website Design</p>
                            </div>
                            <div class="pd-info-item">
                                <h5>Date:</h5>
                                <p>08 Sep 2024</p>
                            </div>
                            <div class="pd-info-item">
                                <h5>Category:</h5>
                                <p>Web Design, Landing Pages</p>
                            </div>
                            <div class="pd-info-item">
                                <h5>Location:</h5>
                                <p>New York</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="image mb-70" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('/assets/images/projects/project-details1.jpg') }}" alt="Project">
                </div>
                <div class="row justify-content-between pb-30">
                    <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mt-5 mb-25">
                            <h2>Social Media Marketing Services for business </h2>
                        </div>
                    </div>
                    <div class="col-lg-6 mb-25" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                        <p>Elevate your online presence with our exceptional website design services. We specialize creating visually stunning, user-friendly websites that not only capture your brand's unique essence but also engage and convert visitors. Our team of skilled designers and developers work closely with you to understand</p>
                        <ul class="list-style-one my-35">
                            <li>Clear Value Proposition</li>
                            <li>User-Friendly Design and Navigation</li>
                            <li>High-Quality Content</li>
                        </ul>
                        <p>Whether you need a sleek and modern design or a classic and timeless look, we combine creativity with functionality to create websites that leave a lasting</p>
                    </div>
                </div>
                <div class="image mb-70" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <img src="{{ asset('/assets/images/projects/project-details2.jpg') }}" alt="Project">
                </div>
                <div class="row pb-10">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mt-5 mb-25">
                            <h2>Project Goals</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 me-auto mb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <p>Elevate your online presence exceptional website design services. We specialize user friendly websites thr not only capture your brand's unique essence but also engage and convert visitors.</p>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 mb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <p>Whether you need a sleek and modern design or a classic and timeless look, we combine creativity with functionality to create websites that leave a impression. Let us help you stand out in the digital."</p>
                    </div>
                </div>
                <hr>
                <div class="row gap-70 justify-content-between pt-50 pb-30">
                    <div class="col-lg-4" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="section-title mt-5 mb-25">
                            <h2>Project Results</h2>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <p>Elevate your online presence with exceptional website design services. We specialize creating visually stunning, user-friendly websites that not only capture your brand's unique essence but also engage and convert visitors. Our team of skilled designers and developers work closely with you to understand</p>
                        <br>
                        <p>We specialize creating visually stunning, user-friendly websites that only capture your brand's unique essence but also engage and convert visitors. Our team skilled designers developers work closely with you to understand</p>
                    </div>
                    <div class="col-lg-4 col-md-6 mb-25" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="100">
                        <img src="{{ asset('/assets/images/projects/project-details-3.jpg') }}" alt="Project">
                    </div>
                </div>
                <hr>
                
                <div class="next-prev-projects pt-50 pb-20">
                    <div class="np-project-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/projects/prev-project.jpg') }}" alt="Project">
                        </div>
                        <div class="content">
                            <div class="project-tags">
                                <a href="#">Design</a>
                                <a href="#">Template</a>
                            </div>
                            <h6><a href="{{ route('projectDetails') }}">Email Newsletter Template Design</a></h6>
                            <a href="{{ route('projectDetails') }}" class="read-more">View Projects <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="np-project-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="image">
                            <img src="{{ asset('/assets/images/projects/next-project.jpg') }}" alt="Project">
                        </div>
                        <div class="content">
                            <div class="project-tags">
                                <a href="#">Graphics</a>
                                <a href="#">SEO</a>
                            </div>
                            <h6><a href="{{ route('projectDetails') }}">SEO Strategy Illustration Design</a></h6>
                            <a href="{{ route('projectDetails') }}" class="read-more">View Projects <i class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                
                <hr>
                <div class="row justify-content-center pt-115 rpt-85">
                    <div class="col-lg-12">
                        <div class="section-title text-center mb-50" data-aos="zoom-in" data-aos-duration="1500" data-aos-offset="50">
                            <h2>Related Projects</h2>
                        </div>
                    </div>
                   <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="project-grid-item">
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
                   <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <div class="project-grid-item">
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
                </div>
            </div>
        </section>
        <!-- Project Details Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection