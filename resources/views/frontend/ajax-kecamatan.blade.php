@if(!empty($kecamatan))

<option value="">kecamatan</option>
  @foreach($kecamatan as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
