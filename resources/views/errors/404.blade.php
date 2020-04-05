<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="https://eonesia.id/img/icon.png">
    <title>Errors</title>
    <link href="{{ asset('yamgroup/b-n/main/dist/css/style.css')}}" rel="stylesheet">
    <link href="{{ asset('yamgroup/b-n/main/dist/css/pages/error-pages.css')}}" rel="stylesheet">
</head>
<body class="skin-default-dark fixed-layout">
    <section id="wrapper" class="error-page">
        <div class="error-box">
            <div class="error-body text-center">
                <h1>404</h1>
                <h3 class="text-uppercase">Page Not Found !</h3>
                <p class="text-muted m-t-30 m-b-30">YOU SEEM TO BE TRYING TO FIND HIS WAY HOME</p>
                <a href="#" onclick="goBack()" class="btn btn-info btn-rounded waves-effect waves-light m-b-40">Back</a> </div>
        </div>
    </section>
    <script src="{{ asset('yamgroup/b-n/assets/node_modules/jquery/jquery-3.2.1.min.js')}}"></script>
    <script src="{{ asset('yamgroup/b-n/assets/node_modules/popper/popper.min.js')}}"></script>
    <script src="{{ asset('yamgroup/b-n/assets/node_modules/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('yamgroup/b-n/main/dist/js/waves.js')}}"></script>
    <script>
function goBack() {
    window.history.back();
}
</script>
</body>
</html>
