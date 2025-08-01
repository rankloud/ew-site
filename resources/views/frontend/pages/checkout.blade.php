@extends('frontend.layouts.app')
@section('title', 'Checkout')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x py-200 rpt-100 rpb-120">
                <div class="banner-inner px-xl-4 pt-90">
                    <h1 class="page-title mb-20" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">Checkout</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">Checkout</li>
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
        
        
        <!-- Checkout Form Area Start -->
        <div class="checkout-form-area py-130 rpy-100">
            <div class="container">
               <div class="checkout-faqs" id="checkout-faqs">
                    <div class="alert bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h6>Returning customer? <a href="#" class="collapsed card-header" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">Click here to login</a></h6>
                        <div id="collapse0" class="collapse content">
                            <form action="#">
                                <p>Please login your accont.</p>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email-address" name="email-address" class="form-control" value="" placeholder="Your Email Address" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" id="password" name="password" class="form-control" value="" placeholder="Your Password" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="theme-btn style-two" data-hover="login">
                                        <span>login</span>
                                    </button>
                                    <input type="checkbox" name="loss-passowrd" id="loss-passowrd" required>
                                    <label for="loss-passowrd">Remember me</label>
                                </div>
                                <a href="#">Lost your password?</a>
                            </form>
                        </div>
                    </div>
                    <div class="alert bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <h6>Have a coupon? <a href="#" class="collapsed card-header" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">Click here to enter your code</a></h6>
                        <div id="collapse3" class="collapse content">
                            <form action="#">
                                <p>If you have a coupon code, please apply it below.</p>
                                <div class="form-group">
                                    <input type="text" id="coupon-code" name="coupon-code" class="form-control" value="" placeholder="Coupon Code" required>
                                </div>
                                <button type="submit" class="theme-btn style-two" data-hover="apply coupon">
                                    <span>apply coupon</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="alert bgc-lighter">
                        <h6>Billing Address <a href="#" class="card-header" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="true" aria-controls="collapse4"> Enter here</a></h6>
                        <div id="collapse4" class="collapse content show">
                            <form id="checkout-form" class="checkout-form" name="checkout-form" action="#" method="post">
                                <div class="row">
                                    <div class="col-lg-12 pt-15">
                                        <h5>Personal Information</h5>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="first-name" name="first-name" class="form-control" value="" placeholder="First Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="last-name" name="last-name" class="form-control" value="" placeholder="Last Name" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="number" name="number" class="form-control" value="" placeholder="Phone Number" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" id="email" name="email" class="form-control" value="" placeholder="Email Address" required="">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="company-name" name="company-name" class="form-control" value="" placeholder="Company name (optional)">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="company-address" name="company-address" class="form-control" value="" placeholder="Company Address (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Your Address</h5>
                                    </div>
                                    <div class="col-md-6 mb-15">
                                        <div class="form-group">
                                           <select name="country" id="country">
                                                <option value="value1">Select Country</option>
                                                <option value="value2">Australia</option>
                                                <option value="value3">Canada</option>
                                                <option value="value4">China</option>
                                                <option value="value5">Morocco</option>
                                                <option value="value6">Saudi Arabia</option>
                                                <option value="value7">United Kingdom (UK)</option>
                                                <option value="value8">United States (US)</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="city" name="city" class="form-control" value="" placeholder="City" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="state" name="state" class="form-control" value="" placeholder="State" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="zip" name="zip" class="form-control" value="" placeholder="Zip" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="street-name" name="street-name" class="form-control" value="" placeholder="House, street name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" id="apartment-name" name="apartment-name" class="form-control" value="" placeholder="Apartment, suite, unit etc. (optional)">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <h5>Order Notes (optional)</h5>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group mb-0">
                                            <textarea name="order-note" id="order-note" class="form-control" rows="5" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="alert bgc-lighter">
                        <h6>Select Your <a href="#" class="collapsed card-header" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5"> Payment Method</a></h6>
                        <div id="collapse5" class="collapse content">
                            <div class="payment-cart-total pt-25">
                                <div class="row justify-content-between">
                                    <div class="col-lg-6">
                                        <div class="payment-method rmb-30">
                                            <h5 class="mb-20">Payment Method</h5>
                                            <ul id="paymentMethod" class="mb-30">
                                                <!-- Default unchecked -->
                                                <li class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="methodone" name="defaultExampleRadios" checked>
                                                    <label class="custom-control-label" for="methodone" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-controls="collapseOne">Direct Bank Transfer <i class="fas fa-money-check"></i></label>

                                                    <div id="collapseOne" class="collapse show" data-bs-parent="#paymentMethod" style="">
                                                        <p>Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped our account.</p>
                                                    </div>
                                                </li>

                                                <!-- Default unchecked -->
                                                <li class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="methodtwo" name="defaultExampleRadios">
                                                    <label class="custom-control-label collapsed" for="methodtwo" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-controls="collapseTwo">Cash On Delivery <i class="fas fa-truck"></i></label>

                                                    <div id="collapseTwo" class="collapse" data-bs-parent="#paymentMethod" style="">
                                                        <p>Pay with cash upon delivery.</p>
                                                    </div>
                                                </li>

                                                <!-- Default unchecked -->
                                                <li class="custom-control custom-radio">
                                                    <input type="radio" class="custom-control-input" id="methodthree" name="defaultExampleRadios">
                                                    <label class="custom-control-label collapsed" for="methodthree" data-bs-toggle="collapse" data-bs-target="#collapsethree" aria-controls="collapsethree">Paypal <i class="fab fa-cc-paypal"></i></label>

                                                    <div id="collapsethree" class="collapse" data-bs-parent="#paymentMethod" style="">
                                                        <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                                    </div>

                                                </li>
                                            </ul>
                                            <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                                        </div>
                                    </div>
                                    <div class="col-lg-5">
                                        <div class="shoping-cart-total text-left mb-20">
                                            <h5 class="text-center mb-20">Cart Totals</h5>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Fitness UI Kits <strong>× 1</strong></td>
                                                        <td>$70.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Dashboard UI <strong>× 2</strong></td>
                                                        <td>$130.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Shipping Fee</td>
                                                        <td>$10.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Vat</td>
                                                        <td>$5.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Order Total</strong></td>
                                                        <td><strong>$225.00</strong></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="checkout-btn">
                        <button type="button" class="theme-btn hover-primary w-100" data-hover="Place order">
                            <span>Place order</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Checkout Form Area End -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
