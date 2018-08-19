<article class="card-body">
  {!! Form::open(['route'=>'registerTestdrive' ]) !!}
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label for="first_name">Nama Lengkap (Sesuai Kartu Identitas) </label>
        {!! Form::text('nama', null, ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'nama lengkap', 'minlength' => 4]) !!} {!! $errors->first('nama', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label for="first_name">E-mail</label>
        {!! Form::text('email', null, ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'email@test.com', 'minlength' => 4]) !!} {!! $errors->first('email', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
        <label for="">Jenis Kelamin</label>
        <br>
        <label>
          <input class="with-gap" name="jenis_kelamin" type="radio" value="laki-laki" />
          <span>Laki-laki</span>
        </label>
        <label>
          <input class="with-gap" name="jenis_kelamin" type="radio" value="perempuan" />
          <span>Perempuan</span>
        </label>
        {!! $errors->first('jenis_kelamin', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  <label for="first_name">Tempat & Tanggal Lahir</label>
  <div class="row">
    <div class="input-field col m12 l6 s12">
      {!! Form::text('tempat_lahir', null, ['id' => 'first_name', 'class' =>'form-control', 'placeholder' => 'tempat lahir']) !!} {!! $errors->first('tempat_lahir', '
      <p style="color:darkred" class="help-block">:message</p>') !!}
    </div>
    <div class="input-field col m12 l6 s12">
      {!! Form::date('tanggal_lahir', null, ['id' => 'first_name', 'class' => 'form-control']) !!} {!! $errors->first('tanggal_lahir', '
      <p style="color:darkred" class="help-block">:message</p>') !!}
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
        <label for="first_name">Alamat</label>
        {!! Form::text('alamat', null, ['id' => 'first_name', 'class' => 'form-control', 'placeholder' => 'alamat']) !!} {!! $errors->first('alamat', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('handphone') ? 'has-error' : '' }}">
        <label for="first_name">No Handphone (cth : 081234567890)</label>
        {!! Form::number('handphone', null, ['class' => 'form-control', 'placeholder' => '081234567890']) !!}
        {!! $errors->first('handphone', '<p style="color:darkred" class="help-block">:message</p>') !!}
        <span>
            <font size="2" color="black"> *Pastikan Nomor Handphone Anda Benar, Kode Akan Di kirim ke nomor Handphone</font>
        </span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_prov') ? 'has-error' : '' }}">
        <label for="first_name">Provinsi</label>
        {!! Form::select('id_prov', ['' => 'provinsi']+$provinsi, null, ['class' => 'form-control']) !!}
        {!! $errors->first('id_prov', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_kab') ? 'has-error' : '' }}">
        <label for="first_name">Kabupaten</label>
        {!! Form::select('id_kab', ['' => 'kabupaten'], null, ['class' => 'form-control']) !!}
        {!! $errors->first('id_kab', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <label for="first_name">Pekerjaan</label>
      <div class="form-group {{ $errors->has('pekerjaan') ? 'has-error' : '' }}">
        {!! form::select('pekerjaan', ['Karyawan' => 'Karyawan', 'Pegawai Negeri' => 'Pegawai Negeri', 'TNI atau Polisi' => 'TNI atau Polisi', 'Ibu Rumah Tangga' => 'Ibu Rumah Tangga', 'Wiraswasta'=> 'Wiraswasta'],null, ['placeholder' => 'pekerjaan', 'class' => 'form-control']) !!}
        {!! $errors->first('pekerjaan', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <label for="first_name">Status</label>
      <div class="form-group {{ $errors->has('perkawinan') ? 'has-error' : '' }}">
        {!! form::select('perkawinan', ['Menikah' => 'Menikah', 'Belum Menikah' => 'Belum Menikah', 'Pisah' => 'Pisah'],null, ['placeholder' => 'status', 'class' => 'form-control']) !!} {!! $errors->first('perkawinan', '
        <p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
  </div>
  <header class="card-header">
    <h6 class="card-title mt-2">Tipe Sepeda Motor Yang Anda Miliki Saat Ini ……?</h6>
  </header>
  <hr>
  {!! $errors->first('kendaraan', '<p style="color:darkred" class="help-block">:message</p>') !!}
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="YAMAHA Mio Series " />
        <span>YAMAHA Mio Series </span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Yamaha Fino" />
        <span>Yamaha Fino</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Yamaha Soul" />
        <span>Yamaha Soul</span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Yamaha Sport" />
        <span>Yamaha Sport</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Yamaha MAXI (Nmax, Lexi, Aerox, Xmax)" />
        <span></span>Yamaha MAXI (Nmax, Lexi, Aerox, Xmax)</span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Yamaha MX" />
        <span>Yamaha MX</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Honda Beat" />
        <span>Honda Beat</span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Honda Scoopy" />
        <span>Honda Scoopy</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Honda Supra X/125" />
        <span>Honda Supra X/125</span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Honda CBR" />
        <span>Honda CBR</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Honda PCX" />
        <span>Honda PCX</span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Honda Vario" />
        <span>Honda Vario</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Honda Revo" />
        <span>Honda Revo</span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Suzuki Satria" />
        <span>Suzuki Satria</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Suzuki GSX" />
        <span>Suzuki GSX</span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Suzuki Nex / Nex II" />
        <span>Suzuki Satria</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <input class="with-gap" name="kendaraan[]" type="checkbox" value="Merk Lain/ Belum Mempunyai Sepeda Motor" />
        <span>Merk Lain/ Belum Mempunyai Sepeda Motor</span>
      </div>
    </div>
  </div>
  <header class="card-header">
    <h6 class="card-title mt-2">Apakah Anda Berminat Membeli Motor Baru Dalam Waktu …?</h6>
  </header>
  <hr>
  {!! $errors->first('motorbaru', '<p style="color:darkred" class="help-block">:message</p>') !!}
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('motorbaru') ? 'has-error' : '' }}">
        <input class="with-gap" name="motorbaru[]" type="radio" value="3 Bulan Kedepan" />
        <span>3 Bulan Kedepan</span>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('motorbaru') ? 'has-error' : '' }}">
        {!! form::select('motorbaru[]', ['Ya. Membeli Sepeda Motor Untuk Pertama Kalinya' => 'Ya, Membeli Sepeda Motor Untuk Pertama Kalinya', 'Ya. Membeli Sepeda Motor Sebagai Pengganti' => 'Ya, Membeli Sepeda Motor Sebagai Pengganti', 'Ya. Membeli Sepeda Motor Sebagai Penambahan' => 'Ya, Membeli Sepeda Motor Sebagai Penambahan', 'Ya. Membeli Sepeda Motor Dalam Jumlah Banyak (Bisnis/Fleet)' => 'Ya, Membeli Sepeda Motor Dalam Jumlah Banyak (Bisnis/Fleet)', 'Tidak. Belum Memiliki Rencana Pembelian Sepeda Motor Baru' => 'Tidak, Belum Memiliki Rencana Pembelian Sepeda Motor Baru'],null, ['placeholder' => 'pilih jawaban', 'class' => 'form-control']) !!}
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('motorbaru') ? 'has-error' : '' }}">
        <input class="with-gap" name="motorbaru[]" type="radio" value="6 Bulan Kedepan" />
        <span>6 Bulan Kedepan</span>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12">
      <div class="form-group {{ $errors->has('motorbaru') ? 'has-error' : '' }}">
        <input class="with-gap" name="motorbaru[]" type="radio" value="1 Tahun Kedepan" />
        <span>1 Tahun Kedepan</span>
      </div>
    </div>
  </div>
  <hr>
  <span>
    <font size="2" color="black"> *wajib di isi</font>
  </span>
  <br><br>
  <label>
    <input onchange="this.setCustomValidity(validity.valueMissing ? '' : ''); " id="field_terms" type="checkbox" required="required">
    <span>
    <a class="modal-trigger" href="#ketentuan & kebijakan event"><font size="2" color="black">Dengan mengisi form ini, saya telah menyetujui Syarat dan ketentuan yang berlaku </font></a>
    </span>
  </label>
  <br><br>
  <div class="card-action">
    <div class="form-group">
      <button type="submit" class="btn btn-primary btn-block">
        Register
      </button>
    </div>
  </div>
  {!! Form::close() !!}
</article>
