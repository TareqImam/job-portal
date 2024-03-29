@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container">
    <h3 class="mb-3">Candidate list</h3>
    <div class="container">
        <table class="table table-responsive">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Candidate Name</th>
                    <th>Job Post</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($applyJob as $key=>$data)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$data->user->name}}</td>
                    <td>{{$data->jobPost->jobPostName}}</td>
                    <td>
                        <a href="{{ route('candidates.single', $data->id) }}" class="btn">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
