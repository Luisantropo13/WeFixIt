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
    <h1>Add Info to Companies</h1>
    <a href="{{ route('dashcompany')}}" class="btn btn-primary">Go back</a>
    
    <form action="/admin/companymodadd" method="POST">
        @csrf
        <input name="companyId" type="hidden" value="{{$busmod->companyId}}">
        
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input name="companyName" type="text" class="form-control" placeholder="Name" value="{{$busmod->companyName}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Adress</label>
            <input name="companyAdress" type="text" class="form-control" placeholder="example@example.com" value="{{$busmod->companyAdress}}"> 
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Phone</label>
            <input name="companyPhone" type="text" class="form-control" placeholder="XXX XXX XXXX" value="{{$busmod->companyPhone}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Web</label>
            <input name="companyWeb" type="url" class="form-control" placeholder="Web" value="{{$busmod->companyWeb}}">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name ="companyDescription" class="form-control" rows="3" value="{{$busmod->companyDescription}}"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Logo</label>
            <input name="companyLogo" type="url" class="form-control" placeholder="Logo" value="{{$busmod->companyLogo}}">
        </div>

        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>