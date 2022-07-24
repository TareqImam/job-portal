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
                    <h3 class="text-center mb-4">Register As Applicant</h3>
                    <form action="{{route('registration')}}" class="login-form" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control rounded-left" placeholder="Name" name="applicantName" required />
                        </div>
                        <div class="form-group d-flex">
                            <input type="email" class="form-control rounded-left" placeholder="Email" name="applicantEmail" required />
                        </div>
                        <div class="form-group d-flex">
                            <input type="password" class="form-control rounded-left" placeholder="Password" name="applicantPassword" required />
                        </div>
                        <!-- <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked />
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div> -->
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded submit p-3 px-5">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection