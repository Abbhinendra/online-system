@extends('layouts.app')
@section('pagename')
Assign Works
@endsection
@section('admincontent')
<main class="table-scroll">
<div class="container my-4">
    <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">Sno</th>
            <th scope="col">Request Id</th>
            <th scope="col">Title</th>
            <th scope="col">Customer Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Request Date</th>
            <th scope="col">Requester account email</th>
            <th scope="col">Technician Name</th>
            <th scope="col">Technician Phone Number</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $sno=1;
            @endphp
        @foreach ($userRequests as $userRequest)
          <tr>
            <th scope="row">{{$sno++}}</th>
            <td>{{$userRequest->id}}</td>
            <td>{{$userRequest->title ?? ''}}</td>
            <td>{{$userRequest->name ?? ''}}</td>
            <td>{{$userRequest->email ?? ''}}</td>
            <td>{{$userRequest->number ?? ''}}</td>
            <td>{{$userRequest->date ?? ''}}</td>
            <td>{{$userRequest->user->email}}</td>
            <td>{{$userRequest->technicine->name}}</td>
            <td>{{$userRequest->technicine->number}}</td>
            <td style="display: flex;">
                <div>
                <a style="margin: 0 6px;" href="{{route('allrequests.edit',$userRequest->id)}}" class="btn btn-sm btn-info">View</a>
                </div>
                <form action="{{route('assignwork.destroy',$userRequest->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button style="margin: 0 6px;" type="submit" onclick=" return confirm('Are You Sure!.') " class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </main>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
        $('#table').DataTable();
    </script>
@endsection
