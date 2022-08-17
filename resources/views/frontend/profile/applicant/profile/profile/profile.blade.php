@extends('frontend.profile.applicant.applicantPanel')

@section('applianct_content')

<div class="container mb-3">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6">
                <div class="small-section-tittle">
                                <h3>Applicant info</h3><img class="mb-2" style="width: 100px;"
                                    src="{{ url('/images/applicant')."/".auth()->user()->applicantImage }}" alt="img">
                            </div>
                <div class="post-details3  mb-50">
                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <ul>
                                <li><strong>Name :</strong> {{auth()->user()->name}}</li>
                                <li><strong>Email :</strong> {{auth()->user()->email}}</li>
                                <li><strong>Phone :</strong> {{auth()->user()->applicantPhone}}</li>
                                <li><strong>Date of birth :</strong> {{auth()->user()->applicantDate}}</li>
                                <li><strong>Age :</strong> {{auth()->user()->applicantAge}}</li>
                                <li><strong>Gender :</strong> {{auth()->user()->applicatnGender}}</li>
                                @if(auth()->user()->category==null)
                                <li><strong>Field :</strong> </li>
                                @else
                                <li><strong>Field :</strong> {{auth()->user()->category->categoryName}}</li>
                                @endif

                                <li><strong>Title :</strong> {{auth()->user()->applicantTitle}}</li>
                                <li><strong>Experience :</strong> {{auth()->user()->applicantExperience}}</li>
                                <li><strong>Skill :</strong> {{auth()->user()->applicantSkill}}</li>
                                <li><strong>Current Salary :</strong> {{auth()->user()->applicantSalary}}</li>
                                <li><strong>Expected Salary :</strong> {{auth()->user()->applicantExpectedSalary}}</li>
                                <li><strong>Nationality :</strong> {{auth()->user()->applicantNationality}}</li>
                                <li><strong>Address :</strong> {{auth()->user()->applicantAddress}}</li>
                                <li><strong>Education :</strong> {{auth()->user()->applicantEducation}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
