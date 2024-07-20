@extends('layouts.master')
@section('content')
<div style="min-height: 19vh">
</div>
<div class="container-fluid my-4 show-request-customer-conatiner">
    @forelse ($userrequests as $userrequest)
    <div class="card view-users-allrequestContainer">
        <div class="card-header">
         Title:- {{$userrequest->title}}
        </div>
        <div class="card-body">
          <h5 class="card-title">Requester Name:-{{$userrequest->name}}</h5>
          <p class="card-text"><strong>Description:-</strong> {{substr($userrequest->description,0,260)}}</p>
          <a href="{{route('request.show',$userrequest->id)}}" class="btn btn-sm">View</a>
        </div>
      </div>
      <br>
      <br>
    @empty
     <p class="no-data">No data to show because you are no submited any request.</p>
    @endforelse
</div>
@endsection
