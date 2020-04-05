<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="yamgroup" content="">
  <link href="{{ asset('yamgroup/b-n/assets/node_modules/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('yamgroup/f-n/css/login.css') }}">
  <link rel="shortcut icon" href="{{ asset('yamgroup/images/favicon.ico') }}" type="image/x-icon">
  <title>YAMAHA</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-12">
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <div class="fadeIn first">
              <img src="{{ asset('yamgroup/images/logo2.png') }}" style="width:50%; height:auto;" id="icon" alt="User Icon" />
            </div>
            {!! Form::open(['route'=>'register.sales' ]) !!}
            @csrf
            {!! Form::text('namalengkap', null, ['class' => 'fadeIn second', 'id' => 'login', 'placeholder' => 'Nama Lengkap']) !!}
            <br>
            @if ($errors->has('namalengkap'))
            <span style="color:red;">
                {{ $errors->first('namalengkap') }}
            </span>
            @endif
            {!! Form::text('name', null, ['class' => 'fadeIn second', 'id' => 'login', 'placeholder' => 'Username']) !!}
            @if ($errors->has('name'))
            <span style="color:red;">
                {{ $errors->first('name') }}
            </span>
            @endif
            {!! Form::text('email', null, ['class' => 'fadeIn second', 'id' => 'email', 'placeholder' => 'E-mail']) !!}
            <br>
            @if ($errors->has('email'))
            <span style="color:red;">
                {{ $errors->first('email') }}
            </span>
            @endif
            <input type="password" name="password" id="password" class="fadeIn third" placeholder="Password">
            @if ($errors->has('password'))
            <span style="color:red;">
                {{ $errors->first('password') }}
            </span>
            @endif
            {!! Form::text('no_handphone', null, ['class' => 'fadeIn second', 'id' => 'no_handphone', 'placeholder' => 'No Handphone']) !!}
            <br>@if ($errors->has('no_handphone'))
            <span style="color:red;">
                {{ $errors->first('no_handphone') }}
            </span>
            @endif
            <select name="dealereo_id" id="role" class="fadeIn third">
                <option value="">pilih kode dealer</option>
                @foreach($dealereos as $dealer)
                @if($dealer->id == 1)
                @else
                <option value="{{ $dealer->id }}">{{ $dealer->kode_dealer }}</option>
                @endif
                @endforeach
            </select>
            <br>
            @if ($errors->has('dealereo_id'))
            <span style="color:red;">
                {{ $errors->first('dealereo_id') }}
            </span>
            @endif
            <br>
            <input type="submit" class="fadeIn fourth" value="Register">
            {!! Form::close() !!}
            <div id="formFooter">
              <a class="underlineHover" href="{{ route('login.sales') }}"><b>Login</b></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('yamgroup/b-n/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('yamgroup/b-n/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
