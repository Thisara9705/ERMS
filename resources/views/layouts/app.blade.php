<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>ERMS Application</title>

        <link rel="shortcut icon" type="image/png" href="{{asset('vendors/dist/img/favicon.png')}}"/>
        <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="{{asset('vendors/plugins/fontawesome-free/css/all.min.css')}}">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="{{asset('vendors/plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
        <!-- Theme style -->
        <link rel="stylesheet" href="{{asset('vendors/dist/css/adminlte.min.css')}}">


        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->
        <script src="{{asset('vendors/plugins/jquery/jquery.min.js')}}"></script>
        <!-- Bootstrap -->
        <script src="{{asset('vendors/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- overlayScrollbars -->
        <script src="{{asset('vendors/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
        <!-- AdminLTE App -->
        <script src="{{asset('vendors/dist/js/adminlte.js')}}"></script>

        <!-- PAGE PLUGINS -->
        <!-- jQuery Mapael -->
        <script src="{{asset('vendors/plugins/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
        <script src="{{asset('vendors/plugins/raphael/raphael.min.js')}}"></script>
        <script src="{{asset('vendors/plugins/jquery-mapael/jquery.mapael.min.js')}}"></script>
        <script src="{{asset('vendors/plugins/jquery-mapael/maps/usa_states.min.js')}}"></script>
        <!-- ChartJS -->
        <script src="{{asset('vendors/plugins/chart.js/Chart.min.js')}}"></script>

        <!-- Scripts -->
        @yield('theme_js')
        <script src="{{ asset('js/app.js') }}" defer></script>

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

        <!-- Styles -->
        @yield('theme_css')
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
        <div class="wrapper">

            @include('layouts/nav_bar_top')

            @include('layouts/side_bar')

            @yield('content')

            @include('layouts/footer')

            @yield('custom_js')

        </div>
        <!-- ./wrapper -->
    </body>

</html>







