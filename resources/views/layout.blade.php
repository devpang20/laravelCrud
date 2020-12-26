<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', 'Laravel')</title>
        <link rel="stylesheet" href="{{ mix('css/tailwind.css')}}">
    </head>
    <body>
        @yield('content')
    </body>
</html>
