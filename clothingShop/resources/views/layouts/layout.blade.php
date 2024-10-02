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
    @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Use the Vite directive -->
</head>
<body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

    <div id="logo" class="text-center my-3">
        <h1>
            <!-- <a class="nav-link active" href="{{ route('main') }}">Jourvence</a>  -->
            <a href="{{ route('main') }}" class="navbar-brand">
                <img src="{{ asset('images/clothingSiteLogo.png') }}" alt="Logo" style="width: 100px;"> 
            </a>
        </h1>
    </div>
    <!-- Navbar Container -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary position-relative">
        <div class="container-fluid">
            <!-- Centered Navigation Links Container -->
            <div class="position-absolute top-50 start-50 translate-middle">
                <ul class="navbar-nav">
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ url('/home') }}">Home</a>          
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link active" href="{{ route('login') }}">Login</a>       
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link active" href="{{ route('register') }}">Register</a>    
                                </li>  
                            @endif
                        @endauth
                    @endif
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('tShirts') }}">T-shirts</a>   
                    </li>  
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('trousers') }}">Trousers</a>    
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{ route('shoes') }}">Shoes</a>   
                    </li>  
                </ul>
            </div>

            <!-- Right-aligned Search Bar -->
            <div class="d-flex ms-auto">
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</body>
</html>