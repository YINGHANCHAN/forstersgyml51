<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>>{{ config('forstersgym.title') }}</title>
    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('css/bootstrap-cosmo.min.css') !!}

    <!-- for extra styles -->
    @yield('styles')
</head>

<body>
    <!-- for other pages main content area-->
    @yield('content')

    <!-- for common js scripts -->
    <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- for extra scripts -->
    @yield('scripts')
</body>
</html>