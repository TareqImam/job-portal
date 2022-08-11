@extends('frontend.profile.applicant.applicantPanel')

@section('applianct_content')

<div class="container">
    <form action="{{route('updateStoreA', $user->id)}}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf

        <label for="" class="mt-3">Image</label>
        <input type="file" class="form-control" value="{{ $user->applicantImage }}" name="applicantImage" required>

        <label for="" class="mt-3">Name</label>
        <input type="text" class="form-control" value="{{ $user->name }}" name="name" required>

        <label for="" class="mt-3">Email</label>
        <input type="email" class="form-control" value="{{ $user->email }}" name="email" required>

        <label for="" class="mt-3">Phone</label>
        <input type="text" class="form-control" value="{{ $user->applicantPhone }}" name="companyName" required>

        <label for="" class="mt-3">Birth of Date</label>
        <input type="date" class="form-control" value="{{ $user->applicantDate }}" name="applicantDate" required>

        <label for="" class="mt-3">Age</label>
        <input type="text" class="form-control" value="{{ $user->applicantAge }}" name="applicantAge" required>

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <label class="mt-3">Gender</label>
            </div>
            <select type="text" class="form-control" id="inputGroupSelect01" value="{{ $user->applicatnGender }}" name="applicatnGender" required>
                <option selected>Select</option>
                <option value="1">Male</option>
                <option value="2">Female</option>
            </select>
        </div>

        <div>
            <label for="" class="mt-3">Category</label>
            <select class="form-select" name="category_id" id="" required>
                @foreach ($category as $data)
                <option value="{{$data->id}}">{{$data->categoryName}}</option>
                @endforeach
            </select>
        </div>

        <label for="" class="mt-3">Title</label>
        <input type="text" class="form-control" value="{{ $user->applicantTitle }}" name="applicantTitle" required>

        <label for="" class="mt-3">Skill</label>
        <input type="text" class="form-control" value="{{ $user->applicantExperience }}" name="applicantExperience"
            required>

        <label for="" class="mt-3">Current Salary</label>
        <input type="text" class="form-control" value="{{ $user->applicantSalary }}" name="applicantSalary" required>

        <label for="" class="mt-3">Expected Salary</label>
        <input type="text" class="form-control" value="{{ $user->applicantExpectedSalary }}"
            name="applicantExpectedSalary" required>

        <label for="" class="mt-3">Nationality</label>
        <input type="text" class="form-control" value="{{ $user->applicantNationality }}" name="applicantNationality"
            required>

        <label for="" class="mt-3">Educational Qualification</label>
        <input type="text" class="form-control" value="{{ $user->applicantEducation }}" name="applicantEducation"
            required>

        <label for="" class="mt-3">Upload CV</label>
        <input type="file" class="form-control" value="{{ $user->applicantCV }}" name="applicantCV" required>

        <button type="submit" class="btn mt-3">Submit</button>
    </form>
</div>

@endsection
