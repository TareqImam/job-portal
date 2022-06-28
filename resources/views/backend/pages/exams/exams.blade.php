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
        </tr>
    </thead>
    <tbody>
        @foreach($exam as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->examName}}</td>
            <td>{{$data->examSet}}</td>
            <td>{{$data->examType}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection