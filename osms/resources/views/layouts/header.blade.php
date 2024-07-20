<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>
<body>
    <header>
        <nav>
            <ul class="first-container">
             <h2><a style="text-decoration: none; color:white; font-size:20px;"  href="{{route('name')}}">OSMS</a></h2>
             <li>
             Customers Happines is our Aim
             </li>
            </ul>
            <ul class="second-container">
             <li><a href="{{route('name')}}">Home</a></li>
             <li><a href="">Services</a></li>
             @if(!auth()->check())
             <li><a href="{{route('signup')}}">Registration</a></li>
             <li><a href="{{route('loginpage')}}">Login</a></li>
             @else
             <li><a href="">Profile</a></li>
             <li><a href="{{route('request.create')}}">Submit Request</a></li>
             <li><a href="{{route('request.index')}}">View Requests</a></li>
             <li><a href="{{route('statusview')}}">Service Status</a></li>
             <li><a href="">Change Password</a></li>
             <li><a href="{{route('logout')}}">Logout</a></li>
             @endif
             <li><a href="">Contact</a></li>
            </ul>
            <div class="bars">
                <img style="filter: invert(100%)" src="/images/bar.svg" alt="">
            </div>
        </nav>
    </header>
</body>
</html>
