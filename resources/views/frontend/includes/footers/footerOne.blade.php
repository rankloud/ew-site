        <!-- footer area start -->
        <footer class="main-footer bgc-black text-white rel z-1">
            <div class="footer-marquee pt-60 pb-75 rpy-90 rel">
                <div class="container blank-container bordered-x"></div>
                <span class="marquee-wrap">
                   <span class="marquee-inner left">
                        <span class="marquee-item">Get In Touch</span>
                        <span class="marquee-item">_</span>
                        <span class="marquee-item">Get In Touch</span>
                        <span class="marquee-item">_</span>
                   </span>
                   <span class="marquee-inner left">
                        <span class="marquee-item">Get In Touch</span>
                        <span class="marquee-item">_</span>
                        <span class="marquee-item">Get In Touch</span>
                        <span class="marquee-item">_</span>
                   </span>
                   <span class="marquee-inner left">
                        <span class="marquee-item">Get In Touch</span>
                        <span class="marquee-item">_</span>
                        <span class="marquee-item">Get In Touch</span>
                        <span class="marquee-item">_</span>
                   </span>
                </span>
            </div>
            <div class="container bordered-x pb-50">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-sm-8" data-aos="fade-up" data-aos-duration="1500" data-aos-offset="50">
                        <div class="footer-widget footer-newsletter">
                            <div class="footer-logo mb-20">
                                <a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/logo.png') }}" alt="Logo"></a>
                            </div>
                            <p>High-quality content the heart successful marketing strategy drives engage.</p>
                            <form class="newsletter-form mt-25" action="#">
                                <label for="news-email"><i class="fas fa-envelope"></i></label>
                                <input id="news-email" type="email" placeholder="Email Address" required>
                                <button type="submit" class="theme-btn btn-small hover-primary" data-hover="Subscribe">
                                    <span>Subscribe</span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row justify-content-between">
                            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="50" data-aos-duration="1500" data-aos-offset="50">
                                <div class="footer-widget footer-text">
                                    <div class="footer-title">
                                        <h6>Location</h6>
                                    </div>
                                    <div class="text">55 Main Street, 2nd block Malborne, Australia</div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1500" data-aos-offset="50">
                                <div class="footer-widget footer-text">
                                    <div class="footer-title">
                                        <h6>Contact Us</h6>
                                    </div>
                                    <div class="text">
                                        <a href="mailto:support@gmail.com">support@gmail.com</a><br>
                                        <a href="callto:+000(123)8899">+000 (123) 88 99</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-6" data-aos="fade-up" data-aos-delay="150" data-aos-duration="1500" data-aos-offset="50">
                                <div class="footer-widget footer-contact">
                                    <div class="footer-title">
                                        <h6>Follow Us</h6>
                                    </div>
                                    <div class="social-style-two mt-15">
                                        <a href="{{ route('contact') }}"><i class="fab fa-facebook-f"></i></a>
                                        <a href="{{ route('contact') }}"><i class="fab fa-instagram"></i></a>
                                        <a href="{{ route('contact') }}"><i class="fab fa-dribbble"></i></a>
                                        <a href="{{ route('contact') }}"><i class="fab fa-behance"></i></a>
                                        <a href="{{ route('contact') }}"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container bordered-x bordered-top pt-25 pb-10">
                    <div class="row">
                       <div class="col-lg-5">
                            <div class="copyright-text text-center text-lg-start">
                                <p>Copyright © <a href="{{ route('home') }}">Ridda</a>, all rights reserved.</p>
                            </div>
                       </div>
                       <div class="col-lg-7 text-center text-lg-end">
                           <ul class="footer-bottom-nav">
                               <li><a href="{{ route('about') }}">Refund</a></li>
                               <li><a href="{{ route('about') }}">Privacy Policy</a></li>
                               <li><a href="{{ route('faqs') }}">FAQs</a></li>
                           </ul>
                       </div>
                    </div>
                    <!-- Scroll Top Button -->
                    <button class="scroll-top scroll-to-target" data-target="html"><i class="far fa-arrow-up"></i></button>
                </div>
            </div>
            <div class="footer-shapes">
                <div class="shape">
                    <img src="{{ asset('/assets/images/shapes/footer-shape.png') }}" alt="Shape">
                </div>
            </div>
        </footer>
        <!-- footer area end -->