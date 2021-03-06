<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>


    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="76x76" href={{asset('assets/img//apple-icon.png')}}>
    <link rel="icon" type="image/png" href={{asset("assets/img//favicon.png")}}>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
          name='viewport'/>
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href={{asset("assets/css/paper-dashboard.css")}} rel="stylesheet"/>


</head>
<body class="{{(\Request::is('login')) ? "login-" : ""}}">
<div class="wrapper ">
    @include('inc.dashboard.sidebar')
    <div class="main-panel">
        @include('inc.dashboard.navbar')
        <div class="content">
            @yield('content')
        </div>
        @include('inc.footer')
    </div>
</div>

<script src={{asset("assets/js/core/jquery.min.js")}}></script>
<script src={{asset("assets/js/core/popper.min.js")}}></script>
<script src={{asset("assets/js/core/bootstrap.min.js")}}></script>
<script src={{asset("assets/js/plugins/perfect-scrollbar.jquery.min.js")}}></script>
<script src={{asset("assets/js/plugins/moment.min.js")}}></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src={{asset("assets/js/plugins/bootstrap-switch.js")}}></script>
<!--  Plugin for Sweet Alert -->
<script src="{{asset("assets/js/plugins/sweetalert2.min.js")}}"></script>
<!-- Forms Validations Plugin -->
<script src={{asset("assets/js/plugins/jquery.validate.min.js")}}></script>
<!--  Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src={{asset("assets/js/plugins/jquery.bootstrap-wizard.js")}}></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src={{asset("assets/js/plugins/bootstrap-selectpicker.js")}}></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{asset("assets/js/plugins/bootstrap-datetimepicker.js")}}"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/    -->
<script src="{{asset("assets/js/plugins/jquery.dataTables.min.js")}}"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{asset("assets/js/plugins/bootstrap-tagsinput.js")}}"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src={{asset("assets/js/plugins/jasny-bootstrap.min.js")}}></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src={{asset("assets/js/plugins/fullcalendar/fullcalendar.min.js")}}></script>
<script src={{asset("assets/js/plugins/fullcalendar/daygrid.min.js")}}></script>
<script src={{asset('assets/js/plugins/fullcalendar/timegrid.min.js')}}></script>
<script src="{{asset('assets/js/plugins/fullcalendar/interaction.min.js')}}"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{asset('assets/js/plugins/jquery-jvectormap.js')}}"></script>
<!--  Plugin for the Bootstrap Table -->
<script src={{asset('assets/js/plugins/nouislider.min.js')}}></script>
<!--  Google Maps Plugin    -->
{{--    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>--}}
<!-- Chart JS -->
<script src={{asset('assets/js/plugins/chartjs.min.js')}}></script>
<!--  Notifications Plugin    -->
<script src="{{asset('assets/js/plugins/bootstrap-notify.js')}}"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src={{asset('assets/js/paper-dashboard.min.js')}} type="text/javascript"></script>

</body>
</html>
