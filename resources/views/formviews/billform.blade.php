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
    <h1>Add Info to Bills</h1>
    <a href="{{ route('dashbill')}}" class="btn btn-primary">Go back</a>
    <form action="" method="POST">
        @csrf
        <div class="form-group">
            <label>Email address</label>
            <input name="clientEmail" type="email" class="form-control" placeholder="name@example.com">
        </div>

        <div class="form-group">
            <label>Date</label>
            <input name="billDate" type="date" class="form-control" placeholder="Date">
        </div>

        <div class="form-group">
            <label>Example textarea</label>
            <textarea name="billContent" class="form-control"rows="3"></textarea>
        </div>
        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>