 
@if (session()->has('flash_notification.message'))
<div class="alert alert-{{ session()->get('flash_notification.level') }}" id="add-new-alert">
    <button type="button" data-dismiss="alert" aria-hidden="true" class="close">&times;</button>
    <i class="fa fa-info-circle"></i> {!! session()->get('flash_notification.message') !!}
</div>
@endif
<script>
window.setTimeout(function() {
    $(".alert").fadeTo(300, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script> 