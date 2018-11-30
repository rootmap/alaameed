<!DOCTYPE html>
<html lang="en" data-textdirection="LTR" class="loading">
    <head>
        <title>@yield('title') | Admin Panel</title>
        @include('admin.include.headercss')
        @yield('css')
    </head>
    <body class="hold-transition fixed sidebar-mini">

        <div class="preloader"></div>
        <!-- main menu-->
        @include('admin.include.main_menu')
        <!-- / main menu-->
        
                     
        <!-- Basic form layout section start -->
        @yield('content')
        
        <!-- // Basic form layout section end -->
               
        
        @include('admin.include.footer')
        @include('admin.include.footerJs')
        @yield('js')
    </body>
</html>
