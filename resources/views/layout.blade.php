<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="{{ asset('bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
        <title>Laravel QuickTask</title>
    </head>

    <body>
        <div class="container-fluid mt-3">
            <a href="{{ route('change-language', ['en']) }}">English</a>
            <span> | </span>
            <a href="{{ route('change-language', ['vi']) }}">Tiếng Việt</a>
            @yield('content')
        </div>
    </body>

    <script src="{{ asset('bower_components/jquery/dist/jquery.slim.min.js') }}"></script>
    <script src="{{ asset('bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
</html>
