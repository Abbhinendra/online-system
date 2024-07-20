@extends('layouts.master')
@section('content')
<div style="min-height: 19vh">
</div>
<div class="container-fluid my-4">
    @forelse ($userrequests as $userrequest)
    <div class="card my-4">
        <div class="card-header">
         Title:- {{$userrequest->title}}
        </div>
        <div class="card-body">
          <h5 class="card-title">Requester Name:-{{$userrequest->name}}</h5>
          <p class="card-text"><strong>Description:-</strong> {{$userrequest->description}}</p>
          <a href="{{route('request.show',$userrequest->id)}}" class="btn btn-sm btn-info">View</a>
        </div>
      </div>
      <br>
      <br>
    @empty
        
    @endforelse
</div>
@endsection