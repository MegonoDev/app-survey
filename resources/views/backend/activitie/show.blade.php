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
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Event Eonesia</h4>
                        <h6 class="card-subtitle">
                            Tambah Kegiatan
                        </h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Alamat</th>
                                        <th>Tempat, Tanggal Lahir</th>
                                        <th>No Handphone</th>
                                        <th>Kode</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <?php $no = 1; ?>
                                @foreach($members as $member)
                                <tbody>
                                    <tr>
                                        <td>{{  $no++ }}</td>
                                        <td>{{ $member->nama }}</td>
                                        <td>{{ $member->jenis_kelamin }}</td>
                                        <td>{{ $member->alamat }}</td>
                                        <td>{{ $member->tempat_lahir }}, {{ $member->tanggal_lahir }}</td>
                                        <td>+{{ $member->handphone }}</td>
                                        <td>
                                        <span class="label label-warning"><b>{{ $member->kode }}</b></span>
                                        </td>
                                        <td>
                                            @if($member->status == 'Belum DI Verifikasi')
                                            <span class="label label-danger">{{ $member->status }} member</span>
                                             @else
                                             <span class="label label-info">{{ $member->status }} member</span>
                                             @endif
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection