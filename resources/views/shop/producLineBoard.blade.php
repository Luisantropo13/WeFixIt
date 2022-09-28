<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

    <style> 
        .vermondongo
        {
            cursor:help;
        }
        .vermondongo > img
        {
            display:none;
        }
        .vermondongo:hover > img
        {
            display:block;
            position:absolute;
            width:400px;
            height:300px;
            margin-left:160px;
            margin-top:-100px;
            border-radius:10px;
        }
    </style>

    <script>

            class MondongoTable
            {
                #table = null;
                // Aquí se guardan los mondongos.
                #products = [];
                #carrito = [];

                constructor( idTable ) 
                {
                    this.#table = document.querySelector("#"+idTable );
                }

                getProductByID( id ) 
                {
                    for( let i = 0; i < this.#products.length; i++ ) 
                    {
                        if( this.#products[ i ].id == id )
                            return this.#products[i];
                    }

                    return null;
                }
                getProductList( )
                {
                    return this.#products;
                }

                addProductList( id , image , model , precio ) 
                {
                    this.#products.push( {
                        id: id ,
                        image: image,
                        model: model,
                        precio: precio
                    });
                }

                getTotal( ) 
                {
                        let total = 0;

                            for( let i = 0; i < this.#carrito.length; i++ ) 
                            {
                                    total += ( this.#carrito[ i ].product.precio * this.#carrito[ i ].cantidad );

                            }

                        return total;
                }

                getCarrito( ) 
                {
                    return this.#carrito;
                }

                addProduct( id ,  model , cantidad , precio ) 
                {
                    let hijoMondongo = `
                        <tr>
                                <td>${id}</td>
                                <td class="vermondongo">${model} <img src="media/uploaded_files/${this.getProductByID(id).image}" /></td>
                                <td>${cantidad}</td>
                                <td>${precio}</td>
                                <td>${precio*cantidad}</td>

                                    <div style="display:hidden;">
                                        <input type="hidden" name="compraProductoID[]" value="${id}" />
                                        <input type="hidden" name="compraProductoCantidad[]" value="${cantidad}" />
                                        <input type="hidden" name="compraProductoPrecio[]" value="${precio}" />
                                        <input type="hidden" name="compraProductoModel[]" value="${model}" />
                                    </div>
                        </tr>
                    `;

                    this.#carrito.push( {
                        product: this.getProductByID( id ) ,
                        cantidad: cantidad
                    });


                    this.#table.getElementsByTagName( "tbody" )[0].innerHTML += hijoMondongo;
                }
            }

    </script>

</head>

<!-- Esta será la página a la que tendrá acceso el trabajador que no sea administrador. Aquí pondrá los datos del comprador y al darle al botón
 de add product te llevará a una página donde puedes especificar que producto y cantidad de este desea comprar. Esto se reflejará en la tabla de
abajo. Cuando se termine la compra saldrá un alert con un botón de confirmacion -->

<body style="color:white;">
    @extends('../components/plantilla')
    <div id="dashback"></div>
    @section ('seccion')
    <h1>Add Info to Bills</h1>
    <a href="{{ route('workDash')}}" class="btn btn-primary">Go back</a>
    <button form="factura" type="submit" class="btn btn-secondary">Bill PDF</button>
    <form id="pagarLosMondongos" action="pagarlosmondongos" method="POST">
        @csrf
        
        <div class="form-group">
            <label>Date</label>
            <input name="billDate" type="date" class="form-control">
        </div>

        <div>
            <label for="cars">Paymet Method</label>
            <select name="billPayment" id="billPayment">
                <option value="Paypal">Paypal</option>
                <option value="Transfer">Transfer</option>
                <option value="Others">Others</option>
            </select>
        </div>

        <div>
            <label for="cars">Client</label>
            <select name="clientId" id="kachaou">
                @foreach($clients as $client2)
                    <option value="{{$client2->clientId}}">{{$client2->clientName}}</option>
                @endforeach
                
            </select>
        </div>

        </form>

        <form id="factura" action="factura" method="POST">
        @csrf
        <div class="row">
            <label for="cars">Products</label>
            <select style="margin-right:5px" class="col-md-4" name="clientId" id="mongongoSelect">

                @foreach($products as $product)
                    <option value="{{$product->productId}}">{{$product->productModel}} ({{$product->productPrice}}€)</option>
                @endforeach
            </select>
            <select id="cantidadDeMondongos" style="text-align:center; margin-right:5px" class="col-md-1">
                @for($i = 1; $i < 101; $i++)
                    <option value="{{$i}}">{{$i}}</option>
                @endfor
            </select>

            <button onclick="crearElMondongo( ); return false;" class="btn btn-primary col-md-1" style="margin-right:5px" >ADD</button>
        </div>

        <table class="table" id="products" style="width:80vw; margin-left:-50px;" ">
        <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Model</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">TOTAL</th>
            </tr>
        </thead>
        <tbody> </tbody>
        <tfooter>
                <tr>
                    <td colspan="5" style="text-align:right;border:0;font-weight:600;font-size:20px;" id="dineroParaMondongo">TOTAL: 0€</td>
                </tr>
        </tfooter>
    </table>

       
    </form>

    <button class="btn btn-primary btn-block" form="pagarLosMondongos" type="submit">Add</button>
    <script>   let mondongo = new MondongoTable( "products" ); </script>
    @foreach($products as $product)
                    <script>
                        mondongo.addProductList(
                            {{$product->productId}},
                            "{{$product->imagenFoto}}",
                            "{{$product->productModel}}",
                            {{$product->productPrice}}
                         );
                    </script>
    @endforeach

    <script>
      

        function crearElMondongo( ) 
        {
            let data= mondongo.getProductByID( 
                parseInt( document.querySelector("#mongongoSelect").value ) 
            );


       
//           id , model , cantidad , precio
            mondongo.addProduct( 
                    data.id,
                    data.model,
                    document.querySelector("#cantidadDeMondongos").value,
                    data.precio
            );

            document.querySelector("#dineroParaMondongo" ).innerHTML = "TOTAL: "+ mondongo.getTotal( ) + "€";
        }

    </script> 



    @endsection



</body>



</html>