<h4 class="card-title">Tambah Lokasi Test Drive</h4>
{!! Form::open(['route'=>'lokasi-kota.store', 'class'=> 'form-horizontal
form-material']) !!}
{{ csrf_field() }}
<div class="form-group {{ $errors->has('nama') ? 'has-error' : '' }}">
        <label class="col-md-12">Lokasi</label>
        <div class="col-md-12">
            {!! Form::text('nama', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'Lokasi']) !!} 
            {!! $errors->first('nama', '<p style="color:darkred" class="help-block">:message</p>') !!}
        </div>
    </div>    
    <div class="form-group">
        <div class="col-sm-12">
            {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!! Form::close() !!}
