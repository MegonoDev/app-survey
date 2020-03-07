@extends('layouts/eonesia/b-n/master')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Create Data Customer</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)">Home</a>
            </li>
            <li class="breadcrumb-item active">Customer</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="col-lg-8 col-xlg-9 col-md-7">
      <div class="card">
        <!-- Tab panes -->
        <div class="card-body">
          @include('backend.member._form')
        </div>
      </div>
    </div>
  </div>
</div>
@push('scripts')
<script type="text/javascript">
  $(document).ready(function() {

    var provinsi = "{{ old('id_prov') }}";
    var kabupaten = "{{ old('id_kab') }}";
    var kecamatan = "{{ old('id_kec') }}";
    var kelurahan = "{{ old('id_kel') }}";

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
@endpush
@endsection