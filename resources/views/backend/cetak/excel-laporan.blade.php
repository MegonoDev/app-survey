<h4>Laporan Data Member Bulan {{ $members['0']->Laporanbulan }} </h4>
<br>
<table border="1">
    <thead>
    <tr>
        <th>Nama</th>
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
            <td>{{ $member->nama }}</td>
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