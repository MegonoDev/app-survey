@if(!empty($dealereo))
  @foreach($dealereo as $key => $dealer)
    <option value="{{ $key }}">{{ $dealer }}</option>
  @endforeach
@endif
