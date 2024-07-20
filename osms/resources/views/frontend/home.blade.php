@extends('layouts.master')
@section('content')
<div class="main-container">
    <div class="container">
    </div>
    <div class="content"> 
        <div class="container-for-content">
            @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Success!</strong>  {{ session('message') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            @endif
            <h2>WELCOME TO OSMS</h2>
            <p>Customers Happines is our Aim</p>
            <br>
            <div class="button-box">
            @if(auth()->check())
           
            @else
            <a href="{{route('loginpage')}}">Login</a> <a href="{{route('signup')}}">Sign-up</a>
            @endif
            </div>
        </div>
    </div>
    </div>
    <div class="about-website">
        <h2>OSMS Services</h2>
        <div class="osms-content">
            <p>OSMS is dedicated to providing a robust, user-friendly system that simplifies the complexities of management processes through open-source technology. Our platform is designed to cater to a wide range of industries and applications, offering flexibility, customization, and scalability to meet your unique needs.</p>
        </div>
    </div>
    <br>
    <center><h1>Our Services</h1></center>
    <div class="my-services">
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <h2>Ac Repair</h2>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush
@push('js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endpush