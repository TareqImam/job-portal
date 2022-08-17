@extends('frontend.profile.applicant.applicantPanel')

@section('applianct_content')

<div class="container">
    <h4><span>Browse all Jobs here</span></h4>
    <table class="table table-responsive">
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($applyJob as $key=>$data)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$data->jobPost->jobPostName}}</td>
                <td>{{$data->status}}</td>
                <td>
                    <a href="{{route('singleViewJ', $data->id)}}" class="btn">View</a>
                    <a href="{{route('jobDelete', $data->id)}}" class="btn">Cancel</i></a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <a href="{{ route('jobList')}}" class="btn mb-3">→</a>
</div>

@endsection
