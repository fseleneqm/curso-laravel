<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    @yield('styles')
</head>
<body>
    @include('layouts._partials.menu')
    @yield('content')
    @yield('scripts')
</body>
</html>