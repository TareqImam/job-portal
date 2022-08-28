@extends('backend.master')

@section('backend_content')

<label for="" class="mt-3">Name</label>
<input type="text" class="form-control" readonly value="{{$exam->examName}}">

<label for="" class="mt-3">Type</label>
<input type="text" class="form-control" readonly value="{{$exam->examType}}">

<label for="" class="mt-3">Job Post</label>
<input type="text" class="form-control" readonly value="{{$exam->jobPost->jobPostName}}">

@endsection
