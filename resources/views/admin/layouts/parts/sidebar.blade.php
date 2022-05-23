<aside class="main-sidebar sidebar-dark-primary elevation-4" style="position:fixed;">
    <div class="info p-2">
        <span class="text-white font-weight-light">Admin Panel</span>
    </div>
    <a href="{{ route('main.page') }}" target="_blank" class="brand-link">
        <img src="{{ asset('img/logo.png') }}" alt="max" class="brand-image " style="opacity: .8">
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
{{--            <li class="nav-item ">--}}
{{--                <a href="#" class="nav-link @if(Route::currentRouteName() ==='admin.panel')active @endif">--}}
{{--                    <i class="nav-icon fas fa-tachometer-alt"></i>--}}
{{--                    <p>--}}
{{--                        Home--}}
{{--                        <i class="right fas fa-angle-left"></i>--}}
{{--                    </p>--}}
{{--                </a>--}}
{{--                <ul class="nav nav-treeview">--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Sample Page</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                    <li class="nav-item">--}}
{{--                        <a href="#" class="nav-link">--}}
{{--                            <i class="far fa-circle nav-icon"></i>--}}
{{--                            <p>Sample Page</p>--}}
{{--                        </a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </li>--}}

            <li>
                <a href="{{ route('admin.panel') }}" class="nav-link @if(Route::currentRouteName() ==='admin.panel')active @endif">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Home</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.themes') }}" class="nav-link @if(Route::currentRouteName() ==='admin.themes')active @endif">
                    <i class="nav-icon fas fa-map-signs"></i>
                    <p>Subjects</p>
                </a>
            </li>

            <li>
                <a href="{{ route('admin.subjects') }}" class="nav-link @if(Route::currentRouteName() ==='admin.subject')active @endif">
                    <i class="nav-icon fas fa-map-signs"></i>
                    <p>Subjects</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.questions') }}" class="nav-link @if(Route::currentRouteName() ==='admin.questions')active @endif">
                    <i class="nav-icon fas fa-question-circle "></i>
                    <p>Questions-Answers</p>
                </a>
            </li>
            <li>
                <a href="{{ route('admin.proba.create') }}" class="nav-link @if(Route::currentRouteName() ==='admin.questions')active @endif">
                    <i class="nav-icon fas fa-question-circle "></i>
                    <p>Proba Create</p>
                </a>
            </li>

        </ul>
    </nav>
    </div>
</aside>
