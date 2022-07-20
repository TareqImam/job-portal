@extends('backend.master')

@section('backend_content')

<label for="" class="mt-3">Name</label>
<input type="text" class="form-control" readonly value="{{$employer->employerName}}">

<label for="" class="mt-3">Email</label>
<input type="email" class="form-control" readonly value="{{$employer->employerEmail}}">

<label for="" class="mt-3">Password</label>
<input type="password" class="form-control" readonly value="{{$employer->employerPassword}}">

<label for="" class="mt-3">Category</label>
<input type="text" class="form-control" readonly value="{{$employer->category->categoryName}}">

<label for="" class="mt-3">Type</label>
<input type="text" class="form-control" readonly value="{{$employer->employerType}}">

@endsection