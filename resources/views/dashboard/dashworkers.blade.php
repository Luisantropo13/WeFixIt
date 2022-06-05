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
    <h1>Dashboard Workers</h1>
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
                <th scope="col">Work Place</th>
                <th scope="col">Photo</th>
                <th scope="col"> </th>
                <th scope="col"><a href="{{ route('workerform')}}" class="btn btn-success">Add</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($workers as $worker)
            <tr>
                <th scope="row">{{$worker->workerId}}</th>
                <td>{{$worker->workerName}}</td>
                <td>{{$worker->workerEmail}}</td>
                <td>{{$worker->workerPhone}}</td>
                <td>{{$worker->workerAdres}}</td>
                <td>{{$worker->workerBornDate}}</td>
                <td>{{$worker->workerPlace}}</td>
                <td>{{$worker->workerPhoto}}</td>
                <td><a href="/admin/workermod?workerId={{$worker->workerId}}" class="btn btn-warning">Modify</a></td>
                <td><a href="workerDelete?workerId={{$worker->workerId}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>

</html>