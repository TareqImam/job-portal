@extends('frontend.master')

@section('frontend_content')

<main>

    <!-- Hero Area Start-->
    <div class="slider-area ">
        <div class="single-slider section-overly slider-height2 d-flex align-items-center"
            data-background="{{url('frontend/assets/img/hero/about.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap text-center">
                            <h2>Get your job</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
        <div class="container">
            <div class="row">

                <!-- Right content -->
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <!-- Featured_job_start -->
                    <section class="featured-job-area">
                        <div class="container">
                            <!-- Count of Job list Start -->
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="count-job mb-35">
                                        <span style="margin-left:50px;">{{ $jobPost->count() }} Jobs found</span>


                                        <!-- Select job items start -->
                                        <div class="row">
                                            <div class="col-xl-8">
                                                <!-- form -->
                                                <form action="{{ route('search') }}" class="search-box" method="get">

                                                    <div class="input-form">
                                                        <input type="text" name="search"
                                                            placeholder="Job Tittle">
                                                    </div>
                                                    <div class="select-form">
                                                        <div class="select-itms">

                                                            <select name="" id="select1">
                                                                @foreach ($jobPost as $data)
                                                                <option value="">{{ $data->jobPostLocation }}</option>
                                                                @endforeach
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="search-form">
                                                        <button class="btn" style="padding: 35px 50px;"
                                                            type="submit">Find job</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                        <!--  Select job items End-->


                                    </div>
                                </div>
                            </div>
                            <!-- Count of Job list End -->
                            <!-- single-job-content -->
                            @foreach($jobPost as $data)
                            <div class="single-job-items mb-30">
                                <div class="job-items">
                                    <div class="company-img">
                                        <a href="#"><img src="assets/img/icon/job-list1.png" alt=""></a>
                                    </div>
                                    <div class="job-tittle job-tittle2">
                                        <a href="#">
                                            <h4>{{$data->jobPostName}}</h4>
                                        </a>
                                        <ul>
                                            <li>{{$data->employerName}}</li>
                                            <li><i class="fas fa-map-marker-alt"></i>{{$data->jobPostLocation}}</li>
                                            <li>$3500 - $4000</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="items-link items-link2 f-right">
                                    <a href="{{route('singleViewJ', $data->id)}}">Apply</a>
                                    <span>7 hours ago</span>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <!-- Featured_job_end -->
                </div>
            </div>
        </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->
    <!--Pagination End  -->

</main>

@endsection
