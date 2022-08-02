<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-md-2">
                        <!-- Logo -->
                        <div class="logo" style="width: 25px;">
                            <a href="{{route('home')}}"><img src="{{url('backend/images/logo.svg')}}" alt="""><span style=" color: #29ABE2;;">Intelli</span><span style="color: #F4777C;">Jobs</span></a>
                        </div>
                    </div>
                    <div class=" col-lg-10 col-md-10">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{route('home')}}">Home</a></li>

                                        @guest()
                                        <li><a href="{{route('jobList')}}">Find a Job</a></li>
                                        <li><a href="#">Find an Employer</a></li>
                                        @endguest

                                        <li><a href="{{route('categoryList')}}">Categories</a>
                                        </li>
                                        <li><a href="contact.html">About</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">About Us</a></li>
                                                <li><a href="blog.html">Contact</a></li>
                                                <li><a href="elements.html">Blogs</a></li>
                                                <li><a href="job_details.html">Job News</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                @guest()
                                <a href="{{route('selectRegAs')}}" class="btn">Register</a>
                                <a href="{{route('selectLoginAs')}}" class="btn">Login</a>
                                @endguest

                                @auth()
                                @if(auth()->user()->role=='employer')
                                <a href="{{route('employerPanel')}}" class="btn">Dashboard|{{auth()->user()->name}}</a>
                                @endif

                                <a href="{{route('logout')}}" class="btn">Logout|{{auth()->user()->name}}</a>
                                @endauth

                            </div>
                        </div>
                    </div>
                    <!-- Mobile Menu -->
                    <div class="col-12">
                        <div class="mobile_menu d-block d-lg-none"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>