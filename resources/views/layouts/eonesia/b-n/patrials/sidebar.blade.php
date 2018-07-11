<aside class="left-sidebar">
    <div class="d-flex no-block nav-text-box align-items-center">
        <span><img src="https://eonesia.id/img/icon.png" height="40" alt="elegant admin template"><font style="font-size:20px" color="white"> <b>NESIA</b></font></span>
        <a class="waves-effect waves-dark ml-auto hidden-sm-down" href="javascript:void(0)"><i class="ti-menu"></i></a>
        <a class="nav-toggler waves-effect waves-dark ml-auto hidden-sm-up" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
    </div>
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li> <a class="waves-effect waves-dark" href="{{ url ('home') }}" aria-expanded="false"><i class="fa fa-home"></i><span class="hide-menu">Dashboard</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('event.index') }}" aria-expanded="false"><i class="fa fa-calendar-o"></i><span class="hide-menu">Event</span></a></li>
                @can('manageadmin')
                <li> <a class="waves-effect waves-dark" href="#" aria-expanded="false"><span class="hide-menu">MANAGEMENT ADMIN</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('admin-kota.index') }}" aria-expanded="false"><i class="fa fa-users"></i><span class="hide-menu">Admin</span></a></li>
                <li> <a class="waves-effect waves-dark" href="{{ route('kota.index') }}" aria-expanded="false"><i class="fa fa-building"></i><span class="hide-menu">Kota</span></a></li>
                @endcan
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>