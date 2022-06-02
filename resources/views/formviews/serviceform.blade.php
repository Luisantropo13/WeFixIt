@extends('components/addinfo')

@section ('formview')
<h1>Add Info to Services</h1>
<form>

    <div class="form-group">
        <label for="exampleFormControlInput1">Type</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label class="form-label" for="customFile">File</label>
        <input type="file" class="form-control" id="customFile" />
    </div>
</form>
@endsection