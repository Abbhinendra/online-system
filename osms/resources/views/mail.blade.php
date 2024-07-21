<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <title>Contact Us</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Roboto", sans-serif;
        }
        body{
            background-color: black;
            color: white;
            overflow-x: hidden;
            display: flex;
            justify-content: center;
            align-items: center;
            border: 1px solid rgb(255, 0, 51);
        }
        body div{
            display: flex;
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding: 36px;
            max-height: max-content;
        }
        body div tr{
            display: flex;
            margin: 9px 0;
        }
    </style>
</head>
<body>
<br>
<div>
<tr>
<th style="text-transform: capitalize;">
Name:-
</th>
<td>
{{$data['name']}}
</td>
</tr>
<br>
<br>
<tr>
    <th style="text-transform: capitalize;">
    Subject:-
    </th>
    <td>
    {{$data['subject'] ?? ''}}
    </td>
 </tr>
<br>
<br>
 <tr>
    <th style="text-transform: capitalize;">
    Email:-
    </th>
    <td>
    {{$data['email'] ?? ''}}
    </td>
</tr>
<br>
<br>
<tr>
    <th style="text-transform: capitalize;">
    Number:-
    </th>
    <td>
    {{$data['number'] ?? ''}}
    </td>
    </tr>
<br>
<br>
    <tr>
        <th style="text-transform: capitalize;">
        Message:-
        </th>
        <td>
        {{$data['message' ?? '']}}
        </td>
        </tr>
        <br>
        <br>
        <h2>Thanks For Contacting US 🙏</h2>
</div>
</body>
</html>
