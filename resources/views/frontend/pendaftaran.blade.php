<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>EONESIA</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="shortcut icon" href="https://eonesia.id/img/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.css') }}">
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

    .bg-custom {
      background-color: #9300ff;
    }

    .bg-yamaha {
      background-color: #f30b16;
    }

    .card-header:first-child {
      border-radius: 0;
    }

    .form-control {
      border-radius: 0;
    }

    input:hover,
    select:hover,
    textarea:hover {
      border-color: #000;
      transition: 0.5s;
    }

    textarea:focus,
    input:focus,
    select:focus {
      outline: 0px !important;
      -webkit-appearance: none;
      box-shadow: none !important;
    }

    .detail {
      font-size: 0.875rem;
    }
 /*   .container {*/
 /*   padding-right:0;*/
 /*   padding-left:0;*/
 /*   margin-right:auto;*/
 /*   margin-left:auto*/
 /*}*/
  </style>
</head>

<body>
    <div class="pt-5 d-none d-sm-block"></div>
  <div class="container">
    <!-- <br> -->
    <!--  <p class="text-center">
      <h4 class="text-center">Silahkan isi data diri untuk mendapatkan nomor<br> undian Bahagia Keluarga Bersama YAMAHA</h4>
      </a>
    </p>
    <hr> -->
    <div class="row justify-content-center">
      <div class="col-md-10 col-sm-12 col-xs-12">
        <div class="card">
          <header class="card-header bg-custom text-light px-5 py-5">
            <h2 class="card-title mt-2">INFORMASI PERSONAL ANDA</h2>
            <span>Silahkan isi data diri Anda untuk mendapatkan nomor undian Bahagia Keluarga Bersama YAMAHA</span>
          </header>
          @include('frontend._form')
        </div>
      </div>
    </div>
  </div>
  <br>
  <br>
  <article class="bg-secondary mb-3">
    <div class="card-body text-center">
      <h3 class="text-white mt-3">EONESIA</h3>
      <p class="h5 text-white">Brand Activation | Apparel & Merchendise | Advertising | Event Organizer | Product
        <br>| 3D Animation | Exhibition | Multimedia Development | Customer Insight
    </div>
    <br>
    <br>
  </article>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="{{ asset('eonesia/b-n/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('eonesia/b-n/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script type="text/javascript">
    

  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('.tanggal').datepicker({
        format: "dd-mm-yyyy",
        showOnFocus: true,
        toggleActive: true,
        todayHighlight: true,
        keyboardNavigation: true,
        autoclose: true
      });
    });
    $('#id_prov').change(function() {
      var id_prov = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
        url: "<?php echo route('select-kabupaten') ?>",
        method: 'POST',
        cache : false,
        data: {
          id_prov: id_prov,
          _token: token
        },
        success: function(data) {
          $("#id_kab").html('');
          $("#id_kab").html(data.options);
        },
        error: function(jqxhr, status, exception) {
             alert('Exception:', exception);
         }
      });
    });
    $('#id_merk').change(function() {
      var id_merk = $(this).val();
      var token = $("input[name='_token']").val();
      $.ajax({
        url: "<?php echo route('select-seri') ?>",
        method: 'POST',
        cache : false,
        data: {
          id_merk: id_merk,
          _token: token
        },
        success: function(data) {
          $("#id_seri").html('');
          $("#id_seri").html(data.options);
        }
      });
    });
  </script>
</body>

</html>