@extends('layouts/eonesia/b-n/master')
@section('content') 
<div id = "page-wrapper" > 
    <div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">DATA EVENT</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li class="active">Data Event</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
        <div class="col-sm-2">
            <a href="{{ route('event.create') }}" class="btn btn-danger btn-block waves-effect waves-light">
                <i class="fa fa-plus" aria-hidden="true"></i>
                Tambah Kegiatan</a>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Penyelenggara</th>
                                <th>Nama Event</th>
                                <th>Start</th>
                                <th>Finish</th>
                                <th>keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        {{ $no = 1 }}
                        @foreach ($activities as $event )
                        <tbody>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $event->penyelenggara }}</td>
                                <td>{{ $event->nama_event }}</td>
                                <td>{{ $event->start_event }} </td>
                                <td>{{ $event->finish_event }}</td>
                                <td>{{ $event->keterangan }}</td>
                                <td>
                                    <a href="#" class="btn btn-success  waves-effect waves-light">
                                        <i class="fa fa-edit" aria-hidden="true"></i>
                                        Edit</a>
                                    <a href="#" class="btn btn-danger  waves-effect waves-light">
                                        <i class="fa fa-trash-o" aria-hidden="true"></i>
                                        Delete</a>
                                </td>
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{ $activities->links() }}
                </div>
            </div>
        </div>
    </div>
    @endsection