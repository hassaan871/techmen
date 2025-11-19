<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    public function getOrders()
    {
        $orders = Order::with(['products', 'variants'])
            ->where('user_id', Auth::user()->id)
            ->get();
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

    public function manageOrders()
    {
        $sellerId = Auth::id();

        // Get all variant IDs belonging to this seller
        $sellerVariantIds = Variant::whereHas('product', function ($query) use ($sellerId) {
            $query->where('seller_id', $sellerId);
        })->pluck('id')->toArray();

        if (empty($sellerVariantIds)) {
            return view('manage-orders.index', ['orders' => collect()]);
        }

        // Get orders that contain these variants
        $orderIds = DB::table('order_product')
            ->whereIn('variant_id', $sellerVariantIds)
            ->pluck('order_id')
            ->unique();

        if ($orderIds->isEmpty()) {
            return view('manage-orders.index', ['orders' => collect()]);
        }

        // Load orders with products and their pivot data
        $orders = Order::whereIn('id', $orderIds)
            ->with(['products' => function ($query) {
                $query->withPivot('variant_id', 'quantity', 'price_at_purchase');
            }])
            ->orderBy('created_at', 'desc')
            ->get();

        return view('manage-orders.index', compact('orders', 'sellerVariantIds'));
    }

    public function update(Request $request)
    {
        // Validate input
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required|in:processing,processed,out for delivery,delivered,canceled'
        ]);

        // Update order status
        $order = Order::findOrFail($request->order_id);
        $order->status = $request->status;
        $order->save();

        return back()->with('success', 'Order status updated successfully!');
    }
}
