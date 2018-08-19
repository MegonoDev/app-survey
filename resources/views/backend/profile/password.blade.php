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
        <div class="row">
            <!-- Column -->
            <div class="col-lg-4 col-xlg-3 col-md-5">
                <div class="card">
                    <div class="card-body">
                        <center class="m-t-30">
                            <img src="http://www.408w130.com/admin-855.jpg" class="img-circle" width="150"/>
                            <h4 class="card-title m-t-10">{{ $users->name }}</h4>
                            <div class="row text-center justify-content-md-center">
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link">
                                        <i class="icon-people"></i>
                                        <font class="font-medium">254</font>
                                    </a>
                                </div>
                                <div class="col-4">
                                    <a href="javascript:void(0)" class="link">
                                        <i class="icon-picture"></i>
                                        <font class="font-medium">54</font>
                                    </a>
                                </div>
                            </div>
                        </center>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-xlg-9 col-md-7">
                <div class="card">
                    <!-- Tab panes -->
                    <div class="card-body">
                        <h4 class="card-title">Ganti Password</h4>
                        {!! Form::model($users, ['route' => ['updatepassword', $users],'method'=>'PUT',
                        'class' => 'form-horizontal form-material']) !!}
                        {{ csrf_field() }}

                        {!! Form::hidden('id', $users->id) !!}
                        {!! Form::hidden('name', $users->name) !!}
                        {!! Form::hidden('email', $users->email) !!}
                        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                            <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
                                {!! Form::label('password', 'Password', ['class' => 'col-md-3
                                control-label'])!!}
                                <div class="col-md-12">
                                    {!! Form::password('password', ['class' => 'form-control']) !!} {!!
                                    $errors->first('password', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div
                                class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                                {!! Form::label('password_confirmation', 'Re-Password', ['class' => 'col-md-3
                                control-label']) !!}
                                <div class="col-md-12">
                                    {!! Form::password('password_confirmation', ['class' => 'form-control']) !!} {!!
                                    $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
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
