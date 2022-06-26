@extends('backend.master')

@section('backend_content')
<form action="{{route('employerSubmit')}}" method="POST">
    @csrf
    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" name="employerName">
    <label for="" class="mt-3">Email</label>
    <input type="email" class="form-control" name="employerEmail">
    <label for="" class="mt-3">Password</label>
    <input type="password" class="form-control" name="employerPassword">
    <label for="" class="mt-3">Category</label>
    <input type="text" class="form-control" name="employerCategory">
    <label for="" class="mt-3">Type</label>
    <input type="text" class="form-control" name="employerType">
    <button type="submit" class="btn mt-3 btn-primary">Submit</button>
</form>
@endsection