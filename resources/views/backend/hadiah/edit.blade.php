@extends('layouts/eonesia/b-n/master') @section('content')
<div class="page-wrapper">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h4 class="text-themecolor">Edit Hasil Undian</h4>
            </div>
            <div class="col-md-7 align-self-center text-right">
                <div class="d-flex justify-content-end align-items-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0)">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{ route('hadiah.index') }}">Undian</a>
                        </li>
                        <li class="breadcrumb-item active">{{ strtoupper($hadiah->member->nama) }}</li>
                    </ol>
                </div>
            </div>
        </div>
        <hr> @include('layouts.eonesia.b-n.patrials._flash')

        <div class="row">
            <!-- column -->
            <div class="col-lg-7 col-md-3 m-t-20">
                <div class="card">
                    <div class="card-body">
                        <form id="edit-pemenang" action="{{ route('hadiah.update',['id' => $hadiah->id]) }}" method="POST">
                            @csrf
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="member_id" value="{{ $hadiah->member_id }}">
                            <input type="hidden" name="kode" value="{{ $hadiah->member_id }}">
                            <div class="form-group">
                                <p class="font-weight-bold">{{ $hadiah->member->nama.' - '.$hadiah->kode }}</p>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Hadiah</label>
                                <input type="text" name="hadiah" id="hadiah" class="form-control form-control-line" value="{{ $hadiah->hadiah }}">
                                {!!
                                $errors->first('hadiah', '<p class="help-block">:message</p>') !!}
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Status Kupon</label>
                                <select name="is_hangus" id="is_hangus" class="form-control form-control-line text-center">
                                    <option value="">-- Status --</option>
                                    <option value="1" {{ ($hadiah->is_hangus == '1' ? 'selected' : '' ) }}>Invalid</option>
                                    <option value="0" {{ ($hadiah->is_hangus == '0' ? 'selected' : '' ) }}>Valid</option>
                                </select>
                                {!!
                                $errors->first('is_hangus', '<p class="help-block">:message</p>') !!}
                            </div>
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Update</button>
                        </form>
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
            $('#box-awal').fadeOut(1000);
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
                            // nama.classList.add("inblok");
                            var namamember = document.createTextNode(member['nama']);
                            nama.appendChild(namamember);
                            box.append(nama);
                            setTimeout(function() {
                                nama.classList.add("show");
                            }, 300 * key);
                        });
                        setTimeout(function() {
                            $('#hasil-nama').hide();
                            acakPemenang();
                        }, 300 * members.length);

                    }
                }
            });
        }



        function konfirmasiPemenang(val) {
            var member_id = $('#member_id').val();
            var kode = $('#kode').val();
            var hadiah = $('#hadiah').val();
            var is_hangus = val;
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('store-pemenang') ?>",
                method: 'POST',
                cache: false,
                data: {
                    member_id: member_id,
                    kode: kode,
                    hadiah: hadiah,
                    is_hangus: is_hangus,
                    _token: token
                },
                success: function(data) {
                    showFirst();
                },
                error: function(xhr) {

                    var errors = xhr.responseJSON;
                    $.each(errors.errors, function(i, error) {
                        if (i == 'hadiah') {
                            $('#error').append('<b style="color:red">' + error[0] + '</b>');
                        }
                    });
                }
            })
        }

        function showFirst() {
            // $('#hasil-nama').hide();
            $('#box-awal').show()
            $('#member_id').val('');
            $('#kode').val('');
            $('#konfirmasi').hide();
            $('#hasil-undian').empty();
            $('#error').empty();
            $('#hadiah').empty();
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
                        console.log(data.result)
                        var text = 'Selamat kepada ' + data.result.nama + ' dengan kupon (' + data.result.kode + ').' + '<br/>Sales :  ' + data.result.namalengkap + ' <br/>Dealer : ' + data.result.nama_dealer;
                        $("#member_id").val(data.result.id);
                        $("#kode").val(data.result.kode);
                        $('#undian-button').hide();
                        $('#after').fadeIn(1000);
                    } else {
                        var text = 'Tidak ada Customer tersisa.';
                    }
                    $("#hasil-undian").append(text);
                    $('#hasil-undian').fadeIn(1000);
                    $('#konfirmasi').fadeIn(1000);
                }
            });
        }
    });
</script>

@endpush
@endsection