@extends('frontend.profile.applicant.applicantPanel')

@section('applianct_content')

<div class="container">
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="container">
                        <form action="{{-- route('my.answer') --}}" method="POST">
                            @csrf

                            @foreach ($questions as $key=>$data)
                            <p><strong>Ques.{{ $key+1 }}</strong> {{ $data->question }}</p>
                            <select name="answer" id="">
                                @foreach ($data->option as $item)
                                <option value="{{ $item->option }}">{{ $item->option }}</option>
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
