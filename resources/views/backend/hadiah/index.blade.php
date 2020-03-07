@extends('layouts/eonesia/b-n/master') @section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Data Hasil Undian</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item active">Undian</li>
                    </ol>
                </div>
            </div>
        </div>
        <hr> @include('layouts.eonesia.b-n.patrials._flash')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <!-- Tab panes -->
                    <div class="card-body">
                        <form class="form-horizontal form-material" id="form-undian">@csrf
                            <div class="form-group text-center">
                                <label class="col-md-12 my-2">Pilih Member Secara Acak</label>
                                <div class="col-md-12">
                                    <h1 id="hasil-undian" style="display:none"></h1>
                                    <div class="form-group">
                                        <button type="button" id="undian-button" class="btn btn-md btn-primary col-sm-4 my-1">Acak Pemenang</button>
                                    </div>
                                </div>
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
                    <h4 class="card-title">Pemenang Undian <a href="{{ route('hadiah.index') }}" class="btn btn-md btn-success mx-2"><i class="fa fa-refresh"></i> Refresh data</a> </h4>
                    <div class="table-responsive">
                        <table class="table">
                            <thead class="thead-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>T.Tgl Lahir</th>
                                    <th>Alamat</th>
                                    <th>Kode</th>
                                    <th>No handphone</th>
                                    <th>Daftar</th>
                                    <th>Detail</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <?php $no = 1; ?> @foreach ($members as $member )
                            <tbody>
                                <tr>
                                    <td>{{$no++}}</td>
                                    <td>{{ $member->member->nama }}</td>
                                    <td>{{ $member->member->tempat_lahir }}, {{ $member->member->tanggal_lahir }} </td>
                                    <td>{{ $member->member->alamat }} </td>
                                    <td><span class="badge badge-warning">{{ $member->kode }}</span></td>
                                    <td>{{ $member->member->handphone }}</td>
                                    <td>{{ $member->CreatedAt }}</td>
                                    <td>
                                        <a href="{{ route('detail.customer',$member->kode) }}" data-toggle="tooltip" data-placement="top">
                                            <span class="badge badge-primary" data-toggle="tooltip" data-placement="top" title="Detail {{ $member->member->nama }}">
                                                <i class="fa fa-eye"> Detail</i>
                                            </span>
                                        </a>
                                    </td>
                                    <td>
                                        {!! $member->member->StatusVerifikasiAt !!}
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                        <hr>
                        <div class="float-left"> {{ $members->links() }}</div>
                        <div class="float-right"><span class="badge badge-dark"> Jumlah Data : <b>{{ $totalMember }} </b></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@push('scripts')
<script>
    $(document).ready(function() {

        $('#undian-button').click(function() {
                $('#hasil-undian').empty();
                $('#hasil-undian').fadeOut(400);
            acakPemenang();
        })

        function acakPemenang() {
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('undi-pemenang') ?>",
                method: 'POST',
                cache: false,
                data: {
                    go: 'random',
                    _token: token
                },
                success: function(data) {
                    if(data.result){
                    var text = 'Selamat kepada ' + data.result.nama + ' dengan kupon ( ' + data.result.kode + ' ) !! ';
                    }else{
                        var text = 'Tidak ada Customer tersisa.';
                    }
                    $("#hasil-undian").append(text);
                    $('#hasil-undian').fadeIn(1000);
                }
            });
        }
    });
</script>

@endpush
@endsection