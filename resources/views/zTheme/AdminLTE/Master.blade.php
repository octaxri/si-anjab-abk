<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="{{ asset('assets/AdminLTE/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/AdminLTE/dist/css/adminlte.min.css') }}">

    @yield('css')
</head>

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    {{-- <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed"> --}}
    <div class="wrapper">

        @section('navbar')
            @include('zTheme.AdminLTE.Navbar')
        @show

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="{{ url('') }}" class="brand-link">
                <img src="{{ asset('logo_unila.png') }}" alt="Unila Logo" class="brand-image mt-1" style="opacity: .8">

                <div class="row">
                    <span class="brand-text font-weight-light text-sm"><strong>UNIVERSITAS LAMPUNG</strong></span>
                    <span class="brand-text font-weight-light text-sm">Analisis Jabatan & Beban Kerja</span>
                </div>
            </a>
            @section('sidebar')
                @include('zTheme.AdminLTE.Sidebar')
            @show
        </aside>

        <div class="content-wrapper">
            @section('breadcrumb')
                @include('zTheme.AdminLTE.Breadcrumb')
            @show

            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                </div>
            </section>
        </div>

        @section('footer')
            @include('zTheme.AdminLTE.Footer')
        @show
    </div>

    <script src="{{ asset('assets/AdminLTE/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/AdminLTE/dist/js/adminlte.min.js') }}"></script>

    @yield('js')
</body>

</html>
