@extends('components/addinfo')

@section ('formview')
<h1>Add Info to Products</h1>
<form>

    <div class="form-group">
        <label for="exampleFormControlInput1">Model</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Brand</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Price</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Status</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>New</option>
            <option>Reconditioned</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlSelect1">Category</label>
        <select class="form-control" id="exampleFormControlSelect1">
            <option>Computers</option>
            <option>Moviles</option>
            <option>Consoles</option>
            <option>Networks</option>
            <option>Others</option>
        </select>
    </div>

    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
    </div>

    <div class="form-group">
        <label for="exampleFormControlInput1">Stock</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>

    <div class="form-group">
        <label class="form-label" for="customFile">File</label>
        <input type="file" class="form-control" id="customFile" />
    </div>
</form>
@endsection