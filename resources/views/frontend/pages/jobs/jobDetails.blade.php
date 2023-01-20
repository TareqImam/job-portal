@extends('frontend.master')

@section('frontend_content')

@if (session()->has('success'))
<p class="alert alert-success">
    {{ session()->get('success') }}
</p>
@endif

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>
            {{ $error }}
        </li>
        @endforeach
    </ul>
</div>
@endif

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>{{$jobPost->jobPostName}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- job post company Start -->
    <div class="job-post-company pt-120 pb-120">
        <div class="container">
            <div class="row justify-content-between">
                <!-- Left Content -->
                <div class="col-xl-8 col-lg-8">
                    <!-- job single -->
                    <div class="single-job-items mb-50">
                        <div class="job-items">
                            <div class="company-img company-img-details">
                                <a href=""><img class="mb-2" style="width: 100px;" src="{{ url('/images/company')."/".$jobPost->user->companyImage }}" alt="img"></a>
                            </div>
                            <div class="job-tittle">
                                <a href="#">
                                    <h4>{{ $jobPost->category->categoryName }}</h4>
                                </a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{ $jobPost->jobPostLocation }}</li>
                                    <li>৳{{ $jobPost->jobPostSalary }}</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- job single End -->

                    <div class="job-post-details">
                        <div class="post-details1 mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Job Description</h4>
                            </div>
                            <p>{{$jobPost->jobPostDescription}}</p>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">

                            </div>
                            <ul>

                            </ul>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">

                            </div>
                            <ul>
                                
                            </ul>
                        </div>
                    </div>

                </div>
                <!-- Right Content -->
                <div class="col-xl-4 col-lg-4">
                    <div class="post-details3  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Job Overview</h4>
                        </div>
                        <ul>
                            <li>Posted date : <span>{{ $jobPost->created_at }}</span></li>
                            <li>Location : <span>{{ $jobPost->jobPostLocation }}</span></li>
                            <li>Vacancy : <span>{{ $jobPost->jobPostVacancy }}</span></li>
                            <li>Job nature : <span>{{ $jobPost->jobPostType }}</span></li>
                            <li>Salary : <span> ৳{{ $jobPost->jobPostSalary }}</span></li>
                            <li>Deadline : <span>{{ $jobPost->deadline }}</span></li>
                        </ul>


                        <div class="apply-btn2">
                            @if(auth()->check() && auth()->user()->role=='employer')
                                <a href="" style="pointer-events: none;" class="btn">Apply Now</a>
                            @elseif(auth()->check() && auth()->user()->role=='applicant')
                                <a href="{{ route('job.apply', $jobPost->id) }}" class="btn">Apply Now</a>
                            @else
                                <a href="{{route('loginApplicant')}}" class="btn">Apply Now</a>
                            @endif
                        </div>


                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                        <span>{{ $jobPost->user->companyName }}</span>
                        <p>{{ $jobPost->user->companyDescription }}</p>
                        <ul>
                            <li>Name: <span>{{ $jobPost->user->companyName }}</span></li>
                            <li>Web : <span>{{ $jobPost->user->companyWeb }}</span></li>
                            <li>Email: <span>{{ $jobPost->user->companyEmail }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>

@endsection
