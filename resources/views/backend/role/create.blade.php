                        <h4 class="card-title">Tambah Kota</h4>
                        {!! Form::open(['route'=>'role.store', 'class'=> 'form-horizontal form-material']) !!}
                        {{ csrf_field() }}
                        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                            <label class="col-md-12">Nama Kota</label>
                            <div class="col-md-12">
                                {!! Form::text('name', null, ['id' => 'title', 'class' => 'form-control
                                form-control-line', 'placeholder' => 'Input Nama Kota']) !!} {!!
                                $errors->first('name', '<p class="help-block">:message</p>') !!}
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-12">
                                {!! Form::submit('simpan', ['class' => 'btn btn-primary']) !!}
                            </div>
                        </div>
                        {!! Form::close() !!}