@extends('backend.master')

@section('backend_content')
<h3 class="mb-3">Categories</h3>
<a class="btn btn-primary mb-3" role="button" href="{{route('categoryForm')}}">Add Category</a>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $data)
        <tr>
            <td>{{$data->id}}</td>
            <td>{{$data->categoryName}}</td>
            <td>{{$data->categoryDescription}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection