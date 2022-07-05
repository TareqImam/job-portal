@extends('backend.master')

@section('backend_content')
<h3 class="mb-3">Exam List</h3>
<a href="{{route('examForm')}}" class="btn btn-primary mb-3" role="button">Add Exam</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Set</th>
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
            <td>{{$data->examSet}}</td>
            <td>{{$data->examType}}</td>
            <td>{{$data->jobPostId}}</td>
            <td>
                <a href="{{route('examUpdate', $data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('examDelete', $data->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$exam->links()}}
@endsection