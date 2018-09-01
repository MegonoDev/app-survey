<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('eonesia/f-n/css/login.css') }}">
  <link rel="shortcut icon" href="{{ asset('eonesia/images/favicon.ico') }}" type="image/x-icon">
  <title>YAMAHA</title>
</head>
<body>
  <div class="login-wrap">
    <div class="login-html">
      <div class="row">
        <center>
          <img class="img-logo" src="{{ asset('eonesia/images/logo.png') }}" alt="" srcset="">
          <p style="color:red;">
          @include('auth._flash')
         </p>
        </center>
      </div>
      <br>

      <center><h4 class="text-logo">LOGIN ADMIN</h4></center>
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
      <label for="tab-1" class="tab"></label>
      <input id="tab-2" type="radio" name="tab" class="sign-up">
      <label for="tab-2" class="tab"></label>
      <div class="login-form">
        <div class="sign-in-htm">
          {!! Form::open(['route'=>'login.admin' ]) !!} @csrf
          <div class="group  {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="user" class="label">Username</label>
            {!! Form::text('name', null, ['class' => 'input', 'placeholder' => 'Username']) !!}
                @if ($errors->has('name'))
                    <span style="color:red;">
                        {{ $errors->first('name') }}
                    </span>
                @endif
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            {!! Form::password('password', null, ['class' => 'input', 'placeholder' => 'Password']) !!}
             @if ($errors->has('password'))
                    <span style="color:red;">
                        {{ $errors->first('password') }}
                    </span>
                @endif
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign In">
          </div>
          {!! Form::close() !!}
          <div class="hr"></div>
          <div class="foot-lnk">
            <a href="#" class="text-copi">@copyright yamaha</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
