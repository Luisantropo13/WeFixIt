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
    <h1>Dashboard Product</h1>
    <a href="{{ route('dashboard')}}" class="btn btn-primary">Go back</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Model</th>
                <th scope="col">Brand</th>
                <th scope="col">Price</th>
                <th scope="col">Status</th>
                <th scope="col">Category</th>
                <th scope="col">Description</th>
                <th scope="col">Photo</th>
                <th scope="col"> </th>
                <th scope="col"><a href="{{ route('addinfo')}}" class="btn btn-success">Add</a></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>Luis</td>
                <td>luis@wefixit.com</td>
                <td>666666666</td>
                <td>fake street 123</td>
                <td>01/01/1999</td>
                <td>Master</td>
                <td>xd</td>
                <td><button type="button" class="btn btn-warning">Modify</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Luis</td>
                <td>luis@wefixit.com</td>
                <td>666666666</td>
                <td>fake street 123</td>
                <td>01/01/1999</td>
                <td>Master</td>
                <td>xd</td>
                <td><button type="button" class="btn btn-warning">Modify</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Luis</td>
                <td>luis@wefixit.com</td>
                <td>666666666</td>
                <td>fake street 123</td>
                <td>01/01/1999</td>
                <td>Master</td>
                <td>xd</td>
                <td><button type="button" class="btn btn-warning">Modify</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>
    @endsection
</body>

</html>