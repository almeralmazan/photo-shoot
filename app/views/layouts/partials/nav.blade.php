<nav class="navbar navbar-default navbar-static-top text-uppercase">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="{{ URL::to('images/logo.png') }}" class="img-responsive" alt="">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ URL::to('/') }}">home</a></li>
                <li><a href="{{ URL::to('about-us') }}">about us</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">services <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ URL::to('event') }}">Event Package</a></li>
                        <li><a href="{{ URL::to('photo-shoot') }}">Photo shoot</a></li>
                        <li><a href="{{ URL::to('products') }}">Products</a></li>
                    </ul>
                </li>
                <li><a href="{{ URL::to('galleries') }}">gallery</a></li>
                <li><a href="{{ URL::to('contact') }}">contact us</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
