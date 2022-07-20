@extends('backend.master')

@section('backend_content')

<label for="" class="mt-3">Name</label>
<input type="text" class="form-control" readonly value="{{$category->categoryName}}">

<label for="" class="mt-3">Description</label>
<input type="text" class="form-control" readonly value="{{$category->categoryDescription}}">

@endsection