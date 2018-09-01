@extends('layouts/eonesia/b-n/master')
@section('content')
<div class="page-wrapper">
  <div class="container-fluid">
    <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Detail Customer</h4>
      </div>
      <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="javascript:void(0)">Home</a>
            </li>
            <li class="breadcrumb-item active">customer</li>
          </ol>
        </div>
      </div>
    </div>
    <div class="row">
    <div class="col-lg-6 col-xlg-9 col-md-7">
      <div class="card">
        <!-- Tab panes -->
        <div class="card-body">
          <form class="form-horizontal form-material">
            @foreach($details as $detail)
            <div class="form-group">
              <label class="col-md-12"><b>Data ini di Buat {{ $detail->created_at }} </b></label>
              <div class="col-md-12">
                <span class="badge badge-pill badge-info">{{ $detail->detail }}</span>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Nama</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->nama }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Jenis Kelamin</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->jenis_kelamin }}">
              </div>
            </div>
             <div class="form-group">
              <label class="col-md-12">Alamat</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->alamat }}"> </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Kabupaten & Provinsi</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->kabupaten->nama }} - {{ $detail->provinsi->nama }}"> </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Tempat Lahir</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->tempat_lahir }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Tangggal Lahir</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->tanggal_lahir }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">No Handphone</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->handphone }}">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-lg-6 col-xlg-9 col-md-7">
      <div class="card">
        <!-- Tab panes -->
        <div class="card-body">
          <form class="form-horizontal form-material">
            <div class="form-group">
              <label class="col-md-12">Kode</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->kode }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Status Verifikasi</label>
              <div class="col-md-12">
                {!! $detail->StatusVerifikasiAt !!}
              </div>
            </div>
            <div class="form-group {{ $errors->has('start_register') ? 'has-error' : '' }}">
              <label class="col-md-12">Pekerjaan</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->pekerjaan }}"> </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Perkawinan</label>
              <div class="col-md-12">
                <input type="text" id="title" class="form-control form-control-line" value="{{ $detail->perkawinan }}">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Kendaraan</label>
              <div class="col-md-12">
                <span>
                    {!! str_replace(",", " - ", $detail->kendaraan) !!}
                </span><hr>

              </div>
            </div>
            <div class="form-group">
              <label class="col-md-12">Jawaban Dari pertanyaan</label>
              <div class="col-md-12">
                  <p>Jawaban 1</p>
                <input type="text"  class="form-control form-control-line" value="{{ $detail->motorbaru }}">
              </div>
              <div class="col-md-12">
                  <p>Jawaban 2</p>
                <input type="text"  class="form-control form-control-line" value="{{ $detail->motorbaru1 }}">
              </div>

            </div>
            @endforeach
          </form>
        </div>
      </div>
    </div>
  </div>
  </div>
</div>
@endsection

