<article class="card-body">
  {!! Form::open(['route'=>'customers.store' ]) !!}
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
      <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
        <label>Jenis Kelamin <b class="text-danger">*</b></label>
        <label class="radio">Laki-laki
          {!! Form::radio('jenis_kelamin', 'laki-laki') !!}
          <span class="checkround"></span>
        </label>
        <label class="radio">Perempuan
          {!! Form::radio('jenis_kelamin', 'perempuan') !!}
          <span class="checkround"></span>
        </label>
        {!! $errors->first('jenis_kelamin', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
        <label for="alamat">Alamat <b class="text-danger">*</b></label>
        {!! Form::text('alamat', null, ['id' => 'alamat', 'class' => 'form-control', 'placeholder' => 'alamat']) !!}
        <div class="ml-2 mt-1 detail"><i>Alamat lengkap tanpa Kabupaten dan Provinsi</i></div>
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
    <div class="input-field col s12 l6 m12">
      <label for="pekerjaan">Pekerjaan <b class="text-danger">*</b></label>
      <div class="form-group {{ $errors->has('pekerjaan') ? 'has-error' : '' }}">
        {!! form::select('pekerjaan', ['Karyawan' => 'Karyawan', 'Pegawai Negeri' => 'Pegawai Negeri', 'TNI atau Polisi' => 'TNI atau Polisi', 'Ibu Rumah Tangga' => 'Ibu Rumah Tangga', 'Wiraswasta'=> 'Wiraswasta'],null, ['id' => 'pekerjaan', 'placeholder' => 'pekerjaan', 'class' => 'form-control']) !!}
        {!! $errors->first('pekerjaan', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <label for="perkawinan">Status <b class="text-danger">*</b></label>
      <div class="form-group {{ $errors->has('perkawinan') ? 'has-error' : '' }}">
        {!! form::select('perkawinan', ['Menikah' => 'Menikah', 'Belum Menikah' => 'Belum Menikah', 'Pisah' => 'Pisah'],null, ['placeholder' => 'status', 'class' => 'form-control' , 'id'=>'perkawinan']) !!} {!! $errors->first('perkawinan', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  <header class="card-header">
    <h6 class="card-title mt-2">Tipe Sepeda Motor Yang Anda Miliki Saat Ini? <b class="text-danger">*</b></h6>
  </header>
  <hr>
  {!! $errors->first('kendaraan', '<p style="color:darkred" class="help-block">:message</p>') !!}
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_merk') ? 'has-error' : '' }}">
        <label for="id_prov">Merk Motor <b class="text-danger">*</b></label>
        {!! Form::select('id_merk', ['' => 'merk']+$merk, null, ['class' => 'form-control', 'id' => 'id_merk']) !!}
        {!! $errors->first('id_merk', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_seri') ? 'has-error' : '' }}">
        <label for="id_seri">Tipe Motor <b class="text-danger">*</b></label>
        {!! Form::select('id_seri', ['' => 'tipe'], null, ['class' => 'form-control', 'id' => 'id_seri']) !!}
        {!! $errors->first('id_seri', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
 
  <!-- <header class="card-header">
    <h6 class="card-title mt-2">Apakah Anda Berminat Membeli Motor Baru Dalam Waktu? <b class="text-danger">*</b></h6>
  </header>
  <hr>
  {!! $errors->first('motorbaru', '<p style="color:darkred" class="help-block">:message</p>') !!}
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('motorbaru') ? 'has-error' : '' }}">
        <label class="radio">3 Bulan Kedepan
          {!! Form::radio('motorbaru', '3 Bulan Kedepan') !!}
          <span class="checkround"></span>
        </label>
        <label class="radio">6 Bulan Kedepan
          {!! Form::radio('motorbaru', '6 Bulan Kedepan') !!}
          <span class="checkround"></span>
        </label>
        <label class="radio">1 Tahun Kedepan
          {!! Form::radio('motorbaru', '1 Tahun Kedepan') !!}
          <span class="checkround"></span>
        </label>
      </div>
    </div> 

    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('motorbaru1') ? 'has-error' : '' }}">
        {!! form::select('motorbaru1', ['Ya. Membeli Sepeda Motor Untuk Pertama Kalinya' => 'Ya, Membeli Sepeda Motor Untuk Pertama Kalinya', 'Ya. Membeli Sepeda Motor Sebagai Pengganti' => 'Ya, Membeli Sepeda Motor Sebagai Pengganti', 'Ya. Membeli Sepeda Motor Sebagai Penambahan' => 'Ya, Membeli Sepeda Motor Sebagai Penambahan', 'Ya. Membeli Sepeda Motor Dalam Jumlah Banyak (Bisnis/Fleet)' => 'Ya, Membeli Sepeda Motor Dalam Jumlah Banyak (Bisnis/Fleet)', 'Tidak. Belum Memiliki Rencana Pembelian Sepeda Motor Baru' => 'Tidak, Belum Memiliki Rencana Pembelian Sepeda Motor Baru'],null, ['placeholder' => 'pilih jawaban', 'class' => 'form-control']) !!}
        {!! $errors->first('motorbaru1', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
-->
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

