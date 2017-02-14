<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    @yield('after_styles')
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;@if (Auth::check())
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                   aria-haspopup="true" aria-expanded="true">Semester<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 1]) }}">FIRST SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 2]) }}">SECOND SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 3]) }}">THIRD SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 4]) }}">FOURTH SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 5]) }}">FIFTH SEMETRE</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 6]) }}">SIXTH SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 7]) }}">SEVENTH SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 8]) }}">EIGHTH SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 9]) }}">NINTH SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{ route('semester', ['number' => 10]) }}">TENTH SEMESTER</a></li>
                                    <li role="separator" class="divider"></li>
                                </ul>
                            <li><a href="{{ route('ideas') }}">My ideas</a></li>
                        @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    @yield('after_scripts')
</body>
</html>
