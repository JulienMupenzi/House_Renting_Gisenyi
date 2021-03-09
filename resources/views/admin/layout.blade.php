<!doctype html>
<html lang="en">
    <head>
        <title>Gisenyi &mdash;House-Renting WebSite</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

        @yield('header')
        <style>
        .pull-right {float: right !important;}
        .pull-left {float: left !important;}
        </style>
    </head>
    <body class="hold-transition sidebar-mini layout-navbar-fixed layout-fixed">

        <div class="wrapper">
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">
                <!-- Left navbar links -->
                <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/') }}" target="_blank" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ url('/contact') }}"  target="_blank" class="nav-link">Contact</a>
                </li>
                </ul>

                <!-- SEARCH FORM -->
                <form class="form-inline ml-3">
                <div class="input-group input-group-sm">
                    <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                    <button class="btn btn-navbar" type="submit">
                        <i class="fas fa-search"></i>
                    </button>
                    </div>
                </div>
                </form>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">

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
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#">
                    <i class="fas fa-th-large"></i>
                    </a>
                </li>
                </ul>
            </nav>


            <aside class="main-sidebar sidebar-dark-primary elevation-4">
                <!-- Brand Logo -->
                <a href="{{ route('admin.index') }}" class="brand-link elevation-4">
                <img src="{{ asset('img/house_renting.png') }}"
                    alt="house_renting Logo"
                    class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                <span class="brand-text font-weight-light">ADMIN</span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                <!-- Sidebar user (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="{{asset('images/avatar_default.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                        @if(auth()->user()->isAdmin())
                    <li class="nav-item has-treeview">
                        <a href="{{ route('admin.index') }}" class="nav-link {{ Helper::isActiveRoute('admin.index') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                        </a>
                    </li>
                        @endif

                         @if(auth()->user()->isAdmin())
                    <li class="nav-item">
                        <a href="{{ route('quarters.index') }}" class="nav-link {{ Helper::isActiveRoute('quarters.index') }}">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Quarters
                        </p>
                        </a>
                    </li>
                    @endif

                    <li class="nav-item">
                        <a href="{{ route('properties.index') }}" class="nav-link {{ Helper::areActiveRoutes(['properties.index', 'properties.create', 'properties.edit']) }}">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Properties
                        </p>
                        </a>
                    </li>
                     @if(auth()->user()->isAgent() || auth()->user()->isAdmin())
                    <li class="nav-header text-info" style="font-size: 18px; font-family: cursive; padding-top: 1%;">Gisenyi Rental House</li>
                    <li class="nav-item">
                        <a href="{{ route('clients.index', ['page' => 'client']) }}" class="nav-link {{ Helper::areActiveRoutes(['clients.index']) }}">
                        <i class="nav-icon fas fa-users"></i>
                        <p>CLIENTS</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('orders.index') }}" class="nav-link {{ Helper::areActiveRoutes(['orders.index']) }}">
                        <i class="nav-icon ion ion-bag"></i>
                        <p>ORDERS</p>
                        </a>
                    </li>
                        @endif
                        @if(auth()->user()->isAdmin())

                        <li class="nav-item">
                            <a href="{{ url('sugestion') }}" class="nav-link {{ Helper::areActiveRoutes(['sugestions']) }}">
                            <i class="nav-icon fas fa-envelope"></i>
                            <p>MESSAGE</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('users.index') }}" class="nav-link {{ Helper::isActiveRoute('users.index') }}">
                            <i class="nav-icon fas fa-users-cog"></i>
                            <p>USERS</p>
                            </a>
                        </li>
                        @endif
                        <li class="nav-header text-info pt-3 pl-3" style="font-size:18px; padding-top: 1%; font-family: cursive;">Label</li>

                        <a class="btn btn-warning" style="background: brown; color: white;" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            </aside>

            <div class="content-wrapper">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                @yield('content')
            </div>

            <footer class="main-footer" style="background-color: black; text-align: center;">
                <div class="float-right d-none d-sm-block">
                </div>
                <strong>Copyright &copy; {{ date('Y -W- D') }} <a href="{{ url('/') }}">{{ config('app.name') }}</a>.</strong> All rights
                reserved.
            </footer>
        </div>

    <!-- jQuery -->
    <script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{ asset('assets/dist/js/demo.js') }}"></script>

    <script src="{{ asset('js/sweetalert2.all.min.js') }}"></script>

    <script src="{{ asset('js/custom.js') }}"></script>

    </body>
</html>
