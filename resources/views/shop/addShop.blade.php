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

<!--  Esta página sirve para añadir un producto y la cantidad de este que el cliente desea comprar  -->
<body>
    @extends('components/plantilla')
    <div id="dashback"></div>
    @section ('seccion')
    <h1>Add Info to Bills</h1>
    <a href="{{ route('dashbill')}}" class="btn btn-primary">Go back</a>
    <form action="/admin/billAdd" method="POST">
        @csrf
        
        <div>
            <label for="cars">Product</label>
            <select name="clientId" id="kachaou">
                @foreach($clients as $client2)
                    <option value="{{$client2->clientId}}">{{$client2->clientName}}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label>Cantidad</label>
            <input name="billDate" type="date" class="form-control">
        </div>


        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
        
    </div>
    @endsection
</body>

</html>