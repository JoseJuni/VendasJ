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
    <title>VendasJ Dashboard</title>
    <link rel="apple-touch-icon" sizes="60x60" href={{ asset("assets/images/ico/apple-icon-60.png")}}>
    <link rel="apple-touch-icon" sizes="76x76" href={{ asset("assets/images/ico/apple-icon-76.png")}}>
    <link rel="apple-touch-icon" sizes="120x120" href={{ asset("assets/images/ico/apple-icon-120.png")}}>
    <link rel="apple-touch-icon" sizes="152x152" href={{ asset("assets/images/ico/apple-icon-152.png")}}>
    <link rel="shortcut icon" type="image/x-icon" href={{ asset("assets/images/ico/favicon.ico")}}>
    <link rel="shortcut icon" type="image/png" href={{ asset("assets/images/ico/favicon-32.png")}}>
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <!-- BEGIN VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/bootstrap.css")}}>
    <!-- font icons-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/fonts/icomoon.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/fonts/flag-icon-css/css/flag-icon.min.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/vendors/css/extensions/pace.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/fontawesome.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/fontawesome.min.css")}}>


    <!-- END VENDOR CSS-->
    <!-- BEGIN ROBUST CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/bootstrap-extended.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/app.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/colors.css")}}>
    <!-- END ROBUST CSS-->
    <!-- BEGIN Page Level CSS-->
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/core/menu/menu-types/vertical-menu.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/core/menu/menu-types/vertical-overlay-menu.css")}}>
    <link rel="stylesheet" type="text/css" href={{ asset("assets/css/core/colors/palette-gradient.css")}}>
    <!-- END Page Level CSS-->
    <!-- BEGIN Custom CSS-->
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
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
            @yield('content')
        </main>
    </div>

     <!-- BEGIN VENDOR JS-->
     <script src={{ asset("assets/js/core/libraries/jquery.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/vendors/js/ui/tether.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/js/core/libraries/bootstrap.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/vendors/js/ui/perfect-scrollbar.jquery.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/vendors/js/ui/unison.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/vendors/js/ui/blockUI.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/vendors/js/ui/jquery.matchHeight-min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/vendors/js/ui/screenfull.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/vendors/js/extensions/pace.min.js")}} type="text/javascript"></script>
     <!-- BEGIN VENDOR JS-->
     <!-- BEGIN PAGE VENDOR JS-->
     <script src={{ asset("assets/vendors/js/charts/chart.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/js/fontawesome.min.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/js/fontawesome.js")}} type="text/javascript"></script>

     <!-- END PAGE VENDOR JS-->
     <!-- BEGIN ROBUST JS-->
     <script src={{ asset("assets/js/core/app-menu.js")}} type="text/javascript"></script>
     <script src={{ asset("assets/js/core/app.js")}} type="text/javascript"></script>
     <!-- END ROBUST JS-->
     <!-- BEGIN PAGE LEVEL JS-->
     <script src={{ asset("assets/js/scripts/pages/dashboard-lite.js")}} type="text/javascript"></script>
     <!-- END PAGE LEVEL JS-->
</body>
</html>
