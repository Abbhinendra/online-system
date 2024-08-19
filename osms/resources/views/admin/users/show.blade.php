@extends('layouts.app')
@section('pagename')
User
@endsection
@section('admincontent')
<div class="container">
<a href="{{route('users.index')}}" class="btn btn-info">Back to List</a> <a style="margin: 0 7px;" class="btn btn-sm btn-info" href="{{route('users.edit', $user->id)}}">Edit</a>
</div>
<div class="container my-4">
    <table class="table" id="table">
          <tr>
            <th scope="col">Sno</th>
            <td>{{$user->id ??''}}</td>
          </tr>
          <tr>
            <th scope="col">Name</th>
            <td>{{$user->name??''}}</td>
          </tr>
          <tr>
            <th scope="col">Email</th>
            <td>{{$user->email??''}}</td>
          </tr>
          <tr>
            <th scope="col">Type</th>
            <td>{{$user->type??''}}</td>
          </tr>
      </table>
</div>
@endsection
