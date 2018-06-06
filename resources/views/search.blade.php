@extends('layouts/eonesia/b-n/master')
@section('content') 
<div id = "page-wrapper" > <div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Result Kode Verifikasi Event</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li class="active">Kode Verifikasi Event</li>
            </ol>
        </div>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="white-box">
            <form  class="form-horizontal form-material">
                         @foreach($data as $da)

                         <div class="form-group">
                                <label class="col-md-12">Kode</label>
                                <div class="col-md-12">
                                        <span class="badge badge-pill badge-info">{{ $da->kode }}</span>
                                   
                                </div>
                                </div>

                         <div class="form-group">
                                <label class="col-md-12">Nama</label>
                                <div class="col-md-12">
                                        <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->nama }}">
                                </div>
                         </div>
                         <div class="form-group {{ $errors->has('start_register') ? 'has-error' : '' }}">
                                <label class="col-md-12">Alamat</label>
                        <div class="col-md-12">
                            <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->alamat }}">                              </div>
                         </div>

                         <div class="form-group">
                        <label class="col-md-12">Provinsi</label>
                        <div class="col-md-12">
                            <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->provinsi }}">
                        </div>
                         </div>
                         <div class="form-group">
                        <label class="col-md-12">Kabupaten</label>
                        <div class="col-md-12">
                            <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->kabupaten }}">
                        </div>
                         </div>

                         <div class="form-group">
                        <label class="col-md-12">Kecamatan</label>
                        <div class="col-md-12">
                            <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->kecamatan }}">
                        </div>
                         </div>

                         <div class="form-group">
                        <label class="col-md-12">Kelurahan</label>
                        <div class="col-md-12">
                            <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->kelurahan }}">
                        </div>
                         </div>

                        <div class="form-group">
                        <label class="col-md-12">Tangggal Lahir</label>
                        <div class="col-md-12">
                            <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->tanggal_lahir }}">
                        </div>
                        </div>

                        <div class="form-group">
                        <label class="col-md-12">No Handphone</label>
                        <div class="col-md-12">
                            <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->handphone }}">
                        </div>
                        </div>
                        <div class="form-group">
                                <label class="col-md-12">Status</label>
                                <div class="col-md-12">
                                        <span class="badge badge-danger">{{ $da->status }}</span>
                                </div>
                                </div>
                    </form> 
                        @if( $da->status == 'Belum DI Verifikasi')
                                <td>
                                        {!! Form::model($data, ['route' => ['member.update', $da->id], 'method' => 'put']) !!}
                                        <input type="hidden" name="id" value="{{ $da->id }}">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Verifikasi Kode</label>
                                            <input type="hidden" name="status" value="Sudah di Verifikasi">
                                        </div>
                                        {!! Form::submit('Verifikasi Kode', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                                </td>
                                
                                @endif
                    
                   

</div>
</div>
</div>
@endforeach
@endsection