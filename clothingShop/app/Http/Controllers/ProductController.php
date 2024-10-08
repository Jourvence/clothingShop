<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showTShirts()
    {
        // Retrieve T-shirts from the database
        $products = Product::where('category_id', 1)->get(); // Change 1 to the correct category ID for T-shirts

        // Pass the products to the view
        return view('tShirts', compact('products')); // Make sure 'products' is passed here
    }

    public function show($id)
    {   
        // Retrieve the product by its ID
        $product = Product::findOrFail($id);

        // Pass the product to the view
        return view('products.show', compact('product'));
    }
}

