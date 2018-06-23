
            <div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
                <label class="col-md-12">Penyelenggara Event</label>
                <div class="col-md-12">
                    {!! Form::text('nama', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line', 'placeholder' => 'Input Penyelenggara Event']) !!} {!!
                    $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                <label class="col-md-12">Nama Event</label>
                <div class="col-md-12">
                    {!! Form::text('alamat', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line', 'placeholder' => 'Input Nama Event']) !!} {!!
                    $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('handphone') ? 'has-error' : '' }}">
                <label class="col-md-12">Nomor Handphone</label>
                <div class="col-md-12">
                    {!! Form::number('handphone', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'Input Alamat Event']) !!} {!!
                    $errors->first('handphone', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('tanggal_lahir') ? 'has-error' : '' }}">
                <label class="col-md-12">Tanggal Lahir</label>
                <div class="col-md-12">
                    {!! Form::text('tanggal_lahir', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'Input Alamat Event']) !!} {!!
                    $errors->first('tanggal_lahir', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

           


             <div class="form-group">
                <div class="col-sm-12">
                   {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
