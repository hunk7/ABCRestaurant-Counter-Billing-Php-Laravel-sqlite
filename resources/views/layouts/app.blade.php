<!DOCTYPE html>
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
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">
                    <div><img src="data:image/png;base64,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" style="height: 44px;" class="pr-2";></div class="pl-2">
                   <div style="padding-top: 5px;">ABC Restaurant</div>
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
</body>
</html>
