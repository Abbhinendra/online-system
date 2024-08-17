@extends('layouts.app')
@section('pagename')
Add New Technician
@endsection
@section('admincontent')
<div class="container my-4">
    <form action="{{route('enginner.update', $worker->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Name  <span style="color: red">*</span></label>
          <input type="text" name="name"  value="{{old('name',$worker->name)}}" class="form-control" required>
        </div>
        @error('name')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Phone Number  <span style="color: red">*</span></label>
            <input type="text" name="number" value="{{old('number',$worker->number)}}" class="form-control" required>
          </div>
          @error('number')
          <span style="color: red">{{$message}}</span>
          @enderror
          <div class="form-group">
            <label for="exampleInputEmail1">Email  <span style="color: red">*</span></label>
            <input type="email" name="email" value="{{old('email',$worker->email)}}" class="form-control" required>
          </div>
          @error('email')
          <span style="color: red">{{$message}}</span>
          @enderror
          <br>
        <button type="submit" class="btn btn-info">Save</button>
      </form>
</div>
@endsection
