@extends('layouts.layout')

@section('content')
<div class="container text-center" id="mainContainer">
    <div class="row">
        <div class="col-md-2">
            <h4 style="color:blueviolet;">Categories</h4>
            <ul class="list-unstyled">
                <li><a class="nav-link active" href="{{ route('tShirts') }}">T-shirts</a></li>
                <li><a class="nav-link active" href="{{ route('trousers') }}">Trousers</a></li>
                <li><a class="nav-link active" href="{{ route('shoes') }}">Shoes</a></li>
            </ul>
        </div>
        
        <div class="col-md-10">
            <div class="grid">
                @foreach ($products as $product)
                    <div class="grid-item">
                        <img src="{{ asset('images/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
                        <h6>{{ $product->name }}</h6>
                        <p>Price: {{ $product->price }}</p>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-dark">View Details</a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

<style>
    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(200px, 1fr)); /* Responsive grid */
        gap: 20px; /* Space between items */
    }
    .grid-item {
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        transition: transform 0.2s;
    }
    .grid-item:hover {
        transform: scale(1.05); /* Scale effect on hover */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Shadow on hover */
    }
</style>
