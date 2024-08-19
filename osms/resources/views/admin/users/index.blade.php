@extends('layouts.app')
@section('pagename')
Users
@endsection
@section('admincontent')
<div class="container">
<a href="{{route('users.create')}}" class="btn btn-info">Add user</a>
</div>
<div class="container my-4">
    <main class="table-scroll">
    <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">Sno</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $sno=1;
            @endphp
        @foreach ($users as $user)
          <tr>
            <th scope="row">{{$sno++}}</th>
            <td>{{$user->name ?? ''}}</td>
            <td>{{$user->email ?? ''}}</td>
            <td>{{$user->type ?? ''}}</td>
            <td style="display: flex;">
                <div>
                <a style="margin: 0 6px;" href="{{route('users.show',$user->id)}}" class="btn btn-sm btn-info">View</a>
                </div>
                <div>
                <a  style="margin: 0 6px;" href="{{route('users.edit',$user->id)}}" class="btn btn-sm btn-info">Edit</a>
                </div>
                <form action="{{route('users.destroy',$user->id)}}" method="POST">
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
