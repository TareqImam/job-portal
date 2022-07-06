@extends('backend.master')

@section('backend_content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('jobPostSubmit')}}" method="POST">
    @csrf

    <label for="" class="mt-3">Job name</label>
    <input type="text" class="form-control" name="jobPostName" required>

    <label for="" class="mt-3">Employer</label>
    <select class="form-select" name="employerId" id="" required>
        @foreach ($employer as $data)
        <option value="{{$data->id}}">{{$data->employerName}}</option>
        @endforeach
    </select>

    <label for="" class="mt-3">Category</label>
    <select class="form-select" name="categoryId" id="" required>
        @foreach ($category as $data)
        <option value="{{$data->id}}">{{$data->categoryName}}</option>
        @endforeach
    </select>

    <label for="" class="mt-3">Job Type</label>
    <input type="text" class="form-control" name="jobPostType" required>

    <label for="" class="mt-3">Vacancy</label>
    <input type="text" class="form-control" name="jobPostVacancy" required>

    <label for="" class="mt-3">Position</label>
    <input type="text" class="form-control" name="jobPostPosition" required>

    <label for="" class="mt-3">Location</label>
    <input type="text" class="form-control" name="jobPostLocation" required>

    <label for="" class="mt-3">Description</label>
    <input type="text" class="form-control" name="jobPostDescription" required>

    <button type="submit" class="mt-3 btn btn-primary">Submit</button>
</form>
@endsection