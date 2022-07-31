@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <h3>Job details</h3>

    <label for="" class="mt-3">Job name</label>
    <input type="text" class="form-control" readonly value="{{$jobPost->jobPostName}}">

    <label for="" class=" mt-3">Employer</label>
    <input type="text" class="form-control" readonly value="{{$jobPost->employer->employerName}}">

    <label for="" class="mt-3">Category</label>
    <input type="text" class="form-control" readonly value="{{$jobPost->category->categoryName}}">

    <label for="" class="mt-3">Job Type</label>
    <input type="text" class="form-control" readonly value="{{$jobPost->jobPostType}}">

    <label for="" class=" mt-3">Vacancy</label>
    <input type="text" class="form-control" readonly value="{{$jobPost->jobPostVacancy}}">

    <label for="" class=" mt-3">Position</label>
    <input type="text" class="form-control" readonly value="{{$jobPost->jobPostPosition}}">

    <label for="" class=" mt-3">Location</label>
    <input type="text" class="form-control" readonly value="{{$jobPost->jobPostLocation}}">

    <label for="" class=" mt-3">Description</label>
    <input type="text" class="form-control" readonly value="{{$jobPost->jobPostDescription}}">
</div>

@endsection