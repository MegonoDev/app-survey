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
  <style>
    .radio {
      display: block;
      position: relative;
      padding-left: 30px;
      margin-bottom: 12px;
      cursor: pointer;
      font-size: 16px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none
    }

    /* Hide the browser's default radio button */

    .radio input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    /* Create a custom radio button */

    .checkround {
      position: absolute;
      top: 1px;
      left: 0;
      height: 20px;
      width: 20px;
      background-color: #fff;
      border-color: #f8204f;
      border-style: solid;
      border-width: 2px;
      border-radius: 50%;
    }

    /* When the radio button is checked, add a blue background */

    .radio input:checked~.checkround {
      background-color: #fff;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */

    .checkround:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the indicator (dot/circle) when checked */

    .radio input:checked~.checkround:after {
      display: block;
    }

    /* Style the indicator (dot/circle) */

    .radio .checkround:after {
      left: 2px;
      top: 2px;
      width: 12px;
      height: 12px;
      border-radius: 50%;
      background: #f8204f;
    }

    /* The check */

    .check {
      display: block;
      position: relative;
      padding-left: 25px;
      margin-bottom: 12px;
      padding-right: 15px;
      cursor: pointer;
      font-size: 16px;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    /* Hide the browser's default checkbox */

    .check input {
      position: absolute;
      opacity: 0;
      cursor: pointer;
    }

    /* Create a custom checkbox */

    .checkmark {
      position: absolute;
      top: 3px;
      left: 0;
      height: 18px;
      width: 18px;
      background-color: #fff;
      border-color: #f8204f;
      border-style: solid;
      border-width: 2px;
    }

    /* When the checkbox is checked, add a blue background */

    .check input:checked~.checkmark {
      background-color: #fff;
    }

    /* Create the checkmark/indicator (hidden when not checked) */

    .checkmark:after {
      content: "";
      position: absolute;
      display: none;
    }

    /* Show the checkmark when checked */

    .check input:checked~.checkmark:after {
      display: block;
    }

    /* Style the checkmark/indicator */

    .check .checkmark:after {
      left: 5px;
      top: 1px;
      width: 5px;
      height: 10px;
      border: solid;
      border-color: #f8204f;
      border-width: 0 3px 3px 0;
      -webkit-transform: rotate(45deg);
      -ms-transform: rotate(45deg);
      transform: rotate(45deg);
    }

    .cust-btn {
      margin-bottom: 10px;
      background-color: #f8204f;
      border-width: 2px;
      border-color: #f8204f;
      color: #fff;
    }

    .cust-btn:hover {
      border-color: #f8204f;
      background-color: #fff;
      color: #f8204f;
      border-radius: 20px;
      transform-style: 2s;
    }

  </style>
</head>
<body class="skin-default-dark fixed-layout">
  <div id="main-wrapper">
    @include('layouts.eonesia.b-n.patrials.navbar') @include('layouts.eonesia.b-n.patrials.sidebar') @yield('content')
  </div>
  <br>
  <footer class="footer">
    <center>
      © 2018 EONESIA</center>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/main/dist/js/perfect-scrollbar.jquery.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/main/dist/js/waves.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/main/dist/js/sidebarmenu.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/main/dist/js/custom.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/raphael/raphael-min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/morrisjs/morris.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/d3/d3.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/assets/node_modules/c3-master/c3.min.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/main/dist/js/dashboard1.js')}}"></script>
    <script src="{{ asset('eonesia/b-n/main/dist/js/dropdown.js') }}"></script>
    <script type="text/javascript">
       $(".id_prov").change(function() {
      var id_prov = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
        url: "<?php echo route('select-kabupaten') ?>",
        method: 'POST',
        data: {
          id_prov: id_prov,
          _token: token
        },
        success: function(data) {
          $(".id_kab").html('');
          $(".id_kab").html(data.options);
        }
      });
    });
    </script>
    <script>
      $(document).ready(function() {

        // Default dropdown action to show/hide dropdown content
        $('.js-dropp-action').click(function(e) {
          e.preventDefault();
          $(this).toggleClass('js-open');
          $(this).parent().next('.dropp-body').toggleClass('js-open');
        });

        // Using as fake input select dropdown
        $('label').click(function() {
          $(this).addClass('js-open').siblings().removeClass('js-open');
          $('.dropp-body,.js-dropp-action').removeClass('js-open');
        });
        // get the value of checked input radio and display as dropp title
        $('input[name="dropp"]').change(function() {
          var value = $("input[name='dropp']:checked").val();
          $('.js-value').text(value);
        });

      });

    </script>
</body>
</html>
