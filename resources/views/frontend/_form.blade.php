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
        <label>Jenis Kelamin</label>
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
        {!! Form::select('id_prov', ['' => 'provinsi']+$provinsi, null, ['class' => 'form-control id_prov']) !!}
        {!! $errors->first('id_prov', '<p style="color:darkred" class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('id_kab') ? 'has-error' : '' }}">
        <label for="first_name">Kabupaten</label>
        {!! Form::select('id_kab', ['' => 'kabupaten'], null, ['class' => 'form-control id_kab']) !!}
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
          <label class="check">YAMAHA Mio Series
            {!! Form::checkbox('kendaraan[]', 'YAMAHA Mio Series') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
          <label class="check">YAMAHA Fino
            {!! Form::checkbox('kendaraan[]', 'Yamaha Fino') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
          <label class="check">YAMAHA Soul
            {!! Form::checkbox('kendaraan[]', 'Yamaha Soul') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">YAMAHA Soul
            {!! Form::checkbox('kendaraan[]', 'Yamaha Sport') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
          <label class="check">Yamaha MAXI (Nmax, Lexi, Aerox, Xmax)
            {!! Form::checkbox('kendaraan[]', 'Yamaha MAXI (Nmax, Lexi, Aerox, Xmax)') !!}
            <span class="checkmark"></span>
          </label>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Yamaha Sport series(Vixion, R series)
            {!! Form::checkbox('kendaraan[]', 'Yamaha Sport series(Vixion, R series)') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Honda Beat
            {!! Form::checkbox('kendaraan[]', 'Honda Beat') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Honda Scoopy
            {!! Form::checkbox('kendaraan[]', 'Honda Scoopy') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Honda Supra X/125
            {!! Form::checkbox('kendaraan[]', 'Honda Supra X/125') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Honda CBR
            {!! Form::checkbox('kendaraan[]', 'Honda CBR') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Honda PCX
            {!! Form::checkbox('kendaraan[]', 'Honda PCX') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Honda Vario
            {!! Form::checkbox('kendaraan[]', 'Honda Vario') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Honda Revo
            {!! Form::checkbox('kendaraan[]', 'Honda Revo') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Suzuki Satria
            {!! Form::checkbox('kendaraan[]', 'Suzuki Satria') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
        <label class="check">Suzuki GSX
            {!! Form::checkbox('kendaraan[]', 'Suzuli GSX') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
          <label class="check">Suzuki Nex / Nex II
            {!! Form::checkbox('kendaraan[]', 'Suzuki Nex / Nex II') !!}
            <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="input-field col s12 l6 m12">
      <div class="form-group {{ $errors->has('kendaraan') ? 'has-error' : '' }}">
          <label class="check">Merk Lain/ Belum Mempunyai Sepeda Motor
            {!! Form::checkbox('kendaraan[]', 'Merk Lain/ Belum Mempunyai Sepeda Motor') !!}
            <span class="checkmark"></span>
        </label>
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

  <hr>
  <span>
    <font size="2" color="black"> *wajib di isi</font>
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
