@extends('layouts.master')
@section('content')
<div class="min-height"></div>
<div class="container-fluid">
  @if (session('error'))
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Success!</strong>{{ session('error') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
@endif
@if (session('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Success!</strong>{{ session('message') }}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
@endif
<form action="{{route('login')}}" method="POST" class="registration-form">
  @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <input type="email" name="email"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off" required>
      @error('email')
      <span class="FormVailidationErrors" >{{ $message }}</span>
     @enderror
    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input type="password" name="password"  class="form-control" id="exampleInputPassword1" placeholder="Password" autocomplete="off" required>
      @error('password')
      <span class="FormVailidationErrors" >{{ $message }}</span>
     @enderror
    </div>
    <br>
    <a  href="{{route('resetpassword')}}">Forgot Password?</a>
    <button type="submit" class="btn btn-sm SingUp">Login</button>
  </form>
  <div style="display: flex; justify-content:center; align-items:center;">
   <a href="{{route('google.login')}}" style="text-align: center; border:none; outline:2px solid rgb(161, 1, 46); border-radius:6px; cursor:pointer; padding:6px; text-decoration:none; background:rgb(84, 0, 129); color:white;">
    <i class="fa-brands fa-google"></i>
    <span>Login with Google</span>
    </a>
    <div>
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
<script src="https://kit.fontawesome.com/527feac5c0.js" crossorigin="anonymous"></script>
@endpush
