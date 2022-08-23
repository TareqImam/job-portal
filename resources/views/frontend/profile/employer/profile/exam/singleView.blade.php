@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <h3>Exam Details</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5><strong>Name: </strong>{{$exam->examName}}</h5>

                    <h5><strong>Type: </strong>{{$exam->examType}}</h5>

                    <h5><strong>Job Post: </strong>{{$exam->jobPost->jobPostName}}</h5>

                    <h5><strong>Job Question: </strong></h5>

                    <a class="btn" href="{{ route('single.question', $exam->id) }}">Add Question</a>

                    <a class="btn" href="{{ route('view.question', $exam->id) }}">View Question</a>

                </div>
            </div>
        </div>
    </div>

</div>



@endsection
