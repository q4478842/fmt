@if (isset($error)&&count($error) > 0)
    <script type="text/javascript">
        $(function() {
        // setTimeout() function will be fired after page is loaded
        // it will wait for 1 sec. and then will fire
        // $("#successMessage").hide() function
            setTimeout(function() {
                $("#div_suc").hide('blind', {}, 500)
            }, 1000);
        });
    </script>
    <div class="alert alert-success pb-0" role="alert" id="div_suc">
        <p class="text-center font-weight-bold">
            {!! session()->get('error') !!}
        </p>
    </div>
@endif
