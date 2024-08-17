@extends('layouts.app')
@section('pagename')
Technician
@endsection
@section('admincontent')
<div class="container">
<a href="{{route('enginner.index')}}" class="btn btn-info">Back to List</a> <a style="margin: 0 7px;" class="btn btn-sm btn-info" href="{{route('enginner.edit',$worker->id)}}">Edit</a>
</div>
<div class="container my-4">
    <table class="table" id="table">
          <tr>
            <th scope="col">Sno</th>
            <td>{{$worker->id ??''}}</td>
          </tr>
          <tr>
            <th scope="col">Name</th>
            <td>{{$worker->name??''}}</td>
          </tr>
          <tr>
            <th scope="col">Phone Number</th>
            <td>{{$worker->number??''}}</td>
          </tr>
          <tr>
            <th scope="col">Email</th>
            <td>{{$worker->email??''}}</td>
          </tr>
      </table>
</div>
@endsection
