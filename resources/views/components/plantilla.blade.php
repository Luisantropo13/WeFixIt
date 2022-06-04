<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="resources/css/header.css" rel="stylesheet">
    <title>Home</title>

    <style>
        * {
            box-sizing: border-box;
            margin: 0;
        }

        body {
            overflow-x: hidden;
        }

        header {

            background-image: url(/../media/fakefondo.png);

        }

        #dashback {
            background-image: url(/../media/dashback2.png);
            background-repeat: no-repeat;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -1;
        }

        #background {
            background-image: url(/../media/backgroundimg.png);
            background-repeat: no-repeat;
            position: fixed;
            top: 0;
            left: 0;
            width: 100vw;
            height: 100vh;
            z-index: -2;
        }

        #subheader1 {
            height: 100%;
            padding: 20px;
        }

        #dataheader img {
            height: 250px;
        }

        #subheader2 {
            text-align: center;
        }

        .navbt {
            width: auto;
        }

        #login {
            text-align: right;
        }

        nav {
            padding: 0 auto;
            margin: 0 auto;
            width: 100%;
            z-index: 9999;
        }

        .navbar {
            overflow: hidden;
            background-image: url(/../media/fakefondo.png);
            position: fixed;
            top: 0;
            width: 100%;

        }

        .navbar a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            text-decoration: none;
            font-size: 17px;
        }

        .navbar a:hover {
            background: #ddd;
            color: red;
        }

        #subheader2 {
            margin-top: 100px;
            margin-bottom: 25px;
        }

        footer {
            background-image: url(/../media/backfoot.png);
            color: white;
            padding: 15px;
            text-align: center;
        }

        footer img {
            width: 100%;
            top: 0;
            left: 0;
        }

        .table {
            color: white;
        }
    </style>
</head>

<body>
    <div id="background"></div>
    <header class="row">
        <div id="subheader1" class="subheader col-12">
            <nav class="row navbar">

                <div id="navmenu" class="col-10 row">
                    <form class="navbt form-inline col-1">
                        <a href="{{ route('home')}}" class="btn btn-outline-secondary">Home</a>
                    </form>
                    <form class="navbt form-inline col-1">
                        <a href="{{ route('product')}}" class="btn btn-outline-secondary">Shop</a>
                    </form>
                    <form class="navbt form-inline col-1">
                        <a href="{{ route('business')}}" class="btn btn-outline-secondary">About Us</a>
                    </form>
                    <form class="navbt form-inline col-1">
                        <a href="{{ route('contact')}}" class="btn btn-outline-secondary">Contact</a>
                    </form>
                    <form class="form-inline col-6">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </form>
                </div>

                <div id="login" class="col-2">
                    <form class="navbt form-inline col-1">
                        <?php
                        if (1) 
                        {
                            ?><a href="{{ route('login')}}" class="btn btn-outline-secondary">Login/Register</a><?php
                        } else {
                            ?><a href="{{route('dashboard')}}" class="btn btn-outline-secondary">Profile</a><?php
                        }
                        ?>
                    </form>
                </div>
            </nav>
        </div>

        <div id="subheader2" class="subheader col-12">
            <div id="dataheader">
                <img src="/../media/white_logo_lateral2.png" alt="Logo WeFixIt">
            </div>

            <h1 style="color:white;">Welcome to WeFixIt</h1>
        </div>
    </header>

    <div class="container">
        @yield('seccion')
    </div>

    <footer class="row">
        <div class="col-3" id="businessinfo">
            <h5> Info</h5><br>
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


        <div class="col-3" id="socialmedia">
            <h5> Social Media</h5><br>
            <span>
                Facebook<br>
                Instagram<br>
                Twitter<br>
            </span>
        </div>

        <div class="col-3" id="otherbusiness">
            <h5>Other Companies</h5><br>
            <span>
                https://www.multiservice5d.it/ <br>
                https://riparopoint.it/ <br>
                https://www.sos-tech.it <br>
                https://www.ciclijiriti.it <br>
                https://www.nonsolosmartphone.com <br>

            </span>
        </div>

        <div class="col-3" id="legal">
            <h5> Legal Warning</h5><br>
            <a>Legal Warning</a><br>
            <img> <!-- Imagen CopyRight-->
        </div>
        
    </footer>

</body>

</html>