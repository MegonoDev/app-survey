<header class="topbar">
  <nav class="navbar top-navbar navbar-expand-md navbar-dark">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">
        <img src="{{ asset('eonesia/images/logo.png') }}" alt="homepage" height="50" class="dark-logo" />
        <span>YAMAHA<img src="{{ asset('eonesia/images/logo.png') }}" class="light-logo" alt="homepage"/></span>
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
              <img src="{{ asset('eonesia/images/admin.jpeg') }}" alt="user" class="img-circle" width="30"> &nbsp;&nbsp;&nbsp;
              <font style="color:black">
                {{ Auth::user()->name }}
              </font>
            </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
              <a class="dropdown-item" href="{{ route('profile', Auth::user()->email) }}">Profile</a>
              <a class="dropdown-item" href="{{ route('profilepassword', Auth::user()->email) }}">Ganti Password</a>
              @if(Auth::user()->role_id == 3)
              <a class="dropdown-item" href="{{ route('sales.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign Out</a>
              <form id="logout-form" action="{{ route('sales.logout') }}" method="POST" style="display:none;">
                {{ csrf_field() }}
              </form>
              @else
              <a class="dropdown-item" href="{{ route('admin.logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Sign Out</a>
              <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display:none;">
                {{ csrf_field() }}
              </form>
              @endif
            </div>
          </div>
        </li>
      </ul>
    </div>
  </nav>
</header>
