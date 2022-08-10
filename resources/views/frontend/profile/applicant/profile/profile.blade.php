@extends('frontend.profile.applicant.applicantPanel')

@section('applianct_content')

<div class="container mb-3">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-12 col-lg-12">

                <div class="job-post-details">
                    <div class="post-details1 mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h3>Applicant info</h3><img class="mb-2" style="width: 100px;"
                                src="{{ url('/images/employer')."/".auth()->user()->employerImage }}" alt="img">
                        </div>
                        <ul>
                            <li>Name : {{auth()->user()->name}}</li>
                            <li>Email : {{auth()->user()->email}}</li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
