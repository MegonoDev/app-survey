@if (session()->has('flash_notification.message'))
<div class="pesan">
   <span style="color:red;">{!! session()->get('flash_notification.message') !!}</span>
</div>
@endif

<script>
	window.setTimeout(function() {
    	$(".pesan").fadeTo(1000, 0).slideUp(500, function(){
        	$(this).remove();
    	});
	}, 1000);
</script>
