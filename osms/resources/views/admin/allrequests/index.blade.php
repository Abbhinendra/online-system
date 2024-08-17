@extends('layouts.app')
@section('pagename')
All Requests
@endsection
@section('admincontent')
<div class="container my-4 userRequest">
    @forelse ($userRequests as $userRequest)
    <div class="card" style="width: 18rem; margin:8px 8px;">
        <div class="card-body">
          <h5 class="card-title">{{$userRequest->title}}</h5>
          <br>
          <h6 class="card-subtitle mb-2 text-muted">{{substr($userRequest->description, 0, 260)}}</h6>
          <p class="card-text">Customer Name:- {{$userRequest->name}}</p>
          <a href="{{route('allrequests.edit',$userRequest->id)}}" class="card-link">View</a>
        </div>
      </div>
    @empty

    @endforelse
</div>
<div>
    {{$userRequests->links('pagination::bootstrap-5')}}
  </div>
@endsection



