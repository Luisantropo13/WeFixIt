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
    <h1>Add Info to Workers</h1>
    <a href="{{ route('dashworkers')}}" class="btn btn-primary">Go back</a>
    <form action="/admin/workerAdd" method="POST">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input required name="workerName" type="text" class="form-control" placeholder="name">
        </div>

        <div class="form-group">
            <label >Email</label>
            <input required name="workerEmail" type="email" class="form-control" placeholder="example@example.com">
        </div>

        <div class="form-group">
            <label >Pass</label>
            <input required name="workerPass" type="password" class="form-control" placeholder="pass">
        </div>

        <div class="form-group">
            <label>Phone</label>
            <input required name="workerPhone" type="text" class="form-control" placeholder="+xx xxx xxx xxxx">
        </div>

        <div class="form-group">
            <label>Adress</label>
            <input required name="workerAdress" type="text" class="form-control" placeholder="Street Example xxx">
        </div>


        <div class="it-datepicker-wrapper theme-dark">
            <div class="form-group">
                <label>Date</label>
                <input required name="workerBornDate" class="form-control it-date-datepicker" type="date" placeholder="dd/mm/aaaa">
            </div>
        </div>

        <div class="form-group">
            <label>Work Place</label>
            <div class="form-check form-check-inline">
                <input name="workerPlace" class="form-check-input" type="checkbox" value="Admin">
                <label class="form-check-label" for="inlineCheckbox1">Admin</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="workerPlace" class="form-check-input" type="checkbox" value="Network Installer">
                <label class="form-check-label" for="inlineCheckbox1">Network Installer</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="workerPlace" class="form-check-input" type="checkbox" value="Adviser">
                <label class="form-check-label" for="inlineCheckbox2">Advisor</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="workerPlace" class="form-check-input" type="checkbox" value="Repairman">
                <label class="form-check-label" for="inlineCheckbox2">Repairman</label>
            </div>

        </div>

        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>