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
        <h1>Dashboard Companies</h1>
        <a href="{{ route('dashboard')}}" class="btn btn-primary">Go back</a>
        <a href="{{route('CompanyPdf')}}" class="btn btn-secondary">Download PDF</a>
        <table class="table" style="width:80vw; margin-left:-50px;">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Phone</th>
                    <th scope="col">Adress</th>
                    <th scope="col">Webpage</th>
                    <th scope="col">Description</th>
                    <th scope="col">Logo</th>
                    <th scope="col"><a href="{{ route('companyform')}}" class="btn btn-success">Add</a></th>
                </tr>
            </thead>
            <tbody>
                @foreach($business as $company)
                    <tr>
                        <th scope="row">{{$company->companyId}}</th>
                        <td>{{$company->companyName}}</td>
                        <td>{{$company->companyPhone}}</td>
                        <td>{{$company->companyAdress}}</td>
                        <td>{{$company->companyWeb}}</td>
                        <td>{{$company->companyLogo}}</td>
                        <td><a href="/admin/companymod?companyId={{$company->companyId}}" class="btn btn-warning">Modify</a></td>
                        <td><a onclick="return confirm('Seguro que quiere borrar?')" href="companyDelete?companyId={{$company->companyId}}" class="btn btn-danger">Delete</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
</body>

</html>