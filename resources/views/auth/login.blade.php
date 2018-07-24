<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>EONESIA</title>

        <!-- CSS -->
        <link
            href="https://fonts.googleapis.com/icon?family=Material+Icons"
            rel="stylesheet">
        <link
            href="{{ asset('eonesia/f-n/css/materialize.css')}}"
            type="text/css"
            rel="stylesheet"
            media="screen,projection"/>
        <link
            href="{{ asset('eonesia/f-n/css/style.css')}}"
            type="text/css"
            rel="stylesheet"
            media="screen,projection"/>
        <!-- <link rel="stylesheet" href="css/materialize.min.css"> -->
        <link
            rel="stylesheet"
            type="text/css"
            href="{{ asset('eonesia/f-n/css/animate.css')}}">

        <style>
            body {
                display: flex;
                min-height: 100vh;
                flex-direction: column;

            }

            main {
                flex: 1 0 auto;
            }

            body {
                background: #fff;
            }

            .input-field input[type=date]:focus + label,
            .input-field input[type=email]:focus + label,
            .input-field input[type=password]:focus + label,
            .input-field input[type=text]:focus + label {
                color: #e91e63;
            }

            .input-field input[type=date]:focus,
            .input-field input[type=email]:focus,
            .input-field input[type=password]:focus,
            .input-field input[type=text]:focus {
                border-bottom: 2px solid #e91e63;
                box-shadow: none;
            }
        </style>
    </head>
    <body>
        {{--  <div class="loader  animated infinite bounce"></div>  --}}
        <div id="particles-js"></div>
        <main>
            <center>
                <br>
                <img
                    class="responsive-img"
                    style="width: 80px;"
                    src="https://eonesia.id/img/icon.png"/>
                <h5 class="indigo-text">Please, login into your account</h5>
                <div class="section"></div>
                <div class="container">
                    <div
                        class="z-depth-1 grey lighten-4 row"
                        style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">
                        <form method="POST" class="col s12 m12" action="{{ route('login.post') }}">
                            @csrf
                            <div class='row'>
                                <div class='col s12 m12'></div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input
                                        class="validate {{ $errors->has('email') ? ' is-invalid' : '' }}"
                                        type='email'
                                        name='email'
                                        id='email'/>
                                    @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                    <label for='email'>{{ __('E-Mail Address') }}Enter your email</label>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='input-field col s12'>
                                    <input
                                        class="validate {{ $errors->has('password') ? ' is-invalid' : '' }}"
                                        type='password'
                                        name='password'
                                        id='password'/>
                                    <label for='password'>{{ __('Password') }}Enter your password</label>
                                    @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <label style='float: right;'>
                                    <a class='pink-text' href='#!'>
                                        <b>Forgot Password?</b>
                                    </a>
                                </label>
                            </div>
                            <br/>
                            <center>
                                <div class='row'>
                                    <button
                                        type='submit'
                                        name='btn_login'
                                        class='col s12 btn btn-large waves-effect indigo'>Login</button>
                                </div>
                            </center>
                        </form>
                    </div>
                </div>
            </center>

            <div class="section"></div>
            <div class="section"></div>
        </main>
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