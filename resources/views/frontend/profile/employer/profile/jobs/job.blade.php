@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container">
    <h3 class="mb-3">Job Post list</h3>
    <a class="btn mb-3" role="button" href="{{route('addJob')}}">Add Jobs</a>
    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Employer</th>
                    <th>Category</th>
                    <th>Type</th>
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
                    <td>
                        <a href="{{route('singleView', $data->id)}}" class="btn">View</a>
                        <a href="{{route('jobUpdate', $data->id)}}" class="btn">Edit</a>
                        <a href="{{route('jobDelete', $data->id)}}" class="btn">Delete</i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection