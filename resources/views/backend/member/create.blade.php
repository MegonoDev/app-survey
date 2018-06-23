@extends('layouts/eonesia/b-n/master')
@section('content') 
<div id = "page-wrapper" > <div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Form Create Event</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li class="active">Create Event</li>
            </ol>
        </div>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="white-box">
         {!! Form::open(['route'=>'member.store', 'class'=> 'form-horizontal form-material']) !!}
         {{ csrf_field() }}
            @include('backend.member._form')
        {!! Form::close() !!}
        </div>
    </div>
</div>
@include('backend.activitie.script')
@endsection
