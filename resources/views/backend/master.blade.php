<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>IntelliJobs</title>
    <link rel="stylesheet" href="{{url('backend/vendors/feather/feather.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendors/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendors/ti-icons/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendors/typicons/typicons.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendors/simple-line-icons/css/simple-line-icons.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{url('backend/vendors/datatables.net-bs4/dataTables.bootstrap4.css')}}">
    <link rel="stylesheet" href="{{url('backend/js/select.dataTables.min.css')}}">
    <link rel="stylesheet" href="{{url('backend/css/vertical-layout-light/style.css')}}">
    <link rel="shortcut icon" href="{{url('backend/images/logo.svg')}}" />
</head>

<body>
    <div class="container-scroller">
        <!----------------------- navbar ------------------------->
        @include('backend.fixed.navbar')
        <!----------------------- navbar ------------------------->
        <div class="container-fluid page-body-wrapper">
            <!----------------------- sidebar ------------------------->
            @include('backend.fixed.sidebar')
            <!----------------------- sidebar ------------------------->
            <div class="main-panel">
                <div class="content-wrapper">
                    <!----------------------- main ------------------------->
                    @yield('backend_content')
                    <!----------------------- main ------------------------->
                </div>
            </div>
        </div>
    </div>
    <script src="{{url('backend/vendors/js/vendor.bundle.base.js')}}"></script>
    <script src="{{url('backend/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{url('backend/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{url('backend/vendors/progressbar.js/progressbar.min.js')}}"></script>
    <script src="{{url('backend/js/off-canvas.js')}}"></script>
    <script src="{{url('backend/js/hoverable-collapse.js')}}"></script>
    <script src="{{url('backend/js/template.js')}}"></script>
    <script src="{{url('backend/js/settings.js')}}"></script>
    <script src="{{url('backend/js/todolist.js')}}"></script>
    <script src="{{url('backend/js/jquery.cookie.js')}}" type="text/javascript"></script>
    <script src="{{url('backend/js/dashboard.js')}}"></script>
    <script src="{{url('backend/js/Chart.roundedBarCharts.js')}}"></script>
</body>

</html>