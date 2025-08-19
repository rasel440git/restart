<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
@include('layout.header')

    @yield('content')
    @yield('howWeDo')
    @yield('pricing')
    @yield('team')


@include('layout.footer')


    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min') }}"></script>
</body>
</html>