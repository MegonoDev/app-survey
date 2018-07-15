@extends('layouts/eonesia/b-n/master')
@section('content') 
<div class="page-wrapper">
<div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Event Eonesia</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Verifikasi kode</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Tab panes -->
            <div class="card-body">
                    <form  class="form-horizontal form-material">
                            @if(count($getKode) == "")
                            <center>
                                <h2 class="text-themecolor"><b><font color="black">Kode Yang Anda Cari Tidak Ada !!!</font></b></h2>
                            </center>
                            @else
                            @foreach($getKode as $kode)
                            <div class="form-group">
                                   <label class="col-md-12">Kode</label>
                                   <div class="col-md-12">
                                        <span class="badge badge-pill badge-info">{{ $kode->kode }}</span>       
                                   </div>
                                   </div>
   
                            <div class="form-group">
                                   <label class="col-md-12">Nama</label>
                                   <div class="col-md-12">
                                           <input type="text"  id="title" class="form-control form-control-line" value="{{ $kode->nama }}">
                                   </div>
                            </div>
                            <div class="form-group {{ $errors->has('start_register') ? 'has-error' : '' }}">
                                   <label class="col-md-12">Alamat</label>
                           <div class="col-md-12">
                               <input type="text"  id="title" class="form-control form-control-line" value="{{ $kode->alamat }}">                              </div>
                            </div>
   
                            <div class="form-group">
                               <label class="col-md-12">Tempat Lahir</label>
                               <div class="col-md-12">
                                   <input type="text"  id="title" class="form-control form-control-line" value="{{ $kode->tempat_lahir }}">
                               </div>
                               </div>
   
                           <div class="form-group">
                           <label class="col-md-12">Tangggal Lahir</label>
                           <div class="col-md-12">
                               <input type="text"  id="title" class="form-control form-control-line" value="{{ $kode->tanggal_lahir }}">
                           </div>
                           </div>
   
                           <div class="form-group">
                           <label class="col-md-12">No Handphone</label>
                           <div class="col-md-12">
                               <input type="text"  id="title" class="form-control form-control-line" value="{{ $kode->handphone }}">
                           </div>
                           </div>
                           <div class="form-group">
                                   <label class="col-md-12">Status</label>
                                   <div class="col-md-12">
                                       @if($kode->status == 0)
                                           <span class="badge badge-danger">Belum Di Verikasi</span>
                                        @else
                                          <span class="badge badge-info">Sudah Di Verifikasi</span>
                                        @endif
                                   </div>
                                   </div>
                       </form> 
                                @if( $kode->status == '0')
                                   <td>
                                           {!! Form::model($getKode, ['route' => ['verifikasiKode', $kode->id], 'method' => 'put']) !!}
                                           <input type="hidden" name="id" value="{{ $kode->id }}">
                                           <div class="form-group">
                                               <label for="exampleInputEmail1">Verifikasi Kode</label>
                                               <input type="hidden" name="status" value="1">
                                               <input type="hidden" name="kode" value="{{ $kode->kode }}">
                                               <input type="hidden" name="nama" value="{{ $kode->nama }}">
                                           </div>
                                           {!! Form::submit('Verifikasi Kode', ['class' => 'btn btn-primary']) !!}
                                   {!! Form::close() !!}
                                   </td> 
                                   @endif
                                   @endforeach
                                   @endif
                </form>
            </div>
        </div>
       
    </div>
</div>
</div>

@endsection