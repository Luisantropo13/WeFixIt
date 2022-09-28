<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Shop</title>

    <style>
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
<!-- Este es el dashborad de los trabajadores que no son admin. Aquí tienen acceso a la tabla de facturas y pueden generar facturas nuevas-->
<body>
    @extends('components/plantilla')
    <div id="dashback"></div>
    @section ('seccion')
    <h1 style="color:white;">Worker Dashboard</h1>
    <div id="main" style="padding:15px; text-align:center;" class="row">
        <div class="row fila col-6">
            <div class="card col-4" style="width:100%">
                <div class="card-body">
                    <h2 class="card-title">
                        Bill Dashboard
                    </h2>
                    <a href="{{ route('dashbill2')}}" class="btn btn-primary">Go to Bills Dashboard</a>
                </div>
            </div>
        </div>
        <div class="row fila col-6">
            <div class="card col-4" style="width:100%">
                <div class="card-body">
                    <h2 class="card-title">
                        Generate Bills
                    </h2>
                    <a href="{{ route('productLine')}}" class="btn btn-primary">Generate Bill</a>
                </div>
            </div>
        </div>
        
    </div>
    @endsection
</body>

</html>