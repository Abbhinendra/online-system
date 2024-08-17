<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Customer Request</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            background-color: black;
            color: white;
        }
    </style>
</head>
<body>
<div class="container">
    <table class="table">
     <tr>
        <th>Request Id</th>
        <td>{{$data->id}}</td>
     </tr>
     <hr>
     <tr>
        <th>Title</th>
        <td>{{$data->title??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Description</th>
        <td>{{$data->description??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Customer Name</th>
        <td>{{$data->name??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Address1</th>
        <td>{{$data->address1??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Address2</th>
        <td>{{$data->address2??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Map Address</th>
        <td><a href="{{$data->map_address??''}}">{{$data->map_address??''}}</a></td>
     </tr>
     <hr>
     <tr>
        <th>City</th>
        <td>{{$data->city??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>State</th>
        <td>{{$data->state??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Zip code</th>
        <td>{{$data->zip??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Email</th>
        <td>{{$data->email??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Phone Number</th>
        <td>{{$data->number??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Request Date</th>
        <td>{{$data->date??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Requester account email</th>
        <td>{{$data->user->email??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Technician Name</th>
        <td>{{$data->technicine->name??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Technician Phone Number</th>
        <td>{{$data->technicine->number??''}}</td>
     </tr>
     <hr>
     <tr>
        <th>Customer signature:-</th>
        <td> </td>
     </tr>
     <hr>
     <tr>
        <th>Technician signature:-</th>
        <td> </td>
     </tr>
    </table>
</div>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
