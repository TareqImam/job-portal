@extends('backend.master')

@section('backend_content')

<div class="container mb-3">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6">
                <div class="small-section-tittle">
                                <h3>Applicant info</h3><img class="mb-2" style="width: 100px;"
                                    src="{{ url('/images/applicant')."/".$applicant->applicantImage }}" alt="img">
                            </div>
                <div class="post-details3  mb-50">
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <ul>
                                <li><strong>Name :</strong> {{$applicant->name}}</li>
                                <li><strong>Email :</strong> {{$applicant->email}}</li>
                                <li><strong>Phone :</strong> {{$applicant->applicantPhone}}</li>
                                <li><strong>Date of birth :</strong> {{$applicant->applicantDate}}</li>
                                <li><strong>Age :</strong> {{$applicant->applicantAge}}</li>
                                <li><strong>Gender :</strong> {{$applicant->applicatnGender}}</li>
                                @if($applicant->category==null)
                                <li><strong>Field :</strong> </li>
                                @else
                                <li><strong>Field :</strong> {{$applicant->category->categoryName}}</li>
                                @endif

                                <li><strong>Title :</strong> {{$applicant->applicantTitle}}</li>
                                <li><strong>Experience :</strong> {{$applicant->applicantExperience}}</li>
                                <li><strong>Skill :</strong> {{$applicant->applicantSkill}}</li>
                                <li><strong>Current Salary :</strong> {{$applicant->applicantSalary}}</li>
                                <li><strong>Expected Salary :</strong> {{$applicant->applicantExpectedSalary}}</li>
                                <li><strong>Nationality :</strong> {{$applicant->applicantNationality}}</li>
                                <li><strong>Address :</strong> {{$applicant->applicantAddress}}</li>
                                <li><strong>Education :</strong> {{$applicant->applicantEducation}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
