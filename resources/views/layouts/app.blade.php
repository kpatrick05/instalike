<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->

    <script defer src="{{ mix('js/app.js') }}"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />

</head>
<body>

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

            <div class="container d-flex justify-content-between">
                <a class="navbar-brand d-flex" href="{{ url('/') }}">

                    <div class="pr-3"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path d="M17.833 6.595v1.476c0 .237-.193.429-.435.429h-1.465c-.238 0-.434-.192-.434-.429v-1.476c0-.237.195-.428.434-.428h1.465c.242 0 .435.191.435.428zm-5.833 7.498c1.121 0 2.028-.908 2.028-2.029s-.907-2.029-2.028-2.029-2.028.908-2.028 2.029.907 2.029 2.028 2.029zm12-2.093c0 6.627-5.373 12-12 12s-12-5.373-12-12 5.373-12 12-12 12 5.373 12 12zm-5-1.75h-3.953c.316.533.508 1.149.508 1.813 0 1.968-1.596 3.564-3.563 3.564-1.969 0-3.564-1.596-3.564-3.564 0-.665.191-1.281.509-1.813h-3.937v5.996c0 1.521 1.27 2.754 2.791 2.754h8.454c1.521 0 2.755-1.233 2.755-2.754v-5.996zm-7.009 4.559c1.515 0 2.745-1.232 2.745-2.746 0-.822-.364-1.56-.937-2.063-.202-.177-.429-.324-.677-.437-.346-.157-.729-.245-1.132-.245-.405 0-.788.088-1.133.245-.246.112-.474.26-.675.437-.574.503-.938 1.242-.938 2.063.001 1.514 1.234 2.746 2.747 2.746zm7.009-7.055c0-1.521-1.234-2.754-2.755-2.754h-7.162v2.917h-.583v-2.917h-.583v2.917h-.584v-2.872c-.202.033-.397.083-.583.157v2.715h-.583v-2.393c-.702.5-1.167 1.31-1.167 2.23v1.913h4.359c.681-.748 1.633-1.167 2.632-1.167 1.004 0 1.954.422 2.631 1.167h4.378v-1.913z"/></svg></div>
                   <div class="pl-3" style="border-left: 1px solid black"> InstaLike</div>
            </div>
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
                        <li class="nav-item">
                            <a class="nav-link" href="/users">Users</a>
                        </li>
                        @if (Auth::user() != "")
                    <li class="nav-item">
                        <a class="nav-link" href="/profile/{{auth()->user()->id}}">Profile</a>
                    </li>
               @endif
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
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

</body>
</html>
