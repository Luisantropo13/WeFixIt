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
                </div>

                <div id="login" class="col-2">
                    <form class="navbt form-inline col-1">
                        <?php
                            session_start();
                            if(!array_key_exists( "workerEmail" , $_SESSION ))
                            {
                                ?><a href="{{ route('login')}}" class="btn btn-outline-secondary">Login/Register</a><?php
                            }else{
                                ?><a href="{{route('dashboard')}}" class="btn btn-outline-secondary">Profile</a><?php
                            }
                        ?>
                    </form>
                </div>
            </nav>
        </div>