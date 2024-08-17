@extends('layouts.app')
@section('pagename')
Assign to worker
@endsection
@section('admincontent')
<div class="container my-4 assign-container">
        <div class="form-group">
          @if($userRequest->id)
          <label for="exampleInputEmail1">Request Id</label>
          <input type="text" class="form-control" value="{{$userRequest->id}}" readonly>
          @endif
        </div>
        <div class="form-group">
            @if($userRequest->title)
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" value="{{$userRequest->title}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->description)
            <label for="exampleInputEmail1">Description</label>
            <input type="text" class="form-control" value="{{$userRequest->description}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->name)
            <label for="exampleInputEmail1">Customer Name</label>
            <input type="text" class="form-control" value="{{$userRequest->name}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->address1)
            <label for="exampleInputEmail1">Address1</label>
            <input type="text" class="form-control" value="{{$userRequest->address1}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->address2)
            <label for="exampleInputEmail1">Address2</label>
            <input type="text" class="form-control" value="{{$userRequest->address2}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->map_address)
            <label for="exampleInputEmail1">Map Address</label>
            <input type="text" class="form-control" value="{{$userRequest->map_address}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->city)
            <label for="exampleInputEmail1">City</label>
            <input type="text" class="form-control" value="{{$userRequest->city}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->state)
            <label for="exampleInputEmail1">State</label>
            <input type="text" class="form-control" value="{{$userRequest->state}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->zip)
            <label for="exampleInputEmail1">Zip code</label>
            <input type="text" class="form-control" value="{{$userRequest->zip}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->email)
            <label for="exampleInputEmail1">Email</label>
            <input type="text" class="form-control" value="{{$userRequest->email}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->number)
            <label for="exampleInputEmail1">Phone Number</label>
            <input type="text" class="form-control" value="{{$userRequest->number}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($userRequest->date)
            <label for="exampleInputEmail1">Date</label>
            <input type="text" class="form-control" value="{{$userRequest->date}}" readonly>
            @endif
          </div>
          <div class="form-group">
            @if($user->email)
            <label for="exampleInputEmail1">Requester account email</label>
            <input type="text" class="form-control" value="{{$user->email}}" readonly>
            @endif
          </div>
          <form action="{{route('allrequests.update', $userRequest->id)}}" method="POST">
            @csrf
            @method('PUT')
          <div class="form-group">
          <label for="exampleInputEmail1">Assign to technician</label>
           <select name="worker" class="form-control">
            <option value="">Select please</option>
            @foreach ($workers as $worker)
             <option value="{{$worker->id}}">{{$worker->name}}</option>
            @endforeach
           </select>
          </div>
          <br>
          @error('worker')
          <span style="color: red">{{$message}}</span>
          @enderror
          <br>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
</div>
@endsection

