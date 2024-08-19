@extends('layouts.app')
@section('pagename')
Map Address
@endsection
@section('admincontent')
<div class="container my-4">
    <main class="table-scroll">
    <table class="table" id="table">
        <thead>
          <tr>
            <th scope="col">Sno</th>
            <th scope="col">Map Address</th>
          </tr>
        </thead>
        <tbody>
            @php
                $sno=1;
            @endphp
        @foreach ($map as $value)
          <tr>
            <th scope="row">{{$sno++}}</th>
            <td>{{$value->mapaddress}}</td>
            <td style="display: flex;">
                <div>
                <a style="margin: 0 6px;" href="{{route('maps.show',$value->id)}}" class="btn btn-sm btn-info">View</a>
                </div>
                <div>
                <a  style="margin: 0 6px;" href="{{route('maps.edit',$value->id)}}" class="btn btn-sm btn-info">Edit</a>
                </div>
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
