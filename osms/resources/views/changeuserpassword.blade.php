@extends('layouts.master')
@section('content')
<div style="min-height: 19vh">
</div>
<div class="container-fluid my-4 stsuaView">
    <form action="{{route('changePass')}}" method="POST">
        @csrf
       <div>
        <label for="Request">Enter Your New Password</label>
        <input type="password" name="password"  class="form-control"  required>
        </div>
        <br>
        @error('password')
        <span class="FormVailidationErrors" >{{ $message }}</span>
        @enderror
        <div>
        <label for="Request">Repeat Password</label>
        <input type="password" name="password_confirmation" class="form-control" required>
        </div>
        <br>
        <button type="submit" class="btn btn-sm">Save</button>
    </form>
</div>
@endsection
