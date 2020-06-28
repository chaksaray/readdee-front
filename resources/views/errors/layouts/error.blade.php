<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('meta-tag')
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->

    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    {{ Html::style('css/errors.css') }}
</head>
<body itemscope>
    <div class="overlay1">
        <div id="errors">
            @yield('content')    
        </div>
    </div>

    <script src="{{ asset('js/jquery-1-11-2-min.js') }}"></script>
    <script src="/vendor/countdowntime/countdowntime.js"></script>
    <script src="{{ asset('js/errors.js') }}"></script>
</body>
</html>
