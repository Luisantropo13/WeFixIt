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
    <form action="{{}}" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input name="clientName" type="text" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input name="clientEmail" type="email" class="form-control" placeholder="Email@email.com">
        </div>

        <div class="form-group">
            <label>Pass</label>
            <input name="clientPass" type="password" class="form-control" placeholder="Pass">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input name="clientPhone" type="text" class="form-control" placeholder="xxx xxx xxxx">
        </div>

        <div class="form-group">
            <label>Adress</label>
            <input name="clientAdress" type="text" class="form-control" placeholder="Street Fake xxx">
        </div>


        <div class="it-datepicker-wrapper theme-dark">
            <div class="form-group">
                <label>Date</label>
                <input name="clientBornDate" class="form-control it-date-datepicker"  type="date" placeholder="dd/mm/aaaa">
            </div>
        </div>


        <div class="form-group">
            <label>Photo</label>
            <input name="clientPhoto" type="file" class="form-control" id="customFile" />
        </div>
        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>