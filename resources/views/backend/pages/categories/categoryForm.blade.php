@extends('backend.master')

@section('backend_content')
<form action="{{route('categorySubmit')}}" method="POST">
    @csrf

    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" name="categoryName" required>

    <label for="" class="mt-3">Description</label>
    <input type="text" class="form-control" name="categoryDescription" required>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection