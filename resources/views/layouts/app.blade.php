<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Devrantia') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="//cdn.materialdesignicons.com/2.0.46/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/all.css') }}">
</head>
<body>
    <div id="app">

        <!-- START NAV -->
        <nav class="navbar is-white">
            <div class="container">
                <div class="navbar-brand">
                    <a class="navbar-item brand-text" href="{{ url('/') }}">
                        {{ config('app.name', 'Devrantia') }}
                    </a>
                    <div class="navbar-burger burger" data-target="navMenu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
                <div id="navMenu" class="navbar-menu">
                    <div class="navbar-start">
                        <a class="navbar-item" href="#">
                            Home
                        </a>
                        <a class="navbar-item" href="#">
                            Link
                        </a>
                        <a class="navbar-item" href="#">
                            Link
                        </a>
                        <a class="navbar-item" href="#">
                            Link
                        </a>
                    </div>
                    <div class="navbar-end">
                        @guest
                            <a class="navbar-item" href="{{ route('login') }}">
                                Login
                            </a>
                            <a class="navbar-item" href="{{ route('register') }}">
                                Register
                            </a>
                        @else
                            <a class="navbar-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Exit
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        @endif
                    </div>

                </div>
            </div>
        </nav>
        <!-- END NAV -->

        <section class="section main">
            @yield('content')
        </section>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/manifest.js') }}"></script>
    <script src="{{ asset('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
