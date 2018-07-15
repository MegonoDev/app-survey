<article class="card-body">
    {!! Form::open(['route'=>'registerTestdrive' ]) !!}
    <div class="row">
        <div class="input-field col s12">
            <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                <label for="first_name">Nama</label>
                {!! Form::text('nama', null, ['id' => 'first_name', 'class' => 'form-control',
                'placeholder' => 'nama lengkap', 'minlength' => 4]) !!} {!!
                $errors->first('nama', '<p style="color:darkred" class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12">
            <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                <label for="first_name">E-mail</label>
                {!! Form::text('email', null, ['id' => 'first_name', 'class' => 'form-control',
                'placeholder' => 'email@test.com', 'minlength' => 4]) !!} {!!
                $errors->first('email', '<p style="color:darkred" class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="input-field col s12">
            <div class="form-group {{ $errors->has('jenis_kelamin') ? 'has-error' : '' }}">
                <label for="">Jenis Kelamin</label>
                <br>
                    <label>
                        <input class="with-gap" name="jenis_kelamin" type="radio" value="laki-laki"/>
                        <span>Laki-laki</span>
                    </label>
                    <label>
                        <input class="with-gap" name="jenis_kelamin" type="radio" value="perempuan"/>
                        <span>Perempuan</span>
                    </label>
                    {!! $errors->first('jenis_kelamin', '<p style="color:darkred" class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <label for="first_name">Tempat & Tanggal Lahir</label>
        <div class="row">
            <div class="input-field col m12 l6 s12">
                {!! Form::text('tempat_lahir', null, ['id' => 'first_name', 'class'
                =>'form-control', 'placeholder' => 'tempat lahir']) !!} {!!
                $errors->first('tempat_lahir', '<p style="color:darkred" class="help-block">:message</p>') !!}
            </div>
            <div class="input-field col m12 l6 s12">
                {!! Form::date('tanggal_lahir', null, ['id' => 'first_name', 'class' =>
                'form-control']) !!} {!! $errors->first('tanggal_lahir', '<p style="color:darkred" class="help-block">:message</p>') !!}
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                    <label for="first_name">Alamat</label>
                    {!! Form::text('alamat', null, ['id' => 'first_name', 'class' => 'form-control',
                    'placeholder' => 'alamat']) !!} {!! $errors->first('alamat', '<p style="color:darkred" class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12">
                <div class="form-group {{ $errors->has('handphone') ? 'has-error' : '' }}">
                    <label for="first_name">No Handphone (cth : 081234567890)</label>
                    {!! Form::number('handphone', null, ['class' => 'form-control', 'placeholder' =>
                    '081234567890']) !!} 
                    {!! $errors->first('handphone', '<p style="color:darkred" class="help-block">:message</p>') !!}
                    <span>
                        <font size="2" color="black">
                            *Pastikan Nomor Handphone Anda Benar, Kode Akan Di kirim ke nomor Handphone</font>
                    </span>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="input-field col s12 l6 m12">
                    <div class="form-group {{ $errors->has('organizer_id') ? 'has-error' : '' }}">
                {!! Form::select('organizer_id', ['' => '--Pilih Penyelenggara--']+$organizers, null, ['class' => 'form-control']) !!}
                {!!$errors->first('organizer_id', '<p style="color:darkred" class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="input-field col s12 l6 m12">
                    <div class="form-group {{ $errors->has('dealereo_id') ? 'has-error' : '' }}">
                {!! Form::select('dealereo_id',	['' => '--Pilih AMD/EO--'], null, ['class' => 'form-control']) !!}
                {!!$errors->first('dealereo_id', '<p style="color:darkred" class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="input-field col s12 l6 m12">
                    <div class="form-group {{ $errors->has('location_id') ? 'has-error' : '' }}">
                {!! Form::select('location_id', ['' => '--Pilih Lokasi--']+$locations, null, ['class' => 'form-control']) !!}
                {!!$errors->first('location_id', '<p style="color:darkred" class="help-block">:message</p>') !!}
                </div>
            </div>
        </div>
        <label>
            <br>
                <input
                    onchange="this.setCustomValidity(validity.valueMissing ? '' : ''); "
                    id="field_terms"
                    type="checkbox"
                    required="required">
                    <span>
                        <a class="modal-trigger" href="#modal1">ketentuan & kebijakan event</a>
                    </span>
                </label>
                <div class="card-action">
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">
                            Register
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
            </article>