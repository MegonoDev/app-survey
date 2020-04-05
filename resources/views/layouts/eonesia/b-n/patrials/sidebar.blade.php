<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="{{ asset('yamgroup/images/logo.png') }}" height="50" alt="elegant admin template"></span>
        <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <div class="scroll-sidebar">
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{ url ('backend/home') }}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('customers.create') }}" aria-expanded="false"><i class="fa fa-plus"></i><span class="hide-menu">Tambah Customer</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('customers.index') }}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Customer</span></a></li>
                @if(Auth::user()->role_id == 2 || Auth::user()->role_id == 1)
                <li> <a class="waves-effect waves-dark" href="{{ route('hadiah.index') }}" aria-expanded="false"><i class="fa fa-gift"></i><span class="hide-menu">Undian Customer</span></a></li>
                @endif
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu"><b>LAPORAN</b></span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('cetak.laporan.excel') }}" aria-expanded="false"><i class="fa fa-file-excel-o "></i><span class="hide-menu">Excel</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('cetak.laporan.pdf') }}" aria-expanded="false"><i class="fa fa-file-pdf-o "></i><span class="hide-menu">Pdf</span></a></li>
                @if(Auth::user()->role_id == 2)
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu"><b>MANAGEMENT ADMIN</b></span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('users.index') }}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User</span></a></li>
                @endif
                @if(Auth::user()->role_id == 1)
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu"><b>MANAGEMENT ADMIN</b></span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('users.index') }}" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">User</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('dealer.index') }}" aria-expanded="false"><i class="fa fa-university"></i><span class="hide-menu">Dealer</span></a></li>
                @endif
            </ul>
        </nav>
    </div>
</aside>
