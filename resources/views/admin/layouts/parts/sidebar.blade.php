<!-- Main Sidebar Container -->

<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
        <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/public/{{asset(auth()->user()->image)}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{auth()->user()->name}}</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->




                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-edit"></i>
                        <p>
                            Forms
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview active">
                        <li class="nav-item">
                            <a href="{{route('chiefs.create')}}" class="nav-link @if($title ==  'Create Chef') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Chief</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('testimonials.create')}}" class="nav-link @if($title ==  'Create Testimonial') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Testimonial</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('menus.create')}}" class="nav-link @if($title ==  'Create Menu') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('bookings.create')}}" class="nav-link @if($title ==  'Create Booking') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Booking</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('designations.create')}}" class="nav-link @if($title ==  'Create Designation') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Designations</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('types.create')}}" class="nav-link @if($title ==  'Create Type Menu') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Create Type Menu</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-table"></i>
                        <p>
                            Tables
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('chiefs.index')}}" class="nav-link @if($title ==  'Chiefs') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Chiefs</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('menus.index')}}" class="nav-link @if($title ==  'Menu') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('bookings.index')}}" class="nav-link @if($title ==  'Bookings') active  @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Bookings</p>
                            </a>
                        </li>

                    </ul>
                </li>
                <li class="nav-item">
                    <a href="{{route('calendar.bookings')}}" class="nav-link ">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">0</span>
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
