<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <title>EONESIA</title>
</head>
<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <center>
                        <h4>Laporan Data Member Test Drive<br>
                        Bulan {{ $members['0']->Laporanbulan }}</h4><hr>
                    </center>
                    <br><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7 col-md-3 m-t-20">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table cellpadding="0" class="table" cellspacing="0" border="1" style="font-family:Verdana, Geneva, sans-serif">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Nama</strong></th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Email</strong></th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Jenis Kelamin</strong></th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Alamat</strong></th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>T.TL</strong></th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Handphone</strong></th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Kode</strong></th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Status</strong></th>                                   
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Lokasi</strong></th>
                                            <th height="23" align="center" style="background-color:#CCC"><strong>Register</strong></th>
                                        </tr>
                                    </thead>
                                    <?php $no = 1; ?>
                                    @foreach($members as $member)
                                    <tbody>
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <td >{{ $member->nama }}</td>
                                            <td >{{ $member->email }}</td>
                                            <td >{{ $member->Jeniskelamin }}</td>
                                            <td >{{ $member->alamat }}</td>
                                            <td >{{ $member->tempat_lahir }},
                                                {{ $member->Tanggallahir }}</td>
                                            <td >+{{ $member->handphone }}</td>
                                            <td >{{ $member->kode }}</td>
                                            @if( $member->status == '0')
                                            <td >
                                                <span class="badge badge-danger">Belum Di Verifikasi</span>
                                            </td>
                                            @else
                                            <td >
                                                <span class="badge badge-success">Sudah Di Verifikasi</span>
                                            </td>
                                            @endif
                                            <td >{{ $member->location->nama }}</td>
                                            <td >{{ $member->CreatedAt }}</td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</body>
</html>
   