@extends('layouts.layout')

@section('content')
<section class="main-section">
    <div class="container">
        <!-- Hero Section with GIF/Image -->
        <div class="hero-image">
            <img src="{{ asset('images/hero.jpg') }}" alt="Vintage Hero" class="img-fluid">
        </div>

        <!-- Text Content Section -->
        <div class="content">
            <h1 class="title">Welcome to Our Vintage Collection</h1>
            <p class="description">
                Discover timeless fashion, reimagined for the modern wardrobe. Our collection features high-quality, stylish pieces that are perfect for any occasion.
            </p>
            <div class="buttons">
                <a href="{{ route('tShirts') }}" class="btn btn-dark">Shop T-Shirts</a>
                <a href="{{ route('trousers') }}" class="btn btn-outline-dark">Shop Trousers</a>
                <a href="{{ route('shoes') }}" class="btn btn-dark">Shop Shoes</a>
            </div>
        </div>
    </div>
</section>

<!-- Fake Social Section -->
<section class="social-section">
    <div class="container text-center">
        <h2>Connect with Us!</h2>
        <div class="social-links">
            <a href="https://github.com/Jourvence" class="social-link">Instagram</a>
            <a href="https://github.com/Jourvence" class="social-link">Facebook</a>
            <a href="https://github.com/Jourvence" class="social-link">Twitter</a>
            <a href="https://github.com/Jourvence" class="social-link">Pinterest</a>
        </div>
        <p>Join our community and stay updated with the latest trends and offers!</p>
    </div>
</section>
@endsection
