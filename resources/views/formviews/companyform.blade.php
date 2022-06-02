@extends('components/addinfo')

@section ('formview')
<h1>Add Info to Companies</h1>
<form>

    <div class="form-group">
        <label for="exampleFormControlInput1">Name</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Adress</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Poner la hora actual aqui">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Phone</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Poner la hora actual aqui">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Web</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Poner la hora actual aqui">
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label class="form-label" for="customFile">Logo</label>
        <input type="file" class="form-control" id="customFile" />
    </div>
</form>
@endsection