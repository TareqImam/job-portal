@extends('backend.master')

@section('backend_content')
<h3 class="mb-3">Employer's List</h3>
<a class="btn mb-3 btn-primary" href="{{route('employerForm')}}" role="button">Create Employer</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Category</th>
            <th scope="col">Type</th>
        </tr>
    </thead>
    <tbody>
        @foreach($employer as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->employerName}}</td>
            <td>{{$data->employerEmail}}</td>
            <td>{{$data->employerCategory}}</td>
            <td>{{$data->employerType}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection