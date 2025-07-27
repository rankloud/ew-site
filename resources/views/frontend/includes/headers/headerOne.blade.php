        <!-- main header -->
        <header class="main-header header-one white-menu menu-absolute">
            <!--Header-Upper-->
            <div class="header-upper">
                <div class="container px-xxl-0 bordered-x clearfix">
                   
                    <div class="header-inner rel d-flex align-items-center">
                        <div class="logo-outer">
                            <div class="logo"><a href="{{ route('home') }}"><img src="{{ asset('/assets/images/logos/logo.png') }}" alt="Logo" title="Logo"></a></div>
                        </div>

                        <div class="nav-outer mx-lg-auto ps-xxl-5 clearfix">
                            <!-- Main Menu -->
                            <nav class="main-menu navbar-expand-lg">
                                <div class="navbar-header rpy-10">
                                   <div class="mobile-logo">
                                       <a href="{{ route('home') }}">
                                            <img src="{{ asset('/assets/images/logos/logo.png') }}" alt="Logo" title="Logo">
                                       </a>
                                   </div>
                                   
                                    <!-- Toggle Button -->
                                    <button type="button" class="navbar-toggle" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>

                                <div class="navbar-collapse collapse clearfix">
                                    <ul class="navigation clearfix">
                                        @include('frontend.includes.partials.navbar')
                                    </ul>
                                </div>

                            </nav>
                            <!-- Main Menu End-->
                        </div>
                        
                        <!-- Menu Button -->
                        <div class="menu-btns">
                            <a href="{{ route('projectGrid') }}" class="theme-btn btn-small" data-hover="Start Projects">
                                <span>Start Projects</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--End Header Upper-->
        </header>