<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="https://eonesia.id/img/icon.png">
    <title>EONESIA</title>
    <link href="{{ asset('eonesia/b-n/assets/node_modules/morrisjs/morris.css') }}" rel="stylesheet">
    <link href="{{ asset('eonesia/b-n/assets/node_modules/c3-master/c3.min.css') }}" rel="stylesheet">
    <link href="{{ asset('eonesia/b-n/main/dist/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('eonesia/b-n/main/dist/css/pages/dashboard1.css') }}" rel="stylesheet">
</head>

<body class="skin-default-dark fixed-layout">
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">EONESIA</p>
        </div>
    </div>
    <div id="main-wrapper">
        @include('layouts.eonesia.b-n.patrials.navbar')
        @include('layouts.eonesia.b-n.patrials.sidebar')
        @yield('content')
       
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div><br>
    <footer class="footer">
        <center> © 2018 EONESIA</center>
    </footer>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('eonesia/b-n/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap popper Core JavaScript -->
    <script src="{{ asset('eonesia/b-n/assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('eonesia/b-n/main/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <!--Wave Effects -->
    <script src="{{ asset('eonesia/b-n/main/dist/js/waves.js')}}"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('eonesia/b-n/main/dist/js/sidebarmenu.js')}}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('eonesia/b-n/main/dist/js/custom.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('eonesia/b-n/assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/morrisjs/morris.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <!--c3 JavaScript -->
    <script src="{{ asset('eonesia/b-n/assets/node_modules/d3/d3.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/c3-master/c3.min.js')}}"></script>
    <!-- Chart JS -->
    <script src="{{ asset('eonesia/b-n/main/dist/js/dashboard1.js')}}"></script>
</body>

</html>