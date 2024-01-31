<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">


    <link rel="icon" href="{{ asset('img/caab24.png') }}" type="image/png">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])



</head>

<body style="background: #E0E7FF;">
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="{{ asset('img/caab24.png') }}" width="70" alt="CAAB" class="me-2">
                    DMS
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    @if (auth()->check())
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('document.index') }}">Documents</a>
                        </li>
                    </ul>
                    @endif

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="btn btn-dark px-5" href="{{ route('login') }}">
                                {{ __('Login') }}
                            </a>
                        </li>

                        @endif

                        @if (Route::has('register'))
                        <li class="nav-item d-none">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else

                        <li>

                            <!-- Logout Form -->


                            <a class="nav-link " href="#">
                                {{ Auth::user()->name }}
                            </a>

                            {{-- <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <!-- User Profile Link or Additional Dropdown Items -->

                                {{-- <a class="dropdown-item" href="{{ route('profile') }}">
                                    {{ __('Profile') }}
                                </a> --}}

                                {{-- <div class="dropdown-divider"></div> --}}

                                <!-- Logout Link -->
                                {{--
                            </div> --}}
                        </li>

                        <li class="nav-item dropdown">
                            <a class=" btn btn-danger" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>



        <div class="container" style="
        height: 81vh;
    ">
            <div class="row d-flex align-items-center justify-content-center my-5">
                <!-- Left Column -->
                <div class="col-md-6">
                    <h2 style="color: #022C22;
                        font-family: Poppins;
                        font-size: 32px;
                        font-style: normal;
                        font-weight: 700;
                        line-height: normal;
                        text-transform: capitalize;">
                        Welcome to Document Management System (DMS)
                    </h2>
                    <p>
                        A document management system (DMS) is a software that helps to store, organize, track, and
                        retrieve digital documents. A DMS can also provide features such as version control, access
                        control, search, and collaboration. A DMS can help to reduce paper usage, improve workflow,
                        enhance security, and comply with legal requirements.
                    </p>
                    <a class="btn btn-danger btn-lg px-5 " href="{{ route('login') }}">
                        {{ __('Login') }}
                    </a>
                </div>
            
                <!-- Right Column -->
                <div class="col-md-6">
                    <img src="{{ asset('Hero.png') }}" width="100%" alt="CAAB" class="me-2">
                </div>
            </div>
            
        </div>
    </div>
    <!-- Footer -->
<footer class="bg-black text-white py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <p>&copy; 2024 Your Company Name</p>
            </div>
            <div class="col-md-6 text-end text-white">
                <ul class="list-inline">
                    <li class="list-inline-item"><a href="#" style="color: #FFF; text-decoration: none;">Terms</a></li>
                    <li class="list-inline-item"><a href="#" style="color: #FFF; text-decoration: none;">Privacy</a></li>
                    <li class="list-inline-item"><a href="#" style="color: #FFF;  text-decoration: none;">Cookie Policy</a></li>
                </ul>
            </div>
        </div>
    </div>
</footer>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    {{-- <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script> --}}
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>