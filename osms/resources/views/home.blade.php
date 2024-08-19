@extends('layouts.app')
@section('pagename')
Dashboard
@endsection
@section('admincontent')
<div class="container dashboard">
    <div>
    <main>All Users</main>
    <br>
    <center style="font-size: 20px;">{{$user}}</center>
    </div>
    <div>
    <main>All Requests</main>
    <br>
    <center  style="font-size: 20px;">{{$userRequest}}</center>
    </div>
</div>
@endsection
