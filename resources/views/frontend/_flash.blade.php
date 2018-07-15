@if (session()->has('flash_notification.message'))
        <div class="row center">
        <div class="alert alert-{{ session()->get('flash_notification.level') }}">
        <div class="col s12 m12 l12">
          <div class="card-panel teal accent-3">
            <span class="white-text center">{!! session()->get('flash_notification.message') !!}</span>
            </div>
          </div>
        </div>
      </div>
@endif

<script>
	window.setTimeout(function() {
    	$(".alert").fadeTo(10000, 0).slideUp(500, function(){
        	$(this).remove(); 
    	});
	}, 4000);
</script>