@extends('backend.master')

@section('backend_content')
<h3>Edit Employe's info</h3>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('employerStore', $employer->id)}}" method="POST">
    @method('PUT')
    @csrf

    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" value="{{$employer->employerName}}" name="employerName" required>

    <label for="" class="mt-3">Email</label>
    <input type="email" class="form-control" value="{{$employer->employerEmail}}" name="employerEmail" required>

    <label for="" class="mt-3">Password</label>
    <input type="password" class="form-control" value="{{$employer->employerPassword}}" name="employerPassword" required>

    <label for="" class="mt-3">Category</label>
    <select class="form-select" name="categoryId" id="" required>
        @foreach ($category as $data)
        <option value="{{$data->id}}">{{$data->categoryName}}</option>
        @endforeach
    </select>

    <label for="" class="mt-3">Type</label>
    <input type="text" class="form-control" value="{{$employer->employerType}}" name="employerType" required>

    <button type="submit" class="btn mt-3 btn-primary">Submit</button>
</form>
@endsection