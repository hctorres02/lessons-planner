<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Untitled' }}</title>

    @vite(['/resources/css/app.css', '/resources/js/app.js'])
    @stack('head_end');
</head>

<body>
    {{ $slot }}

    @stack('body_end')
</body>

</html>
