<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
</html>
