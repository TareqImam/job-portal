@extends('backend.master')

@section('backend_content')
<form action="{{route('jobPostSubmit')}}" method="POST">
    @csrf
    <label for="" class="mt-3">Job name</label>
    <input type="text" class="form-control" name="jobPostName">
    <label for="" class="mt-3">Job Type</label>
    <input type="text" class="form-control" name="jobPostType">
    <label for="" class="mt-3">Vacancy</label>
    <input type="text" class="form-control" name="jobPostVacancy">
    <label for="" class="mt-3">Position</label>
    <input type="text" class="form-control" name="jobPostPosition">
    <label for="" class="mt-3">Location</label>
    <input type="text" class="form-control" name="jobPostLocation">
    <label for="" class="mt-3">Description</label>
    <input type="text" class="form-control" name="jobPostDescription">
    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
</form>
@endsection