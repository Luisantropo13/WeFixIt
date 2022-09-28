<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: Verdana, sans-serif;
        }

        .mySlides {
            display: none;
        }

        img {
            vertical-align: middle;
        }

        .container {
            padding-bottom: 15px;
            padding-top: 15px;
        }

        .car {
            padding: 15px;
        }

        #productcarousel {
            color: black;
            background-color: red;
            height: 300px;
            max-height: 300px;
        }

        #servicecarousel {
            color: black;
            background-color: green;
            height: 300px;
            max-height: 300px;
        }

        .fila {
            padding: 10px;
        }

        .card {
            padding: 15px;
        }

        .card img {
            width: 100%;
            height: 100%;
        }
    </style>
</head>

<body>
    @extends('components/plantilla')

    @section ('seccion')
    <h1>Página Principal</h1>

    <div class="container">
        <main>
            <div id="business">
                <h2>Popular Products</h2>
                <div style="text-align:center;">
                    <div class="row fila">

                       <?php  $i = 0; ?>
                        @foreach($items as $item)

                        <?php
                        if( $i++ >3 )
                            continue;
                        ?>

                        <div class="card col-3">
                            <img class="card-img-top" src="media/uploaded_files/{{$item->imagenFoto}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">{{$item->productModel}}</h5>
                                <p class="card-text">{{$item->productDescription}}</p>
                                <p class="card-text">{{$item->productPrice}}€</p>
                                <a href="#" class="btn btn-primary">Buy</a>
                            </div>
                        </div>
                        @endforeach

                    </div>
                </div>
            </div>

            <!-- <div id="business">
                <h2>New Services</h2>
                <div style="text-align:center;">
                    <div class="row fila">

                        @foreach($items as $item)
                        <div class="card col-3">
                            <img class="card-img-top" src="{{$item->productImg}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$item->productModel}}
                                </h5>
                                <p class="card-text">
                                    {{$item->productDescription}}
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div id="business">
                <h2>Offers</h2>
                <div style="text-align:center;">
                    <div class="row fila">

                        @foreach($items as $item)
                        <div class="card col-3">
                            <img class="card-img-top" src="{{$item->productImg}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">
                                    {{$item->productModel}}
                                </h5>
                                <p class="card-text">
                                    {{$item->productDescription}}
                                </p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div> -->

            <div id="contact" class="row"  style=" background-image: url(/media/fakefondo.png); color:white; padding:10px; margin-bottom:30px;">
                <div class="col-3" id="data">
                    <div id="businessinfo">
                        <h5> Information</h5><br>
                        <span>
                            Contact Number: +39 xxx xxx xxxx <br>
                            Contact Mail: fakemail@wefixit.com <br>
                            Direction: Invented Street Nº 123 <br>
                            <br>
                            Schedule: <br>
                            <br>
                            Monday-Saturday <br>
                            09:00-14:00 17:00-19:30 <br>
                            Sundays <br>
                            No Working <br>
                        </span>
                    </div>
                </div>

                <div class="col-9" id="map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3139.919328933414!2d15.63549121511262!3d38.09554150141282!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13145bd8a2636821%3A0x3c561818b61ab654!2sPhone%20Hub!5e0!3m2!1ses!2sit!4v1653984058925!5m2!1ses!2sit" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>

            <div id="reviewForm" style="background-color:black; width:100%; padding:15px;">
                <!-- <div id="cuestionario" style=" color:white; ">
                    <form>
                        <div class="form-group">
                            <label for="exampleFormControlInput1">Email</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlInput1">Password</label>
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                        </div>
    

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Review</label>
                            <textarea style="min-height:350px;" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                        </div>

                    </form>
                </div> -->

                <div id="reviews"  style=" background-image: url(/media/fakefondo.png); color:white; padding:10px;">
                    <div class="row">
                    <?php  $i = 0; ?>
                        @foreach($reviews as $review)
                        <?php
                        if( $i++ >3 )
                            continue;
                        ?>
    
                        <div class="rev col-6" style="padding:5px;">
                            <h4>{{$review->clientName}}</h4>
                            <p>{{$review->reviewContent}}</p>
                            <span>{{$review->reviewDate}}</span>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>

        </main>
    </div>
    @endsection

    <script>
        let slideIndex = 0;
        showSlides();

        function showSlides() {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 2000);
        }
    </script>
</body>

</html>