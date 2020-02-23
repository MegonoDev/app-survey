<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>EONESIA</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="shortcut icon" href="https://eonesia.id/img/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker3.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/banner.css') }}">
  <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
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
  </style>
</head>

<body>
  <!-- <div class="pt-5 d-none d-sm-block"></div> -->
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

          @include('frontend.banner-top')
          <!-- <header class="card-header bg-custom text-light px-5 py-5">
            <h2 class="card-title mt-2">INFORMASI PERSONAL ANDA</h2>
            <span>Silahkan isi data diri Anda untuk mendapatkan nomor undian Bahagia Keluarga Bersama YAMAHA</span>
          </header> -->
          @include('frontend._form')

          @include('frontend.banner-bot')
        </div>
      </div>
    </div>
  </div>

  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="{{ asset('eonesia/b-n/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <script src="{{ asset('eonesia/b-n/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('js/bootstrap-datepicker.js') }}"></script>
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <script type="text/javascript">


  </script>
  <script type="text/javascript">
    var provinsi = "{{ old('id_prov') }}";
    var kabupaten = "{{ old('id_kab') }}";
    var kecamatan = "{{ old('id_kec') }}";
    var kelurahan = "{{ old('id_kel') }}";

    $(document).ready(function() {
      $('.tanggal').datepicker({
        format: "dd-mm-yyyy",
        showOnFocus: true,
        toggleActive: true,
        todayHighlight: true,
        keyboardNavigation: true,
        autoclose: true
      });


      if (provinsi != '') {
        getKab(provinsi);
      }

      if (kabupaten != '') {
        getKec(kabupaten);
      }

      if (kecamatan != '') {
        getKel(kecamatan);
      }

      function getKec(id_kab) {
        var token = $("input[name='_token']").val();
        $.ajax({
          url: "<?php echo route('select-kecamatan') ?>",
          method: 'POST',
          cache: false,
          data: {
            id_kab: id_kab,
            _token: token
          },
          success: function(data) {
            $("#id_kec option").remove();
            $("#id_kec").append(data.options);
            $("#id_kel option").remove();
            $("#id_kel").append('<option value="">kelurahan</option>');
            
            $("#id_kec").val(kecamatan);
          }
        });
      }

      function getKab(id_prov) {
        var token = $("input[name='_token']").val();
        $.ajax({
          url: "<?php echo route('select-kabupaten') ?>",
          method: 'POST',
          cache: false,
          data: {
            id_prov: id_prov,
            _token: token
          },
          success: function(data) {
            $("#id_kab option").remove();
            $("#id_kab").append(data.options);
            $("#id_kec option").remove();
            $("#id_kec").append('<option value="">kecamatan</option>');
            $("#id_kel option").remove();
            $("#id_kel").append('<option value="">kelurahan</option>');

            $("#id_kab").val(kabupaten);
          }
        });
      }

      function getKel(id_kec) {
        var token = $("input[name='_token']").val();
        $.ajax({
          url: "<?php echo route('select-kelurahan') ?>",
          method: 'POST',
          cache: false,
          data: {
            id_kec: id_kec,
            _token: token
          },
          success: function(data) {
            $("#id_kel option").remove();
            $("#id_kel").append(data.options);

            $("#id_kel").val(kelurahan);
          }
        });
      }

      $('#id_prov').change(function() {
        getKab($(this).val());
      });

      $('#id_kab').change(function() {
        getKec($(this).val());
      });

      $('#id_kec').change(function() {
        getKel($(this).val());
      });

    });
  </script>

  <script>
    $(document).ready(function() {

      var sync1 = $("#c1");
      var sync2 = $("#c2");
      var slidesPerPage = 1;
      var syncedSecondary = true;

      sync1.owlCarousel({
        items: 1,
        slideSpeed: 2000,
        // nav: true,
        autoplay: true,
        loop: true,
        responsiveRefreshRate: 200,
      }).on('changed.owl.carousel', syncPosition);

      sync2
        .on('initialized.owl.carousel', function() {
          sync2.find(".owl-item").eq(0).addClass("current");
        })
        .owlCarousel({
          items: slidesPerPage,
          // nav: true,
          smartSpeed: 200,
          slideSpeed: 500,
          dots: false,
          slideBy: slidesPerPage,
          responsiveRefreshRate: 200
        }).on('changed.owl.carousel', syncPosition2);

      function syncPosition(el) {

        var count = el.item.count - 1;
        var current = Math.round(el.item.index - (el.item.count / 2) - .5);

        if (current < 0) {
          current = count;
        }
        if (current > count) {
          current = 0;
        }


        sync2
          .find(".owl-item")
          .removeClass("current")
          .eq(current)
          .addClass("current");
        var onscreen = sync2.find('.owl-item.active').length - 1;
        var start = sync2.find('.owl-item.active').first().index();
        var end = sync2.find('.owl-item.active').last().index();

        if (current > end) {
          sync2.data('owl.carousel').to(current, 100, true);
        }
        if (current < start) {
          sync2.data('owl.carousel').to(current - onscreen, 100, true);
        }
      }

      function syncPosition2(el) {
        if (syncedSecondary) {
          var number = el.item.index;
          sync1.data('owl.carousel').to(number, 100, true);
        }
      }

      sync2.on("click", ".owl-item", function(e) {
        e.preventDefault();
        var number = $(this).index();
        sync1.data('owl.carousel').to(number, 300, true);
      });
    });
  </script>
</body>

</html>