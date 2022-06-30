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
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($category as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->categoryName}}</td>
            <td>{{$data->categoryDescription}}</td>
            <td>
                <a href="{{route('categoryUpdate', $data->id)}}" class="btn btn-success">Edit</a>
                <a href="{{route('categoryDelete', $data->id)}}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$category->links()}}
@endsection