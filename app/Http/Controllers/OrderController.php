<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getOrders()
    {
        $orders = Order::with(['products', 'variants'])->get();
        // $orders = Order::where('user_id', Auth::id())
        //     ->with(['items.product', 'items.variant'])
        //     ->latest()
        //     ->get();

        return view('orders.index', compact('orders'));
    }

    public function placeOrder(Request $request)
    {
        $cart = session()->get('cart', ['items' => []]);

        if (empty($cart['items'])) {
            return redirect()->back()->with('error', 'Cart is empty.');
        }

        try {
            DB::transaction(function () use ($cart) {

                $totalPrice = 0;

                foreach ($cart['items'] as $variantId => $item) {

                    $variant = Variant::with('product')->findOrFail($variantId);

                    if ($variant->stock < $item['qty']) {
                        throw new \Exception("Only {$variant->stock} left for {$variant->product->name}");
                    }

                    $totalPrice += $variant->price * $item['qty'];
                }

                $order = Order::create([
                    'user_id' => Auth::id(),
                    'total_price' => $totalPrice
                ]);

                foreach ($cart['items'] as $variantId => $item) {

                    $variant = Variant::findOrFail($variantId);

                    DB::table('order_product')->insert([
                        'order_id' => $order->id,
                        'product_id' => $item['product_id'],
                        'variant_id' => $variantId,
                        'quantity' => $item['qty'],
                        'price_at_purchase' => $variant->price
                    ]);

                    $variant->decrement('stock', $item['qty']);
                }
                session()->forget('cart');
            });

            return redirect()->route('orders')->with('success', 'Order placed successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
}
