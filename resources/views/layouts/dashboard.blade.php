<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>YourSpace | Dashboard</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <!-- bootstrap datepicker -->
    <link rel="stylesheet"
        href="{{ asset('template/adminlte/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <!-- daterange picker -->
    <link rel="stylesheet"
        href="{{ asset('template/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.css') }}">
    <!-- Bootstrap time Picker -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/timepicker/bootstrap-timepicker.min.css') }}">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}">
    <!-- Select2 -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/bower_components/select2/dist/css/select2.min.css') }}">
    <!-- fullCalendar -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/adminlte/bower_components/fullcalendar/dist/scheduler.min.css') }}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/bower_components/font-awesome/css/font-awesome.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/bower_components/Ionicons/css/ionicons.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('template/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('template/adminlte/dist/css/AdminLTE.min.css') }}">

    <link rel="stylesheet" href="{{ asset('template/adminlte/dist/css/skins/_all-skins.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition sidebar-mini skin-black-light fixed">
    <div class="wrapper">
        <header class="main-header">

            <!-- Logo -->
            <a href="/" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini">YourSpace</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>YourSpace </b>Web</span>
            </a>

            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
                    {{-- <span class="sr-only">Toggle navigation</span> --}}
                </a>
                <!-- Navbar Right Menu -->
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="{{ asset('template/adminlte/dist/img/ProfileAdmin.png') }}" class="user-image"
                                    alt="User Image">
                                <span class="hidden-xs">Admin</span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">
                                    <img src="{{ asset('template/adminlte/dist/img/ProfileAdmin.png') }}" class="img-circle"
                                        alt="User Image">

                                </li>
                                <li class="user-footer">
                                    <div class="pull-right">
                                        <form action="{{ route('logout') }}" method="post">
                                            @csrf
                                            <button type="submit" class="btn btn-default btn-flat">Sign out</button>
                                        </form>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <li class="@yield('index')"><a href="{{ route('dashboard.index') }}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                    <!-- <li class="treeview @yield('hari.ini')">
                        <a href="#">
                            <i class="fa fa-calendar"></i> <span>Hari Ini</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="@yield('check.in')"><a href="{{ route('dashboard.checkin') }}"><i class="fa fa-circle-o"></i> Check-in</a></li>
                            <li class="@yield('menginap')"><a href="{{ route('dashboard.menginap') }}"><i class="fa fa-circle-o"></i> Sedang Menginap</a></li>
                            <li class="@yield('check.out')"><a href="{{ route('dashboard.checkout') }}"><i class="fa fa-circle-o"></i> Check-out</a></li>
                        </ul>
                    </li> -->
                    <li class="treeview @yield('reservasi')">
                        <a href="#">
                            <i class="fa fa-book"></i> <span>Reservasi</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <!-- <li class="@yield('subreservasi')"><a href="{{ route('dashboard.reservasi') }}"><i class="fa fa-circle-o"></i> Reservasi</a></li> -->
                            <li class="@yield('list.reservasi')"><a href="{{ route('dashboard.list.reservasi') }}"><i class="fa fa-circle-o"></i> List Reservasi</a></li>
                            <!-- <li class="@yield('history.reservasi')"><a href="{{ route('dashboard.history.reservasi') }}"><i class="fa fa-circle-o"></i> History</a></li> -->
                        </ul>
                    </li>
                    <!-- <li class="treeview @yield('housekeeping')">
                        <a href="#">
                            <i class="fa fa-home"></i><span>Housekeeping</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class="@yield('penjadwalan')"><a href="{{ route('dashboard.penjadwalan') }}"><i class="fa fa-circle-o"></i> Penjadwalan Karyawan</a></li>
                            <li class="@yield('logbook')"><a href="{{ route('dashboard.logbook') }}"><i class="fa fa-circle-o"></i> Logbook</a></li>
                            <li class="@yield('cleaning')"><a href="{{ route('dashboard.cleaning') }}"><i class="fa fa-circle-o"></i> Cleaning Schedule</a></li>
                        </ul>
                    </li> -->
                    <!-- <li class="@yield('review')"><a href="{{ route('dashboard.review') }}"><i class="fa fa-comments"></i> <span>Review</span></a></li> -->
                    <hr>
                    <li class="treeview @yield('manajemen')">
                        <a href="#">
                            <i class="fa fa-gear"></i> <span>Manajemen</span>
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <!-- <li class="@yield('profile')"><a href="{{ route('dashboard.manajemen.profile') }}"><i class="fa fa-circle-o"></i> Profile</a></li> -->
                            <li class="@yield('kamar')"><a href="{{ route('dashboard.manajemen.kamar') }}"><i class="fa fa-circle-o"></i> Ruangan</a></li>
                            <li class="@yield('tarif')"><a href="{{ route('dashboard.manajemen.tarif') }}"><i class="fa fa-circle-o"></i> Tarif</a></li>
                            <li class="@yield('fasilitas')"><a href="{{ route('dashboard.manajemen.fasilitas') }}"><i class="fa fa-circle-o"></i> Fasilitas</a></li>
                            <!-- <li class="@yield('karyawan')"><a href="{{ route('dashboard.manajemen.karyawan') }}"><i class="fa fa-circle-o"></i> Karyawan</a></li> -->
                            <li class="@yield('akun')"><a href="{{ route('dashboard.manajemen.akun') }}"><i class="fa fa-circle-o"></i> Akun</a></li>
                        </ul>
                    </li>
                    <!-- <li class="@yield('bantuan')"><a href="{{ route('dashboard.bantuan') }}"><i class="fa fa-question-circle"></i> <span>Bantuan</span></a></li> -->
                    <li> <a href="javascript:{}" onclick="logout.submit()"><i class="fa fa-sign-out"></i> <span>Keluar</span></a></li>
                    <form id="logout" action="{{ route('logout') }}" method="post">
                        @csrf   
                    </form>
                </ul>
            </section>
        </aside>

        <div class="content-wrapper">
            @yield('content')
        </div>
        <footer class="main-footer">
            <strong>Copyright &copy; 2021</strong> All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="{{ asset('template/adminlte/bower_components/jquery/dist/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('template/adminlte/bower_components/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.7 -->
    <script src="{{ asset('template/adminlte/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- DataTables -->
    <script src="{{ asset('template/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}">
    </script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="{{ asset('template/adminlte/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}"></script>
    <!-- date-range-picker -->
    <script src="{{ asset('template/adminlte/bower_components/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('template/adminlte/bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <!-- bootstrap time picker -->
    <script src="{{ asset('template/adminlte/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
    <!-- Select2 -->
    <script src="{{ asset('template/adminlte/bower_components/select2/dist/js/select2.full.min.js') }}"></script>
    <!-- fullCalendar -->
    <script src="{{ asset('template/adminlte/bower_components/moment/moment.js') }}"></script>
    <script src="{{ asset('template/adminlte/bower_components/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('template/adminlte/bower_components/fullcalendar/dist/scheduler.min.js') }}"></script>
    <!-- bootstrap datepicker -->
    <script
        src="{{ asset('template/adminlte/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
    </script>
    <!-- AdminLTE App -->
    <script src="{{ asset('template/adminlte/dist/js/adminlte.min.js') }}"></script>
    <!-- custom js -->
    <script src="{{ asset('js/main.js') }}"></script>
    @yield('script')
</body>
</html>