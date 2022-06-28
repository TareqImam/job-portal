@extends('backend.master')

@section('backend_content')
<form action="{{route('examSubmit')}}" method="POST">
    @csrf
    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" name="examName">
    <label for="" class="mt-3">Set</label>
    <input type="text" class="form-control" name="examSet">
    <label for="" class="mt-3">Type</label>
    <input type="text" class="form-control" name="examType">
    <button type="submit" class="btn btn-primary mt-3">Submit</button>
</form>
@endsection