@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container">
    <h3 class="mb-3">Exam List</h3>
    <a href="{{route('addExam')}}" class="btn mb-3" role="button">Add Exam</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Job Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($exam as $key=>$data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->examName}}</td>
                <td>{{$data->examType}}</td>
                <td>{{$data->jobPost->jobPostName}}</td>
                <td>
                    <a href="{{route('singleViewE', $data->id)}}" class="btn">View</a>
                    <a href="{{route('updateExam', $data->id)}}" class="btn">Edit</a>
                    <a href="{{route('deleteExam', $data->id)}}" class="btn">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
