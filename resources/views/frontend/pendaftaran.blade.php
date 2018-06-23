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
        <style>
            .help-block{
                color: red;
            }.radio{
                color: black;
            }
        </style>

    </head>
    <body>
        
        <divclass="loaderanimatedinfinitebounce"></div>
        <div id="particles-js" ></div>
        {{-- <div class="spinner-layer spinner-red">
                <div class="circle-clipper left">
                  <div class="circle"></div>
                </div><div class="gap-patch">
                  <div class="circle"></div>
                </div><div class="circle-clipper right">
                  <div class="circle"></div>
                </div>
              </div> --}}
        <div class="container">
            <div class="row">
                <div class="card-panel tea pink darken-2  waves-light">
                    <span class="event-tersedia-bg" id="">
                        <h4 class="center white-text">ACARA INI DI SELENGGARAKAN OLEH {{ $pendaftaran->penyelenggara }} <br>
                            SILAHKAN DAFTARKAN DIRI ANDA DI EVENT {{ $pendaftaran->nama_event}}</h4>
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
                                            <label  for="first_name">Nama</label>
                                                {!! Form::text('nama', null, ['id' => 'first_name', 'class' => 'form-validate
                                                form-control-line', 'placeholder' => 'Input Nama Lengkap Kamu', 'minlength' => 4]) !!} {!!
                                                $errors->first('nama', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>
                                        </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                            <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                                                <label for="">Jenis Kelamin</label><br><br>
                                                <label>
                                                    <input class="with-gap" name="jenis_kelamin" type="radio" value="laki-laki" />
                                                    <span>Laki-laki</span>
                                                  </label>
                                                  <label>
                                                    <input class="with-gap" name="jenis_kelamin" type="radio" value="perempuan"  />
                                                    <span>Perempuan</span>
                                                  </label>
                                                    {!! $errors->first('jenis_kelamin', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                                                <label  for="first_name">Alamat</label>
                                                    {!! Form::text('alamat', null, ['id' => 'first_name', 'class' => 'form-validate
                                                    form-control-line', 'placeholder' => 'Input Alamat Lengkap Kamu']) !!} {!!
                                                    $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                                                </div>
                                            </div>
                                            </div>

                                        <div class="row">
                                            <div class="input-field col s12">
                                                <div class="form-group {{ $errors->has('handphone') ? 'has-error' : '' }}">
                                                    <label  for="first_name">No Handphone</label>
                                                        {!! Form::number('handphone', null, ['id' => 'first_name', 'class' => 'form-validate
                                                        form-control-line', 'placeholder' => 'Input No Handphone Kamu']) !!} {!!
                                                        $errors->first('handphone', '<p class="help-block">:message</p>') !!}
                                                    </div><span><font color="black"> *Pastikan
                                                    Nomor Handphone Anda Benar, Kode Event Akan Di kirim ke nomor Handphone</font></span>
                                            </div>
                                        </div>

                                        <label  for="first_name">Tempat & Tanggal Lahir</label>
                                        <div class="row">
                                            <div class="input-field col m12 l6 s12">
                                                    {!! Form::text('tempat_lahir', null, ['id' => 'first_name', 'class' => 'form-validate form-control-line', 'placeholder' => 'Tempat Lahir']) !!} 
                                                    {!! $errors->first('tempat_lahir', '<p class="help-block">:message</p>') !!}
                                            </div>
                                            <div class="input-field col m12 l6 s12">
                                                    {!! Form::date('tanggal_lahir', null, ['id' => 'first_name', 'class' => 'form-validate
                                                    form-control-line']) !!} 
                                                    {!! $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
                                            </div>
                                        </div>


                                        <label>
                                                <input onchange="this.setCustomValidity(validity.valueMissing ? 'Please indicate that you accept the Terms and Conditions' : '');" id="field_terms" type="checkbox" required>
                                            <span>
                                                <a class="modal-trigger" href="#modal1">ketentuan & kebijakan event</a>
                                            </span>
                                        </label>

                                        <div class="card-action">
                                            <a href="{{ url('/') }}">
                                                <i class="material-icons right">cancel</i>
                                            </a>
                                            <button
                                                class="btn pink darken-2 waves-effect waves-light"
                                                type="submit"
                                                name="action">Daftar Event
                                                <i class="material-icons right">send</i>
                                            </button>
                                        </div>
                                        {!! Form::close() !!}
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
                  <a href="#!" class="modal-close waves-effect waves-green btn-flat">Setuju</a>
                </div>
              </div>

            <div class="footer-copyright">
                <div class="container">
                    <a class="white-text" href="">© 2018 e.o.n.e.s.i.a All rights reserved</a>
                    <a href="#" class="right white-text">
                        Web Design By MegonoDev</a>
                </div>
            </div>
        </footer>

        <!-- Scripts-->
        <script type="text/javascript">
            document.getElementById("field_terms").setCustomValidity("Mohon ceklis untuk setuju dengan ketentuan dan kebijakan event");
          </script>
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