@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>{{ $product->name }}</h1>
    <img src="{{ asset('images/' . $product->image) }}" class="img-fluid" alt="{{ $product->name }}">
    <p>Price: {{ $product->price }}</p>
    <p>Description: {{ $product->description }}</p>
    <a href="{{ route('tShirts') }}" class="btn btn-secondary">Back to T-Shirts</a>
</div>
@endsection