@extends('layouts.app')
@section('pagename')
Change Password
@endsection
@section('admincontent')
<div class="container my-4">
    @if (session('message'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong>{{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
@endif
    <form action="{{route('changepassword.update', $user->id)}}" method="POST"  enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="exampleInputEmail1">Email<span style="color: red">*</span></label>
            <input type="email" value="{{$user->email}}"  class="form-control" readonly>
          </div>
        <div class="form-group">
          <label for="exampleInputEmail1">New Password<span style="color: red">*</span></label>
          <input type="password" name="password"  class="form-control" required>
        </div>
        @error('password')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Repeat Password<span style="color: red">*</span></label>
            <input type="password" name="password_confirmation"  class="form-control" required>
          </div>
        <br>
        <button type="submit" class="btn btn-info">Save</button>
      </form>
</div>
@endsection
