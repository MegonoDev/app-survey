@if(!empty($sales))

<option value="">sales</option>
@foreach($sales as $key => $value)
<option value="{{ $key }}">{{ $value }}</option>
@endforeach
@endif