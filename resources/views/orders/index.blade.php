<x-navbar/>

<div class="container py-5">
    <div class="row mb-4">
        <div class="col">
            <h2 class="fw-bold text-primary">My Orders</h2>
            <p class="text-muted">View and track your order history</p>
        </div>
    </div>

    @forelse ($orders as $order)
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header bg-primary bg-gradient text-white d-flex justify-content-between align-items-center">
                <div>
                    <h5 class="mb-0">Order #{{ $order->id }}</h5>
                    <small>{{ $order->created_at->format('d M Y - h:i A') }}</small>
                </div>
                <div class="text-end">
                    <span class="badge 
                        @if($order->status === 'completed') bg-success
                        @elseif($order->status === 'pending') bg-warning text-dark
                        @elseif($order->status === 'processing') bg-info
                        @elseif($order->status === 'cancelled') bg-danger
                        @else bg-secondary
                        @endif
                        fs-6 px-3 py-2">
                        {{ ucfirst($order->status) }}
                    </span>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Variant</th>
                                <th scope="col" class="text-center">Quantity</th>
                                <th scope="col" class="text-end">Price</th>
                                <th scope="col" class="text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($order->products as $item)
                                @php
                                    $variant = \App\Models\Variant::find($item->pivot->variant_id);
                                    $subtotal = $item->pivot->quantity * $item->pivot->price_at_purchase;
                                @endphp
                                <tr>
                                    <td>
                                        <strong class="text-dark">{{ $item->name }}</strong>
                                    </td>
                                    <td>
                                        <span class="badge bg-light text-dark border">
                                            {{ $variant->name ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-secondary">{{ $item->pivot->quantity }}</span>
                                    </td>
                                    <td class="text-end">
                                        Rs. {{ number_format($item->pivot->price_at_purchase) }}
                                    </td>
                                    <td class="text-end">
                                        <strong>Rs. {{ number_format($subtotal) }}</strong>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer bg-light d-flex justify-content-between align-items-center">
                <span class="text-muted">
                    <i class="bi bi-calendar-event"></i> Ordered on {{ $order->created_at->format('d M Y') }}
                </span>
                <h5 class="mb-0 text-primary">
                    Total: <strong>Rs. {{ number_format($order->total_price) }}</strong>
                </h5>
            </div>
        </div>

    @empty
        <div class="alert alert-info d-flex align-items-center" role="alert">
            <i class="bi bi-info-circle-fill me-2"></i>
            <div>
                No orders found. Start shopping to see your orders here!
            </div>
        </div>
    @endforelse
</div>