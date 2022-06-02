@extends('components/addinfo')

@section ('formview')
<h1>Add Info to Clients</h1>
<form>

    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Email</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Pass</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Pass">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Phone</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Number">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Adress</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Adress">
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