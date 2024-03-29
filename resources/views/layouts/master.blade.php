<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Admin</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href={{ asset('plugins/fontawesome-free/css/all.css') }}>
    <!-- IonIcons -->
    <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href={{ asset('dist/css/adminlte.css') }}>
    <link rel="stylesheet" href={{ asset('css/style.css') }}>
    <link rel="stylesheet" href={{ asset('css/bootstrap-duallistbox.css') }}>
    <link rel="stylesheet" href={{ asset('plugins/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.css') }}>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<!--
      BODY TAG OPTIONS:
      =================
      Apply one or more of the following classes to to the body tag
      to get the desired effect
      |---------------------------------------------------------|
      |LAYOUT OPTIONS | sidebar-collapse                        |
      |               | sidebar-mini                            |
      |---------------------------------------------------------|
      -->

<body class="hold-transition sidebar-mini">
    <div class="header-title text-center bg-dark text-white" style="font-family: Consolas;">
        Trang quản lý CBN2T CINEMA - CBN2T Vạn Hạnh Mall
    </div>
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-dark navbar-danger">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Trang chủ</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Liên hệ</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Messages Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-comments"></i>
                        <span class="badge badge-danger navbar-badge bg-warning">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src={{ asset('dist/img/user1-128x128.jpg') }} alt="User Avatar"
                                    class="img-size-50 mr-3 img-circle">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Brad Diesel
                                        <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">Call me whenever you can...</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src={{ asset('dist/img/user8-128x128.jpg') }} alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        John Pierce
                                        <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">I got your message bro</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <!-- Message Start -->
                            <div class="media">
                                <img src={{ asset('dist/img/user3-128x128.jpg') }} alt="User Avatar"
                                    class="img-size-50 img-circle mr-3">
                                <div class="media-body">
                                    <h3 class="dropdown-item-title">
                                        Nora Silvester
                                        <span class="float-right text-sm text-warning"><i
                                                class="fas fa-star"></i></span>
                                    </h3>
                                    <p class="text-sm">The subject goes here</p>
                                    <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
                                </div>
                            </div>
                            <!-- Message End -->
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
                    </div>
                </li>
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">15</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">15 Notifications</span>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> 4 new messages
                            <span class="float-right text-muted text-sm">3 mins</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-users mr-2"></i> 8 friend requests
                            <span class="float-right text-muted text-sm">12 hours</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> 3 new reports
                            <span class="float-right text-muted text-sm">2 days</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button"><i
                            class="fas fa-th-large"></i></a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="/" class="brand-link text-center navbar-dark"
                style="height: 80px; display:flex; justify-content: center; align-items: center;">
                <img src={{ asset('dist/img/your-logo.png') }} alt="AdminLTE Logo" class="brand-image elevation-3">
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    @if (Session::has('user'))
                        <div class="image">
                            <img src="/image/nhanvien/{{ Session::get('user')->Avatar }}" class="img-circle elevation-2"
                                alt="User Image">
                        </div>
                    @endif
                    <div class="info">
                        <a href="#" class="d-block">
                            @if (Session::has('user'))
                                {{ Session::get('user')->name }}
                            @endif
                        </a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                        <li class="nav-item has-treeview menu-open">
                            <a href="/" class="nav-link active bg-danger">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Bảng điều khiển
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-item has-treeview">
                            <a href="{{ url('quan-ly-phim') }}" class="nav-link">
                                <i class="nav-icon fas fa-film"></i>
                                <p>
                                    Phim
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-item has-treeview">
                            <a href="{{ url('quan-ly-the-loai-phim') }}" class="nav-link">
                                <i class="nav-icon fas fa-tags"></i>
                                <p>
                                    Thể loại phim
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-item has-treeview">
                            <a href="{{ url('quan-ly-rap') }}" class="nav-link">
                                <i class="nav-icon fas fa-warehouse"></i>
                                <p>
                                    Rạp
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-item has-treeview">
                            <a href="{{ url('quan-ly-suat-chieu') }}" class="nav-link">
                                <i class="nav-icon far fa-clock"></i>
                                <p>
                                    Suất chiếu
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-item has-treeview">
                            <a href="{{ url('quan-ly-lich-chieu') }}" class="nav-link">
                                <i class="nav-icon far fa-calendar-alt"></i>
                                <p>
                                    Lịch chiếu
                                </p>
                            </a>
                        </li>
                        <li class="nav-item menu-item has-treeview">
                            <a href="{{ url('quan-ly-ve') }}" class="nav-link">
                                <i class="nav-icon fas fa-ticket-alt"></i>
                                <p>
                                    Vé
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <a href="{{ url('dangxuat') }}">
                    <button type="button" class="btn btn-dang-xuat btn-warning w-100"><strong>Đăng
                            xuất</strong></button>
                </a>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            @yield('content')
        </div>

        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <strong>CBN2T CINEMA TEAM <a href="https://www.facebook.com/groups/327066398507712">CBN2T
                    CINEMA</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 1.0
            </div>
        </footer>
    </div>

    <!-- ./wrapper -->
    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src={{ asset('plugins/jquery/jquery.min.js') }}></script>

    <!-- Bootstrap -->
    <script src={{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('plugins/bootstrap-tagsinput-latest/src/bootstrap-tagsinput.js') }}></script>
    <!-- AdminLTE -->
    <script src={{ asset('dist/js/adminlte.js') }}></script>

    <!-- OPTIONAL SCRIPTS -->
    <script src={{ asset('plugins/chart.js/Chart.min.js') }}></script>
    <script src={{ asset('dist/js/demo.js') }}></script>
    <script src={{ asset('dist/js/pages/dashboard3.js') }}></script>
    <script src={{ asset('js/handler-submit-them.js') }}></script>
    <script src={{ asset('ajax/xep-lich-ajax.js') }}></script>
    <script src={{ asset('ajax/suat-chieu-ajax.js') }}></script>
    <script src={{ asset('ajax/ve-ajax.js') }}></script>
    <script src={{ asset('js/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.js') }}></script>
    <script>
        $(function() {
            //Bootstrap Duallistbox
            $('.duallistbox').bootstrapDualListbox()
        })

    </script>
</body>

</html>
