@extends('frontend.layouts.app')
@section('title', 'Blog Details')
@section('content')
    <!-- header area -->
    @include('frontend.includes.headers.headerOne')
    <!-- header area end -->

        <!-- Page Banner Start -->
        <section class="page-banner-area bgc-black text-white rel z-1 overflow-hidden">
            <div class="container bordered-x pt-200 rpy-100 pb-140">
                <div class="banner-inner px-xl-5 pt-90">
                   <div class="text-center section-title mb-35" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                       <h2>How to Optimize Your Website for Faster Loading Speeds Beginner's Guide to SEO-Friendly</h2>
                   </div>
                    <ul class="blog-meta" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50" data-aos-delay="50">
                        <li>Post by <a href="#">Richard V</a>.</li>
                        <li>September 25, 2024</li>
                        <li>Comments <span>(5)</span></li>
                    </ul>
                </div>
            </div>
            
            <div class="page-banner-shapes">
                <div class="shape position-three">
                    <img src="assets/images/shapes/hero-shape.png" alt="Shape">
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
        
        
        <!-- Blog Details Area start -->
        <section class="blog-details-page rel z-1">
            <div class="container bordered-x px-sm-0 py-130 rpy-100">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="blog-details-content">
                            <div class="project-tags mb-15">
                                <a href="#">Web Design</a>
                                <a href="#">Product Design</a>
                            </div>
                            <p>A web design agency plays a crucial role in shaping a company's online presence, creating visually stunning and highly functional websites that captivate audiences and drive business growth. By combining creativity with technical expertise, a web design agency crafts unique, responsive, and user-friendly websites that reflect a brand's identity and values. They focus on delivering seamless user experiences</p>
                            <div class="image mt-45 mb-35">
                                <img src="assets/images/blog/blog-details.jpg" alt="Blog Deails">
                            </div>
                            <h3>Research & strategy</h3>
                            <p>Through data-driven insights and cutting-edge tools, a digital marketing agency can optimize marketing efforts, ensuring maximum return on investment. From brand development and lead generation to customer engagement and conversion optimization, these agencies provide comprehensive solutions tailored to meet the unique needs of each client. In an ever-evolving digital landscape, partnering with a skilled digital marketing agency is essential for staying competitive and achieving long-term success.</p>
                            <blockquote class="mt-40 mb-35" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <i class="fal fa-quote-right"></i>
                                <div class="text">Handling Mounting And Unmounting Of Given The Power UX Why User Experience Matters in Web Design Navigation Routes In React Native
                                </div>
                                <div class="blockquote-footer">
                                    Kevin C. Young
                                </div>
                            </blockquote>
                            <p>From brand development and lead generation to customer engagement and conversion optimization, these agencies provide comprehensive solutions tailored to meet the unique needs of each client. In an ever-evolving digital landscape, partnering with a skilled digital marketing agency is essential for staying competitive</p>
                            <hr class="mt-70">
                        </div>
                        
                        <div class="tag-share pt-40 mb-50">
                            <div class="item" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <h6>Tags </h6>
                                <div class="tag-clouds pb-15">
                                    <a href="blog.html">Design</a>
                                    <a href="blog.html">Marketing</a>
                                    <a href="blog.html">Apps</a>
                                </div>
                            </div>
                            <div class="item pt-5" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <h6>Share </h6>
                                <div class="social-style-two">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <div class="admin-comment bgc-lighter" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <div class="comment-body">
                                <div class="author-thumb">
                                    <img src="assets/images/blog/admin-comment.jpg" alt="Author">
                                </div>
                                <div class="content">
                                    <h5>Richard M. Fudge</h5>
                                    <p>By combining creativity with technical expertise, a web design agency crafts unique responsive, and user-friendly websites that reflect brand</p>
                                    <div class="social-icons">
                                        <a href="contact.html"><i class="fab fa-facebook-f"></i></a>
                                        <a href="contact.html"><i class="fab fa-twitter"></i></a>
                                        <a href="contact.html"><i class="fab fa-linkedin-in"></i></a>
                                        <a href="contact.html"><i class="fab fa-instagram"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                           
                        <div class="next-prev-blog pt-70 pb-30">
                            <div class="item" data-aos="fade-left" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="assets/images/blog/prev-post.jpg" alt="News">
                                </div>
                                <div class="content">
                                    <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                    <h6><a href="blog-details.html">How to Improve Your Website User Experience Tips</a></h6>
                                </div>
                            </div>
                            <div class="item" data-aos="fade-right" data-aos-duration="1500" data-aos-offset="50">
                                <div class="image">
                                    <img src="assets/images/blog/next-post.jpg" alt="News">
                                </div>
                                <div class="content">
                                    <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                    <h6><a href="blog-details.html">Importance of Responsive in a Mobile-First World</a></h6>
                                </div>
                            </div>
                        </div>
                        
                        <div class="comments mb-55">
                            <h4 class="comment-title mb-25">Comments</h4>
                            <div class="comment-body" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="author-thumb">
                                    <img src="assets/images/blog/comment-author3.jpg" alt="Author">
                                </div>
                                <div class="content">
                                    <h6>Lonnie B. Horwitz</h6>
                                    <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                    <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                    <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                            <div class="comment-body comment-child" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <div class="author-thumb">
                                    <img src="assets/images/blog/comment-author1.jpg" alt="Author">
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
                                    <img src="assets/images/blog/comment-author2.jpg" alt="Author">
                                </div>
                                <div class="content">
                                    <h6>Michael A. Saladin</h6>
                                    <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                    <p>Tours and travels play a crucial role in enriching lives by offering unique experiences, cultural exchanges, and the joy of exploration.</p>
                                    <a class="read-more" href="#">Reply <i class="far fa-angle-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        <form class="comment-form z-1 rel" name="contactForm" action="#" method="post" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                            <h4>Leave A Comments</h4>
                            <p>Your email address will not be published. Required fields are marked *</p>
                            <div class="row gap-10 mt-30">
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="" required>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="text" id="phone_number" name="phone_number" class="form-control" placeholder="Phone" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="" required >
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="4" placeholder="Write Message" required></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-group mb-0">
                                        <ul class="radio-filter mt-15 mb-30">
                                            <li>
                                                <input class="form-check-input" type="radio" name="ByActivities" id="activity1">
                                                <label for="activity1">Save my name, email, and website in this browser for the next time I comment.</label>
                                            </li>
                                        </ul>
                                        <button type="submit" class="theme-btn hover-primary" data-hover="Send Comments">
                                            <span>Send Comments</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
                                    <li><a href="blog.html">Web Design</a></li>
                                    <li><a href="blog.html">SEO Optimization</a></li>
                                    <li><a href="blog.html">Mobile Apps Design</a></li>
                                    <li><a href="blog.html">Landing Pages</a></li>
                                    <li><a href="blog.html">Branding Design</a></li>
                                    <li><a href="blog.html">Motion & Animations</a></li>
                                </ul>
                            </div>
                            
                            <div class="widget widget-news" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Recent News</h4>
                                <ul>
                                    <li>
                                        <div class="image">
                                            <img src="assets/images/widgets/news1.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="blog-details.html">How to Improve Your Website User Experience Tips</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="assets/images/widgets/news2.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="blog-details.html">Importance of Responsive in a Mobile-First World</a></h6>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="image">
                                            <img src="assets/images/widgets/news3.jpg" alt="News">
                                        </div>
                                        <div class="content">
                                            <span class="date"><i class="far fa-calendar-alt"></i> September 25 ,2024</span>
                                            <h6><a href="blog-details.html">The Role of Color Theory in Effective Web Design</a></h6>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            
                            <div class="widget widget-tags" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tag-clouds">
                                    <a href="blog.html">Design</a>
                                    <a href="blog.html">SMM</a>
                                    <a href="blog.html">Agency</a>
                                    <a href="blog.html">SEO</a>
                                    <a href="blog.html">Apps</a>
                                    <a href="blog.html">Dashboard</a>
                                    <a href="blog.html">Product</a>
                                    <a href="blog.html">UX/UI</a>
                                    <a href="blog.html">Marketing</a>
                                    <a href="blog.html">Animation</a>
                                </div>
                            </div>
                            
                            <div class="widget widget-gallery" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                                <h4 class="widget-title">Gallery</h4>
                                <div class="gallery">
                                    <a href="assets/images/widgets/gallery1.jpg">
                                        <i class="far fa-plus"></i>
                                        <img src="assets/images/widgets/gallery1.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery2.jpg">
                                        <i class="far fa-plus"></i>
                                        <img src="assets/images/widgets/gallery2.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery3.jpg">
                                        <i class="far fa-plus"></i>
                                        <img src="assets/images/widgets/gallery3.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery4.jpg">
                                        <i class="far fa-plus"></i>
                                        <img src="assets/images/widgets/gallery4.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery5.jpg">
                                        <i class="far fa-plus"></i>
                                        <img src="assets/images/widgets/gallery5.jpg" alt="Gallery">
                                    </a>
                                    <a href="assets/images/widgets/gallery6.jpg">
                                        <i class="far fa-plus"></i>
                                        <img src="assets/images/widgets/gallery6.jpg" alt="Gallery">
                                    </a>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Blog Details Area end -->

    <!-- footer area -->
    @include('frontend.includes.footers.footerOne')
    <!-- footer area end -->
@endsection
