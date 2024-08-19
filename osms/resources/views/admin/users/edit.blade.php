@extends('layouts.app')
@section('pagename')
Add New User
@endsection
@section('admincontent')
<div class="container my-4">
    <form action="{{route('users.update', $user->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Name  <span style="color: red">*</span></label>
          <input type="text" name="name"  value="{{old('name',$user->name)}}" class="form-control" required>
        </div>
        @error('name')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Email  <span style="color: red">*</span></label>
            <input type="email" name="email"  value="{{old('email',$user->email)}}" class="form-control" required>
          </div>
          @error('email')
          <span style="color: red">{{$message}}</span>
          @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Password  <span style="color: red">*</span></label>
            <input type="password" name="password"  value="{{old('password')}}" class="form-control" required>
        </div>
        @error('password')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Confirm Password  <span style="color: red">*</span></label>
            <input type="password" name="password_confirmation"  class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Type  <span style="color: red">*</span></label>
             <select name="type" id="type" required class="form-control">
                @if(!$user->type)
                <option value=" ">please select</option>
                @endif
                @if($user->type)
                <option value="{{$user->type}}" selected>{{$user->type}}</option>
                @endif
                @foreach ($roles as $role)
                 <option value="{{$role}}">{{$role}}</option>
                @endforeach
             </select>
        </div>
        @error('type')
        <span style="color: red">{{$message}}</span>
        @enderror

        <br>
        <button type="submit" class="btn btn-info">Save</button>
      </form>
</div>
@endsection
