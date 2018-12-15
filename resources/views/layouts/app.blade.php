<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
                        <span>
                            <img src="images/logo-text.png" alt="homepage" class="dark-logo" />
                        </span>
                    </a>
                </div>

                <div class="navbar-collapse">
                    @include('partials.navbar')
                </div>
            </nav>
        </div>
        <div class="left-sidebar">
            @include('partials.sidebar')
        </div>

        <div class="page-wrapper">
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Escritorio</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void">Inicio</a>
                        </li>
                        <li class="breadcrumb-item active">
                            Escritorio
                        </li>
                    </ol>
                </div>
            </div>

            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    @include('partials.footer')
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
