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
    <a href="{{route('ProductPdf')}}" class="btn btn-secondary">Download PDF</a>
    <table class="table" style="width:80vw; margin-left:-50px;">
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
                <th scope="col"><a href="{{ route('productform')}}" class="btn btn-success">Add</a></th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->productId}}</th>
                    <td>{{$product->productModel}}</td>
                    <td>{{$product->productBrand}}</td>
                    <td>{{$product->productPrice}}</td>
                    <td>{{$product->productStatus}}</td>
                    <td>{{$product->productCategory}}</td>
                    <td>{{$product->productDescription}}</td>
                    <td>{{$product->productStock}}</td>
                    <td>{{$product->productImg}}</td>
                    <td><a href="/admin/productmod?productId={{$product->productId}}" class="btn btn-warning">Modify</a></td>
                    <td><a onclick="return confirm('Seguro que quiere borrar?')" href="productDelete?productId={{$product->productId}}" class="btn btn-danger">Delete</a></td>
                </tr>
            @endforeach
            
        </tbody>
    </table>
    @endsection
</body>

</html>