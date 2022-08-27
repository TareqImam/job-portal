@extends('frontend.profile.applicant.applicantPanel')

@section('applianct_content')

<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <form action="{{ route('my.answer', $exam->id) }}" method="POST">
                            @csrf
                            @foreach ($question as $data)
                            <p><strong>Ques.{{ $data->id }}</strong> {{ $data->question }}</p>
                            <input type="hidden" name=" answer[{{ $data->id }}]">
                            <select name="answer[{{ $data->id }}][]" id="">
                                <option >Select Answer</option>
                                @foreach ($data->option as $item)
                                <option name="answer" value="{{ $item->option }}">{{ $item->option }}</option>
                                @endforeach
                            </select>
                            <hr>
                            @endforeach

                            <button type="submit" class="btn mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
