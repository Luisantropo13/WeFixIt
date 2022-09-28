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
    <form action="/admin/workermodadd" method="POST">
        @csrf
        <input name="workerId" type="hidden" value="{{$wormod->workerId}}">

        <div class="form-group">
            <label>Name</label>
            <input name="workerName" type="text" class="form-control" placeholder="name" value="{{$wormod->workerName}}">
        </div>

        <div class="form-group">
            <label >Email</label>
            <input name="workerEmail" type="email" class="form-control" placeholder="example@example.com" value="{{$wormod->workerEmail}}">
        </div>

        <div class="form-group">
            <label >Pass</label>
            <input name="workerPass" type="password" class="form-control" placeholder="pass" value="{{$wormod->workerPass}}">
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
                <input name="workerPlace" class="form-check-input" type="checkbox" value="Advisor">
                <label class="form-check-label" for="inlineCheckbox2">Advisor</label>
            </div>
            <div class="form-check form-check-inline">
                <input name="workerPlace" class="form-check-input" type="checkbox" value="Repairman">
                <label class="form-check-label" for="inlineCheckbox2">Repairman</label>
            </div>

        </div>

        <div class="form-group">
            <label>Phone</label>
            <input name="workerPhone" type="text" class="form-control" placeholder="+xx xxx xxx xxxx" value="{{$wormod->workerPhone}}">
        </div>

        <div class="form-group">
            <label>Adress</label>
            <input name="workerAdress" type="text" class="form-control" placeholder="Street Example xxx" value="{{$wormod->workerAdress}}">
        </div>


        <div class="it-datepicker-wrapper theme-dark">
            <div class="form-group">
                <label>Date label</label>
                <input name="workerBornDate" class="form-control it-date-datepicker" type="date" placeholder="dd/mm/aaaa" value="{{$wormod->workerBornDate}}">
            </div>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>