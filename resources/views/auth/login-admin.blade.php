<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="eonesia" content="">
  <link href="{{ asset('eonesia/b-n/assets/node_modules/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('eonesia/f-n/css/login.css') }}">
  <link rel="shortcut icon" href="{{ asset('eonesia/images/favicon.ico') }}" type="image/x-icon">
  <title>YAMAHA</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-md-12">
        <div class="wrapper fadeInDown">
          <div id="formContent">
            <div class="fadeIn first">
              <img src="{{ asset('eonesia/images/logo2.png') }}" style="width:50%; height:auto;" id="icon" alt="User Icon" />
            </div>
            {!! Form::open(['route'=>'login.admin']) !!}
            @csrf
              {!! Form::text('name', null, ['class' => 'fadeIn second', 'id' => 'login', 'placeholder' => 'Username']) !!}
              @if ($errors->has('name'))
              <span style="color:red;">
                        {{ $errors->first('name') }}
                    </span>
                    @endif
             <!-- {!! Form::text('password', null, ['class' => 'fadeIn third', 'id' =>'password', 'placeholder' => 'Password']) !!} -->
             <input type="password" name="password" id="password" class="fadeIn third" placeholder="Password">
             @if ($errors->has('password'))
              <span style="color:red;">
                        {{ $errors->first('password') }}
                    </span>
             @endif
            <br>
              <input type="submit" class="fadeIn fourth" value="Log In">
              {!! Form::close() !!}
            <div id="formFooter">
                @include('auth._flash')
              <a class="underlineHover" href="#">@yamaha</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('eonesia/b-n/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
  <script src="{{ asset('eonesia/b-n/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
</body>
</html>
