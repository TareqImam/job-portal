@extends('backend.master')

@section('backend_content')
<h3 class="mb-3">Job Post list</h3>
<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Category</th>
            <th>Type</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($jobPost as $key=>$data)
        <tr>
            <td>{{$key+1}}</td>
            <td>{{$data->jobPostName}}</td>
            <td>{{$data->category->categoryName}}</td>
            <td>{{$data->jobPostType}}</td>
            <td>
                <a href="{{route('jobPostSingleView', $data->id)}}" class="btn btn-success">View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
{{$jobPost->links()}}
@endsection
