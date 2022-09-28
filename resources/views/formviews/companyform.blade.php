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
    <form action="/admin/companyAdd" method="POST">
        @csrf
        <div class="form-group">
            <label for="exampleFormControlInput1">Name</label>
            <input required name="companyName" type="text" class="form-control" placeholder="Name">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Address</label>
            <input required name="companyAdress" type="text" class="form-control" placeholder="Example Street 123">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Phone</label>
            <input required name="companyPhone" type="text" class="form-control" placeholder="XXX XXX XXXX">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Web</label>
            <input required name="companyWeb" type="url" class="form-control" placeholder="Web">
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea required name ="companyDescription" class="form-control" rows="3"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Logo</label>
            <input required name="companyLogo" type="url" class="form-control" placeholder="Logo">
        </div>

        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>