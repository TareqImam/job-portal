@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <h4>Add a Question</h4>

    <form class="mb-3" action="{{route('single.submit', $exam->id)}}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="" class="mt-3">Question</label>
        <input type="text" class="form-control" name="question" required>

        <label for="" class="mt-3">Option A</label>
        <input type="text" class="form-control" name="A" required>

        <label for="" class="mt-3">Option B</label>
        <input type="text" class="form-control" name="B" required>

        <label for="" class="mt-3">Option C</label>
        <input type="text" class="form-control" name="C" required>

        <label for="" class="mt-3">Option D</label>
        <input type="text" class="form-control" name="D" required>

        <button type="submit" class="btn mt-3">Submit</button>
    </form>


</div>

@endsection
