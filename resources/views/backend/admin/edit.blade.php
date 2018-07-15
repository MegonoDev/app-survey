<h4 class="card-title">Edit Admin</h4>
{!! Form::model($admin, ['route' => ['admin-kota.update', $admin],'method'=>'PUT', 'class' => 'form-horizontal
form-material']) !!}
{{ csrf_field() }}
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
        <label class="col-md-12">Nama Admin</label>
        <div class="col-md-12">
            {!! Form::text('name', null, ['id' => 'title', 'class' => 'form-control
            form-control-line', 'placeholder' => 'Input Nama Admin']) !!} {!!
            $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
        <label class="col-md-12">Email</label>
        <div class="col-md-12">
            {!! Form::text('email', null, ['id' => 'title', 'class' => 'form-control
            form-control-line', 'placeholder' => 'Input Email Admin']) !!} {!!
            $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    <div class="form-group @if ($errors->has('roles')) has-error @endif">                
      {!! Form::label('roles[]', 'Kota', ['class' =>'col-md-12']) !!}
      <div class="col-md-12">
      {!! Form::select('roles[]', $roles, isset($admin) ? $admin->roles->pluck('id')->toArray() : null,  ['class' => 'form-control']) !!}
      @if ($errors->has('roles')) <p class="help-block">{{ $errors->first('roles') }}</p> @endif
      </div>
    </div>

     <div class="form-group">
        <div class="col-sm-12">
           {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>

{!! Form::close() !!}
