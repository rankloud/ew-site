@extends('frontend.layouts.app')
@section('title', 'Shop')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Shop</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Shop</li>
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
        
        
        <!-- Products Area start -->
        <section class="product-area py-130 rpy-100 rel z-1">
            <div class="container container-1290">
                <div class="shop-shorter rel z-3 mb-40" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <div class="sort-text mb-20 me-3">
                        Showing 1 - 12 of 30 Results
                    </div>
                    <div class="products-dropdown mb-20">
                        <select>
                            <option value="default" selected="">Sort by</option>
                            <option value="new">Sort by Newness</option>
                            <option value="old">Sort by Oldest</option>
                            <option value="hight-to-low">High To Low</option>
                            <option value="low-to-high">Low To High</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product1.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">Creative Web Page Design</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product2.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">3D Illustration Design</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product3.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">Business Card Mockup</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product4.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">Creative Web Page Design</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product5.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">Business Card Mockupn</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product6.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">Creative Web Page Design</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product7.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">T-shirt Mockup Design</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product8.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">Mobile Application Design</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-6">
                        <div class="product-item" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="image">
                                <img src="{{ asset('/assets/images/products/product9.jpg') }}" alt="Product">
                            </div>
                            <div class="content">
                                <a class="category" href="#">Product Design</a>
                                <h5><a href="{{ route('productDetails') }}">Logo Design & Branding</a></h5>
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="price">$593</span>
                                </div>
                                <a href="{{ route('cart') }}" class="theme-btn" data-hover="Add to Cart">
                                    <span>Add to Cart</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <ul class="pagination mt-40 flex-wrap justify-content-center" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <li class="page-item disabled">
                                <span class="page-link">Prev</span>
                            </li>
                            <li class="page-item active">
                                <span class="page-link">
                                    01
                                    <span class="sr-only">(current)</span>
                                </span>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">02</a></li>
                            <li class="page-item"><a class="page-link" href="#">03</a></li>
                            <li class="page-item"><a class="page-link" href="#">04</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">Next</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- Products Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection