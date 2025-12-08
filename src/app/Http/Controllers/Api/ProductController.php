<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of all products.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Store a newly created product.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'price' => 'required|numeric',
            'discount' => 'nullable|numeric',
            'note' => 'nullable|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048', // validate image
            'description' => 'nullable|string',
            'category' => 'nullable|string|max:255',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('products'), $filename); // move to public/products
            $validated['image'] = $filename; // store only filename
        }

        $product = Product::create($validated);

        return $product;
    }

    /**
     * Display the specified product.
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Update the specified product.
     */
    public function update(Request $request, Product $product)
    {
        $validated = $request->validate([
            'title' => 'sometimes|required|string|max:255',
            'price' => 'sometimes|required|numeric',
            'discount' => 'sometimes|nullable|numeric',
            'note' => 'sometimes|nullable|string',
            'image' => 'sometimes|nullable|string',
            'description' => 'sometimes|nullable|string',
            'category' => 'sometimes|nullable|string|max:255',
        ]);

        $product->update($validated);

        return $product;
    }

    /**
     * Remove the specified product.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return response()->noContent();
    }
}
