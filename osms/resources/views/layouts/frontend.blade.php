<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="shortcut icon" href="{{asset('images/aclogo.avif')}}" type="image/x-icon">
    @stack('css')
    <title>@yield('osms','OSMS')</title>
</head>
<body>
<div class="profile-dashborad">
<div>
    <h2>Menu</h2>
</div>
    <nav>
        <ul>
        <li>
           First 
        </li>
        <li>
        Second
        </li>
        <li>
          third
        </li>
        <li>
          fourth
        </li>
        <li>
         five
        </li>
        <li>
         six
        </li>
        <li>
            seven
        </li>
        <li>
            eight
        </li>
        <li>
         nine
        </li>
        <li>
           ten
        </li>
        <li>
       eleven
        </li>
        <li>
           twelth
        </li>
    </ul>
    </nav>
    <div class="main-content">
    <div class="contents">
        @yield('profile-content')
    </div>
</div>

</div>
</body>
<script src="{{asset('js/main.js')}}"></script>
@stack('js')
</html>