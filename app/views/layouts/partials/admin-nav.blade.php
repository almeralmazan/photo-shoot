
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ URL::to('admin') }}">Printshoppe Admin</a>
        </div>
        <!-- /.navbar-header -->

        <ul class="nav navbar-top-links navbar-right">
            <!-- /.dropdown -->
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                </a>
                <ul class="dropdown-menu dropdown-user">
                    <li>
                        <a href="{{ URL::to('admin/logout') }}"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>
                <!-- /.dropdown-user -->
            </li>
            <!-- /.dropdown -->
        </ul>
        <!-- /.navbar-top-links -->

        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">

                @if (Auth::user()->username == 'admin')

                    <li>
                        <a class="{{ set_active('admin/reservation') }}" href="{{ URL::to('admin/reservation') }}">
                            <i class="glyphicon glyphicon-list-alt"></i> Reservation
                        </a>
                    </li>

                    <li>
                        <a class="{{ set_active('admin/announcement') }}" href="{{ URL::to('admin/announcement') }}">
                            <i class="glyphicon glyphicon-comment"></i> Announcement
                        </a>
                    </li>

                    <li>
                        <a class="{{ set_active('admin/services') }}" href="{{ URL::to('admin/services') }}">
                            <i class="glyphicon glyphicon-wrench"></i> Services
                        </a>
                    </li>

                    <li>
                        <a class="{{ set_active('admin/gallery') }}" href="{{ URL::to('admin/gallery') }}">
                            <i class="glyphicon glyphicon-picture"></i> Gallery
                        </a>
                    </li>

                @else

                    <li>
                        <a class="{{ set_active('admin/reservation') }}" href="{{ URL::to('admin/reservation') }}">
                            <i class="glyphicon glyphicon-list-alt"></i> Reservation
                        </a>
                    </li>

                @endif

                </ul>
            </div>
            <!-- /.sidebar-collapse -->
        </div>
        <!-- /.navbar-static-side -->
    </nav>

