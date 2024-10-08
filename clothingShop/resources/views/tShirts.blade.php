@extends('layouts.layout')

@section('content')

<div class="container text-center" id="mainContainerTShirts">
  
    <div class="row" style="width: 20%;">
        <ul class="list-unstyled">
            <h4>Categories</h4>
            
                <li><a class="nav-link active" href="{{ route('tShirts') }}">T-shirts</a></li>
                <li><a class="nav-link active" href="{{ route('trousers') }}">Trousers</a></li>
                <li><a class="nav-link active" href="{{ route('shoes') }}">Shoes</a></li>
                <!-- Add more categories as needed -->
            </ul>
</div>  
<div class="row" style="width: 90%; margin-left: 10%;" >
        @foreach ($products as $product)
            <div class="col-md-4" style="padding: 5%;">
                <h6>{{ $product->name }}</h6>
                <img src="{{ asset('images/' . $product->image) }}" class="img-fluid mb-3" alt="{{ $product->name }}">
                <p>Price: {{ $product->price }}</p>
                <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary">View Details</a>
            </div>
        @endforeach
        </div>

</div>

@endsection