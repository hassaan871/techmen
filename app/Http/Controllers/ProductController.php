<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Variant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function createProduct(Request $request)
    {
        $validatedProduct = $request->validate([
            'name' => 'required|string|max:500',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'seller_id' => 'required|integer|exists:users,id',
            'category' => 'required|string|max:100'
        ]);

        $validatedVariants = $request->validate([
            'processor' => 'required|string|max:255',
            'ram' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'display' => 'required|string|max:255',
            'graphics' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        $products = new Product();

        try {
            $products->getConnection()->transaction(function () use ($validatedProduct, $validatedVariants) {
                $newProduct = Product::create($validatedProduct);
                $newProduct->variants()->create($validatedVariants);
            });

            return redirect()->back()->with('success', 'Product and variant added successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', 'Product and variant failed to get added successfully.');
        }
    }

    public function getProducts()
    {
        $products = Product::with('variants')
            ->notBlocked()
            ->bySeller(Auth::user()->id)
            ->get();

        return view('products.index', ['products' => $products]);
    }

    public function destroy($id)
    {
        try {
            Product::bySeller(Auth::user()->id)->where('id', $id)->delete();
            return redirect()->back()->with('success', 'Product soft Deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', 'Product and variant failed to get soft deleted successfully.');
        }
    }

    public function editView($productid, $variantId)
    {
        try {
            $product = Product::notBlocked()
                ->bySeller(Auth::user()->id)
                ->where('id', $productid)
                ->first();

            $variant = Variant::where('id', $variantId)->first();

            $product['variant'] = $variant;

            return view('products.edit', ['product' => $product]);
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', 'Failed to fetch the product.');
        }
    }

    public function edit(Request $request, $productId)
    {
        $validatedProduct = $request->validate([
            'name' => 'required|string|max:500',
            'brand' => 'required|string|max:255',
            'model' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'seller_id' => 'required|integer|exists:users,id',
            'category' => 'required|string|max:100'
        ]);

        $validatedVariants = $request->validate([
            'processor' => 'required|string|max:255',
            'ram' => 'required|string|max:255',
            'storage' => 'required|string|max:255',
            'display' => 'required|string|max:255',
            'graphics' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
        ]);

        try {
            $product = Product::notBlocked()
                ->bySeller(Auth::user()->id)
                ->findOrFail($productId);

            $variant = $product->variants()->findOrFail($request->variant_id);

            $product->getConnection()->transaction(function () use ($product, $variant, $validatedProduct, $validatedVariants) {
                $product->update($validatedProduct);
                $variant->update($validatedVariants);
            });

            return redirect('/product/view')->with('success', 'Product and variant added successfully.');
        } catch (\Exception $e) {
            Log::error('Product update failed: ' . $e->getMessage(), [
                'trace' => $e->getTraceAsString(),
            ]);
            return redirect()->back()->with('failure', 'Product and variant failed to get added successfully.');
        }
    }
}
