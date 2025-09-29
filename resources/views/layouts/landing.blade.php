<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}">
    <title>@yield('title')</title>
</head>
<body>
    <h1>Title</h1>
    @include('layouts._partials.menu')
    @yield('content')
</body>
</html>