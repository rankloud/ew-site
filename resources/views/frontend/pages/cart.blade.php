@extends('frontend.layouts.app')
@section('title', 'Cart')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->
        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Cart</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Shopping Cart</li>
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
        
        
         <!-- Shopping Cart Area start -->
        <section class="shopping-cart-area py-130 rpy-100 rel z-1">
            <div class="container">
                <div class="shoping-table mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <table>
                        <thead>
                            <tr>
                                <th>Images</th>
                                <th>Product</th>
                                <th>Unit Price</th>
                                <th>Quantity</th>
                                <th>Total</th>
                                <th>remove</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><img src="{{ asset('/assets/images/widgets/news1.jpg') }}" alt="Product"></td>
                                <td><span class="title">Fitness UI Kits</span></td>
                                <td><span class="price">70</span></td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-down">--</button>
                                        <input class="quantity" type="text" value="1" name="quantity">
                                        <button class="quantity-up">+</button>
                                    </div>
                                </td>
                                <td><b class="price">70</b></td>
                                <td><button type="button" class="close">×</button></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('/assets/images/widgets/news2.jpg') }}" alt="Product"></td>
                                <td><span class="title">Dashboard UI</span></td>
                                <td><span class="price">65</span></td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-down">--</button>
                                        <input class="quantity" type="text" value="2" name="quantity">
                                        <button class="quantity-up">+</button>
                                    </div>
                                </td>
                                <td><b class="price">130</b></td>
                                <td><button type="button" class="close">×</button></td>
                            </tr>
                            <tr>
                                <td><img src="{{ asset('/assets/images/widgets/news3.jpg') }}" alt="Product"></td>
                                <td><span class="title">Plugin for WordPress</span></td>
                                <td><span class="price">80</span></td>
                                <td>
                                    <div class="quantity-input">
                                        <button class="quantity-down">--</button>
                                        <input class="quantity" type="text" value="1" name="quantity">
                                        <button class="quantity-up">+</button>
                                    </div>
                                </td>
                                <td><b class="price">80</b></td>
                                <td><button type="button" class="close">×</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="row text-center text-lg-left align-items-center">
                    <div class="col-lg-6">
                        <div class="discount-wrapper mb-30" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                            <form action="#" class="d-sm-flex justify-content-center justify-content-lg-start">
                                <input type="text" placeholder="Coupon Code" required>
                                <button class="theme-btn hover-primary flex-none ms-2 my-5" type="submit" data-hover="Apply Coupon"> 
                                    <span>Apply Coupon</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="update-shopping mb-30 text-lg-end" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                            <a href="{{ route('shop') }}" class="theme-btn style-two me-2 my-5" data-hover="Shopping">
                                <span>Shopping</span>
                            </a>
                            <a href="{{ route('shop') }}" class="theme-btn hover-primary my-5" data-hover="Update Cart">
                                <span>Update Cart</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="shoping-cart-total pt-20" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                            <h4 class="form-title mb-25 text-center">Cart Totals</h4>
                            <table>
                                <tbody>
                                    <tr>
                                        <td>Cart Subtotal</td>
                                        <td><span class="price">280</span></td>
                                    </tr>
                                    <tr>
                                        <td>Shipping Fee</td>
                                        <td><span class="price">10.00</span></td>
                                    </tr>
                                    <tr>
                                        <td>Vat</td>
                                        <td>$0.00</td>
                                    </tr>
                                    <tr>
                                        <td><strong>Order Total</strong></td>
                                        <td><b class="price">290</b></td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="{{ route('checkout') }}" class="theme-btn hover-primary mt-25 w-100" data-hover="Proceed to checkout">
                                <span>Proceed to checkout</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Shopping Cart Area start --> 

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
