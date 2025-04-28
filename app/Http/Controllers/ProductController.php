<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\Product; // Import the Product model

class ProductController extends Controller
{
    // Method to show products
    public function showProducts()
    {
        // Fetch 8 products from the database
        $products = Product::take(8)->get();

        // Pass the products variable to the view
        return view('welcome', compact('products'));
    }


    public function showProduct($id)
    {
        // Find the product by its ID
        $product = Product::findOrFail($id);

        // Return the product details view and pass the product data
        return view('product.details', compact('product'));
    }

    // public function index(Request $request)
    // {
    //     $query = Product::query();
    
    //     if ($request->has('search')) {
    //         $query->where('name', 'like', '%' . $request->search . '%')
    //               ->orWhere('description', 'like', '%' . $request->search . '%');
    //     }
    
    //     $products = $query->paginate(9); // 9 products per page
    
    //     return view('product.index', compact('products'));
    // }
    

}
