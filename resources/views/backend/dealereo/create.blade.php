<h4 class="card-title">Create Dealer</h4>
{!! Form::open(['route'=>'dealer.store', 'class'=> 'form-horizontal form-material']) !!} {{ csrf_field() }}
<div class="form-group {{ $errors->has('kode_dealer') ? 'has-error' : '' }}">
  <label class="col-md-12">Kode Dealer</label>
  <div class="col-md-12">
    {!! Form::text('kode_dealer', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'Kode dealer']) !!}
    {!! $errors->first('kode_dealer', '<p style="color:darkred" class="help-block">:message</p>') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-sm-12">
    {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
  </div>
</div>
{!! Form::close() !!}
