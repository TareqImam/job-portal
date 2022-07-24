<header>
    <!-- Header Start -->
    <div class="header-area header-transparrent">
        <div class="headder-top header-sticky">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-2">
                        <!-- Logo -->
                        <div class="logo">
                            <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                        </div>
                    </div>
                    <div class="col-lg-9 col-md-9">
                        <div class="menu-wrapper">
                            <!-- Main-menu -->
                            <div class="main-menu">
                                <nav class="d-none d-lg-block">
                                    <ul id="navigation">
                                        <li><a href="{{route('home')}}">Home</a></li>
                                        <li><a href="{{route('jobList')}}">Find a Job</a></li>
                                        <li><a href="about.html">About</a></li>
                                        <li><a href="#">Page</a>
                                            <ul class="submenu">
                                                <li><a href="blog.html">Blog</a></li>
                                                <li><a href="single-blog.html">Blog Details</a></li>
                                                <li><a href="elements.html">Elements</a></li>
                                                <li><a href="job_details.html">job Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">Contact</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- Header-btn -->
                            <div class="header-btn d-none f-right d-lg-block">
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal1">
                                    Register
                                </button>

                                @guest()
                                <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal2">
                                    Login
                                </button>
                                @endguest

                                @auth()
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

    <!-- Button trigger modal -->

    <!-- Modal for registration -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Applicants Register here!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('registration')}}" method="POST">
                        @csrf

                        <label for="" class="mt-3">Name</label>
                        <input type="text" class="form-control" placeholder="Name" name="applicantName" required>

                        <label for="" class="mt-3">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="applicantEmail" required>

                        <label for="" class="mt-3">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="applicantPassword" required>

                        <div class="modal-footer">
                            <button type="submit" class="btn">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <!-- Modal for login -->
    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Login here!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('login')}}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <label for="" class="mt-3">Email</label>
                        <input type="email" class="form-control" placeholder="Email" name="applicantEmail" required>

                        <label for="" class="mt-3">Password</label>
                        <input type="password" class="form-control" placeholder="Password" name="applicantPassword" required>

                        <div class="modal-footer">
                            <button type="submit" class="btn">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Button trigger modal -->
</header>