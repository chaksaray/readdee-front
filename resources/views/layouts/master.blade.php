<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="{{ app()->getLocale() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Readdee - @yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- style -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
    @stack('stylesheets')
</head>
<body class="bg-white">

    <div class="container">
        @yield('header')

        @yield('navbar')

        @yield('content')
    </div>
    @yield('bubble')

    <script src="{{ url('js/app.js') }}"></script>
    @stack('footer-scripts')
</body>
</html>
