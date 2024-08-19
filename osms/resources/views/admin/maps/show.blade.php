@extends('layouts.app')
@section('pagename')
Map Address
@endsection
@section('admincontent')
<div class="container">
<a href="{{route('maps.index')}}" class="btn btn-info">Back to List</a> <a style="margin: 0 7px;" class="btn btn-sm btn-info" href="{{route('maps.edit',$map->id)}}">Edit</a>
</div>
<div class="container my-4">
    <main class="table-scroll">
    <table class="table" id="table">
          <tr>
            <th scope="col">Sno</th>
            <td>{{$map->id ??''}}</td>
          </tr>
          <tr>
            <th scope="col">Name</th>
            <td>{{$map->mapaddress??''}}</td>
          </tr>
      </table>
    </main>
</div>
@endsection
