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
    <h1>Add Info to Clients</h1>
    <a href="{{ route('dashclient')}}" class="btn btn-primary">Go back</a>
    <form action="/admin/clientAdd" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input required name="clientName" type="text" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input required name="clientEmail" type="email" class="form-control" placeholder="Email@email.com">
        </div>

        <div class="form-group">
            <label>Pass</label>
            <input required name="clientPass" type="password" class="form-control" placeholder="Pass">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input required name="clientPhone" type="text" class="form-control" placeholder="xxx xxx xxxx">
        </div>

        <div class="form-group">
            <label>Adress</label>
            <input required name="clientAdress" type="text" class="form-control" placeholder="Street Fake xxx">
        </div>


        <div class="it-datepicker-wrapper theme-dark">
            <div class="form-group">
                <label>Birthday</label>
                <input required name="clientBornDate" class="form-control it-date-datepicker"  type="date" placeholder="dd/mm/aaaa">
            </div>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>