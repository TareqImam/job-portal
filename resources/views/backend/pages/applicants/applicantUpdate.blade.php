@extends('backend.master')

@section('backend_content')
<h3>Edit Applicant's info</h3>
<form action="{{route('applicantStore',$applicant->id)}}" method="POST">
    @method('PUT')
    @csrf

    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" value="{{$applicant->applicantName}}" name="applicantName" required>

    <label for="" class="mt-3">Email</label>
    <input type="email" class="form-control" value="{{$applicant->applicantEmail}}" name="applicantEmail" required>

    <label for="" class="mt-3">Password</label>
    <input type="password" class="form-control" value="{{$applicant->applicantPassword}}" name="applicantPassword" required>

    <button type="submit" class="btn mt-3 btn-primary">Submit</button>
</form>
@endsection