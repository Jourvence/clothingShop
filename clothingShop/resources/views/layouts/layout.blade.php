<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts and Bootstrap -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    @vite(['resources/css/main.css', 'resources/js/app.js']) <!-- Use the Vite directive -->

    <!-- Additional CSS for Centering Navbar -->
    <style>
        /* Ensure the center-aligned container is always centered */
        .navbar-center {
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Override default Bootstrap spacing */
        .navbar-center ul {
            margin: 0;
        }
    </style>
</head>
<body id="colorId">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div id="logo" class="text-center my-3">
        <h1>
            <a href="{{ route('main') }}" class="navbar-brand">
                <img src="{{ asset('images/clothingSiteLogo.png') }}" alt="Logo" style="width: 100px;">
            </a>
        </h1>
    </div>

    <!-- Navbar Container -->
    <nav class="navbar navbar-expand-lg navbar-light position-relative">
        <div class="container-fluid">

            <!-- Navbar Toggler for Mobile View -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Collapsible Navbar Content -->
            <div class="collapse navbar-collapse" id="navbarContent">
                <!-- Left-aligned Section -->
                <div class="navbar-nav me-auto">
                    @if (Route::has('login'))
                        @auth
                            <ul class="navbar-nav d-flex flex-row">
                                <li class="nav-item mx-2">
                                    <a class="nav-link">Logged in as: <span style="color: blueviolet;"> {{ Auth::user()->name }}</span></a>
                                </li>
                                <li class="nav-item mx-2">
                                    <a class="nav-link active" href="{{ url('/home') }}">Profile</a>
                                </li>
                                <li class="nav-item mx-2">
                                    <form action="{{ url('/logout') }}" method="POST" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="nav-link active" style="border: none; background: none; cursor: pointer;">
                                            Logout
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        @else
                            <ul class="navbar-nav d-flex flex-row">
                                <li class="nav-item mx-2">
                                    <a class="nav-link active" href="{{ route('login') }}">Login</a>
                                </li>
                                @if (Route::has('register'))
                                    <li class="nav-item mx-2">
                                        <a class="nav-link active" href="{{ route('register') }}">Register</a>
                                    </li>
                                @endif
                            </ul>
                        @endauth
                    @endif
                </div>

                <!-- Center-aligned Navigation Links Container -->
                <div class="navbar-center mx-auto d-none d-lg-flex">
                    <ul class="navbar-nav d-flex flex-row justify-content-center align-items-center">
                        <li class="nav-item mx-3">
                            <a class="nav-link active" href="{{ route('tShirts') }}">T-Shirts</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link active" href="{{ route('trousers') }}">Trousers</a>
                        </li>
                        <li class="nav-item mx-3">
                            <a class="nav-link active" href="{{ route('shoes') }}">Shoes</a>
                        </li>
                    </ul>
                </div>

                <!-- Right-aligned Search Bar -->
                <div class="navbar-right ms-auto">
                    <form class="d-flex" role="search">
                        <input id="magGlass" type="image" src="{{ asset('images/magGlass.jpg') }}" alt="Submit feedback">
                        <input id="navSearch" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                </div>
            </div>

            <!-- Centered Items in Mobile View -->
            <div class="d-lg-none text-center mt-3">
                <ul class="navbar-nav d-flex flex-row justify-content-center align-items-center">
                    <li class="nav-item mx-3">
                        <a class="nav-link active" href="{{ route('tShirts') }}">T-Shirts</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" href="{{ route('trousers') }}">Trousers</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link active" href="{{ route('shoes') }}">Shoes</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>

<!-- Quest for today, add a trousers section -->
 <!-- Make the main section look nice -->