<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>EONESIA</title>
        <link
            href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
            rel="stylesheet"
            id="bootstrap-css">
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">
        <link
            rel="shortcut icon"
            href="https://eonesia.id/img/icon.png"
            type="image/x-icon">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    <body>
        <div class="container">
            <br>
            <p class="text-center">
                <b>PENDAFTARAN TEST DRIVE YAMAHA</b>
            </a>
        </p>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <a href="" class="float-right btn btn-outline-primary mt-1">Log in</a>
                        <h4 class="card-title mt-2">Sign up</h4>
                    </header>
                    @include('frontend._form')
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <article class="bg-secondary mb-3">
        <div class="card-body text-center">
            <h3 class="text-white mt-3">Bootstrap 4 UI KIT</h3>
            <p class="h5 text-white">Components and templates
                <br>
                for Ecommerce, marketplace, booking websites and product landing pages</p>
            <br>
            <p>
                <a
                    class="btn btn-warning"
                    target="_blank"
                    href="http://bootstrap-ecommerce.com/">
                    Bootstrap-ecommerce.com
                    <i class="fa fa-window-restore "></i>
                </a>
            </p>
        </div>
        <br><br>
    </article>
    <script type="text/javascript">
        document
            .getElementById("field_terms")
            .setCustomValidity("Mohon ceklis untuk setuju dengan ketentuan dan kebijakan");
    </script>
    <script type="text/javascript">
        $("select[name='organizer_id']").change(function () {
            var organizer_id = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-ajax') ?>",
                method: 'POST',
                data: {
                    organizer_id: organizer_id,
                    _token: token
                },
                success: function (data) {
                    $("select[name='dealereo_id'").html('');
                    $("select[name='dealereo_id'").html(data.options);
                }
            });
        });
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>