@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <h3>Exam Details</h3>
    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" readonly value="{{$exam->examName}}">

    <label for="" class="mt-3">Set</label>
    <input type="text" class="form-control" readonly value="{{$exam->examSet}}">

    <label for="" class="mt-3">Type</label>
    <input type="text" class="form-control" readonly value="{{$exam->examType}}">

    <label for="" class="mt-3">Job Post</label>
    <input type="text" class="form-control" readonly value="{{$exam->jobPost->jobPostName}}">
</div>

@endsection