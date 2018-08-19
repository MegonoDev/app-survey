<h4 class="card-title">Edit Dealer</h4> {!! Form::model($edit, ['route' => ['dealer.update', $edit],'method'=>'PUT', 'class' => 'form-horizontal form-material']) !!} {{ csrf_field() }}
<div class="form-group {{ $errors->has('kode_dealer') ? 'has-error' : '' }}">
  <label class="col-md-12">kode Dealer</label>
  <div class="col-md-12">
    {!! Form::text('kode_dealer', null, ['id' => 'title', 'class' => 'form-control form-control-line', 'placeholder' => 'Dealer']) !!}
    {!! $errors->first('kode_dealer', '<p style="color:darkred" class="help-block">:message</p>') !!}
  </div>
</div>
<div class="form-group">
  <div class="col-sm-12">
    {!! Form::submit('Edit', ['class' => 'btn btn-primary']) !!}
  </div>
</div>
{!! Form::close() !!}
