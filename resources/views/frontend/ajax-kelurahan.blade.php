@if(!empty($kelurahan))

<option value="">kelurahan</option>
  @foreach($kelurahan as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
