<table class="table" style="background: black; color:white; padding:46px;">
    <tbody>
        <br>
        <tr>
            <th scope="row">Request Id</th>
            <td>{{$userrequest->id??''}}</td>
          </tr>
          <br>
      <tr>
        <th scope="row">Title</th>
        <td>{{$userrequest->title??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Description</th>
        <td>{{$userrequest->description??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Name</th>
        <td>{{$userrequest->name??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Address_Line_1</th>
        <td>{{$userrequest->address1??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Address_Line_2</th>
        <td>{{$userrequest->address2??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Map_Address</th>
        <td>
            @if($userrequest->map_address)
        <a href="{{$userrequest->map_address??''}}" target="_blank">Map Address</a>
           @endif
        </td>
      </tr>
      <br>
      <tr>
        <th scope="row">City</th>
        <td>{{$userrequest->city??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">State</th>
        <td>{{$userrequest->state??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Zip_Code</th>
        <td>{{$userrequest->zip??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Email</th>
        <td>{{$userrequest->email??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Phone_Number</th>
        <td>{{$userrequest->number??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Request_Date</th>
        <td>{{$userrequest->date??''}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Technician_Name</th>
        <td>{{$userrequest->technicine->name??'Not assign now'}}</td>
      </tr>
      <br>
      <tr>
        <th scope="row">Technician_Phone_Number</th>
        <td>{{$userrequest->technicine->number??''}}</td>
      </tr>
      <br>
      <br>
    </tbody>
  </table>
