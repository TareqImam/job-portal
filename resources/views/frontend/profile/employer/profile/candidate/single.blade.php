@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6">
                <div class="small-section-tittle">
                    <h2>Marks: {{ $obtainMarks }}/{{ $totalQuestion }} </h2>
                </div>
                <div class="small-section-tittle">
                    <h3>Applicant info</h3><img class="mb-2" style="width: 100px;"
                        src="{{ url('/images/applicant')."/".$applyJob->user->applicantImage }}" alt="img">
                </div>
                <div class="post-details3  mb-50">
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <ul>
                                <li><strong>Name :</strong> {{$applyJob->user->name}}</li>
                                <li><strong>Email :</strong> {{$applyJob->user->email}}</li>
                                <li><strong>Phone :</strong> {{$applyJob->user->applicantPhone}}</li>
                                <li><strong>Date of birth :</strong> {{$applyJob->user->applicantDate}}</li>
                                <li><strong>Age :</strong> {{$applyJob->user->applicantAge}}</li>
                                <li><strong>Gender :</strong> {{$applyJob->user->applicatnGender}}</li>
                                @if($applyJob->user->category==null)
                                <li><strong>Field :</strong> </li>
                                @else
                                <li><strong>Field :</strong> {{$applyJob->user->category->categoryName}}</li>
                                @endif

                                <li><strong>Title :</strong> {{$applyJob->user->applicantTitle}}</li>
                                <li><strong>Experience :</strong> {{$applyJob->user->applicantExperience}}</li>
                                <li><strong>Skill :</strong> {{$applyJob->user->applicantSkill}}</li>
                                <li><strong>Current Salary :</strong> {{$applyJob->user->applicantSalary}}</li>
                                <li><strong>Expected Salary :</strong> {{$applyJob->user->applicantExpectedSalary}}</li>
                                <li><strong>Nationality :</strong> {{$applyJob->user->applicantNationality}}</li>
                                <li><strong>Address :</strong> {{$applyJob->user->applicantAddress}}</li>
                                <li><strong>Education :</strong> {{$applyJob->user->applicantEducation}}</li>

                                <li><a class="btn" href="{{ route('download',$applyJob->user->applicantCV) }}">Download CV</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                @if($applyJob->status==='Pending')
                <a class="btn" href="{{ route('approve',$applyJob->id) }}">Approve</a>
                <a class="btn" href="{{ route('reject',$applyJob->id) }}">Reject</a>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection
