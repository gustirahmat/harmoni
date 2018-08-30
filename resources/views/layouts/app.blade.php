<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Harmoni Karimunjawa') }} | Administrator Page</title>
        <link rel="shortcut icon" href="{{{ asset('img/favicon.ico') }}}">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">

        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
                <div class="container">
                    <a class="navbar-brand" href="{{ url('/admin') }}">
                        Harmoni Admin
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <!-- Left Side Of Navbar -->
                        <ul class="navbar-nav mr-auto">
                            @guest
                            @else
                            <li class="nav-item">
                                <a href="{{ url('/admin') }}" class="nav-link"><i class="icon ion-ios-home"></i> Dashboard</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/open-trip-schedules') }}" class="nav-link"><i class="fa fa-calendar"></i> Jadwal Open Trip</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/tour-package') }}" class="nav-link"><i class="icon ion-ios-list"></i> Paket Wisata</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/boat-schedules') }}" class="nav-link"><i class="icon ion-ios-boat"></i> Jadwal Kapal</a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('/admin/testimony') }}" class="nav-link"><i class="icon ion-ios-chatbubbles"></i> Testimoni</a>
                            </li>
                            @if(Auth::user()->is_admin == 1)
                                <li class="nav-item">
                                    <a href="{{ url('/admin/table') }}" class="nav-link"><i class="fa fa-database"></i> Table Generator</a>
                                </li>
                            @endif
                            @endguest
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="navbar-nav ml-auto">
                            <!-- Authentication Links -->
                            @guest
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fa fa-user"></i> {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                            {{ __('Logout') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            @csrf
                                        </form>
                                    </div>
                                </li>
                            @endguest
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="py-4">
                @if (Session::has('flash_message'))
                    <div class="container">
                        <div class="alert alert-success">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {{ Session::get('flash_message') }}
                        </div>
                    </div>
                @endif

                @yield('content')
            </main>

            <!-- Scripts -->
            <script src="{{ asset('js/app.js') }}"></script>

            <script type="text/javascript">
                $( document ).ready(function() {
                    // Navigation active
                    $('ul.navbar-nav a[href="{{ "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]" }}"]').closest('li').addClass('active');
                });
            </script>

            @yield('scripts')
        </div>
    </body>
</html>
