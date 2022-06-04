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

<body>
    @extends('components/plantilla')
    <div id="dashback"></div>
    @section ('seccion')
    <h1 style="color:white;">Dashboard</h1>
    <div id="main" style="padding:15px; text-align:center;">
        <div class="row fila">
            <div class="card col-4">
                <div class="card-body">
                    <h2 class="card-title">
                        Clients
                    </h2>
                    <a href="{{ route('dashclient')}}" class="btn btn-primary">Go to Clients Dashboard</a>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <h2 class="card-title">
                        Products
                    </h2>
                    <a href="{{ route('dashproduct')}}" class="btn btn-primary">Go to Products Dashboard</a>
                </div>
            </div>
            <!-- <div class="card col-3">
                <div class="card-body">
                    <h2 class="card-title">
                        Services
                    </h2>
                    <a href="{{ route('dashservice')}}" class="btn btn-primary">Go to Services Dashboard</a>
                </div>
            </div> -->
            <div class="card col-4">
                <div class="card-body">
                    <h2 class="card-title">
                        Workers
                    </h2>
                    <a href="{{ route('dashworkers')}}" class="btn btn-primary">Go to Workers Dashboard</a>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <h2 class="card-title">
                        Companies
                    </h2>
                    <a href="{{ route('dashcompany')}}" class="btn btn-primary">Go to Companies Dashboard</a>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <h2 class="card-title">
                        Reviews
                    </h2>
                    <a href="{{ route('dashreview')}}" class="btn btn-primary">Go to Reviews Dashboard</a>
                </div>
            </div>
            <div class="card col-4">
                <div class="card-body">
                    <h2 class="card-title">
                        Bills
                    </h2>
                    <a href="{{ route('dashbill')}}" class="btn btn-primary">Go to Bills Dashboard</a>
                </div>
            </div>
        </div>
    </div>
    @endsection
</body>

</html>