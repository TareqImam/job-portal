@extends('frontend.master')

@section('frontend_content')
<div class="our-services section-pad-t30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>{{$category->categoryName}}</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
                <div class="col-xl-10">
                    @foreach($jobs as $data)
                    <!-- single-job-content -->
                    <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="{{route('selectLoginAs')}}"><img src="{{url('frontend/assets/img/icon/job-list1.png')}}" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="{{route('selectLoginAs')}}">
                                    <h4>{{$data->jobPostName}}</h4>
                                </a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                    <li>$3500 - $4000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="{{route('selectLoginAs')}}">Apply</a>
                            <span>7 hours ago</span>
                        </div>
                    </div>
                    @endforeach
                    <!-- single-job-content -->
                    <!-- <div class="single-job-items mb-30">
                        <div class="job-items">
                            <div class="company-img">
                                <a href="job_details.html"><img src="assets/img/icon/job-list2.png" alt=""></a>
                            </div>
                            <div class="job-tittle">
                                <a href="job_details.html">
                                    <h4>Digital Marketer</h4>
                                </a>
                                <ul>
                                    <li>Creative Agency</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Athens, Greece</li>
                                    <li>$3500 - $4000</li>
                                </ul>
                            </div>
                        </div>
                        <div class="items-link f-right">
                            <a href="job_details.html">Full Time</a>
                            <span>7 hours ago</span>
                        </div>
                    </div> -->
                </div>
            </div>
        <!-- More Btn -->
    </div>
</div>

@endsection
