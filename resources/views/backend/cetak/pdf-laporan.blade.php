<!DOCTYPE html>
<html>
    <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="">
            <meta name="author" content="">
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
            }
        </style>
    </head>
    <body>
        <h4> <center> Laporan Data Member Test Drive <br> 
            Bulan {{ $members['0']->Laporanbulan }} </center> <hr></h4>
        <br>
        <table id="customers">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">
                       Nama
                    </th>
                    <th scope="col">
                       Email
                    </th>
                    <th scope="col">
                       Jenis Kelamin
                    </th>
                    <th scope="col">
                       Alamat
                    </th>
                    <th scope="col">
                       T.TL
                    </th>
                    <th scope="col">
                       Handphone
                    </th>
                    <th scope="col">
                       Kode
                    </th>
                    <th scope="col">
                       Status
                    </th>
                    <th >
                       Lokasi
                    </th>
                    <th >
                       Register
                    </th>
                </tr>
                <?php $no = 1; ?>
                @foreach($members as $member)
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
                    <td >Belum Di Verifikasi</td>
                    @else
                    <td>
                        Sudah Di Verifikasi
                    </td>
                    @endif
                    <td >{{ $member->location->nama }}</td>
                    <td >{{ $member->CreatedAt }}</td>
                </tr>
                @endforeach
            </table>

        </body>
    </html>