@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <h3>Company details</h3>

    <label for="" class="mt-3">Company name</label>
    <input type="text" class="form-control" readonly value="">

    <label for="" class="mt-3">Web</label>
    <input type="text" class="form-control" readonly value="">

    <label for="" class="mt-3">Email</label>
    <input type="text" class="form-control" readonly value="">

    <label for="" class=" mt-3">Description</label>
    <textarea type="text" class="form-control" rows="4" readonly></textarea>

    <a href="" class="btn mt-3">Edit details</a>
</div>

@endsection
