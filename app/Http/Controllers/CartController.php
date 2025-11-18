<?php

namespace App\Http\Controllers;

use App\Models\Variant;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart', ['items' => []]);

        $items = [];
        $totalqty = 0;
        $totalPrice = 0;

        foreach ($cart['items'] as $variantId => $cartItem) {
            $variant = Variant::with('product')->find($variantId);

            if ($variant) {
                $qty = $cartItem['qty'] ?? 1;
                $subtotal = $variant->price * $qty;

                $items[$variantId] = [
                    'name' => $variant->product->name,
                    'variant' => $variant->processor . '/' . $variant->ram . '/' . $variant->storage,
                    'price' => $variant->price,
                    'subtotal' => $subtotal,
                    'qty' => $qty,
                    'variant_id' => $variantId
                ];

                // Add to totals
                $totalqty += $qty;
                $totalPrice += $subtotal;
            }
        }

        return view('cart.index', compact('items', 'totalqty', 'totalPrice'));
    }

    public function add($productId, $variantId)
    {
        $cart = session()->get('cart', ['items' => []]);

        if (isset($cart['items'][$variantId])) {
            // Safely increment, defaulting to 0 if qty doesn't exist
            $cart['items'][$variantId]['qty'] = ($cart['items'][$variantId]['qty'] ?? 0) + 1;
        } else {
            $cart['items'][$variantId] = [
                'product_id' => $productId,
                'variant_id' => $variantId,
                'qty' => 1,
            ];
        }

        session()->put('cart', $cart);

        return back()->with('success', 'Item added to cart.');
    }

    public function remove($key)
    {
        $cart = session()->get('cart', ['items' => []]);

        if (isset($cart['items'][$key])) {
            unset($cart['items'][$key]);  // remove the item
            session()->put('cart', $cart); // update session
            return redirect()->back()->with('success', 'Item removed from cart.');
        }

        return redirect()->back()->with('error', 'Item not found in cart.');
    }

    public function update(Request $request, $key)
    {
        $cart = session()->get('cart', ['items' => []]);

        if (!isset($cart['items'][$key])) {
            return redirect()->back()->with('error', 'Item not found in cart.');
        }

        $action = $request->input('action');
        $currentQty = $cart['items'][$key]['qty'];

        if ($action === 'increase') {
            $cart['items'][$key]['qty'] = $currentQty + 1;
        } elseif ($action === 'decrease' && $currentQty > 1) {
            $cart['items'][$key]['qty'] = $currentQty - 1;
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Cart updated!');
    }
}
