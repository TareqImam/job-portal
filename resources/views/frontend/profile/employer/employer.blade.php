@extends('frontend.master')

@section('frontend_content')

<div class="container mb-3">

    <body>
        <div class="d-flex" id="wrapper">

            <!-- Sidebar-->
            <div class="col-md-2 border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <div class="small-section-tittle">
                        <img class="mb-2" style="width: 90px;" src="{{ url('/images/employer')."/".auth()->user()->employerImage }}" alt="img">
                    </div>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="{{ route('employerPanel') }}">Dashboard</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="{{route('employerJobs')}}">Manage Jobs</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="{{route('employerExams')}}">Manage Exams</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="#!">Shortlisted CVs</a>
                </div>
            </div>

            <!-- Page content wrapper-->
            <div id="col-md-10 page-content-wrapper">
                <!-- Page content-->
                <div class="container-fluid">
                    @yield('employer_content')
                </div>
            </div>

        </div>
    </body>
</div>

@endsection
