<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        @vite(['resources/css/app.css', 'resources/js/app.js']) <!-- Use the Vite directive -->
    </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <div id="logo">
            <h1>Jourvence</h1>
        </div>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <!-- <a class="navbar-brand" href="#">laravelShop</a> -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                    <ul class="navbar-nav ml-auto">
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
                            <a class="nav-link active" href="{{ route('register') }}">Section1</a>    
                         </li>  
                         <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">Section2</a>    
                         </li>
                         <li class="nav-item">
                            <a class="nav-link active" href="{{ route('register') }}">Section3</a>    
                         </li>  
                    </ul>
                </div>
                
            </div>
        </nav>
            <!-- Basically try to copy the H&M site -->
            <!-- make a search field on the navbar on the right -->
             <!-- make a navbar dropdown button that redirects you to different views like: t-shirts, trousers, shoes, etc.-->

        
    </body>
</html>
