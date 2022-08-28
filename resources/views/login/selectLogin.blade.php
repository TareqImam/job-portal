@extends('login.master')

@section('login_content')
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
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-5">
                <div class="login-wrap p-4 p-md-5">
                    <div class="icon d-flex align-items-center justify-content-center">
                        <span class="fa fa-user-o"></span>
                    </div>
                    <h3 class="text-center mb-4">Login As..</h3>
                    <a href="{{route('loginApplicant')}}" class="btn btn-primary rounded submit p-3 px-5">Applicant</a>
                    <a href="{{route('loginEmployer')}}" class="btn btn-primary rounded submit p-3 px-5">Employer</a>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
