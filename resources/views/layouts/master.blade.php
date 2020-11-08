<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Laravel | @yield('title')</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/bower_components/Ionicons/css/ionicons.min.css')}}">
    <!-- bootstrap slider -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/plugins/seiyria-bootstrap-slider/css/bootstrap-slider.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/dist/css/skins/_all-skins.min.css')}}">

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <meta name="_token" content="{!! csrf_token() !!}" />
    <link rel="stylesheet" href="{{asset('assets/admin/dist/css/style.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    @stack('links')
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <header class="main-header">
            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>A</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Administrator</b></span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Username <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Profie</a></li>
                                <li><a href="#">Logout</a></li>
                            </ul>
                        </li>
                    </ul>
            </nav>

        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="{{asset('assets/admin/image/avatar.png')}}" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Nguyễn Văn A</p>
                        <a href="#"><i class="fa fa-send-o"></i>Profile</a>
                    </div>
                </div>
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-dashboard"></i> <span>Employee</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('employee.index')}}"><i class="fa fa-check-square"></i> List
                                    Employee</a></li>
                            <li><a href="{{route('employee.create')}}"><i class="fa fa-plus-square"></i> Add
                                    Employee</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Criteria</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('criteria.index')}}"><i class="fa fa-check-square"></i>List
                                    criteria</a></li>
                            <li><a href="{{route('criteria.create')}}"><i class="fa fa-plus-square"></i>Add
                                    criteria</a></li>
                        </ul>
                    </li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Update point for employee</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="{{route('employee-criteria.index')}}"><i class="fa fa-check-square"></i> List
                                    Employee</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                @yield('breadcumb')
            </section>
            <section class="content">
                @yield('main-content')
            </section>
        </div>

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.18
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <script src="{{asset('assets/admin/dist/js/bower_components/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{asset('assets/admin/dist/js/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('assets/admin/dist/js/bower_components/fastclick/lib/fastclick.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('assets/admin/dist/js/dist/js/adminlte.min.js')}}"></script>
    <!-- Bootstrap slider -->
    <script src="{{asset('assets/admin/dist/js/plugins/seiyria-bootstrap-slider/bootstrap-slider.min.js')}}"></script>
    <script src="./resources/js/script.js"></script>
    <script>
        $(function() {
            /* BOOTSTRAP SLIDER */
            $('.slider').slider()
        })
    </script>
</body>

</html>