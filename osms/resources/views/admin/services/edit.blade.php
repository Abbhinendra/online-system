@extends('layouts.app')
@section('pagename')
Service
@endsection
@section('admincontent')
<div class="container my-4">
    <form action="{{route('services.update', $service->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="exampleInputEmail1">Title  <span style="color: red">*</span></label>
          <input type="text" name="title"  value="{{old('title',$service->title)}}" class="form-control" required>
        </div>
        @error('title')
        <span style="color: red">{{$message}}</span>
        @enderror
        <div class="form-group">
            <label for="exampleInputEmail1">Image  <span style="color: red">*</span></label>
            <input type="file" accept=".jpeg,.png,.jpg,.svg,.webp" name="image"  value="{{old('image')}}" class="form-control" required>
          </div>
          @error('image')
          <span style="color: red">{{$message}}</span>
          @enderror
          @if ($service->getFirstMediaUrl('images'))
          <img width="100" src="{{ $service->getFirstMediaUrl('images') }}" alt="">
          @endif
        <br>
        <br>
        <button type="submit" class="btn btn-info">Save</button>
      </form>
</div>
@endsection
