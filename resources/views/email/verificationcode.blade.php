<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <title>Document</title> -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-10 col-md-10 col-xs-10">
                <div class="card">
                    <div class="card-header bg-primary">
                        <h4>Kode Konfirmasi</h4>
                    </div>
                    <div class="card-body">
                        Hello, Ini adalah kode konfirmasi kamu :
                        <div>
                            <h1 class="display-1"> {{ $code }} </h1>
                        </div>
                        Terimakasih.<br/></br>
                        <strong>Tim Eonesia</strong>
                    </div>
                    <div class="card-footer">
                        <a href="https://eonesia.id">EONESIA.ID</a>. "TURNING IDEAS INTO ACTION"
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>