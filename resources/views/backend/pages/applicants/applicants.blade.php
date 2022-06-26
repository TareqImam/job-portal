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
        </tr>
    </thead>
    <tbody>
        @foreach($applicant as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->applicantName}}</td>
            <td>{{$data->applicantEmail}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection