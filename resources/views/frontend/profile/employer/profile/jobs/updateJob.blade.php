@extends('frontend.profile.employer.employer')

@section('employer_content')



@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container">
    <h3>Edit Job Post</h3>
    <form action="{{route('updateStore', $jobPost->id)}}" method="POST">
        @method('PUT')
        @csrf

        <label for="" class="mt-3">Job name</label>
        <input type="text" class="form-control" value="{{$jobPost->jobPostName}}" name="jobPostName" required>

        <label for="" class="mt-3">Employer</label>
        <select class="form-select" name="employerId" id="" required>
            <option value="{{$jobPost->employer->id}}">{{$jobPost->employer->employerName}}</option>
            @foreach ($employer as $data)
            <option value="{{$data->id}}">{{$data->employerName}}</option>
            @endforeach
        </select><br>

        <label for="" class="mt-3">Category</label>
        <select class="form-select" name="categoryId" id="" required>
            <option value="{{$jobPost->category->id}}">{{$jobPost->category->categoryName}}</option>
            @foreach ($category as $data)
            <option value="{{$data->id}}">{{$data->categoryName}}</option>
            @endforeach
        </select><br>

        <label for="" class="mt-3">Job Type</label>
        <input type="text" class="form-control" value="{{$jobPost->jobPostType}}" name="jobPostType" required>

        <label for="" class="mt-3">Vacancy</label>
        <input type="text" class="form-control" value="{{$jobPost->jobPostVacancy}}" name="jobPostVacancy" required>

        <label for="" class="mt-3">Position</label>
        <input type="text" class="form-control" value="{{$jobPost->jobPostPosition}}" name="jobPostPosition" required>

        <label for="" class="mt-3">Location</label>
        <input type="text" class="form-control" value="{{$jobPost->jobPostLocation}}" name="jobPostLocation" required>

        <label for="" class="mt-3">Description</label>
        <input type="text" class="form-control" value="{{$jobPost->jobPostDescription}}" name="jobPostDescription" required>

        <button type="submit" class="mt-3 btn">Submit</button>
    </form>
</div>

@endsection