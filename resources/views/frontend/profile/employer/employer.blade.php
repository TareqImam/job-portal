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
                        href="{{route('candidates')}}">Manage Candidate</a>

                    {{--  <a class="list-group-item list-group-item-action list-group-item-light p-3 mb-1 btn"
                        href="{{route('exam.question')}}">Manage Question</a>  --}}
                </div>
            </div>

            <!-- Page content wrapper-->
                <!-- Page content-->
                <div class="container">
                    @yield('employer_content')
                </div>

        </div>
    </body>
</div>

@endsection
