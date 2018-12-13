<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ env('APP_NAME') }} - @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('/css/login.css') }}">
    <link href="css/helper.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body class="fix-header fix-sidebar">
    <div id="main-wrapper">

        @yield('content')
        
    </div>

    <script src="{{ asset('/js/app.js') }}"></script>
    {{-- <script src="js/lib/jquery/jquery.min.js"></script> --}}
    {{-- <script src="js/lib/bootstrap/js/popper.min.js"></script> --}}
    {{-- <script src="js/lib/bootstrap/js/bootstrap.min.js"></script> --}}
    {{-- <script src="js/jquery.slimscroll.js"></script> --}}
    {{-- <script src="js/sidebarmenu.js"></script> --}}
    {{-- <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script> --}}
    {{-- <script src="js/custom.min.js"></script> --}}
</body>
</html>