<header class="app-header"><a class="app-header__logo" href="">Admin Pannel</a>
    <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar"
        aria-label="Hide Sidebar"></a>
    <!-- Navbar Right Menu-->
    <ul class="app-nav">
        <li class="app-search">
            <input class="app-search__input" type="search" placeholder="Search">
            <button class="app-search__button"><i class="fa fa-search"></i></button>
        </li>
        <!--Notification Menu-->

        <!-- User Menu-->
        <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i
                    class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
                <li><a class="dropdown-item" href="{{ url('changepassword/1')}}"><i class="fa fa-user fa-lg"></i> Change
                        Password</a></li>
                <li><a class="dropdown-item" href="{{ url('/admin/logout') }}"><i class="fa fa-sign-out fa-lg"></i>
                        Logout</a></li>
            </ul>
        </li>
    </ul>
</header>
