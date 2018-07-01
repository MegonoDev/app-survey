<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <!-- Logo icon --><b>
                    <img src="https://eonesia.id/img/icon.png" alt="homepage" height="50" class="dark-logo" />
                    <!-- Light Logo icon -->
                    
                </b>
                <!--End Logo icon -->
                <!-- Logo text --><span>
                 <!-- dark Logo text -->
                 NESIA
                 <!-- Light Logo text -->    
                 <img src="https://eonesia.id/img/icon.png" class="light-logo" alt="homepage" /></span> </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <!-- This is  -->
                <li class="nav-item hidden-sm-up"> <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)"><i class="ti-menu"></i></a></li>
            </ul>
            <ul class="navbar-nav my-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->name }}</a>
                </li>
                <li>
                        <a class="nav-link text-muted waves-effect waves-dark" ref="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    <img src="{{ asset('eonesia/images/shutdown.png') }}" alt="user-img" width="36" class="img-circle">  
                        </a>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display:none;">
                          {{ csrf_field() }}
                        </form> 
                </li>
            </ul>
        </div>
    </nav>
</header>