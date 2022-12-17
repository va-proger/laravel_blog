<!DOCTYPE html>
<html lang="ru">
<head>
    @include('admin.includes.head.main.head')
    <style>
        .user-avatar{
            max-width: 40px;
            max-height: 40px;
            overflow: hidden;
        }
        .user-avatar img{
            max-width: 100%;
            max-height: 100%;
            object-fit: cover;
        }
        .user-avatar-wrap{
            padding: 2px 5px;
            gap: 10px;
        }
    </style>
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
        <img class="animation__wobble" src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTELogo" height="60" width="60">
    </div>

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-dark ">
        <!-- Left navbar links -->
        <div class="col-12 d-flex align-items-center justify-content-between">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>

            </ul>
            <ul class="navbar-nav ">
                <li class="nav-item bg-gradient-dark d-flex align-items-center justify-content-center mr-2 border rounded border-white user-avatar-wrap">
                    <span class="rounded-circle user-avatar"><img src="{{  url('storage/' . Auth::user()->avatar) }}" alt="{{  Auth::user()->name }}"> </span>
                    <a class="text-uppercase fw-bold text-white" href="/admin/users/{{  Auth::user()->id }}">{{  Auth::user()->name }} </a>
                </li>
                <li class="nav-item d-flex justify-content-center align-items-center">
                    <a class="btn btn-danger" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                        {{ __('Выход') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </nav>
    <!-- /.navbar -->


    @include('admin.includes.sidebar')
    @yield('content')
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->

    <!-- Main Footer -->
    <footer class="main-footer">
        <strong>Copyright &copy; 2014-{{ $current_time }} <a href="https://vproger.ru">VProger</a>.</strong>
        Все права защищены.

    </footer>
</div>
<!-- ./wrapper -->

@include('admin.includes.footer.scripts.scripts')
</body>
</html>
