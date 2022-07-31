@extends('frontend.master')

@section('frontend_content')

<div class="container mb-3">
    <h3 class="my-3">Employer's Profile</h3>
    <a href="" class="btn d-inline-flex mb-3 justify-content">Dashboard</a>
    <a href="{{route('employerJobs')}}" class="btn d-inline-flex mb-3 justify-content">Post a Job</a>
    <a href="{{route('employerExams')}}" class="btn d-inline-flex mb-3 justify-content">Post an Exam</a>
    <a href="" class="btn d-inline-flex mb-3 justify-content">Company Details</a>
    <a href="" class="btn d-inline-flex mb-3 justify-content">Applicant's CVs</a>
</div>

@yield('employer_content')


@endsection