@extends('layouts/yamgroup/b-n/master')
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Cetak Laporan</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">cetak</li>
                    </ol>
                </div>
            </div>
        </div>
        @include('layouts.yamgroup.b-n.patrials._flash')
        <div class="row">
            <div class="col-lg-7 col-md-3 m-t-20">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Cetak Laporan</h4>
                        {!! Form::open(['route'=>'cetak.laporan-post.pdf', 'class'=> 'form-horizontal
                        form-material']) !!}
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('bulan') ? 'has-error' : '' }}">
                            <label class="col-md-12">Bulan</label>
                            <div class="col-md-12">
                                {!! Form::selectMonth('bulan', null, ['id' => 'title', 'class' => 'form-control
                                form-control-line', 'placeholder' => '-- Bulan --']) !!} {!!
                                $errors->first('bulan', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="col-md-12">Tahun</label>
                            <div class="col-md-12">
                                {!! Form::selectRange('tahun', 1980,2021,null, ['id' => 'title', 'class' => 'form-control
                                form-control-line', 'placeholder' => '-- Tahun --']) !!} {!!
                                $errors->first('email', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                {!! Form::submit("CETAK LAPORAN", ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection