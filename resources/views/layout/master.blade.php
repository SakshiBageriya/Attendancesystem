<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ATTENDANCE MANAGEMENT | Dashboard</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.min.css')}}">

    <style>
    .navbar {
        background-color: #007bff !important;
    }

    .navbar-nav {
        margin-right: auto;
    }

    .nav-link {
        color: #ffffff !important;
        font-weight: 500;
    }

    .nav-link:hover {
        color: #ffffff !important;
    }

    .brand-link {
        color: #ffffff !important;
        font-weight: 500;
    }

    .main-sidebar {
        background-color: #343a40 !important;
    }

    .sidebar-dark-primary {
        color: #ffffff !important;
        text-align: center;

    }

    .user-panel {
        color: #ffffff !important;
        text-align: center;

    }

    .user-panel .info a {
        color: #aad9dd !important;
        text-decoration: underline;
    }

    .content-header {
        background-color: #ffffff;
        color: #205793;
        text-align: center;
        font-weight: bold;
        text-decoration: underline;
        padding: 40px;
    }

    .content-wrapper {
        padding-top: 0;
        margin-top: 20px;
    }

    .main-footer {
        font-size: 18px;
        text-align: center;
        font-weight: bold;
        color: #000000;
        background-image: url('dist/img/2520.jpg');
    }

    .breadcrumb {
        background-color: #ffffff;
        font-size: 16px;
        color: #007bff;
    }

    .breadcrumb-item.active {
        color: #205793;
    }

    .preloader {
        background-color: #ffffff;
    }

    .navbar-search-block {
        display: none;
    }

    .form-control-sidebar {
        background-color: #343a40;
        color: #ffffff;
    }

    .btn-sidebar {
        background-color: #007bff;
        color: #ffffff;
    }

    .btn-sidebar:hover {
        background-color: #0056b3;
    }

    .small-box {
        background-color: #ffffff;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    .small-box .icon {
        color: #007bff;
    }

    .small-box .icon>i {
        font-size: 50px;
    }

    .small-box .inner {
        padding: 20px;
    }

    .small-box .inner p {
        font-size: 18px;
        color: #007bff;
    }

    .small-box .inner h3 {
        font-size: 36px;
        font-weight: bold;
        color: #205793;
    }

    .small-box:hover {
        box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.2);
        transform: translateY(-5px);
    }

    .pp {
        height: auto;
        max-height: 100%;
        width: 100%;
    }


    @media (max-width: 768px) {
        .content-wrapper {
            margin-left: 0;
            /* Adjusted margin-left for smaller screens */
            margin-right: 0;
            /* Adjusted margin-right for smaller screens */
            padding-top: 0;
            /* Adjusted padding-top for smaller screens */
        }
    }
    </style>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="dist/img/photo1.png" alt="logo" height="60" width="60">
        </div>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="home" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>
        </nav>
        <aside class="main-sidebar elevation-4">
            <a href="home" class="brand-link">
                <img src="dist/img/photo1.png" alt="Logo" class="brand-image img-fluid" style="opacity: .8">
                <span class="brand-text font-weight-light">Admin Panel</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="dist/img/dd.jpg" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">SAKSHI BAGERIYA</a>
                    </div>
                </div>
                <nav class="mt-2">
                    <!-- Sidebar Menu -->
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="home" class="nav-link">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-plus"></i>
                                <p>
                                    Add New
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="form" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Course</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="formsem" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Subject</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="formfaculty" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Faculty</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="formstudent" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Add Student</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="formassign" class="nav-link">
                                <i class="nav-icon fas fa-tasks"></i>
                                <p>Assign Subject</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    View All
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="viewcourse" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Course</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="viewsubject" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Subject</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="viewfaculty" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Faculty</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="viewassign" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Assign</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="viewstudent" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>View Student</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <!-- /.sidebar-menu -->
                </nav>
                <!-- /.sidebar -->
            </div>
        </aside>

        <div class="content-wrapper" style="margin-top: 20px;">
            <!-- Logo -->
            <img src="dist/img/logo_red.png" alt="logo"
                style="float: left; margin-left: 20px; width: 250px; margin-top: 40px;">

            <!-- Content Header (Page header) and Breadcrumb -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-9 text-center">
                            <h1 class="m-0" style="color: #205793; font-weight: bold; text-decoration: underline;">
                                Attendance Management System</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-3">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard 1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row justify-content-center">
                        <div class="col-md-10">
                            @yield('content')
                        </div>
                    </div>
                    <!-- /.row (main row) -->
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>

    </div>
    <!-- Main content -->
    <footer class="main-footer"
        style="font-size: 18px;text-align:center;font-weight:bold;color:black;background-color: #ffffff;">
        <strong style="color:black">Copyright &copy; 2024 &nbsp;, &nbsp;<a href="home" style="color:black">Sakshi
                Bageriya</a></strong>&nbsp;&nbsp;
        All rights reserved.&nbsp;
    </footer>

    <aside class="control-sidebar control-sidebar-dark">
    </aside>
    </div>

    <script src="plugins/jquery/jquery.min.js"></script>
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dist/js/adminlte.js')}}"></script>
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
</body>

</html>