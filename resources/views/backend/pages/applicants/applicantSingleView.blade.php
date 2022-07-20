@extends('backend.master')

@section('backend_content')
<label for="" class="mt-3">Name</label>
<input type="text" class="form-control" readonly value="{{$applicant->applicantName}}">

<label for="" class="mt-3">Email</label>
<input type="email" class="form-control" readonly value="{{$applicant->applicantEmail}}">

<label for="" class="mt-3">Password</label>
<input type="password" class="form-control" readonly value="{{$applicant->applicantPassword}}">

@endsection