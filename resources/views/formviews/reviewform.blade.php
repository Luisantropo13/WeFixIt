@extends('components/addinfo')

@section ('formview')
<h1>Add Info to Reviews</h1>
<form>

<div class="form-group">
        <label for="exampleFormControlInput1">Client</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Date</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Poner la hora actual aqui">
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Content</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>
</form>
@endsection