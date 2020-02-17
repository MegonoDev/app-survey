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
          $("#id_kab option").remove();
          $("#id_kab").append(data.options);
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
          $("#id_seri option").remove();
          $("#id_seri").append(data.options);
        }
      });
    });
  </script>
  @endpush
@endsection
