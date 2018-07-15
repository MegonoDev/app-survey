@extends('layouts/eonesia/b-n/master') 
@section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Member</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div>
            </div>
        </div>
        <hr>
            @include('layouts.eonesia.b-n.patrials._flash')            
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- Tab panes -->
                        <div class="card-body">
                            <form class="form-horizontal form-material" method="POST" action="{{ route('search') }}"> @csrf
                                <div class="form-group">
                                    <label class="col-md-12">Verifikasi Kode</label>
                                    <div class="col-md-12">
                                        <input type="text" name="kode" placeholder="Masukan Kode & Enter" class="form-control form-control-line">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- column -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Member Test Drive</h4>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>T.Tgl Lahir</th>
                                            <th>Alamat</th>
                                            <th>Kode</th>
                                            <th>Penyelenggara</th>
                                            <th>Kota</th>
                                            <th>Lokasi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <?php $no = 1; ?>
                        @foreach ($members as $member )
                        <tbody>
                            <tr>
                                <td>{{$no++}}</td>
                                <td>{{ $member->nama }}</td>
                                <td>{{ $member->tempat_lahir }}, {{ $member->tanggal_lahir }} </td>
                                <td>{{ $member->alamat }} </td>
                                <td><span class="badge badge-warning">{{ $member->kode }}</span></td>
                                <td>{{ $member->dealereo->nama }}</td>
                                <td>{{ $member->dealereo->role->name }}</td>
                                <td>{{ $member->location->nama }}</td>
                                @if( $member->status == '0')
                                <td>
                                    <span class="badge badge-danger">Belum Di Verifikasi</span>
                                </td>
                                @else
                                <td>
                                    <span class="badge badge-success">Sudah Di Verifikasi</span>
                                </td>
                                @endif
                            </tr>
                        </tbody>
                        @endforeach
                    </table>
                    <hr>
                    <div class="float-left"> {{ $members->links() }}</div><div class="float-right"><span class="badge badge-dark"> Jumlah Data : <b>{{ $totalMember }} </b></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection