@extends('layouts/eonesia/b-n/master')
 @section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Profile</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Profile</li>
                    </ol>
                </div>
            </div>
        </div>
        @include('layouts.eonesia.b-n.patrials._flash')
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <img src="{{ asset('eonesia/images/admin.jpeg') }}" class="img-circle" width="150"/>
                            <h4 class="card-title m-t-10">{{ $users->name }}</h4>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link" data-toggle="tooltip" data-placement="top" title="Kode Dealer Anda">
                                        <i class="icon-people"></i>
                                        <font class="font-medium">{{ Auth::user()->dealereo->kode_dealer }}</font>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link" data-toggle="tooltip" data-placement="top" title="{{ $title }}">
                                        <i class="icon-picture"></i>
                                        <font class="font-medium">{{ $counts }}</font>
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <div class="card-body">
                            <h4 class="card-title">Edit Profile</h4>
                        {!! Form::model($users, ['route' => ['updateprofile', $users],'method'=>'PUT',
                        'class' => 'form-horizontal form-material']) !!}
                        {{ csrf_field() }}
                                {!! Form::hidden('id', $users->id, ['id' => 'title', 'class' => 'form-control
                                form-control-line', 'placeholder' => 'Input Nama Admin']) !!}

                             <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="col-md-12">Nama</label>
                            <div class="col-md-12">
                                {!! Form::text('name', $users->name, ['id' => 'title', 'class' => 'form-control
                                form-control-line', 'placeholder' => 'Input Nama Admin']) !!} {!!
                                $errors->first('name', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                {!! Form::email('email', $users->email, ['id' => 'title', 'class' =>
                                'form-control form-control-line', 'placeholder' => 'Input Email Admin']) !!}
                                {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group {{ $errors->has('no_handphone') ? 'has-error' : '' }}">
                            <label class="col-md-12">No Handphone</label>
                            <div class="col-md-12">
                                {!! Form::number('no_handphone', $users->no_handphone, ['id' => 'title', 'class' =>
                                'form-control form-control-line', 'placeholder' => 'Input Email Admin']) !!}
                                {!! $errors->first('no_handphone', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-12">
                                {!! Form::submit('update profile', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
