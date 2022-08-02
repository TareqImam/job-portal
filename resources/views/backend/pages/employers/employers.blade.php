@extends('backend.master')

@section('backend_content')
<h3 class="mb-3">Employer's List</h3>
<a href="{{route('employerForm')}}">Add Employer</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employer as $key=>$data)

        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>
                <a href="{{route('employerSingleView', $data->id)}}" class="btn btn-success">View</a>
                <!-- <a href="{{route('employerUpdate', $data->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('employerDelete', $data->id)}}" class="btn btn-danger">Delete</a> -->
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$employer->links()}}
@endsection