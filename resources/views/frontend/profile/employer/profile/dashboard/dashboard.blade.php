@extends('frontend.profile.employer.employer')

@section('employer_content')

<div class="container mb-3">
    <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-8 col-lg-8">
                    <!-- job single -->
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h3>Overview</h3>
                            </div>
                            <p></p>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Employer Info</h4><img class="mb-2" style="width: 100px;" src="{{ url('/images/employer')."/".auth()->user()->employerImage }}" alt="img">
                        </div>
                        <ul>
                            <li>Employer Name : {{auth()->user()->name}}</li>
                            <li>Employer Email : {{auth()->user()->email}}</li>
                        </ul>

                        <div class="small-section-tittle">
                            <h4>Company Info</h4><img class="mb-2 company-img" style="width: 100px;" src="{{ url('/images/company')."/".auth()->user()->companyImage }}" alt="img">
                        </div>
                        <ul>
                            <li>Company Name : {{auth()->user()->companyName}}</li>
                            <li>Company Web : {{auth()->user()->companyWeb}}</li>
                            <li>Company Email : {{auth()->user()->companyEmail}}</li>
                            <li>Company Description : {{auth()->user()->companyDescription}}</li>
                        </ul>

                        <div class="apply-btn2">
                            <a href="{{ route('editEmployer', auth()->user()->id) }}" class="btn">Edit</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
</div>

@endsection
