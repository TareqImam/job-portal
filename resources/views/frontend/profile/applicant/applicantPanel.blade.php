@extends('frontend.master')

@section('frontend_content')
@if (session()->has('success'))
<p class="alert alert-success">
    {{ session()->get('success') }}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
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
                        href="{{route('myExam')}}">My Exams</a>

                    <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="{{route('update', auth()->user()->id)}}">Update Profile</a>
                </div>
            </div>

            <!-- Page content wrapper-->
                <!-- Page content-->
                <div class="container">
                    @yield('applianct_content')
                </div>

        </div>
    </body>
</div>




@endsection
