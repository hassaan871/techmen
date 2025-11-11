<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function createProduct(Request $request)
    {
        $validatedInput = $request->validate([
            'name' => 'required|string|max:500',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'processor' => 'required|string|max:255',
            'ram' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'display' => 'required|string|max:255',
            'graphics' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'seller_id' => 'required|integer|exists:users,id',
        ]);

        $newProduct = Product::create($validatedInput);

        if (!$newProduct) {
            return redirect()->back()->with('error', 'Failed to add product successfully');
        }

        return redirect()->back()->with('success', 'Product added successfully');
    }

    function getProducts() 
    {
        $products = Product::where('seller_id', Auth::user()->id)->get();

        return view('view-existing-products', ['products' => $products]);
    }
}
