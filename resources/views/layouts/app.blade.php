<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar has-shadow">
            <div class="container">
                <div class="navbar-start">
                    <a class="navbar-item" href="{{route('home')}}">
                        <img src="{{asset('images/cover.png ')}}" alt="Logo" style="width: 130px;"/>
                    </a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile m-l-10">Portfolio</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Lessons</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Forum</a>
                    <a href="#" class="navbar-item is-tab is-hidden-mobile">Share</a>
                </div>
                @guest
                    <div class="navbar-end">
                        <a class="navbar-item is-tab is-hidden-mobile" href="{{route('login')}}">
                            <i class="fa fa-sign-in fa-fw" aria-hidden="true"></i>
                            &nbsp; Login
                        </a>
                        <a class="navbar-item is-tab is-hidden-mobile" href="{{route('register')}}">
                            <i class="fa fa-user-plus fa-fw" aria-hidden="true"></i>
                            &nbsp; Register
                        </a>
                    </div>
                @else
                    <div class="dropdown is-hoverable is-right">
                        <div class="navbar-item has-dropdown is-hoverable">
                            <a class="navbar-link" href="#">
                                Hey, {{ Auth::user()->name }}
                            </a>
                        </div>
                        <div class="dropdown-menu">
                            <div class="dropdown-content">
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-user fa-fw" aria-hidden="true"></i>
                                    &nbsp; Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-bell fa-fw" aria-hidden="true"></i>
                                    &nbsp; Notifications
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fa fa-sliders fa-fw" aria-hidden="true"></i>
                                    &nbsp; Settings
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    <i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>
                                    &nbsp; Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </div>
                @endguest
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
