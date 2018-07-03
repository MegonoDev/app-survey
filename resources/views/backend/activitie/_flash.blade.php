{{-- @if (session()->has('flash_notification.message'))
        <div class="row center">
        <div class="alert alert-{{ session()->get('flash_notification.level') }}">
        <div class="col s12 m12 l12">
          <div class="card-panel teal accent-3">
            <span class="white-text center">{!! session()->get('flash_notification.message') !!}</span>
            </div>
          </div>
        </div>
      </div>
@endif --}}


@if (session()->has('flash_notification.message'))
<div class="row">
        <div class="col-12">
            <div class="alert alert-{{ session()->get('flash_notification.level') }}" role="alert">
                <h4 class="alert-heading">BERHASIL!</h4>
                <p>{!! session()->get('flash_notification.message') !!}</p>
                <hr>
                <p class="mb-0"></p>
            </div>
        </div>
    </div>
    @endif

    <script>
	window.setTimeout(function() {
    	$(".alert").fadeTo(300, 0).slideUp(500, function(){
        	$(this).remove(); 
    	});
	}, 4000);
</script>