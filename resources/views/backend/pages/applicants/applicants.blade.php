@extends('backend.master')

@section('backend_content')
<h3 class="mb-3">Applicant's list</h3>
<a class="btn mb-3 btn-primary" href="{{route('applicantForm')}}" role="button">Create Applicant</a>
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
        @foreach($applicant as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->applicantName}}</td>
            <td>{{$data->applicantEmail}}</td>
            <td>
                <a href="{{route('applicantUpdate',$data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('applicantDelete', $data->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection