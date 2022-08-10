@extends('frontend.master')

@section('frontend_content')

<div class="container mb-3">

    <body>
        <div class="d-flex" id="wrapper">

            <!-- Sidebar-->
            <div class="col-md-2 border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="{{ route('applicantPanel') }}">My Profile</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="{{route('myJobs')}}">My Jobs</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="#">My Exams</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="#">Update Profile</a>
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="col-md-10 page-content-wrapper">
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('applianct_content')
                </div>
            </div>

        </div>
    </body>
</div>




@endsection
