<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
            #customers {
                font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
                border-collapse: collapse;
                width: 100%;
            }

            #customers td,
            #customers th {
                border: 1px solid #ddd;
                padding: 8px;
            }

            #customers tr:nth-child(even) {
                background-color: #f2f2f2;
            }

            #customers tr:hover {
                background-color: #ddd;
            }

            #customers th {
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #4CAF50;
                color: white;
            }h4 {color:red;}
        </style>
</head>
<body>
<table width="400">
<tr colspan="12">
<td colspan="12" rowspan="3"><h4><center>Laporan Data Member Test Drive <br> Bulan {{ $members['0']->Laporanbulan }}</center></h4></td>
</tr>
</table>
<br>
<br>
<table id="customers" border="1" cellpadding="10">
    <thead>
    <tr>
        <th>No</th>
        <th width="500px">Nama</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>T.TL</th>
        <th>Handphone</th>
        <th>Kode</th>
        <th>Status</th>
        <th>status</th>
        <th>Register</th>
    </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
    @foreach($members as $member)
        <tr>
                    <td>{{ $no++ }}</td>
                    <td >{{ $member->nama }}</td>
                    <td >{{ $member->email }}</td>
                    <td >{{ $member->jenis_kelamin }}</td>
                    <td >{{ $member->alamat }}</td>
                    <td >{{ $member->tempat_lahir }}, {{ $member->Tanggallahir }}</td>
                    <td >+{{ $member->handphone }}</td>
                    <td >{{ $member->kode }}</td>
                    <td >{{ $member->status_verifikasi }}</td>
                    <td >{{ $member->CreatedAt }}</td>
        </tr>
    @endforeach
</body>
</html>
