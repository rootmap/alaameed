<nav class="navbar navbar-static-top">
    <a href="#" class="sidebar-toggle hidden-sm hidden-md hidden-lg" data-toggle="offcanvas" role="button"> <!-- Sidebar toggle button-->
        <span class="sr-only">Toggle navigation</span>
        <span class="ti-menu-alt"></span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <li>
                <form class="navbar-form hidden-xs" role="search">
                    <div class="input-group add-on">
                        <input class="form-control" placeholder="Search" name="srch-term" id="srch-term" type="text">
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit" data-toggle="tooltip" data-placement="bottom" title="Search"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </form>
            </li>
            
            
            <li class="dropdown dropdown-user">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="ti-user"></i></a>
                <ul class="dropdown-menu">
                    <li><a href=""><i class="ti-user"></i> User Profile</a></li>
                    <li>
                        <a href="{{ route('logout') }}"><i class="ti-key"></i> Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>