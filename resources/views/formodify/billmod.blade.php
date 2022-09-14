<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>

<body style="color:white;">
    @extends('../components/plantilla')
    <div id="dashback"></div>
    @section ('seccion')
    <h1>Add Info to Bills</h1>
    <a href="{{ route('dashbill')}}" class="btn btn-primary">Go back</a>
    <form action="/admin/billmodadd" method="POST">
        @csrf
        <input name="billId" type="hidden" value="{{$bilmod->billId}}">

        <div class="form-group">
            <label>Date</label>
            <input name="billDate" type="date" class="form-control" placeholder="name@example.com" value="{{$bilmod->billDate}}">
        </div>

        <div>
            <label for="cars">Paymet Method</label>
            <select name="billPayment" id="billPayment">
                <option value="Paypal">Paypal</option>
                <option value="Transfer">Transfer</option>
                <option value="Others">Others</option>
            </select>
        </div>

        <div>
            <label for="cars">Client</label>
            <select name="clientId" id="kachaou" value="{{$bilmod->clientId}}">
                @foreach($clients as $client2)
                    <option value="{{$client2->clientId}}">{{$client2->clientName}}</option>
                @endforeach
                
            </select>
            <script>
                        document.querySelector("#kachaou").value="{{$client->clientId}}";
                        document.querySelector("#billPayment").value="{{$bilmod->billPayment}}";
            </script>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>