<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Party Planner</title>

    <!-- Scripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: white;">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/home') }}" style="color:white;">
                    <img class="pr-2" src="{{ asset('img/logo.png') }}" height="60" alt="logo">
                    Party Planner
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto" style="margin:-130px;">
                        <li class="nav-item active m-3">
                            <a class="nav-link" href="/">HOME</a>
                        </li>
                        <li class="nav-item m-3">
                            <a class="nav-link" href="/decor">DECOR</a>
                        </li>
                        <li class="nav-item m-3">
                            <a class="nav-link" href="/Store">STORE</a>
                        </li>
                        <li class="nav-item m-3">
                            <a class="nav-link" href="/aboutus">ABOUT US</a>
                        </li>
                        <li class="nav-item m-3">
                            <a class="nav-link" href="/ContactUs">CONTACT US</a>
                        </li>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item m-3">
                                <a class="nav-link" href="{{ route('login') }}" style="color:black;">{{ __('LOGIN') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item m-3">
                                    <a class="nav-link" href="{{ route('register') }}" style="color:black;">{{ __('REGISTER') }}</a>
                                </li>
                            @endif
                            @else
                            <li class="nav-item dropdown m-3">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre style="color:black;">
                                    {{ Auth::user()->nama }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <!-- <a class="dropdown-item" href="/profile/{{Auth::user()->id}}">
                                        {{ __('Profile') }}
                                    </a> -->
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

        <main class=""> <!-- py-4 -->
            @yield('content')
        </main>

    </div>
</body>
</html>