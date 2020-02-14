@if(!empty($seri))
  @foreach($seri as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
