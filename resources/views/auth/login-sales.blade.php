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
          <img class="img-logo" src="https://www.yamaha-motor.co.id/assets/frontend/images/logo-sepeda-motor-yamaha-indonesia.png" alt="" srcset="">
          <p style="color:red;">
            @include('auth._flash')
          </p>
        </center>
      </div>
      <br>
      <input id="tab-1" type="radio" name="tab" class="sign-in" checked>
      <label for="tab-1" class="tab">Sign In</label>
      <input id="tab-2" type="radio" name="tab" class="sign-up">
      <label for="tab-2" class="tab">Sign Up</label>
      <div class="login-form">
        <div class="sign-in-htm">
          {!! Form::open(['route'=>'login.sales' ]) !!} @csrf
          <div class="group  {{ $errors->has('name') ? 'has-error' : '' }}">
            <label for="user" class="label">Username</label>
            {!! Form::text('name', null, ['class' => 'input', 'placeholder' => 'Username']) !!} @if ($errors->has('name'))
            <span style="color:red;">
                        {{ $errors->first('name') }}
                    </span> @endif
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            {!! Form::password('password', null, ['class' => 'input', 'placeholder' => '******']) !!} @if ($errors->has('password'))
            <span style="color:red;">
                        {{ $errors->first('password') }}
                    </span> @endif
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign In">
          </div>
          {!! Form::close() !!}
          <div class="hr"></div>
          <div class="foot-lnk">
            <a href="#" class="text-copi">
              @copyright yamaha</a>
          </div>
        </div>
        {{--  form register sales  --}}
        {!! Form::open(['route'=>'register.sales', 'onSubmit' => 'validasi()' ]) !!} @csrf
        <div class="sign-up-htm">
          <div class="group">
            <label for="user" class="label">Username</label>
            {!! Form::text('name', null, ['class' => 'input', 'placeholder' => 'Username', 'required' => 'required']) !!}
          </div>
          <div class="group">
            <label for="user" class="label">Email</label>
            {!! Form::email('email', null, ['class' => 'input', 'placeholder' => 'Email', 'required' => 'required']) !!}
          </div>
          <div class="group">
            <label for="pass" class="label">Password</label>
            {!! Form::password('password', null, ['class' => 'input', 'placeholder' => 'Password', 'data-type' => 'password', 'required' => 'required']) !!}
          </div>
          <div class="group">
            <label for="user" class="label">No Handphone</label>
            {!! Form::number('no_handphone', null, ['class' => 'input', 'placeholder' => 'No handphone', 'required' => 'required']) !!}
          </div>
          <div class="group">
            <label for="user" class="label">Kode Dealer Anda</label>
            {{--  {!! Form::select('dealereo_id', ['' => 'Dealer']+$dealer, null, ['class' => 'select-dealer']) !!}  --}}
            <select name="dealereo_id" required="required" class="select-dealer">
              <option></option>
              @foreach($dealereos as $dealer) @if($dealer->id == 1) @else
              <option value="{{ $dealer->id }}">
                {{ $dealer->kode_dealer }}
              </option>
              @endif @endforeach
            </select>
          </div>
          <div class="group">
            <input type="submit" class="button" value="Sign Up">
          </div>
          {!! Form::close() !!}
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('eonesia/b-n/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
</body>
</html>
