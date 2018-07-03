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
                        <li class="breadcrumb-item active">Event</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Tab panes -->
            <div class="card-body">
                    <form  class="form-horizontal form-material">
                            @if(count($data) == "")
                            <center>
                                <h2 class="text-themecolor"><b><font color="black">Kode Yang Anda Cari Tidak Ada !!!</font></b></h2>
                            </center>
                            @else
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
                               <label class="col-md-12">Tempat Lahir</label>
                               <div class="col-md-12">
                                   <input type="text"  id="title" class="form-control form-control-line" value="{{ $da->tempat_lahir }}">
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
                                       @if($da->status == 'Belum DI Verifikasi')
                                           <span class="badge badge-danger">{{ $da->status }}</span>
                                        @else
                                          <span class="badge badge-info">{{ $da->status }}</span>
                                        @endif
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
                                               <input type="hidden" name="kode" value="{{ $da->kode }}">
                                               <input type="hidden" name="nama" value="{{ $da->nama }}">
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