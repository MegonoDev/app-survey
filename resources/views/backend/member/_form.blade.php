
            <div class="form-group {{ $errors->has('penyelenggara') ? 'has-error' : '' }}">
                <label class="col-md-12">Penyelenggara Event</label>
                <div class="col-md-12">
                    {!! Form::text('penyelenggara', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line', 'placeholder' => 'Input Penyelenggara Event']) !!} {!!
                    $errors->first('penyelenggara', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('nama_event') ? 'has-error' : '' }}">
                <label class="col-md-12">Nama Event</label>
                <div class="col-md-12">
                    {!! Form::text('nama_event', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line', 'placeholder' => 'Input Nama Event']) !!} {!!
                    $errors->first('nama_event', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
                <label class="col-md-12">Alamat</label>
                <div class="col-md-12">
                    {!! Form::text('alamat', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'Input Alamat Event']) !!} {!!
                    $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('PROVINSI') ? 'has-error' : '' }}">
                <label class="col-sm-12">Alamat Lengkap</label>
                <div class="col-sm-3">
                    {!! Form::select('provinsi', ['jawa tengah' => 'jawa tengah', 'riau' => 'riau'],null, ['class' => 'form-control form-control-line', 'placeholder' => 'Provinsi']); !!}
                </div>

                 <div class="col-sm-3">
                    {!! Form::select('kabupaten', ['pekalongan' => 'pekalongan', 'dumai' => 'dumai'],null, ['class' => 'form-control form-control-line', 'placeholder' => 'Kabupaten']); !!}
                </div>

                  <div class="col-sm-3">
                    {!! Form::select('kecamatan', ['pekalongan barat' => 'pekalongan barat', 'dumai barat' => 'dumai barat'],null, ['class' => 'form-control form-control-line', 'placeholder' => 'Kecamatan']); !!}
                </div>

                <div class="col-sm-3">
                    {!! Form::select('kelurahan', ['L' => 'Large', 'S' => 'Small'],null, ['class' => 'form-control form-control-line', 'placeholder' => 'Kelurahan']); !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('start_event') ? 'has-error' : '' }}">
                <label class="col-md-12">Mulai Event</label>
                <div class="col-md-12">
                    {!! Form::date('start_event', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line']) !!} {!!
                    $errors->first('start_event', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('finish_event') ? 'has-error' : '' }}">
                <label class="col-md-12">Berakhir Event</label>
                <div class="col-md-12">
                    {!! Form::date('finish_event', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line']) !!} {!!
                    $errors->first('finish_event', '<p class="help-block">:message</p>') !!}
                </div>
            </div>



            <div class="form-group {{ $errors->has('start_register') ? 'has-error' : '' }}">
                <label class="col-md-12">Pendaftaran Mulai</label>
                <div class="col-md-12">
                    {!! Form::date('start_register', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line']) !!} {!!
                    $errors->first('start_register', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('finish_register') ? 'has-error' : '' }}">
                <label class="col-md-12">Pendaftaran Finish</label>
                <div class="col-md-12">
                    {!! Form::date('finish_register', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line']) !!} {!!
                    $errors->first('finish_register', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('ketentuan') ? 'has-error' : '' }}">
                <label class="col-md-12">Ketentuan</label>
                <div class="col-md-12">
                    {!! Form::text('ketentuan', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line']) !!} {!!
                    $errors->first('ketentuan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('keterangan') ? 'has-error' : '' }}">
                <label class="col-md-12">Keterangan</label>
                <div class="col-md-12">
                    {!! Form::text('keterangan', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line']) !!} {!!
                    $errors->first('keterangan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>

            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label class="col-md-12">Image Banner</label>
                     <div class="col-md-12">
                         {{-- <div class="col-md-4">
                            <div class="image view view-first" style="width:224px; height:120px;">
                                 <img src="{{ ($event->image) ? $event->image : 'http://via.placeholder.com/350x150' }}" class="img" id="img" alt="...">
                                {!! Form::file('image', ['id' => 'image', 'class' => 'image-thumb']) !!}
                            </div>
                                <button type="button" id="browser_file" class="btn btn-primary btn-block">
                                    <i class="fa fa-camera"></i> <b>UPLOAD IMAGE</b> 
                                </button>
                            </div> --}} 
                            <input type="file" name="image" id="imageUpload" class="hide"/> 
                            <label for="imageUpload" class="btn btn-large">Select file</label><br/><br/><br/>
                            <img src="" id="imagePreview" alt="Preview Image" width="200px"/>
                      </div>
                      {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
            </div>


             <div class="form-group">
                <div class="col-sm-12">
                   {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
