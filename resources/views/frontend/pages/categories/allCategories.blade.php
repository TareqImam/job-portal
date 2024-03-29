@extends('frontend.master')

@section('frontend_content')

<div class="our-services section-pad-t30">
    <div class="container">
        <!-- Section Tittle -->
        <div class="row">
            <div class="col-lg-12">
                <div class="section-tittle text-center">
                    <h2>All Categories </h2>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-contnet-center">
                @foreach($category as $data)
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6">
                    <div class="single-services text-center mb-30">
                        <div class="services-ion">
                            <span class="flaticon-tour"></span>
                        </div>
                        <div class="services-cap">
                            <h5><a href="{{route('singleCategory',$data->id)}}">{{$data->categoryName}}</a></h5>
                            <span>({{ $data->jobs->count() }})</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        <!-- More Btn -->
    </div>
</div>

@endsection
