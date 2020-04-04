<article class="card-body">
  {!! Form::open(['route'=>'registerTestdrive' ]) !!}
  <div class="row">
    <div class="col s12 my-3">
      <span><b style="color:red">*</b> <small>Wajib diisi</small></span>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="first_name">Nama Lengkap <b class="text-danger">*</b></label>
        {!! Form::text('nama', null, ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'nama lengkap', 'minlength' => 4]) !!}
        <div class="ml-2 mt-1 detail"><i>Sesuai Kartu Identitas </i></div>
        {!! $errors->first('nama', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <label for="tempat_lahir">Tempat & Tanggal Lahir <b class="text-danger">*</b></label>
    </div>
  </div>
  <div class="row">
    <div class="input-field col m12 l6 s12">
      <div class="form-group">
        {!! Form::text('tempat_lahir', null, ['id' => 'tempat_lahir', 'class' =>'form-control', 'placeholder' => 'tempat lahir']) !!} {!! $errors->first('tempat_lahir', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="input-field col m12 l6 s12">

      <div class="form-group">
        {!! Form::text('tanggal_lahir', null, ['class' => 'form-control tanggal', 'placeholder' => 'hh-bb-tttt']) !!}
        {!! $errors->first('tanggal_lahir', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
        <label for="alamat">Alamat <b class="text-danger">*</b></label>
        {!! Form::text('alamat', null, ['id' => 'alamat', 'class' => 'form-control', 'placeholder' => 'alamat']) !!}
        <div class="ml-2 mt-1 detail"><i>Alamat lengkap tanpa Kelurahan, Kecamatan, Kabupaten dan Provinsi</i></div>
        {!! $errors->first('alamat', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_prov') ? 'has-error' : '' }}">
        <label for="id_prov">Provinsi <b class="text-danger">*</b></label>
        {!! Form::select('id_prov', ['' => 'provinsi']+$provinsi, null, ['class' => 'form-control', 'id' => 'id_prov']) !!}
        {!! $errors->first('id_prov', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_kab') ? 'has-error' : '' }}">
        <label for="id_kab">Kabupaten <b class="text-danger">*</b></label>
        {!! Form::select('id_kab', ['' => 'kabupaten'], null, ['class' => 'form-control', 'id' => 'id_kab']) !!}
        {!! $errors->first('id_kab', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_kec') ? 'has-error' : '' }}">
        <label for="id_kec">Kecamatan <b class="text-danger">*</b></label>
        {!! Form::select('id_kec', ['' => 'kecamatan'], null, ['class' => 'form-control', 'id' => 'id_kec']) !!}
        {!! $errors->first('id_kec', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_kel') ? 'has-error' : '' }}">
        <label for="id_kel">Kelurahan <b class="text-danger">*</b></label>
        {!! Form::select('id_kel', ['' => 'kelurahan'], null, ['class' => 'form-control', 'id' => 'id_kel']) !!}
        {!! $errors->first('id_kel', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="email">E-mail <b class="text-danger">*</b></label>
        {!! Form::text('email', null, ['id' => 'email', 'class' => 'form-control', 'placeholder' => 'email@test.com', 'minlength' => 4]) !!}
        <div class="ml-2 mt-1 detail"><i>*Pastikan email Anda benar, kode akan dikirim ke email</i></div>
        {!! $errors->first('email', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>


  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('handphone') ? 'has-error' : '' }}">
        <label for="handphone">No Handphone (cth : 081234567890) <b class="text-danger">*</b></label>
        {!! Form::number('handphone', null, ['id'=> 'handphone','class' => 'form-control', 'placeholder' => '081234567890']) !!}
        {!! $errors->first('handphone', '<p style="color:darkred" class="help-block">:message</p>') !!}
        <span>
          <font size="2" color="black"> *Pastikan Nomor Handphone Anda Benar, Kode Akan Di kirim ke nomor Handphone</font>
        </span>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('sales_id') ? 'has-error' : '' }}">
        <label for="sales_id">Sales <b class="text-danger">*</b></label>
        <select name="sales_id" id="sales_id" class="cari-sales form-control"></select>
        {!! $errors->first('sales_id', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  
  <hr>
  <span>
    <b class="text-danger">*</b>
  </span>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('ketentuan') ? 'has-error' : '' }}">
        <label class="check">Dengan mengisi form ini, saya telah menyetujui Syarat dan ketentuan yang berlaku
          {!! Form::checkbox('ketentuan', null) !!}
          <span class="checkmark"></span>
        </label>
        {!! $errors->first('ketentuan', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>

  <div class="card-action">
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">
        Register
      </button>
    </div>
  </div>
  {!! Form::close() !!}
</article>