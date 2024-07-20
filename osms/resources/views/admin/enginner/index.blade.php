@extends('layouts.app')
@section('pagename')
Technicians
@endsection
@section('admincontent')
<div class="container">
<a href="{{route('enginner.create')}}" class="btn btn-info">Add Technician</a>
</div>
<div class="container my-4">
    <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">Sno</th>
            <th scope="col">Name</th>
            <th scope="col">Phone Number</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $sno=1;
            @endphp
        @foreach ($workers as $worker)
          <tr>
            <th scope="row">{{$sno++}}</th>
            <td>{{$worker->name}}</td>
            <td>{{$worker->number}}</td>
            <td style="display: flex;">
                <div>
                <a style="margin: 0 6px;" href="{{route('enginner.show',$worker->id)}}" class="btn btn-sm btn-info">View</a>
                </div>
                <div>
                <a  style="margin: 0 6px;" href="{{route('enginner.edit',$worker->id)}}" class="btn btn-sm btn-info">Edit</a>
                </div>
                <form action="{{route('enginner.destroy',$worker->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <button style="margin: 0 6px;" type="submit" onclick=" return confirm('Are You Sure!.') " class="btn btn-sm btn-danger">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script>
        $('#table').DataTable();
    </script>
@endsection
