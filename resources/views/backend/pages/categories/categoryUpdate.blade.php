@extends('backend.master')

@section('backend_content')
<form action="{{route('categoryStore', $category->id)}}" method="POST">
    @method('PUT')
    @csrf
    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" value="{{$category->categoryName}}" name="categoryName">
    <label for="" class="mt-3">Description</label>
    <input type="text" class="form-control" value="{{$category->categoryName}}" name="categoryDescription">
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection