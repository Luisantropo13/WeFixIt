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
                        <a href="{{ route('login')}}" class="btn btn-outline-secondary">Login/Register</a>
                    </form>
                </div>
            </nav>
        </div>