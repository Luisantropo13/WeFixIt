<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Shop</title>

    <style>
        .card {
            padding: 15px;
        }

        .card img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
    @extends('components/plantilla')
    
    @section ('seccion')
    <h1>Tienda de Productos</h1>
    <div id="main">
        @include('components/aside')
    </div>
    @endsection
</body>
</html>