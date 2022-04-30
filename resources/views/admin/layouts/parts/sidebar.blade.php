<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
    <div class="info p-2">
        <span class="text-white font-weight-light">Admin Panel</span>
    </div>
    <a href="{{ route('main.page') }}" target="_blank" class="brand-link">
        <img src="{{ asset('img/logo.jpg') }}" alt="max" class="brand-image " style="opacity: .8">
        <br>

    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            {{--            <div class="image">--}}
            {{--                <i class="fas fa-user-tie"></i>--}}
            {{--            </div>--}}
            <div class="info">
                <a href="#" class="d-block">Hello, {{ Auth::user()->name }}!</a>
            </div>
        </div>

        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>

        </div>
    </div>


    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Home
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    {{--                        <li class="nav-item">--}}
                    {{--                            <a href="{{ route('admin.users.index') }}" class="nav-link active">--}}
                    {{--                                <i class="far fa-circle nav-icon"></i>--}}
                    {{--                                <p>Users</p>--}}
                    {{--                            </a>--}}
                    {{--                        </li>--}}
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Inactive Page</p>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    </div>
</aside>
