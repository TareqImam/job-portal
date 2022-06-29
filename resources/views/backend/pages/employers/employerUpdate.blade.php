@extends('backend.master')

@section('backend_content')
<h3>Edit Employe's info</h3>
<form action="{{route('employerStore', $employer->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" value="{{$employer->employerName}}" name="employerName">
    <label for="" class="mt-3">Email</label>
    <input type="email" class="form-control" value="{{$employer->employerEmail}}" name="employerEmail">
    <label for="" class="mt-3">Password</label>
    <input type="password" class="form-control" value="{{$employer->employerPassword}}" name="employerPassword">
    <label for="" class="mt-3">Category</label>
    <input type="text" class="form-control" value="{{$employer->employerCategory}}" name="employerCategory">
    <label for="" class="mt-3">Type</label>
    <input type="text" class="form-control" value="{{$employer->employerType}}" name="employerType">
    <button type="submit" class="btn mt-3 btn-primary">Submit</button>
</form>
@endsection