@extends('frontend.layouts.app')
@section('title', 'Blog')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Blog</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Blog Standard</li>
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
        
        
        <!-- Blog List Area start -->
        <section class="blog-list-page rel z-1">
            <div class="container bordered-x px-sm-0 py-130 rpy-100">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-standard-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-standard1.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Web Design</a>
                                    <a href="#">Product Design</a>
                                </div>
                                <h3><a href="{{ route('blogDetails') }}">How to Optimize Your Website for Faster Loading Speeds Beginner's Guide to SEO-Friendly Web Design</a></h3>
                                <ul class="blog-meta">
                                    <li>Post by <a href="#">Richard V</a>.</li>
                                    <li>September 25, 2024</li>
                                    <li>Comments (5)</li>
                                </ul>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-three hover-primary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <div class="blog-standard-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-standard2.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Web Design</a>
                                    <a href="#">Product Design</a>
                                </div>
                                <h3><a href="{{ route('blogDetails') }}">How to Optimize Your Website for Faster Loading Speeds Beginner's Guide to SEO-Friendly Web Design</a></h3>
                                <ul class="blog-meta">
                                    <li>Post by <a href="#">Richard V</a>.</li>
                                    <li>September 25, 2024</li>
                                    <li>Comments (5)</li>
                                </ul>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-three hover-primary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <div class="blog-standard-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-standard3.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Web Design</a>
                                    <a href="#">Product Design</a>
                                </div>
                                <h3><a href="{{ route('blogDetails') }}">How to Optimize Your Website for Faster Loading Speeds Beginner's Guide to SEO-Friendly Web Design</a></h3>
                                <ul class="blog-meta">
                                    <li>Post by <a href="#">Richard V</a>.</li>
                                    <li>September 25, 2024</li>
                                    <li>Comments (5)</li>
                                </ul>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-three hover-primary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        <div class="blog-standard-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/blog/blog-standard4.jpg') }}" alt="Blog">
                            </div>
                            <div class="content">
                                <div class="project-tags">
                                    <a href="#">Web Design</a>
                                    <a href="#">Product Design</a>
                                </div>
                                <h3><a href="{{ route('blogDetails') }}">How to Optimize Your Website for Faster Loading Speeds Beginner's Guide to SEO-Friendly Web Design</a></h3>
                                <ul class="blog-meta">
                                    <li>Post by <a href="#">Richard V</a>.</li>
                                    <li>September 25, 2024</li>
                                    <li>Comments (5)</li>
                                </ul>
                                <a href="{{ route('blogDetails') }}" class="theme-btn style-three hover-primary" data-hover="Read More">
                                    <span>Read More</span>
                                </a>
                            </div>
                        </div>
                        
                        <ul class="pagination pt-5 flex-wrap" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <li class="page-item active">
                                <span class="page-link">
                                    1
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next <i class="far fa-chevron-right"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-4 col-md-8 col-sm-10 ps-xl-5 rmt-65">
                        <div class="blog-sidebar">
                            
                            <div class="widget widget-search" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Search</h4>
                                <form action="#" class="default-search-form">
                                    <input type="text" placeholder="Search....." required="">
                                    <button type="submit" class="searchbutton far fa-search"></button>
                                </form>
                            </div>
                            
                            <div class="widget widget-category" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Category</h4>
                                <ul>
                                    <li><a href="{{ route('blog') }}">Web Design</a></li>
                                    <li><a href="{{ route('blog') }}">SEO Optimization</a></li>
                                    <li><a href="{{ route('blog') }}">Mobile Apps Design</a></li>
                                    <li><a href="{{ route('blog') }}">Landing Pages</a></li>
                                    <li><a href="{{ route('blog') }}">Branding Design</a></li>
                                    <li><a href="{{ route('blog') }}">Motion & Animations</a></li>
                                </ul>
                            </div>
                            
                            <div class="widget widget-news" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Recent News</h4>
                                <ul>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news1.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">How to Improve Your Website User Experience Tips</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news2.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">Importance of Responsive in a Mobile-First World</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="{{ asset('/assets/images/widgets/news3.jpg') }}" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="{{ route('blogDetails') }}">The Role of Color Theory in Effective Web Design</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="widget widget-tags" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tag-clouds">
                                    <a href="{{ route('blog') }}">Design</a>
                                    <a href="{{ route('blog') }}">SMM</a>
                                    <a href="{{ route('blog') }}">Agency</a>
                                    <a href="{{ route('blog') }}">SEO</a>
                                    <a href="{{ route('blog') }}">Apps</a>
                                    <a href="{{ route('blog') }}">Dashboard</a>
                                    <a href="{{ route('blog') }}">Product</a>
                                    <a href="{{ route('blog') }}">UX/UI</a>
                                    <a href="{{ route('blog') }}">Marketing</a>
                                    <a href="{{ route('blog') }}">Animation</a>
                                </div>
                            </div>
                            
                            <div class="widget widget-gallery" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Gallery</h4>
                                <div class="gallery">
                                    <a href="{{ asset('/assets/images/widgets/gallery1.jpg') }}">
                                        <i class="far fa-plus"></i>
                                        <img src="{{ asset('/assets/images/widgets/gallery1.jpg') }}" alt="Gallery">
                                    </a>
                                    <a href="{{ asset('/assets/images/widgets/gallery2.jpg') }}">
                                        <i class="far fa-plus"></i>
                                        <img src="{{ asset('/assets/images/widgets/gallery2.jpg') }}" alt="Gallery">
                                    </a>
                                    <a href="{{ asset('/assets/images/widgets/gallery3.jpg') }}">
                                        <i class="far fa-plus"></i>
                                        <img src="{{ asset('/assets/images/widgets/gallery3.jpg') }}" alt="Gallery">
                                    </a>
                                    <a href="{{ asset('/assets/images/widgets/gallery4.jpg') }}">
                                        <i class="far fa-plus"></i>
                                        <img src="{{ asset('/assets/images/widgets/gallery4.jpg') }}" alt="Gallery">
                                    </a>
                                    <a href="{{ asset('/assets/images/widgets/gallery5.jpg') }}">
                                        <i class="far fa-plus"></i>
                                        <img src="{{ asset('/assets/images/widgets/gallery5.jpg') }}" alt="Gallery">
                                    </a>
                                    <a href="{{ asset('/assets/images/widgets/gallery6.jpg') }}">
                                        <i class="far fa-plus"></i>
                                        <img src="{{ asset('/assets/images/widgets/gallery6.jpg') }}" alt="Gallery">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog List Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
