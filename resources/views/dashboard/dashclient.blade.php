<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body style="color:white;">
    @extends('components/plantilla')
    <div id="dashback"></div>
    @section ('seccion')
    <h1>Dashboard Client</h1>
    <a href="{{ route('dashboard')}}" class="btn btn-primary">Go back</a>
    <table class="table" style="width:80vw; margin-left:-50px;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Adress</th>
                <th scope="col">Born Date</th>
                <th scope="col">Photo</th>
                <th scope="col"> </th>
                <th scope="col"><a href="{{ route('clientform')}}" class="btn btn-success">Add</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
            <tr>
                <th scope="row">{{$client->clientId}}</th>
                <td>{{$client->clientName}}</td>
                <td>{{$client->clientEmail}}</td>
                <td>{{$client->clientPhone}}</td>
                <td>{{$client->clientAdress}}</td>
                <td>{{$client->clientBornDate}}</td>
                <td>{{$client->clientPhoto}}</td>
                <td><a href="/admin/clientmod?clientId={{$client->clientId}}" class="btn btn-warning">Modify</a></td>
                <td><a href="clientDelete?clientId={{$client->clientId}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>

</html>