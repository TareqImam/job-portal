@extends('frontend.master')

@section('frontend_content')

<div class="container mb-3">
    <h3 class="my-3">Applicant's Profile</h3>
    <a href="{{route('applicantPanel')}}" class="btn d-inline-flex justify-content">My Profile</a>
    <a href="{{route('myJobs')}}" class="btn d-inline-flex justify-content">My Jobs</a>
    <a href="" class="btn d-inline-flex justify-content">My Exams</a>
    <a href="" class="btn d-inline-flex justify-content">Update Profile</a>
    <a href="" class="btn d-inline-flex justify-content">Change Password</a>
</div>

@yield('applianct_content')


@endsection