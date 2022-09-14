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
    <h1>Add Info to Reviews</h1>
    <a href="{{ route('dashreview')}}" class="btn btn-primary">Go back</a>
    <form action="/admin/reviewmodadd" method="POST">
        @csrf
        <input name="reviewId" type="hidden" value="{{$revmod->reviewId}}">

        <div class="form-group">
            <label for="exampleFormControlInput1">Date</label>
            <input name="reviewDate" type="date" class="form-control" placeholder="dd/mm/aaaa" value="{{$revmod->reviewDate}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlTextarea1">Content</label>
            <textarea name="reviewContent" class="form-control" rows="3" value="{{$revmod->reviewContent}}"></textarea>
        </div>

        <div>
            <label for="cars">Client</label>
            <select name="clientId" id="kachaou" value="{{$revmod->clientId}}">
                @foreach($clients as $client2)
                    <option value="{{$client2->clientId}}">{{$client2->clientName}}</option>
                @endforeach
                
            </select>
            <script>
                        document.querySelector("#kachaou").value="{{$client->clientId}}";
            </script>
        </div>

        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>