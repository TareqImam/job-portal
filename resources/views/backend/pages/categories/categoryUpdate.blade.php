@extends('backend.master')

@section('backend_content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('categoryStore', $category->id)}}" method="POST">
    @method('PUT')
    @csrf

    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" value="{{$category->categoryName}}" name="categoryName" required>

    <label for="" class="mt-3">Description</label>
    <input type="text" class="form-control" value="{{$category->categoryDescription}}" name="categoryDescription" required>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection