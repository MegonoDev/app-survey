@extends('layouts/eonesia/b-n/master')
@section('content') 
<div id = "page-wrapper" > 
    <div class="container-fluid">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">DATA MEMBER</h4>
        </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li>
                    <a href="#">Dashboard</a>
                </li>
                <li class="active">Data Member</li>
            </ol>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /row -->
    <div class="row">
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Event</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Kode</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <?php $no = 1; ?>
                        @foreach ($members as $member )
                        <tbody>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $member->activitie->nama_event }}</td>
                                <td>{{ $member->nama }}</td>
                                <td>{{ $member->alamat }} </td>
                                <td>{{ $member->kode }}</td>
                                @if( $member->status == 'Belum DI Verifikasi')
                                <td>
                                    <span class="badge badge-danger">{{ $member->status }}</span>
                                </td>
                                @else
                                <td>
                                    <span class="badge badge-success">{{ $member->status }}</span>
                                </td>
                                @endif
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    {{ $members->links() }}
                </div>
            </div>
        </div>
    </div>
    @endsection