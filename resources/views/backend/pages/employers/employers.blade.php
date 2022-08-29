@extends('backend.master')

@section('backend_content')
@if (session()->has('success'))
<p class="alert alert-success">
    {{ session()->get('success') }}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif
<h3 class="mb-3">Employer's List</h3>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
            <th scope="col">Approve</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employer as $key=>$data)

        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->name}}</td>
            <td>{{$data->email}}</td>
            <td>{{$data->status}}</td>

            <td>

                <a href="{{route('employerSingleView', $data->id)}}" class="btn btn-success">View</a>
                <!-- <a href="{{route('employerUpdate', $data->id)}}" class="btn btn-primary">Edit</a>
                <a href="{{route('employerDelete', $data->id)}}" class="btn btn-danger">Delete</a> -->
            </td>
             @if($data->status==='pending')
            <td><a href="{{route('employer.approve', $data->id)}}" class="btn btn-success">Approve</a></td>
            @endif
        </tr>
        @endforeach
    </tbody>
</table>
{{$employer->links()}}
@endsection
