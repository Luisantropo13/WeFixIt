@extends('components/addinfo')

@section ('formview')
<h1>Add Info to Workers</h1>
<form>

    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Poner la hora actual aqui">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Pass</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Work Place</label>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
            <label class="form-check-label" for="inlineCheckbox1">Network Installer</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Advisor</label>
        </div>
        <div class="form-check form-check-inline">
            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
            <label class="form-check-label" for="inlineCheckbox2">Repairman</label>
        </div>

    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Phone</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Adress</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Poner la hora actual aqui">
    </div>


    <div class="it-datepicker-wrapper theme-dark">
        <div class="form-group">
            <label for="date2">Date label</label>
            <input class="form-control it-date-datepicker" id="date2" type="text" placeholder="inserisci la data in formato gg/mm/aaaa">
        </div>
    </div>


    <div class="form-group">
        <label class="form-label" for="customFile">Photo</label>
        <input type="file" class="form-control" id="customFile" />
    </div>
</form>
@endsection