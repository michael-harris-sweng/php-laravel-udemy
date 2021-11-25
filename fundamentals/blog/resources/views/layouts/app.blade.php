<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Blog - Post</title>
    </head>
    <body class="antialiased">
        <div class="container">
            @yield('content')
        </div>
        @yield('footer')
    </body>
</html>
