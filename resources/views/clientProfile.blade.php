<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        .container {
            padding-bottom: 15px;
            padding-top: 15px;
        }

        .car {
            padding: 15px;
        }

        #productcarousel {
            color: black;
            background-color: red;
            height: 300px;
            max-height: 300px;
        }

        #servicecarousel {
            color: black;
            background-color: green;
            height: 300px;
            max-height: 300px;
        }

        .fila {
            padding: 10px;
        }

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
    <h1>Client Profile</h1>
    <div class="row" >
        <aside class="col-3" style="padding-bottom:15px; background-color:black; color:white;">
            <div style="height:250px; width:100%;">
                <img style="height:100%; width:100%;" src="media/perfil.jpg">
            </div>

            <span>Name</span>
            <h3><?php echo $_SESSION["user"]["nombre"]; ?></h3>
            <span>Email</span>
            <h3><?php echo $_SESSION["user"]["email"]; ?></h3>
            <span>Phone</span>
            <h3><?php echo $_SESSION["user"]["phone"]; ?></h3>
            <span>Address</span>
            <h3><?php echo $_SESSION["user"]["address"]; ?></h3>
            <span>Birthday</h3>
            <h3><?php echo $_SESSION["user"]["birthday"]; ?></h3>
        </aside>
        <section style="background-color:gray; color:white;" class="col-9">
            <table class="table">
        <thead>
            <tr>
                <th scope=" col">Id</th>
                <th scope="col">Date</th>
                <th scope="col">Payment Method</th>
                </tr>
                </thead>
                <tbody >
                    @foreach($clients as $data)
                    <tr>
                        <td scope="row">{{$data->billId}}</td>
                        <td>{{$data->billDate}}</td>
                        <td>{{$data->billPayment}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </section>
    </div>
    @endsection

</body>

</html>