<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('images/aclogo.avif')}}" type="image/x-icon">
    @stack('css')
    <title>@yield('osms','OSMS')</title>
    {!!htmlScriptTagJsApi()!!}
</head>
<body>
    @include('layouts.header')
    @yield('content')

    @include('layouts.footer')
</body>
<script src="{{asset('js/main.js')}}"></script>
@stack('js')
</html>
