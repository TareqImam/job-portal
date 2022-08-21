@extends('frontend.profile.applicant.applicantPanel')

@section('applianct_content')

<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Type</th>
                <th>Job Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applyJob as $key=>$data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->exam->examName}}</td>
                <td>{{$data->exam->examType}}</td>
                <td>{{$data->jobPost->jobPostName}}</td>
                <td>
                    <a href="" class="btn">Participate</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
