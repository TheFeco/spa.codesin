<!DOCTYPE html>
<html lang="es" dir="">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{config('app.name')}} | Admin</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link href="{{asset('dashboard/css/themes/lite-purple.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/css/plugins/perfect-scrollbar.min.css')}}" rel="stylesheet" />
    <link href="{{asset('dashboard/css/plugins/fontawesome-5.min.css')}}" rel="stylesheet" />
    
    @stack('style')

</head>

<body class="text-left">
    <div class="app-admin-wrap layout-sidebar-large">
        <div class="main-header">
            <div class="logo">
                <img src="{{asset('dashboard/images/logo.png')}}" alt="">
            </div>
            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <div style="margin: auto"></div>
            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="{{asset('dashboard/images/faces/1.jpg')}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> {{ auth()->user()->name}}
                            </div>
                            <form action="{{route('logout')}}" method="post">
                                @csrf
                                <button class="dropdown-item" style="cursor: pointer" href="signin.html">cerrar sesion</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- =============== Left side Start ================-->
        @include('dashboard.partials.nav')
        <!-- =============== Left side End ================-->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <!-- ============ Body content start ============= -->
            <div class="main-content">
                @yield('header')
                <div class="separator-breadcrumb border-top">
                    @if (session()->has('flash'))
                        <div class="alert alert-success">{{ session('flash') }}</div>
                    @endif
                    @yield('content')
                </div>
            </div>
            <!-- end of main-content -->
        </div>
    </div>
    <script src="{{asset('dashboard/js/plugins/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('dashboard/js/plugins/perfect-scrollbar.min.js')}}"></script>
    
    @stack('script')
    <script src="{{asset('dashboard/js/scripts/script.min.js')}}"></script>
    <script src="{{asset('dashboard/js/scripts/sidebar.large.script.min.js')}}"></script>
    @unless(request()->is('admin/noticias/*') || request()->is('admin/proyectos/*'))
    <script>
        if(window.location.hash == '#create-noticias')
        {
            $('#noticias').modal('show');
        }
        $('#noticias').on('hide.bs.modal',function(){
            window.location.hash = '#';
        });
        $('#noticias').on('shown.bs.modal',function(){
            $('#title').focus();
            window.location.hash = '#create-noticias';
        });
        if(window.location.hash == '#create-proyectos')
        {
            $('#proyectos').modal('show');
        }
        $('#proyectos').on('hide.bs.modal',function(){
            window.location.hash = '#';
        });
        $('#proyectos').on('shown.bs.modal',function(){
            $('#title').focus();
            window.location.hash = '#create-proyectos';
        });
        if(window.location.hash == '#create-politicas')
        {
            $('#politicas').modal('show');
        }
        $('#politicas').on('hide.bs.modal',function(){
            window.location.hash = '#';
        });
        $('#politicas').on('shown.bs.modal',function(){
            $('#title').focus();
            window.location.hash = '#create-politicas';
        });
    </script>
    @endunless
</body>

</html>