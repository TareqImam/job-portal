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
    <form action="{{route('storeExam', $exam->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <label for="" class="mt-3">Name</label>
        <input type="text" class="form-control" value="{{$exam->examName}}" name="examName" required>

        <label for="" class="mt-3">Set</label>
        <input type="text" class="form-control" value="{{$exam->examSet}}" name="examSet" required>

        <label for="" class="mt-3">Type</label>
        <input type="text" class="form-control" value="{{$exam->examType}}" name="examType" required>

        <label for="" class="mt-3">Job Post</label>
        <select class="form-select" name="jobPostId" id="" required>
            @foreach ($jobPost as $data)
            <option value="{{$data->id}}">{{$data->jobPostName}}</option>
            @endforeach
        </select><br>

        <label for="" class="mt-3">Question</label>
        <input type="file" class="form-control" name="questionFile" required>

        <button type="submit" class="btn mt-3">Submit</button>
    </form>
</div>

@endsection
