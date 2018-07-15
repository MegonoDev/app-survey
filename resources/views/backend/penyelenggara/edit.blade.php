<h4 class="card-title">Edit Penyelenggara</h4>
{!! Form::model($edit, ['route' => ['penyelenggara.update', $edit],'method'=>'PUT', 'class' => 'form-horizontal
form-material']) !!}
{{ csrf_field() }}
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
           {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!! Form::close() !!}
