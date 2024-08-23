<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formularios/loginCss.css') }}">
    <link rel="stylesheet" href="{{ asset('css/formularios/cadastroCss.css') }}">
</head>
<body>
    @include('parts.header')

    <div class="container">
        @yield('content')
    </div>

    @include('parts.footer')
</body>
</html>
