@extends('backend.master')

@section('backend_content')
<label for="" class="mt-3">Name</label>
<input type="text" class="form-control" readonly value="{{$applicant->name}}">

<label for="" class="mt-3">Email</label>
<input type="email" class="form-control" readonly value="{{$applicant->email}}">


@endsection