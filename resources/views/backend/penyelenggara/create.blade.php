<h4 class="card-title">Tambah Penyelenggara</h4>
{!! Form::open(['route'=>'penyelenggara.store', 'class'=> 'form-horizontal
form-material']) !!}
{{ csrf_field() }}
<div class="row">
    <div class="input-field col s12 l6 m12">
        <div class="form-group {{ $errors->has('role_id') ? 'has-error' : '' }}">
            {!! Form::select('role_id', ['' => '-- Pilih Kota --']+$roles, null, ['class' => 'form-control']) !!}
            {!!$errors->first('role_id', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="row">
    <div class="input-field col s12 l6 m12">
            <div class="form-group {{ $errors->has('organizer_id') ? 'has-error' : '' }}">
        {!! Form::select('organizer_id', ['' => '-- Pilih DE/EO --']+$organizers, null, ['class' => 'form-control']) !!}
        {!!$errors->first('organizer_id', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>
</div>
<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label class="col-md-12">Nama</label>
        <div class="col-md-12">
            {!! Form::text('nama', null, ['id' => 'title', 'class' => 'form-control
            form-control-line', 'placeholder' => 'Penyelenggara']) !!} {!!
            $errors->first('nama', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>    
    <div class="form-group">
        <div class="col-sm-12">
            {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!! Form::close() !!}
