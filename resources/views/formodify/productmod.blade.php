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
    <h1>Add Info to Products</h1>
    <a href="{{ route('dashproduct')}}" class="btn btn-primary">Go back</a>
    <form action="/admin/productmodadd" method="POST" enctype="multipart/form-data">
        @csrf
        <input name="productId" type="hidden" value="{{$promod->productId}}">

        <div class="form-group">
            <label for="exampleFormControlInput1">Model</label>
            <input name="productModel" type="text" class="form-control" placeholder="Model" value="{{$promod->productModel}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Brand</label>
            <input name="productBrand" type="text" class="form-control" placeholder="Brand" value="{{$promod->productBrand}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Price</label>
            <input name="productPrice" type="text" class="form-control" placeholder="xx,xx€" value="{{$promod->productPrice}}">
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Status</label>
            <select name="productStatus" class="form-control" value="{{$promod->productStatus}}">
                <option>New</option>
                <option>Reconditioned</option>
            </select>
        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Category</label>
            <select name="productCategory" class="form-control" value="{{$promod->productCategory}}">
                <option>Computers</option>
                <option>Moviles</option>
                <option>Consoles</option>
                <option>Networks</option>
                <option>Others</option>
            </select>
        </div>

        <div class="form-group">
            <label>Description</label>
            <textarea name="productDescription" class="form-control" id="exampleFormControlTextarea1" rows="3" value="{{$promod->productDescription}}"></textarea>
        </div>

        <div class="form-group">
            <label for="exampleFormControlInput1">Stock</label>
            <input name="productStock" type="number" class="form-control" placeholder="xxxx" value="{{$promod->productStock}}">
        </div>

        <div class="form-group">
            <label class="form-label" for="customFile">File</label>
            <input name="productImg" type="file" class="form-control" id="customFile" />
            <img style="height:100px; width:100px;" src="../media/uploaded_files/{{$promod->imagenFoto}}">
        </div>
        <button class="btn btn-primary btn-block" type="submit">Add</button>
    </form>
    @endsection
</body>

</html>