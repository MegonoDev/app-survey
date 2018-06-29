<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="plugins/images/favicon.png">
    <title>EONESIA</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('eonesia/b-n/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Menu CSS -->
    <link href="{{ asset('eonesia/b-n/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css')}}" rel="stylesheet">
    <!-- toast CSS -->
    <link href="{{ asset('eonesia/b-n/plugins/bower_components/toast-master/css/jquery.toast.css')}}" rel="stylesheet">
    <!-- morris CSS -->
    <link href="{{ asset('eonesia/b-n/plugins/bower_components/morrisjs/morris.css')}}" rel="stylesheet">
    <!-- chartist CSS -->
    <link href="{{ asset('eonesia/b-n/plugins/bower_components/chartist-js/dist/chartist.min.css')}}" rel="stylesheet">
    <!-- animation CSS -->
    <link href="{{ asset('eonesia/b-n/css/animate.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('eonesia/b-n/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('eonesia/b-n/css/eonesia.css')}}" rel="stylesheet">
    <!-- color CSS -->
    <link href="{{ asset('eonesia/b-n/css/colors/default.css')}}" id="theme" rel="stylesheet">
    <link rel="shortcut icon" href="https://eonesia.id/img/icon.png" type="image/x-icon">
</head>

<body class="fix-header">
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
        </svg>
    </div>
    <div id="wrapper">
        @include('layouts.eonesia.b-n.patrials.navbar')
        @include('layouts.eonesia.b-n.patrials.sidebar')
        @yield('content')
        @include('layouts.eonesia.b-n.patrials.footer')
        </div>
    </div>
    <script src="{{ asset('eonesia/b-n/plugins/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('eonesia/b-n/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="{{ asset('eonesia/b-n/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js')}}"></script>
    <!--slimscroll JavaScript -->
    <script src="{{ asset('eonesia/b-n/js/jquery.slimscroll.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('eonesia/b-n/js/waves.js')}}"></script>
    <!--Counter js -->
    <script src="{{ asset('eonesia/b-n/plugins/bower_components/waypoints/lib/jquery.waypoints.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/plugins/bower_components/counterup/jquery.counterup.min.js')}}"></script>
    <!-- chartist chart -->
    <script src="{{ asset('eonesia/b-n/plugins/bower_components/chartist-js/dist/chartist.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js')}}"></script>
    <!-- Sparkline chart JavaScript -->
    <script src="{{ asset('eonesia/b-n/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('eonesia/b-n/js/custom.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/js/dashboard1.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/plugins/bower_components/toast-master/js/jquery.toast.js')}}"></script>
</body>

</html>
