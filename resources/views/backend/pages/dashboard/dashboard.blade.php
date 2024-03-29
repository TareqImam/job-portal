@extends('backend.master')
@section('backend_content')
    <h1>Welcome to dashboard</h1>






    <div class="grey-bg container-fluid">
        <section id="minimal-statistics">

            <div class="row mt-5">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">

                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $aEmployer }}</h3>
                                        <span>Employers</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">

                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $aApplicant }}</h3>
                                        <span>Applicants</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">

                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $category }}</h3>
                                        <span>Categories</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">

                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $jobPost }}</h3>
                                        <span>Jobs Posted</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">

                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $exam }}</h3>
                                        <span>Exams Posted</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-sm-6 col-12">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <div class="media d-flex">
                                    <div class="align-self-center">

                                    </div>
                                    <div class="media-body text-right">
                                        <h3>{{ $applyJob }}</h3>
                                        <span>Jobs Applied</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
@endsection
