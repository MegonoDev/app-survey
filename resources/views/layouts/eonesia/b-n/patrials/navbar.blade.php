<nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="#">
                        <b>
                       <img src="https://eonesia.id/img/icon.png" alt="home" class="dark-logo" /><img src="https://eonesia.id/img/icon.png" width="25px" alt="home" class="light-logo" />
                     </b>
                       <span class="hidden-xs">
                       <font style="font-size:150%;" color="black"><b>NESIA</b></font>
                     </span> </a>
                </div>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a class="profile-pic" href="#"> 
                            <img src="https://i1.wp.com/www.winhelponline.com/blog/wp-content/uploads/2017/12/user.png?fit=256%2C256&quality=100" alt="user-img" width="36" class="img-circle">
                            <b class="hidden-xs">{{ Auth::user()->name }}</b></a>
                    </li>
                    <li>
                            <a class="profile-pic" ref="{{ url('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                        <img src="{{ asset('eonesia/images/shutdown.png') }}" alt="user-img" width="36" class="img-circle">  
                            </a>
                            <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display:none;">
                              {{ csrf_field() }}
                            </form> 
                    </li>
                </ul>
            </div>

        </nav>