@extends('frontend.master')

@section('frontend_content')

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
                                <a href=""><img class="mb-2" style="width: 100px;" src="{{ url('/images/company')."/".auth()->user()->companyImage }}" alt="img"></a>
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
                                <h4>Required Knowledge, Skills, and Abilities</h4>
                            </div>
                            <ul>
                                {{--  <li>System Software Development</li>
                                <li>Mobile Applicationin iOS/Android/Tizen or other platform</li>
                                <li>Research and code , libraries, APIs and frameworks</li>
                                <li>Strong knowledge on software development life cycle</li>
                                <li>Strong problem solving and debugging skills</li>  --}}
                            </ul>
                        </div>
                        <div class="post-details2  mb-50">
                            <!-- Small Section Tittle -->
                            <div class="small-section-tittle">
                                <h4>Education + Experience</h4>
                            </div>
                            <ul>
                                {{--  <li>3 or more years of professional design experience</li>
                                <li>Direct response email experience</li>
                                <li>Ecommerce website design experience</li>
                                <li>Familiarity with mobile and web apps preferred</li>
                                <li>Experience using Invision a plus</li>  --}}
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
                            <li>Salary : <span> ৳{{ $jobPost->jobPostSalary*12 }} yearly</span></li>
                            <li>Apply last date : <span>12 Sep 2020</span></li>
                        </ul>
                        <div class="apply-btn2">
                            <a href="#" class="btn">Apply Now</a>
                        </div>
                    </div>
                    <div class="post-details4  mb-50">
                        <!-- Small Section Tittle -->
                        <div class="small-section-tittle">
                            <h4>Company Information</h4>
                        </div>
                        <span>{{ auth()->user()->companyName }}</span>
                        <p>{{ auth()->user()->companyDescription }}</p>
                        <ul>
                            <li>Name: <span>{{ auth()->user()->companyName }}</span></li>
                            <li>Web : <span>{{ auth()->user()->companyWeb }}</span></li>
                            <li>Email: <span>{{ auth()->user()->companyEmail }}</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- job post company End -->

</main>

@endsection
