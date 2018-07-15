<h4 class="card-title">Ganti Password <span class="label label-info">{{ $password->name }}<span></h4>
{!! Form::model($password, ['route' => ['updatepassword', $password],'method'=>'PUT', 'class' => 'form-horizontal
form-material']) !!}
{{ csrf_field() }}
<div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
    <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
        {!! Form::label('password', 'Password', ['class' => 'col-md-3 control-label'])
        !!}
        <div class="col-md-12">
            {!! Form::password('password', ['class' => 'form-control']) !!} {!!
            $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
    
    <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
        {!! Form::label('password_confirmation', 'Re-Password', ['class' => 'col-md-3
        control-label']) !!}
        <div class="col-md-12">
            {!! Form::password('password_confirmation', ['class' => 'form-control']) !!} {!!
            $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
        </div>
    </div>    
    <div class="form-group">
        <div class="col-sm-12">
            {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
{!! Form::close() !!}

