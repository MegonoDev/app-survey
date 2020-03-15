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
                    <div class="card-body" id="card-undian" style="height:12em">
                        <form id="konfirmasi" class="form-horizontal form-material">@csrf
                            <input type="hidden" name="member_id" id="member_id" value="">
                            <div class="col-md-12 text-center my-4">
                                <h4 id="hasil-undian"></h4>
                            </div>
                            <input type="hidden" name="kode" id="kode" value="">
                            <div class="form-group text-center" id="after" style="display:none">
                                <button type="button" value="0" name="is_hangus" class="konfirmasi-button btn btn-success"><i class="fa fa-check"></i> Konfirmasi</button>
                                <button type="button" value="1" name="is_hangus" class="konfirmasi-button btn btn-outline-danger"><i class="fa fa-times"></i> Hapus Kupon</button>
                            </div>
                        </form>
                        <div id="hasil-nama"></div>
                        <div id="box-awal">
                            <form class="form-horizontal form-material" id="form-undian">@csrf
                                <div class="form-group text-center my-4">
                                    <label class="col-md-12">Pilih Member Secara Acak</label>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <button type="button" id="undian-button" class="btn btn-md btn-primary col-sm-4 my-1">Acak Pemenang</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>
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
            // $('#hasil-undian').empty();
            $('#box-awal').hide();
            // $('#hasil-undian').fadeOut(400);
            randomAnimation();
        });

        $('.konfirmasi-button').click(function() {
            konfirmasiPemenang($(this).val());
        })

        function randomAnimation() {
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('all-pemenang') ?>",
                method: 'POST',
                cache: false,
                data: {
                    go: 'random',
                    _token: token
                },
                success: function(data) {
                    if (data.result) {
                        var members = data.result;

                        var box = $('#hasil-nama').show();
                        $.each(members, function(key, member) {
                            // $(this).append('<span>'+member['nama']+'<span>');
                            // box.addClass('inblok'); 
                            var nama = document.createElement("span");
                            var kelas = key % 2 == 0 ? "left" : "right";
                            nama.classList.add(kelas);

                            nama.classList.add("inblok");
                            var namamember = document.createTextNode(member['nama']);
                            nama.appendChild(namamember);
                            box.append(nama);
                            setTimeout(function() {
                                nama.classList.add("show");
                            }, 300 * key);
                        });
                        setTimeout(function() {
                                acakPemenang();
                            }, 300 * members.length);

                    }
                }
            });
        }



        function konfirmasiPemenang(val) {
            var member_id = $('#member_id').val();
            var kode = $('#kode').val();
            var is_hangus = val;
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('store-pemenang') ?>",
                method: 'POST',
                cache: false,
                data: {
                    member_id: member_id,
                    kode: kode,
                    is_hangus: is_hangus,
                    _token: token
                },
                success: function(data) {
                    showFirst();
                }
            })
        }

        function showFirst() {
            $('#hasil-nama').hide();
            $('#box-awal').show()
            $('#member_id').val('');
            $('#kode').val('');
            $('#after').hide();
            $('#hasil-undian').empty();
            $('#hasil-undian').hide();
            $('#undian-button').fadeIn(1000);
        }

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
                    if (data.result) {
                        var text = 'Selamat kepada ' + data.result.nama + ' dengan kupon ( ' + data.result.kode + ' ) !! ';

                        $("#member_id").val(data.result.id);
                        $("#kode").val(data.result.kode);
                        $('#undian-button').hide();
                        $('#after').fadeIn(1000);
                    } else {
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