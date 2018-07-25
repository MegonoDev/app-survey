<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="https://eonesia.id/img/icon.png" height="40" alt="elegant admin template"><font style="font-size:20px" color="white"> <b>NESIA</b></font></span>
        <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{ url ('backend/home') }}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('member.index') }}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Member</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('lokasi-kota.index') }}" aria-expanded="false"><i class="fa fa-map-marker"></i><span class="hide-menu">Lokasi</span></a></li>
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu"><b>LAPORAN</b></span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('cetak.laporan.excel') }}" aria-expanded="false"><i class="fa fa-file-excel-o "></i><span class="hide-menu">Excel</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('cetak.laporan.pdf') }}" aria-expanded="false"><i class="fa fa-file-pdf-o "></i><span class="hide-menu">Pdf</span></a></li>
                @can('manageadmin')
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu"><b>MANAGEMENT ADMIN</b></span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('penyelenggara.index') }}" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Penyelenggara</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('admin-kota.index') }}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Admin</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('role.index') }}" aria-expanded="false"><i class="fa fa-key"></i><span class="hide-menu">Role</span></a></li>
                @endcan
            </ul>
        </nav>
    </div>
</aside>