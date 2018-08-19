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
         {!! Form::open(['route'=>'customers.store', 'class'=> 'form-horizontal form-material']) !!}
         {{ csrf_field() }}
            @include('backend.member._form')
        {!! Form::close() !!}
      </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
        document
            .getElementById("field_terms")
            .setCustomValidity("Mohon ceklis untuk setuju dengan ketentuan dan kebijakan");
    </script>
    <script type="text/javascript">
        $("select[name='id_prov']").change(function () {
            var id_prov = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('kabupaten-select') ?>",
                method: 'POST',
                data: {
                    id_prov: id_prov,
                    _token: token
                },
                success: function (data) {
                    $("select[name='id_kab'").html('');
                    $("select[name='id_kab'").html(data.options);
                }
            });
        });
    </script>
@endsection
