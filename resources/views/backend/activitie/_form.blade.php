<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
    <div class="form-group {{ $errors->has('penyelenggara') ? 'has-error' : '' }}">
        <label class="col-md-12">Penyelenggara event</label>
        <div class="col-md-12">
            {!! Form::text('penyelenggara', null, ['id' => 'title', 'class' => 'form-control
            form-control-line', 'placeholder' => 'input penyelenggara event']) !!} {!!
            $errors->first('penyelenggara', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('nama_event') ? 'has-error' : '' }}">
        <label class="col-md-12">Nama event</label>
        <div class="col-md-12">
            {!! Form::text('nama_event', null, ['id' => 'title', 'class' => 'form-control
            form-control-line', 'placeholder' => ' input nama event ']) !!} {!!
            $errors->first('nama_event', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('alamat') ? 'has-error' : '' }}">
        <label class="col-md-12">Alamat</label>
        <div class="col-md-12">
            {!! Form::text('alamat', null, ['id' => 'title', 'class' => 'form-control
            form-control-line', 'placeholder' => 'input alamat event']) !!} {!!
            $errors->first('alamat', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('start_event') ? 'has-error' : '' }}">
        <label class="col-md-12">Mulai Event</label>
        <div class="col-md-12">
            {!! Form::date('start_event', null, ['id' => 'title', 'class' => 'form-control
            form-control-line']) !!} {!! $errors->first('start_event', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group {{ $errors->has('finish_event') ? 'has-error' : '' }}">
        <label class="col-md-12">Berakhir Event</label>
        <div class="col-md-12">
            {!! Form::date('finish_event', null, ['id' => 'title', 'class' => 'form-control
            form-control-line']) !!} {!! $errors->first('finish_event', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
</div>
</div>

<div class="ccol-lg-4 col-md-5 m-t-20">
<div class="card">
<div class="card-body">
    <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
        <label class="col-md-12">Image Banner</label>
        <div class="col-md-12">
            <input type="file" name="image"/>
            <label for="imageUpload"></label><br/><br/><br/>
            @if (isset($activities) && $activities->image !== '')
            <div class="row">
                <div class="col-md-6">
                            <div class="thumbnail">
                                <img src="{{ url($activities->ImagePath) }}" class="img-rounded"></div>
                            </div>
                        </div>
                        @endif
                    </div>
                    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
                </div>
                <input type="hidden" name="status" value="tersedia">
                    <div class="form-group {{ $errors->has('ketentuan') ? 'has-error' : '' }}">
                        <label class="col-md-12">Ketentuan</label>
                        <div class="col-md-12">
                            {!! Form::textarea('ketentuan', null, ['id' => 'title', 'class' => 'form-control
                            form-control-line', 'placeholder' => 'ketentuan yang berlaku']) !!} {!!
                            $errors->first('ketentuan', '<p style="color:darkred" class="help-block">:message</p>') !!}
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-12">
                            {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
                        </div>