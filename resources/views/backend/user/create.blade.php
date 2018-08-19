<h4 class="card-title">Create User</h4>
{!! Form::open(['route'=>'users.store', 'class'=> 'form-horizontal form-material']) !!}
{{ csrf_field() }}
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
  <label class="col-md-12">Nama Lengkap</label>
  <div class="col-md-12">
    {!! Form::text('name', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'nama lengkap']) !!}
    {!! $errors->first('name', '<p style="color:darkred" class="help-block">:message</p>') !!}
  </div>
</div>
<div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
  <label class="col-md-12">Email</label>
  <div class="col-md-12">
    {!! Form::email('email', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'email']) !!}
    {!! $errors->first('email', '<p style="color:darkred" class="help-block">:message</p>') !!}
  </div>
</div>
<div class="form-group {{ $errors->has('no_handphone') ? 'has-error' : '' }}">
  <label class="col-md-12">No Handphone</label>
  <div class="col-md-12">
    {!! Form::number('no_handphone', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'no handphone']) !!}
    {!! $errors->first('no_handphone', '<p style="color:darkred" class="help-block">:message</p>') !!}
  </div>
</div>
@if(Auth::user()->role_id == 1)
<div class="row">
        <div class="input-field col s12 l6 m12">
                <div class="form-group {{ $errors->has('role_id') ? 'has-error' : '' }}">
            {!! Form::select('role_id', ['' => 'Role']+$roles, null, ['class' => 'form-control']) !!}
            {!!$errors->first('role_id', '<p style="color:darkred" class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
    <div class="row">
        <div class="input-field col s12 l6 m12">
                <div class="form-group {{ $errors->has('dealereo_id') ? 'has-error' : '' }}">
            {!! Form::select('dealereo_id', ['' => 'Dealer']+$dealer, null, ['class' => 'form-control']) !!}
            {!!$errors->first('dealereo_id', '<p style="color:darkred" class="help-block">:message</p>') !!}
            </div>
        </div>
    </div>
@endif
<div class="form-group">
  <div class="col-sm-12">
    {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
  </div>
</div>
{!! Form::close() !!}
