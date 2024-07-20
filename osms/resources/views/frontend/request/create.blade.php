@extends('layouts.master')
@section('content')
<div class="requestheight">
</div>
<div class="container-fluid  request-container">
    <form action="{{route('request.store')}}" method="POST">
      @csrf
        <div class="form-group">
          <label>Request Title  <span style="color: red; font-size:18px;">*</span></label>
          <input type="text" name="title" value="{{old('title')}}" class="form-control">
        </div> 
        <br> 
        @error('title')
        <span style="color: red">{{$message}}</span> 
        @enderror
        <div class="form-group">
       <label>Request Description</label>
       <textarea name="description" cols="30" rows="10" class="form-control">
        {{old('description')}}
       </textarea>
        </div> 
        <br> 
        @error('description')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>Name  <span style="color: red; font-size:18px;">*</span></label>
          <input type="text" name="name" value="{{old('name')}}" class="form-control">
        </div> 
        <br> 
        @error('name')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>Address Line 1  <span style="color: red; font-size:18px;">*</span></label>
          <input type="text" name="address1" value="{{old('address1')}}" class="form-control">
        </div> 
        <br> 
        @error('address1')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>Address Line 2</label>
          <input type="text" name="address2" value="{{old('address2')}}" class="form-control">
        </div> 
        <br> 
        @error('address2')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>Map Address</label>
          <input type="url" name="map_address" value="{{old('map_address')}}" class="form-control" placeholder="Enter map url">
        </div> 
        <br> 
        @error('map_address')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>City</label>
          <input type="text" name="city" value="{{old('city')}}" class="form-control">
        </div> 
        <br> 
        @error('city')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>State</label>
         <select name="state" class="form-control">
         <option value="" selected>Please Select</option>
         @foreach ($states as $state)
           <option value="{{$state}}">{{$state}}</option>
         @endforeach
         </select>
        </div> 
        <br> 
        @error('state')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>Zip Code</label>
          <input type="text" name="zip" value="{{old('zip')}}" class="form-control">
        </div> 
        <br> 
        @error('zip')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" value="{{old('email')}}" class="form-control">
        </div> 
        <br> 
        @error('email')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>Phone Number  <span style="color: red; font-size:18px;">*</span></label>
          <input type="number" name="number" value="{{old('number')}}" class="form-control">
        </div> 
        <br> 
        @error('number')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
          <label>Date  <span style="color: red; font-size:18px;">*</span></label>
          <input type="date" name="date" value="{{old('date')}}" class="form-control">
        </div> 
        <br> 
        @error('date')
        <span style="color: red">{{$message}}</span>
        @enderror
        <br>
        <button type="submit" class="btn request-submit">Save</button>
      </form>
</div>
@endsection