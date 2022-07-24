@extends('login.master')

@section('login_content')

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">Register As..</h3>
                    <a href="{{route('selectApplicant')}}" class="btn btn-primary rounded submit p-3 px-5">Applicant</a>
                    <a href="" class="btn btn-primary rounded submit p-3 px-5">Employer</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection