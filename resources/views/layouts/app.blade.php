<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ env('APP_NAME') }} - @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
    <div id="main-wrapper">
        <div class="header">
            <nav class="navbar top-navbar navbar-expand-md navbar-light">
                <div class="navbar-header">
                    <a class="navbar-brand" href="{{ route('home') }}">
                        <b>
                            <img src="{{ asset('/images/logo.png') }}" alt="homepage" class="dark-logo"/>
                        </b>
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
                    <h3 class="text-primary">
                        @yield('options')
                    </h3>
                </div>
                @yield('breadcrumbs')
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
