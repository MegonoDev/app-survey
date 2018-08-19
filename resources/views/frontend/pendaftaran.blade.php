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
                <h4 class="text-center">Silahkan isi data diri untuk mendapatkan nomor<br> undian Bahagia Keluarga Bersama YAMAHA</h4>
            </a>
        </p>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <header class="card-header">
                        <h6 class="card-title mt-2">INFORMASI PERSONAL ANDA</h6>
                        <span>Isi Data Diri Anda</span>
                    </header>
                    @include('frontend._form')
                </div>
            </div>
        </div>
    </div>
    <br><br>
    <article class="bg-secondary mb-3">
        <div class="card-body text-center">
            <h3 class="text-white mt-3">EONESIA</h3>
            <p class="h5 text-white">Brand Activation | Apparel & Merchendise | Advertising | Event Organizer | Product <br>| 3D Animation | Exhibition | Multimedia Development | Customer Insight
        </div>
        <br><br>
    </article>
    <script type="text/javascript">
        document
            .getElementById("field_terms")
            .setCustomValidity("Mohon ceklis untuk setuju dengan ketentuan dan kebijakan");
    </script>
    <script type="text/javascript">
        $("select[name='id_prov']").change(function () {
            var id_prov = $(this).val();
            var token = $("input[name='_token']").val();
            $.ajax({
                url: "<?php echo route('select-kabupaten') ?>",
                method: 'POST',
                data: {
                    id_prov: id_prov,
                    _token: token
                },
                success: function (data) {
                    $("select[name='id_kab'").html('');
                    $("select[name='id_kab'").html(data.options);
                }
            });
        });
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</body>
</html>
