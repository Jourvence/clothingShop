<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showTShirts()
    {
        return $this->showCategory(1, 'tShirts'); // Call the generic method with the T-shirts category ID and view name
    }

    public function showTrousers()
    {
        return $this->showCategory(2, 'trousers'); // Call the generic method with the Trousers category ID and view name
    }

    public function showShoes()
    {
        return $this->showCategory(3, 'shoes'); // Call the generic method with the Shoes category ID and view name
    }

    public function showCategory($categoryId, $viewName)
    {
        // Retrieve products based on the category ID
        $products = Product::where('category_id', $categoryId)->get();

        // Return the specified view with the products data
        return view($viewName, ['products' => $products]);
    }

    public function show($id)
    {   
        // Retrieve the product by its ID
        $product = Product::findOrFail($id);

        // Pass the product to the view
        return view('products.show', compact('product'));
    }
}