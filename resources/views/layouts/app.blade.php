<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>DC comics</title>

    @vite('resources/js/app.js')

</head>

<body>
    @include('partials.header')
    @include('partials.jumbotron')
    @yield('content')
    @include('partials.footer')
</body>
</html>