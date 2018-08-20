<script type="text/javascript">
	$(function() {
    // setTimeout() function will be fired after page is loaded
    // it will wait for 5 sec. and then will fire
    // $("#successMessage").hide() function
    	setTimeout(function() {
        	$("#div_suc").hide('blind', {}, 500)
		}, 1000);
	});
</script>
@if (session()->has('success'))
    <div class="alert alert-dismissable alert-success" id="div_suc">
        <!-- <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button> -->
        <strong>
            {!! session()->get('success') !!}
        </strong>
    </div>
@endif
