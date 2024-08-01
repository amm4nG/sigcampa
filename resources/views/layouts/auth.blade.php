<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('template/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('template/assets/css/style.css') }}">
    <link rel="icon" href="{{ asset('template/assets/images/title.png') }}" type="image/png">
    <title>MusicInstrument | @yield('title')</title>
</head>

<body class="bg-body-tertiary">
    @yield('content')
    <script src="{{ asset('template/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('template/assets/fontawesome/js/all.min.js') }}"></script>
</body>

</html>
