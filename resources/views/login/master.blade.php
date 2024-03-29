<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login/Register</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{url('backend/images/logo.svg')}}">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="{{url('login/css/style.css')}}" />
    <link rel="stylesheet" href="{{url('login/css/bootstrap.min.css')}}" />

</head>

<body>
    

    @yield('login_content')

    <script src="{{url('login/js/jquery.min.js')}}"></script>
    <script src="{{url('login/js/popper.js')}}"></script>
    <script src="{{url('login/js/bootstrap.min.js')}}"></script>
    <script src="{{url('login/js/main.js')}}"></script>
</body>

</html>
