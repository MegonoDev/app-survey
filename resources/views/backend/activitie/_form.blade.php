
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

            <input type="hidden" name="keterangan" value="tersedia">

            <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                <label class="col-md-12">Image Banner</label>
                     <div class="col-md-12">
                            <input type="file" name="image"/> 
                            <label for="imageUpload"></label><br/><br/><br/>
                            @if (isset($activities) && $activities->image !== '') 
				            <div class="row">
    				            <div class="col-md-6">
    					            <br><br>
    					            <div class="thumbnail">
							            <img src="{{ url($activities->ImagePath) }}" class="img-rounded"> 
						            </div>
    				            </div>
  				            </div>
			                @endif
                            {{--  <img src="" id="imagePreview" alt="Preview Image" width="200px"/>  --}}
                      </div>
                      {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
            </div>

            <div class="form-group {{ $errors->has('ketentuan') ? 'has-error' : '' }}">
                <label class="col-md-12">Ketentuan</label>
                <div class="col-md-12">
                    {!! Form::textarea('ketentuan', null, ['id' => 'title', 'class' => 'form-control
                    form-control-line', 'placeholder' => 'ketentuan yang berlaku']) !!} 
                    {!! $errors->first('ketentuan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
             <div class="form-group">
                <div class="col-sm-12">
                   {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
