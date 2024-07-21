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
            @if(auth()->check())
            <span class="welcome">Welcome:- {{auth()->user()->email}}</span>
            @else
            <div class="button-box">
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
            <div class="btn-title">
            <span class="wrap">Ac Repairing Services and consulting trainig</span> <span class="wrap"><a href="">View</button></a></span>
            </div>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <div class="btn-title">
            <span class="wrap">Ac Repairing Services and consulting trainig</span> <span class="wrap"><a href="">View</button></a></span>
            </div>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <div class="btn-title">
            <span class="wrap">Ac Repairing Services and consulting trainig</span> <span class="wrap"><a href="">View</button></a></span>
            </div>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <div class="btn-title">
            <span class="wrap">Ac Repairing Services and consulting trainig</span> <span class="wrap"><a href="">View</button></a></span>
            </div>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <div class="btn-title">
            <span class="wrap">Ac Repairing Services and consulting trainig</span> <span class="wrap"><a href="">View</button></a></span>
            </div>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <div class="btn-title">
            <span class="wrap">Ac Repairing Services and consulting trainig</span> <span class="wrap"><a href="">View</button></a></span>
            </div>
        </div>
        <div class="card">
            <div class="image-card">
            <img src="https://th.bing.com/th/id/OIP.fuCWH-RU4QRR66gsTJ0c8AHaFG?rs=1&pid=ImgDetMain" alt="">
            </div>
            <br>
            <div class="btn-title">
            <span class="wrap">Ac Repairing Services and consulting trainig</span> <span class="wrap"><a href="">View</button></a></span>
            </div>
        </div>
    </div>
    <br>
    <br>
    <main class="contact-container">
      <h2 style="text-align: center;">Contact US</h2>
      <br>
      <div class="contact-box">
        <div class="contact-form">
          <form action="{{route('contact-us')}}" method="POST">
            @csrf
            <section>
            <input type="text" name="name" value="{{old('name')}}" placeholder="Name" required>
            </section>
            @error('name')
            <span style="text-align: left;" class="FormVailidationErrors" >{{ $message }}</span>
           @enderror
            <section>
                <input type="text" name="subject" value="{{old('subject')}}" placeholder="Subject" required>
            </section>
            @error('subject')
            <span style="text-align: left;" class="FormVailidationErrors" >{{ $message }}</span>
           @enderror
            <section>
            <input type="email" name="email" value="{{old('email')}}" placeholder="E-mail" required>
            </section>
            @error('email')
            <span style="text-align: left;" class="FormVailidationErrors" >{{ $message }}</span>
           @enderror
            <section>
            <input type="number" name="number" value="{{old('number')}}" placeholder="Number" required>
            </section>
            @error('number')
            <span style="text-align: left;" class="FormVailidationErrors" >{{ $message }}</span>
           @enderror
            <section>
                <textarea name="message"   cols="20" rows="6" placeholder="How can we help you?">{{old('message')}}</textarea>
            </section>
            @error('message')
            <span style="text-align: left;" class="FormVailidationErrors" >{{ $message }}</span>
           @enderror
            <section>
                <button type="submit">Save</button>
            </section>
          </form>
          <br>
        </div>
        <div class="contact-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d237898.2899341742!2d70.4559623!3d21.3046624!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e9a943f9e45f3%3A0xf670c21ac8392d5e!2sUjala%20Circle!5e0!3m2!1sen!2sin!4v1721490349920!5m2!1sen!2sin" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </main>
@endsection
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush
@push('js')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endpush
