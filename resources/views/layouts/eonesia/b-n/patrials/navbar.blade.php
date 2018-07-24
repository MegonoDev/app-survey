<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-dark">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">
                <b>
                    <img src="https://eonesia.id/img/icon.png" alt="homepage" height="50" class="dark-logo"/>
                </b>
                <span>YAMAHA<img src="https://eonesia.id/img/icon.png" class="light-logo" alt="homepage"/></span>
            </a>
        </div>
        <div class="navbar-collapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item hidden-sm-up">
                    <a class="nav-link nav-toggler waves-effect waves-light" href="javascript:void(0)">
                        <i class="ti-menu"></i>
                    </a>
                </li>
            </ul>
    <ul class="navbar-nav my-lg-0">
        <li class="nav-item dropdown">
            <div class="btn-group">
                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="http://www.408w130.com/admin-855.jpg" alt="user" class="img-circle" width="30"> 
                    &nbsp;&nbsp;&nbsp; <font style="color:black">
                            @if(!Auth::user()->name)
                            return redirect(route('login-event'))
                            @else
                            {{ Auth::user()->name }}
                            @endif
                            </font></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="{{ route('profile', Auth::user()->name) }}">Profile</a>
                        <a class="dropdown-item" href="{{ route('profilepassword', Auth::user()->name) }}">Ganti Password</a>
                        <a class="dropdown-item" href="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign Out</a>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display:none;">
                        {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
</header>