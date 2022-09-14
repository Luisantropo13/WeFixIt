<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Bill</title>

    <style>
        body{
            
            align-items: center;
        }
        #dashback{
            background-image: url(../media/dashback2.png);
            background-repeat: no-repeat;
            position:fixed;
            top:0;
            left:0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
            
        }
    </style>
</head>

<body style="color:white;">
    @extends('components/plantilla')
    <div id="dashback"></div>
    @section ('seccion')
    <h1>Dashboard Bill</h1>
    <a href="{{ route('dashboard')}}" class="btn btn-primary">Go back</a>

    <table class="table" style="width:80vw; margin-left:-50px;" ">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Date</th>
                <th scope="col">Payment Method</th>
                <th scope="col">Client</th>
                <th scope="col"> </th>
                <th scope="col"><a href="{{ route('billform')}}" class="btn btn-success">Add</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($bills as $bill)
            <tr>
                <td scope="row">{{$bill->billId}}</td>
                <td>{{$bill->billDate}}</td>
                <td>{{$bill->billPayment}}</td>
                <td>{{$bill->clientName}}</td>
                <td><a href="/admin/billmod?billId={{$bill->billId}}" class="btn btn-warning">Modify</a></td>
                <td><a href="billDelete?billId={{$bill->billId}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>

</html>