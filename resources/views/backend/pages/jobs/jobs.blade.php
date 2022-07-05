@extends('backend.master')

@section('backend_content')
<h3 class="mb-3">Job Post list</h3>
<a class="btn btn-primary mb-3" role="button" href="{{route('jobPostForm')}}">Add Jobs</a>
<div class="">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Employer</th>
                <th>Category</th>
                <th>Type</th>
                <th>Vacancy</th>
                <th>Position</th>
                <th>Location</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($jobPost as $key=>$data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->jobPostName}}</td>
                <td>{{$data->employer->employerName}}</td>
                <td>{{$data->category->categoryName}}</td>
                <td>{{$data->jobPostType}}</td>
                <td>{{$data->jobPostVacancy}}</td>
                <td>{{$data->jobPostPosition}}</td>
                <td>{{$data->jobPostLocation}}</td>
                <td>{{$data->jobPostDescription}}</td>
                <td>
                    <a href="{{route('jobPostUpdate', $data->id)}}" class="btn btn-success">Edit</a>
                    <a href="{{route('jobPostDelete', $data->id)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
{{$jobPost->links()}}
@endsection