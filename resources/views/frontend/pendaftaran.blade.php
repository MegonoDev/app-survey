<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0" />
  <title>EONESIA</title>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
  <link rel="shortcut icon" href="https://eonesia.id/img/icon.png" type="image/x-icon">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
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
<body>
  <div class="container">
    <br>
    <p class="text-center">
      <h4 class="text-center">Silahkan isi data diri untuk mendapatkan nomor<br> undian Bahagia Keluarga Bersama YAMAHA</h4>
      </a>
    </p>
    <hr>
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <header class="card-header">
            <h6 class="card-title mt-2">INFORMASI PERSONAL ANDA</h6>
            <span>Isi Data Diri Anda</span>
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
  <script type="text/javascript">
    $("select[name='id_prov']").change(function() {
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
          $("select[name='id_kab']").html('');
          $("select[name='id_kab']").html(data.options);
        }
      });
    });
  </script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
