@extends('layouts/eonesia/b-n/master') @section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Create Event Eonesia</h4>
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
                    {!! Form::open(['route'=>'event.store', 'class'=> 'form-horizontal
                    form-material', 'files' => TRUE]) !!}
                    {{ csrf_field() }}
                    @include('backend.activitie._form') {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
@include('backend.activitie.script')
@endsection