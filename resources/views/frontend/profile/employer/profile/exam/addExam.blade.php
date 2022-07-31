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

<div class="container">
    <form class="mb-3" action="{{route('submitExam')}}" method="POST">
        @csrf

        <label for="" class="mt-3">Name</label>
        <input type="text" class="form-control" name="examName" required>

        <label for="" class="mt-3">Set</label>
        <input type="text" class="form-control" name="examSet" required>

        <label for="" class="mt-3">Type</label>
        <input type="text" class="form-control" name="examType" required>

        <label for="" class="mt-3">Job Post</label>
        <select class="form-select" name="jobPostId" id="" required>
            @foreach ($jobPost as $data)
            <option value="{{$data->id}}">{{$data->jobPostName}}</option>
            @endforeach
        </select><br>

        <button type="submit" class="btn mt-3">Submit</button>
    </form>
</div>

@endsection