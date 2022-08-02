@extends('backend.master')

@section('backend_content')

<label for="" class="mt-3">Name</label>
<input type="text" class="form-control" readonly value="{{$employer->employerName}}">

<label for="" class="mt-3">Email</label>
<input type="email" class="form-control" readonly value="{{$employer->employerEmail}}">


@endsection