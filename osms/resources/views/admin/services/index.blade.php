@extends('layouts.app')
@section('pagename')
Services
@endsection
@section('admincontent')
<div class="container">
<a href="{{route('services.create')}}" class="btn btn-info">Add Service</a>
</div>
<div class="container my-4">
    <main class="table-scroll">
    <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">Sno</th>
            <th scope="col">Title</th>
            <th scope="col">Image</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @php
                $sno=1;
            @endphp
        @foreach ($services as $service)
          <tr>
            <th scope="row">{{$sno++}}</th>
            <td>{{$service->title}}</td>
            <td>
                <a target="_blank" href="{{ $service->getFirstMediaUrl('images') }}">
                    <img width="100" src="{{ $service->getFirstMediaUrl('images') }}" alt="">
                </a>
            </td>
            <td style="display: flex;">
                <div>
                <a style="margin: 0 6px;" href="{{route('services.show',$service->id)}}" class="btn btn-sm btn-info">View</a>
                </div>
                <div>
                <a  style="margin: 0 6px;" href="{{route('services.edit',$service->id)}}" class="btn btn-sm btn-info">Edit</a>
                </div>
                <form action="{{route('services.destroy',$service->id)}}" method="POST">
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
