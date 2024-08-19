@extends('layouts.app')
@section('pagename')
Edit Map Address
@endsection
@section('admincontent')
<div class="container my-4">
    <form action="{{route('maps.update', $map->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Enter Map Address Url<span style="color: red">*</span></label>
          <input type="url" name="mapaddress"  value="{{old('mapaddress',$map->mapaddress)}}" class="form-control" required>
        </div>
        @error('mapaddress')
        <span style="color: red">{{$message}}</span>
        @enderror
          <br>
        <button type="submit" class="btn btn-info">Save</button>
      </form>
</div>
@endsection
