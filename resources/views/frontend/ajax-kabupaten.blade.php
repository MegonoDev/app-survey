@if(!empty($kabupaten))

<option value="">kabupaten</option>
  @foreach($kabupaten as $key => $value)
    <option value="{{ $key }}">{{ $value }}</option>
  @endforeach
@endif
