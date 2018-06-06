<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>EONESIA</title>

        <!-- CSS -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="{{ asset('eonesia/f-n/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link
            href="{{ asset('eonesia/f-n/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
        <!-- <link rel="stylesheet" href="css/materialize.min.css"> -->
        <link rel="stylesheet" type="text/css" href="{{ asset('eonesia/f-n/css/animate.css')}}">
        <link rel="shortcut icon" href="https://eonesia.id/img/icon.png" type="image/x-icon">

    </head>
    <body>
        
        <div class="loader  animated infinite bounce"></div>
        <div id="particles-js" ></div>
        <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div>
        <div class="container">
            <div class="row">
                <div class="card-panel tea pink darken-2  waves-light">
                    <span class="event-tersedia-bg" id="">
                        <h4 class="center white-text">SILAHKAN DAFTARKAN DIRI ANDA DI EVENT {{ $pendaftaran->nama_event}}</h4>
                    </span>
                    <div class="col s12 m12">
                        <div class="card z-depth-5">
                            <div class="card-content white-text">
                                <div class="row">
                                    {!! Form::open(['route'=>'member.store' ]) !!}
                                    <input type="hidden" name="activitie_id" value="{{ $pendaftaran->id }}">
                                        <div class="row">
                                        <div class="input-field col s12">
                                        <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                                            <label  for="first_name">Nama Kamu</label>
                                                {!! Form::text('nama', null, ['id' => 'first_name', 'class' => 'form-validate
                                                form-control-line', 'placeholder' => 'Input Nama Lengkap Kamu']) !!} {!!
                                                $errors->first('nama', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                                                <label  for="first_name">Alamat Kamu</label>
                                                    {!! Form::text('alamat', null, ['id' => 'first_name', 'class' => 'form-validate
                                                    form-control-line', 'placeholder' => 'Input Alamat Lengkap Kamu']) !!} {!!
                                                    $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            </div>

                                            <div class="row">
                                                <div class="input-field col m12 l3 s12">
    
                                                    {!! Form::select('provinsi', ['jawa tengah' => 'jawa tengah', 'riau' => 'riau'],null, ['class' => 'form-control form-control-line', 'placeholder' => 'Provinsi']); !!}
                                                </div>
                                
                                                <div class="input-field col m12 l3 124">
                                                    {!! Form::select('kabupaten', ['pekalongan' => 'pekalongan', 'dumai' => 'dumai'],null, ['class' => 'form-control form-control-line', 'placeholder' => 'Kabupaten']); !!}
                                                </div>
                                
                                                <div class="input-field col m12 l3 124">
                                                    {!! Form::select('kecamatan', ['pekalongan barat' => 'pekalongan barat', 'dumai barat' => 'dumai barat'],null, ['class' => 'form-control form-control-line', 'placeholder' => 'Kecamatan']); !!}
                                                </div>

                                                <div class="input-field col m12 l3 124">
                                                    {!! Form::select('kelurahan', ['bojong barat' => 'bojong barat', 'regojo barat' => 'regojo barat'],null, ['class' => 'form-control form-control-line', 'placeholder' => 'Kecamatan']); !!}
                                                </div>
                                            </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <div class="form-group {{ $errors->has('handphone') ? 'has-error' : '' }}">
                                                    <label  for="first_name">No Handphone Kamu</label>
                                                        {!! Form::number('handphone', null, ['id' => 'first_name', 'class' => 'form-validate
                                                        form-control-line', 'placeholder' => 'Input No Handphone Kamu']) !!} {!!
                                                        $errors->first('handphonemat', '<p class="help-block">:message</p>') !!}
                                                    </div><span><font color="black"> *Pastikan
                                                    Nomor Handphone Anda Benar, Kode Event Akan Di kirim ke nomor Handphone</font></span>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                                                    <label  for="first_name">No Handphone Kamu</label>
                                                        {!! Form::date('tanggal_lahir', null, ['id' => 'first_name', 'class' => 'form-validate
                                                        form-control-line']) !!} {!!
                                                        $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
                                                    </div>
                                            </div>
                                        </div>

                                        <label>
                                            <input type="checkbox"/>
                                            <span>
                                                <a class="modal-trigger" href="#modal1">ketentuan & kebijakan event</a>
                                            </span>
                                        </label>

                                        <div class="card-action">
                                            <button
                                                class="btn pink darken-2 waves-effect waves-light"
                                                type="submit"
                                                name="action">Batal
                                                <i class="material-icons right">cancel</i>
                                            </button>
                                            <button
                                                class="btn pink darken-2 waves-effect waves-light"
                                                type="submit"
                                                name="action">Daftar Event
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {!! Form::close() !!}
        <div id="modal1" class="modal">
                <div class="modal-content">
                  <h3>ketentuan dan Kebijakan Event</h3>
                  <p>{{ $pendaftaran->ketentuan}}</p>
                </div>
                <div class="modal-footer">
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Agree</a>
                </div>
              </div>

            <div class="footer-copyright">
                <div class="container">
                    <a class="white-text" href="">© 2017 e.o.n.e.s.i.a All rights reserved</a>
                    <a href="#" class="right white-text">
                        Web Design By MegonoDev</a>
                </div>
            </div>
        </footer>

        <!-- Scripts-->

        <script src="{{ asset('eonesia/f-n/js/particles.js')}}"></script>
        <script src="{{ asset('eonesia/f-n/js/app.js')}}"></script>
        <script src="{{ asset('eonesia/f-n/js/lib/stats.js')}}"></script>
        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="{{ asset('eonesia/f-n/js/materialize.js')}}"></script>
        <!-- <script src="js/materialize.min.js"></script> -->
        <script src="{{ asset('eonesia/f-n/js/init.js')}}"></script>
        <script src="{{ asset('eonesia/f-n/js/eonesia.js')}}"></script>

    </body>
</html>