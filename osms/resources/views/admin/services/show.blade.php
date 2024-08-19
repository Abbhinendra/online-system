@extends('layouts.app')
@section('pagename')
Service
@endsection
@section('admincontent')
<div class="container">
<a href="{{route('services.index')}}" class="btn btn-info">Back to List</a> <a style="margin: 0 7px;" class="btn btn-sm btn-info" href="{{route('services.edit',$service->id)}}">Edit</a>
</div>
<div class="container my-4">
    <table class="table" id="table">
          <tr>
            <th scope="col">Sno</th>
            <td>{{$service->id ??''}}</td>
          </tr>
          <tr>
            <th scope="col">Name</th>
            <td>{{$service->title??''}}</td>
          </tr>
          <tr>
            <th scope="col">
                Image
            </th>
            <td>
            <a target="_blank" href="{{ $service->getFirstMediaUrl('images') }}">
                <img width="100" src="{{ $service->getFirstMediaUrl('images') }}" alt="">
            </a>
            </td>
          </tr>
      </table>
</div>
@endsection
