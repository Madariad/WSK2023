<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    {{-- <link rel="stylesheet" href="{{asset('app.css')}}"> --}}
    <link rel="stylesheet" href="{{asset('bootstrap-5.3.2-dist/css/bootstrap.css')}}">
</head>
<body>
    @yield('content')
</body>
</html>