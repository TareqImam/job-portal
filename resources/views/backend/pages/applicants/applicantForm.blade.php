@extends('backend.master')

@section('backend_content')
<h3>Give Applicant's info</h3>
<form action="{{route('applicantSubmit')}}" method="POST">
    @csrf
    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" placeholder="Name" name="applicantName">
    <label for="" class="mt-3">Email</label>
    <input type="email" class="form-control" placeholder="Email" name="applicantEmail">
    <label for="" class="mt-3">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="applicantPassword">
    <button type="submit" class="btn mt-3 btn-primary">Submit</button>
</form>
@endsection