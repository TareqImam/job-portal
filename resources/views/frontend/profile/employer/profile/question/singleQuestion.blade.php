@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <h3>Exam Details</h3>
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container">

                            @foreach ($questions as $key=>$data)
                            <p><strong>Ques.{{ $key+1 }}</strong> {{ $data->question }}</p>
                            @foreach ($data->option as $key=>$opt)
                            <label>{{ $key+1 }}. {{ $opt->option }}</label>
                            <br>
                            @endforeach
                            <hr>
                            @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
