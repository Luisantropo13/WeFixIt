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
    <h1>Dashboard Review</h1>
    <a href="{{ route('dashboard')}}" class="btn btn-primary">Go back</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Date</th>
                <th scope="col">Content</th>
                <th scope="col">Client</th>
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
                <td><button type="button" class="btn btn-warning">Modify</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Luis</td>
                <td>luis@wefixit.com</td>
                <td>666666666</td>
                <td><button type="button" class="btn btn-warning">Modify</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Luis</td>
                <td>luis@wefixit.com</td>
                <td>666666666</td>
                <td><button type="button" class="btn btn-warning">Modify</button></td>
                <td><button type="button" class="btn btn-danger">Delete</button></td>
            </tr>
        </tbody>
    </table>
    @endsection
</body>

</html>