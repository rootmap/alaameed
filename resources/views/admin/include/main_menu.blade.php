<header class="main-header"> 
    <a href="index.html" class="logo"> <!-- Logo -->
        <span class="logo-mini">
            <!--<b>A</b>H-admin-->
            <img src="{{url('assets/adminpix/assets/dist/img/logo-mini.png')}}" alt="img">
        </span>
        <span class="logo-lg">
            <!--<b>Admin</b>H-admin-->
            <img src="{{url('assets/adminpix/assets/dist/img/logo.png')}}" alt="img">
        </span>
    </a>
    <!-- Header Navbar -->
    {{-- topnavbar --}}
    @include('admin.include.top_navbar')
    <aside class="main-sidebar">
        <!-- sidebar -->
        <div class="sidebar">
            <!-- sidebar menu -->
            <ul class="sidebar-menu">
                <li class="treeview {{ Request::path() == 'admin/site/dashboard' ? 'active' : '' }}">
                    <a href="{{url('admin/site/dashboard')}}">
                        <i class="ti-home"></i><span>Dashboard</span>
                        
                    </a>
                </li>
                
                {{-- <li class="active treeview">
                    <a href="#">
                        <i class="ti-pencil-alt"></i> <span>Business Unit</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu">
                        <li class="treeview {{ Request::path() == 'admin/site/setting' ? 'active' : '' }}"><a href="{{url('admin/site/setting')}}"><span>Site Setting</span></a></li>
                        
                    </ul>
                </li> --}}
                <li class="treeview {{ Request::path() == 'admin/site/setting' ? 'active' : '' }}"><a href="{{url('admin/site/setting')}}"> <i class="ti-pencil-alt"></i> <span>Site Setting</span></a></li>
                <li class="treeview {{ Request::path() == 'admin/slider' ? 'active' : '' }}"><a href="{{url('admin/slider')}}"> <i class="ti-pencil-alt"></i> <span>Slider</span></a></li>
                
                <li class="treeview {{ Request::path() == 'admin/about' ? 'active' : '' }}">
                    <a href="{{url('admin/about')}}">
                        <i class="ti-pencil-alt"></i> <span>About Us</span>
                    </a>
                </li>
                <li class="treeview {{ Request::path() == 'admin/business' ? 'active' : '' }}">
                    <a href="{{url('admin/business')}}">
                        <i class="ti-pencil-alt"></i> <span>Clients </span>
                    </a>
                </li>

                <li class="treeview {{ Request::path() == 'admin/projects' ? 'active' : '' }}">
                    <a href="{{url('admin/projects')}}">
                        <i class="ti-pencil-alt"></i> <span>Projects </span>
                    </a>
                </li>

                
                <li class="treeview {{ Request::path() == 'admin/service' ? 'active' : '' }}">
                    <a href="{{url('admin/service')}}">
                        <i class="ti-pencil-alt"></i> <span>Services</span>
                    </a>
                </li>
                <li class="treeview {{ Request::path() == 'admin/gallery' ? 'active' : '' }}">
                    <a href="{{url('admin/gallery')}}">
                        <i class="ti-pencil-alt"></i> <span>Gallery</span>
                    </a>
                </li>

                <li class="treeview {{ Request::path() == 'admin/content' ? 'active' : '' }}">
                    <a href="{{url('admin/content')}}">
                        <i class="ti-pencil-alt"></i> <span>Contents</span>
                    </a>
                </li>

                <li class="treeview {{ Request::path() == 'admin/profile' ? 'active' : '' }}">
                    <a href="{{url('admin/profile')}}">
                        <i class="ti-pencil-alt"></i> <span>Profile </span>
                    </a>
                </li>

                <li class="treeview {{ Request::path() == 'admin/download' ? 'active' : '' }}">
                    <a href="{{url('admin/download')}}">
                        <i class="ti-pencil-alt"></i> <span>Download</span>
                    </a>
                </li>
                

                
            </ul>
        </div> <!-- /.sidebar -->
    </aside>
</header>