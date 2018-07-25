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
        <th width="500px">Nama</th>
        <th>Email</th>
        <th>Jenis Kelamin</th>
        <th>Alamat</th>
        <th>T.TL</th>
        <th>Handphone</th>
        <th>Kode</th>
        <th>Status</th>
        <th>Organizer</th>
        <th>Kota</th>
        <th>Lokasi</th>
        <th>Register</th>
    </tr>
    </thead>
    <tbody>
    @foreach($members as $member)
        <tr>
            <td width="500px">{{ $member->nama }}</td>
            <td>{{ $member->email }}</td>
            <td>{{ $member->Jeniskelamin }}</td>
            <td>{{ $member->alamat }}</td>
            <td>{{ $member->tempat_lahir }}, {{ $member->Tanggallahir }}</td>
            <td>+{{ $member->handphone }}</td>
            <td>{{ $member->kode }}</td>
            @if( $member->status == '0')
            <td>
                <span class="badge badge-danger">Belum Di Verifikasi</span>
            </td>
            @else
            <td>
                <span class="badge badge-success">Sudah Di Verifikasi</span>
            </td>
            @endif
            <td>{{ $member->dealereo->nama }}</td>
            <td>{{ $member->dealereo->role->name }}</td>
            <td>{{ $member->location->nama }}</td>
            <td>{{ $member->CreatedAt }}</td>
        </tr>
    @endforeach 
</body>
</html>