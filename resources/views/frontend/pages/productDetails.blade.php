@extends('frontend.layouts.app')
@section('title', 'Product Details')
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
                            <li class="breadcrumb-item active">Product Details</li>
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
        
        
        <!-- Product Details Start -->
        <section class="product-details pt-130">
            <div class="container container-1290">
                <div class="row align-items-center gap-70">
                    <div class="col-lg-6">
                        <div class="product-details-images rmb-55 wow fadeInLeft delay-0-2s">
                            <div class="tab-content preview-images">
                                <div class="tab-pane fade preview-item active show" id="preview1">
                                    <img src="{{ asset('/assets/images/products/preview1.jpg') }}" alt="Perview">
                                </div>
                                <div class="tab-pane fade preview-item" id="preview2">
                                    <img src="{{ asset('/assets/images/products/preview1.jpg') }}" alt="Perview">
                                </div>
                                <div class="tab-pane fade preview-item" id="preview3">
                                    <img src="{{ asset('/assets/images/products/preview1.jpg') }}" alt="Perview">
                                </div>
                            </div>
                            <div class="nav thumb-images rmb-20">
                                <a href="#preview1" data-bs-toggle="tab" class="thumb-item active show">
                                    <img src="{{ asset('/assets/images/products/thumb1.jpg') }}" alt="Thumb">
                                </a>
                                <a href="#preview2" data-bs-toggle="tab" class="thumb-item">
                                    <img src="{{ asset('/assets/images/products/thumb2.jpg') }}" alt="Thumb">
                                </a>
                                <a href="#preview3" data-bs-toggle="tab" class="thumb-item">
                                    <img src="{{ asset('/assets/images/products/thumb3.jpg') }}" alt="Thumb">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details-content wow fadeInRight delay-0-2s">
                            <div class="section-title">
                                <h2>3D Illustration Design</h2>
                            </div>
                            <div class="ratting-price mb-30">
                                <div class="ratting">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <span class="price">$593</span>
                            </div>
                            <p>Doloremque laudantium, totam rem aperiam, eaque ipsa quae abillo inventore veritatis quasi architecto beatae vitae dicta sunt explicabo Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit autfugit, sed quia consequuntur magni dolores eos qui ratiluptatem sequi nesciunt porro quisquam est, qui dolorem</p>
                            <form action="#" class="add-to-cart pt-35">
                                <input type="number" value="01" min="1" max="20" onchange="if(parseInt(this.value,10)<10)this.value='0'+this.value;" required>
                                <button type="submit" class="theme-btn style-two" data-hover="Add To Cart">
                                    <span>Add To Cart</span>
                                </button>
                            </form>
                            <ul class="category-tags pt-60">
                                <li>
                                    <b>Category :</b>
                                    <a href="{{ route('shop') }}">Software</a>
                                    <a href="{{ route('shop') }}">Website</a>
                                    <a href="{{ route('shop') }}">Design</a>
                                </li>
                                <li>
                                    <b>Tags :</b>
                                    <a href="{{ route('shop') }}">3D</a>
                                    <a href="{{ route('shop') }}">Ilustration</a>
                                    <a href="{{ route('shop') }}">Arts</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <ul class="nav product-information-tab mt-80 mb-25 wow fadeInUp delay-0-2s">
                    <li><a href="#details" data-bs-toggle="tab" class="active show">Description <i class="far fa-arrow-right"></i></a></li>
                    <li><a href="#information" data-bs-toggle="tab">Information <i class="far fa-arrow-right"></i></a></li>
                    <li><a href="#review" data-bs-toggle="tab">Reviews <i class="far fa-arrow-right"></i></a></li>
                </ul>
                <div class="tab-content pb-5 wow fadeInUp delay-0-2s">
                    <div class="tab-pane mb-20 fade active show" id="details">
                        <p>Must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally</p>
                        <ul class="list-style-two pt-10 mb-30">
                            <li>Graphic Design</li>
                            <li>3D Illustrations Design</li>
                            <li>Dashboard Design</li>
                        </ul>
                        <p>Circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses</p>
                    </div>
                    <div class="tab-pane fade" id="information">
                        <h4 class="mb-20">Additional information</h4>
                        <p>Now wherever you are, wherever you are, you can easily monitor your CCTV videos through your mobile, tab, laptop or PC. With the wireless camera, you can view the camera from your mobile or computer to the right-left 0 to 360-degree video. Cover the flower room with a camera.</p>
                        <ul class="list-style-two my-25">
                            <li>Wide Angle and Long Length</li>
                            <li>Smart zooming point</li>
                            <li>HD quality video output.</li>
                            <li>Smart Alarming System</li>
                        </ul>
                        <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam</p>
                    </div>
                    <div class="tab-pane fade" id="review">
                        <div class="comments mb-20">
                            <h4 class="comment-title mb-25">3 Reviews</h4>
                            <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="author-thumb">
                                    <img src="{{ asset('/assets/images/blog/comment-author3.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <h6>Lonnie B. Horwitz</h6>
                                    <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                    <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="comment-body comment-child" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="author-thumb">
                                    <img src="{{ asset('/assets/images/blog/comment-author1.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <h6>Jaime B. Wilson</h6>
                                    <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                    <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                    <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="author-thumb">
                                    <img src="{{ asset('/assets/images/blog/comment-author2.jpg') }}" alt="Author">
                                </div>
                                <div class="content">
                                    <h6>Michael A. Saladin</h6>
                                    <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                    <div class="ratting">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star-half-alt"></i>
                                    </div>
                                    <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                    <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <form class="reviews-form pt-30 z-1 rel mb-20" name="contactForm" action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h4>Leave A Review</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="ratting">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <div class="row gap-20 mt-30">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="" required>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Comment" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-0">
                                        <button type="submit" class="theme-btn hover-primary" data-hover="Post Review<">
                                            <span>Post Review</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- Product Details End -->
        
        
        <!-- Products Area start -->
        <section class="related-product-area py-100 rpy-70 rel z-1">
            <div class="container container-1290">
                <div class="section-title text-center mb-50" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                    <h2>Related Products</h2>
                </div>
                <div class="row">
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
                </div>
            </div>
        </section>
        <!-- Products Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection