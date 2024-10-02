@extends('layouts.layout')

@section('content')
<div class="container" id="mainContainer">
    <div class="row">
        <!-- Left Category Menu Column -->
        <div class="col-md-2 col-sm-12 bg-light p-3">
            <h4>Categories</h4>
            <ul class="list-unstyled">
                <li><a class="nav-link active" href="{{ route('tShirts') }}">T-shirts</a></li>
                <li><a class="nav-link active" href="{{ route('trousers') }}">Trousers</a></li>
                <li><a class="nav-link active" href="{{ route('shoes') }}">Shoes</a></li>
                <!-- Add more categories as needed -->
            </ul>
        </div>

        <!-- Right Item Images Columns -->
        <div class="col-md-5 col-sm-6 text-center">
           
            <div class="row">
                <div class="col-6">
                    <h6>Item1</h6>
                    <img src="{{ asset('images/gunFish.jpg') }}" class="img-fluid mb-3" alt="Item 1">
                </div>
                <div class="col-6">
                    <h6>Item2</h6>
                    <img src="{{ asset('images/gunFish.jpg') }}" class="img-fluid mb-3" alt="Item 2">
                </div>
                <div class="col-6">
                    <h6>Item3</h6>
                    <img src="{{ asset('images/gunFish.jpg') }}" class="img-fluid mb-3" alt="Item 3">
                </div>
                <div class="col-6">
                    <h6>Item4</h6>
                    <img src="{{ asset('images/gunFish.jpg') }}" class="img-fluid mb-3" alt="Item 4">
                </div>
                <!-- Add more items if needed -->
            </div>
        </div>

        <div class="col-md-5 col-sm-6 text-center">
      
            <div class="row">
                <div class="col-6">
                    <h6>Item5</h6>
                    <img src="{{ asset('images/gunFish.jpg') }}" class="img-fluid mb-3" alt="Item 5">
                </div>
                <div class="col-6">
                    <h6>Item6</h6>
                    <img src="{{ asset('images/gunFish.jpg') }}" class="img-fluid mb-3" alt="Item 6">
                </div>
                <div class="col-6">
                    <h6>Item7</h6>
                    <img src="{{ asset('images/gunFish.jpg') }}" class="img-fluid mb-3" alt="Item 7">
                </div>
                <div class="col-6">
                    <h6>Item8</h6>
                    <img src="{{ asset('images/gunFish.jpg') }}" class="img-fluid mb-3" alt="Item 8">
                </div>
                <!-- Add more items if needed -->
            </div>
        </div>
    </div>
</div>
@endsection