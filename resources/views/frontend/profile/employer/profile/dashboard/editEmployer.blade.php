@extends('frontend.profile.employer.employer')

@section('employer_content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="container mb-3">
    <form action="{{route('storeEmployer', $user->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <label for="" class="mt-3">Name</label>
        <input type="text" class="form-control" value="{{ $user->name }}" name="name" required>

        <label for="" class="mt-3">Email</label>
        <input type="email" class="form-control" value="{{ $user->email }}" name="email" required>

        <label for="" class="mt-3">Image</label>
        <input type="file" class="form-control" value="{{ $user->employerImage }}" name="image" required>



        <label for="" class="mt-3">Company Name</label>
        <input type="text" class="form-control" value="{{ $user->companyName }}" name="companyName" required>

        <label for="" class="mt-3">Company Image</label>
        <input type="file" class="form-control" value="{{ $user->companyImage }}" name="companyImage" required>

        <label for="" class="mt-3">Company Web</label>
        <input type="text" class="form-control" value="{{ $user->companyWeb }}" name="companyWeb" required>

        <label for="" class="mt-3">Company Email</label>
        <input type="email" class="form-control" value="{{ $user->companyEmail }}" name="companyEmail" required>

        <label for="" class="mt-3">Company Description</label>
        <input type="text" class="form-control" value="{{ $user->companyDescription }}" name="companyDescription" required>

        <button type="submit" class="btn mt-3">Submit</button>
    </form>
</div>

@endsection
