@extends('backend.master')

@section('backend_content')
<h3>Edit Job Post</h3>
<form action="{{route('jobPostStore', $jobPost->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="" class="mt-3">Job name</label>
    <input type="text" class="form-control" value="{{$jobPost->jobPostName}}" name="jobPostName">
    <label for="" class="mt-3">Job Type</label>
    <input type="text" class="form-control" value="{{$jobPost->jobPostType}}" name="jobPostType">
    <label for="" class="mt-3">Vacancy</label>
    <input type="text" class="form-control" value="{{$jobPost->jobPostVacancy}}" name="jobPostVacancy">
    <label for="" class="mt-3">Position</label>
    <input type="text" class="form-control" value="{{$jobPost->jobPostPosition}}" name="jobPostPosition">
    <label for="" class="mt-3">Location</label>
    <input type="text" class="form-control" value="{{$jobPost->jobPostLocation}}" name="jobPostLocation">
    <label for="" class="mt-3">Description</label>
    <input type="text" class="form-control" value="{{$jobPost->jobPostDescription}}" name="jobPostDescription">
    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
</form>
@endsection