@if (Session::has('success'))
    <script type="text/javascript">
        setTimeout(function () {
            $("#refresh").fadeOut(1000);
        }, 3000);
    </script>
    <div id="refresh" class="alert bg-success alert-dismissible"
         style="position:fixed; top:55px; right:15px; z-index:999999999999999999">
        <i class="icon text-white"> {!! Session::get('success') !!}</i>
    </div>
@endif

@if (session::has('error'))
    <script type="text/javascript">
        setTimeout(function () {
            $("#refresh").fadeOut(1000);
        }, 3000);
    </script>
    <div id="refresh" class="alert bg-danger" style="position:fixed; top:55px; right:15px; z-index:999999999999999999">
        <i class="icon text-white"> {!! session::get('error') !!} </i>
    </div>
@endif

<script>
    $.ajaxSetup({
        headers: {
            'Authorization': `Bearer {{ access_token() }}`,
            // 'Access-Control-Allow-Origin': '*',
        }
    });
</script>