@extends('backend.master')

@section('backend_content')
<h3>Give Applicant's info</h3>

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('applicantSubmit')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="" class="mt-3">Name</label>
    <input type="text" class="form-control" placeholder="Name" name="applicantName" required>

    <label for="" class="mt-3">Email</label>
    <input type="email" class="form-control" placeholder="Email" name="applicantEmail" required>

    <label for="" class="mt-3">Password</label>
    <input type="password" class="form-control" placeholder="Password" name="applicantPassword" required>

    <label for="" class="mt-3">Image</label>
    <input type="file" class="form-control" name="applicantImage">

    <button type="submit" class="btn mt-3 btn-primary">Submit</button>
</form>
@endsection