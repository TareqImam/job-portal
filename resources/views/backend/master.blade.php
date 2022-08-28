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

    {{--  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">  --}}
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

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
