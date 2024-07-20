@extends('layouts.master')
@section('content')
<div style="min-height:29vh">
</div>
<div class="container-fluid show-user-request">
    @if (session('message'))
        <strong  style="color: green">Success! {{ session('message') }}</strong>
    @endif
    <table class="table">
        <tbody>
            <tr>
                <th scope="row">Request Id</th>
                <td>{{$userrequest->id??''}}</td>
              </tr>
          <tr>
            <th scope="row">Title</th>
            <td>{{$userrequest->title??''}}</td>
          </tr>
          <tr>
            <th scope="row">Description</th>
            <td>{{$userrequest->description??''}}</td>
          </tr>
          <tr>
            <th scope="row">Name</th>
            <td>{{$userrequest->name??''}}</td>
          </tr>
          <tr>
            <th scope="row">Address Line 1</th>
            <td>{{$userrequest->address1??''}}</td>
          </tr>
          <tr>
            <th scope="row">Address Line 2</th>
            <td>{{$userrequest->address2??''}}</td>
          </tr>
          <tr>
            <th scope="row">Map Address</th>
            <td>
                @if($userrequest->map_address)
            <a href="{{$userrequest->map_address??''}}" target="_blank">Map Address</a>
               @endif
            </td>
          </tr>
          <tr>
            <th scope="row">City</th>
            <td>{{$userrequest->city??''}}</td>
          </tr>
          <tr>
            <th scope="row">State</th>
            <td>{{$userrequest->state??''}}</td>
          </tr>
          <tr>
            <th scope="row">Zip Code</th>
            <td>{{$userrequest->zip??''}}</td>
          </tr>
          <tr>
            <th scope="row">Email</th>
            <td>{{$userrequest->email??''}}</td>
          </tr>
          <tr>
            <th scope="row">Phone Number</th>
            <td>{{$userrequest->number??''}}</td>
          </tr>
          <tr>
            <th scope="row">Request Date</th>
            <td>{{$userrequest->date??''}}</td>
          </tr>
          <tr>
            <th scope="row">Technician Name</th>
            <td>{{$userrequest->technicine->name??'Not assign now'}}</td>
          </tr>
          <tr>
            <th scope="row">Technician Phone Number</th>
            <td>{{$userrequest->technicine->number??''}}</td>
          </tr>
        </tbody>
      </table>
      <br>
      <br>
      <a href="{{route('generatePdf',['pdf_id'=>$userrequest->id])}}" class="btn">Download Pdf</a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
@endsection
