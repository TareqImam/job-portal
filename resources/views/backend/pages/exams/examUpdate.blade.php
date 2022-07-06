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

<form action="{{route('examStore', $exam->id)}}" method="POST">
    @method('PUT')
    @csrf

    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" value="{{$exam->examName}}" name="examName" required>

    <label for="" class="mt-3">Set</label>
    <input type="text" class="form-control" value="{{$exam->examSet}}" name="examSet" required>

    <label for="" class="mt-3">Type</label>
    <input type="text" class="form-control" value="{{$exam->examType}}" name="examType" required>

    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection