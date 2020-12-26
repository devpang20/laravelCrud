<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laravel')</title>
    </head>
    <body>
        <ul>
            <li><a href="/">wellcome</a></li>
            <li><a href="/contact">contact</a></li>
            <li><a href="/hello">hello</a></li>
        </ul>
        @yield('content')
    </body>
</html>
