@extends('layouts.master')
@section('content')
<div style="min-height: 19vh">
</div>
<div class="container-fluid my-4">
<div>
        <form action="{{route('status')}}" method="GET">
        <label for="Request">Enter Your Request Id</label>
        <input type="text" name="search" id="search" class="form-control" placeholder="Please Enter Your Request Id" required>
        <br>
        <button type="submit" class="btn btn-sm btn-info">Search</button>
        </form>
</div>
<div>
    <center style="color: green">
        @if (session()->has('message'))
            {!! session('message') !!}
        @endif
    </center>
</div>
</div>
@endsection
