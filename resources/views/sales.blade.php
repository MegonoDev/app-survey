<div class="row">
<div class="col-lg-5 col-xlg-9 col-md-7">
  <div class="card">
    <div class="card-body">
        <center>
      <h4 class="card-title">Profile {{ Auth::user()->name }}</h4>
        </center>
      <hr>
      <div class="form-group">
        <label class="col-md-12">Email</label>
        <div class="col-md-12">
          {!! Form::email('email', Auth::user()->email, ['disabled' => 'disabled', 'class' => 'form-control form-control-line', 'placeholder' => 'Input Email Admin']) !!}
          {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-12">No Handphone</label>
        <div class="col-md-12">
          {!! Form::number('no_handphone', Auth::user()->no_handphone, ['disabled' => 'disabled', 'class' => 'form-control form-control-line', 'placeholder' => 'Input Email Admin']) !!} {!! $errors->first('no_handphone', '
          <p class="help-block">:message</p>') !!}
        </div>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-5 col-xlg-9 col-md-7">
  <div class="card">
    <div class="card-body">

      <div class="form-group">
        <label class="col-md-12">Kode Dealer</label>
        <div class="col-md-12">
          {!! Form::email('email', Auth::user()->dealereo->kode_dealer, ['disabled' => 'disabled', 'class' => 'form-control form-control-line', 'placeholder' => 'Input Email Admin']) !!} {!! $errors->first('email', '
          <p class="help-block">:message</p>') !!}
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-12">Jabatan</label>
        <div class="col-md-12">
          {!! Form::text('jabatan', Auth::user()->role->nama, ['disabled' => 'disabled', 'class' => 'form-control form-control-line', 'placeholder' => 'Input Email Admin']) !!}
        </div>
      </div>
    </div>
  </div>
</div>
</div>
