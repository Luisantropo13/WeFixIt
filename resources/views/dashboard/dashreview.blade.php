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
    <a href="{{route('ReviewPdf')}}" class="btn btn-secondary">Download PDF</a>
    <table class="table" style="width:80vw; margin-left:-50px;">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Date</th>
                <th scope="col">Content</th>
                <th scope="col">Client</th>
                <th scope="col"> </th>
                <th scope="col"><a href="{{ route('reviewform')}}" class="btn btn-success">Add</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($reviews as $review)
            <tr>
                <th scope="row">{{$review->reviewId}}</th>
                <td>{{$review->reviewDate}}</td>
                <td>{{$review->reviewContent}}</td>
                <td>{{$review->clientName}}</td>
                <td><a href="/admin/reviewmod?reviewId={{$review->reviewId}}" class="btn btn-warning">Modify</a></td>
                <td><a onclick="return confirm('Seguro que quiere borrar?')" href="reviewDelete?reviewId={{$review->reviewId}}" class="btn btn-danger">Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endsection
</body>

</html>