<nav class="navbar navbar-inverse navbar-static-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" style="color: black;"  data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Printshoppe Dashboard</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="{{ set_active('admin/reservation') }}"><a href="{{ URL::to('admin/reservation') }}">Reservation</a></li>
                <li class="{{ set_active('admin/announcement') }}"><a href="{{ URL::to('admin/announcement') }}">Announcement</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="{{ set_active('admin/event') }}"><a href="{{ URL::to('admin/event') }}">Event Package</a></li>
                        <li class="{{ set_active('admin/photo-shoot') }}"><a href="{{ URL::to('admin/photo-shoot') }}">Photo Shoot</a></li>
                        <li class="{{ set_active('admin/products') }}"><a href="{{ URL::to('admin/products') }}">Products</a></li>
                    </ul>
                </li>
                <li class="{{ set_active('admin/gallery') }}"><a href="{{ URL::to('admin/gallery') }}">Gallery</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <li>
                        <a href="{{ URL::to('admin/logout') }}">
                            Logout <span class="glyphicon glyphicon-off"></span>
                        </a>
                </li>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>