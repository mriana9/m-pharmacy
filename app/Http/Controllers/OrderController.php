<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;  // Import Product model
use Illuminate\Http\Request;

class OrderController extends Controller
{

    public function store(Request $request)
    {
        // Validate the incoming data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'nullable|integer| max:100|min:20',
            'phone' => 'required|string|max:10',
            'notes' => 'nullable|string',
            'address' => 'required|string',
            'product_id' => 'required|exists:products,id',
        ]);

        // Retrieve the product information
        $product = Product::findOrFail($validated['product_id']);

        // Create the order in the database
        $order = new Order();
        $order->name = $validated['name']; // Use 'name' here since your database has 'name'
        $order->age = $validated['age'];
        $order->phone = $validated['phone'];
        $order->notes = $validated['notes'];
        $order->address = $validated['address'];
        $order->product_id = $validated['product_id'];
        $order->product_name = $product->name; // Assuming you want to store the product name
        $order->product_price = $product->price; // Assuming you want to store the product price
        $order->save();

        // Redirect or send response
        return redirect()->route('product.details', $validated['product_id'])
                         ->with('success', 'تم إرسال الطلب بنجاح!');
    }
}
