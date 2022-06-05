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

        <div class="form-group">
            <label>Payment Method</label>
            <div class="form-check form-check-inline">
                <input name="billPayment" class="form-check-input" type="checkbox" value="Paypal">
                <label class="form-check-label" for="inlineCheckbox1">Paypal</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="billPayment" class="form-check-input" type="checkbox" value="Transfer">
                <label class="form-check-label" for="inlineCheckbox1">Transfer</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="billPayment" class="form-check-input" type="checkbox" value="Others">
                <label class="form-check-label" for="inlineCheckbox2">Others</label>
            </div>
        </div>

        <div class="form-group">
            <label>Client</label>
            <input name="clientId" type="text" class="form-control" value="{{$bilmod->clientId}}">
        </div>

        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>