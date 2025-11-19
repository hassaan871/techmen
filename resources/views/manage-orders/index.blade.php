<x-navbar/>

<div class="container py-5">
    <div class="row mb-5">
        <div class="col-12">
            <div class="card border-0 shadow-lg bg-gradient" style="background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);">
                <div class="card-body text-white p-5">
                    <div class="d-flex align-items-center justify-content-between">
                        <div>
                            <h1 class="display-4 fw-bold mb-2">
                                <i class="bi bi-box-seam me-3"></i>Order Management
                            </h1>
                            <p class="lead mb-0 opacity-75">Track and manage all your orders in one place</p>
                        </div>
                        <div class="text-end d-none d-lg-block">
                            <div class="bg-white bg-opacity-25 rounded-3 p-4 backdrop-blur">
                                <h2 class="display-6 fw-bold mb-0">{{ $orders->count() }}</h2>
                                <small class="text-uppercase">Total Orders</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @forelse ($orders as $order)
        @php
            // Filter only items that belong to this seller
            $sellerItems = $order->products->filter(function($item) use ($sellerVariantIds) {
                return in_array($item->pivot->variant_id, $sellerVariantIds);
            });
        @endphp

        @if($sellerItems->isNotEmpty())
            <div class="card mb-4 border-0 shadow-lg hover-lift" style="transition: transform 0.3s ease, box-shadow 0.3s ease;">
                <!-- Order Header with Enhanced Design -->
                <div class="card-header border-0 bg-white pt-4 pb-3">
                    <div class="row align-items-center">
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <div class="d-flex align-items-center">
                                <div class="bg-primary bg-opacity-10 rounded-circle p-3 me-3">
                                    <i class="bi bi-receipt-cutoff text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="mb-1 fw-bold">Order #{{ $order->id }}</h5>
                                    <small class="text-muted">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $order->created_at->format('d M Y') }} at {{ $order->created_at->format('h:i A') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 mb-3 mb-lg-0">
                            <div class="text-lg-center">
                                <span class="badge rounded-pill px-4 py-2 fs-6
                                    @if($order->status === 'delivered') bg-success
                                    @elseif($order->status === 'processing') bg-warning text-dark
                                    @elseif($order->status === 'processed') bg-info
                                    @elseif($order->status === 'out for delivery') bg-primary
                                    @else bg-danger
                                    @endif">
                                    <i class="bi 
                                        @if($order->status === 'delivered') bi-check-circle-fill
                                        @elseif($order->status === 'processing') bi-hourglass-split
                                        @elseif($order->status === 'out for delivery') bi-truck
                                        @else bi-x-circle-fill
                                        @endif me-2"></i>
                                    {{ ucfirst($order->status) }}
                                </span>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="input-group input-group-lg">
                                    <label class="input-group-text bg-light border-0">
                                        <i class="bi bi-arrow-repeat text-primary"></i>
                                    </label>
                                    <select name="status" class="form-select border-0 bg-light fw-semibold" onchange="this.form.submit()">
                                        @foreach(['processing','processed','out for delivery','delivered','canceled'] as $status)
                                            <option value="{{ $status }}" {{ $order->status === $status ? 'selected' : '' }}>
                                                {{ ucfirst($status) }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Order Items Table with Enhanced Styling -->
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="border-0 text-uppercase small fw-bold text-muted ps-4 py-3">Product Details</th>
                                    <th class="border-0 text-uppercase small fw-bold text-muted py-3">Specifications</th>
                                    <th class="border-0 text-uppercase small fw-bold text-muted text-center py-3">Quantity</th>
                                    <th class="border-0 text-uppercase small fw-bold text-muted text-end py-3">Unit Price</th>
                                    <th class="border-0 text-uppercase small fw-bold text-muted text-end pe-4 py-3">Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sellerItems as $item)
                                    @php
                                        $variant = \App\Models\Variant::find($item->pivot->variant_id);
                                        $subtotal = $item->pivot->quantity * $item->pivot->price_at_purchase;
                                    @endphp
                                    <tr class="border-bottom">
                                        <td class="ps-4 py-4">
                                            <div class="d-flex align-items-center">
                                                <div class="bg-primary bg-opacity-10 rounded p-2 me-3">
                                                    <i class="bi bi-laptop text-primary fs-5"></i>
                                                </div>
                                                <div>
                                                    <h6 class="mb-0 fw-bold">{{ $item->name }}</h6>
                                                    <small class="text-muted">SKU: PRD-{{ $item->id }}</small>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="py-4">
                                            @if($variant)
                                                <div class="d-flex flex-wrap gap-2">
                                                    <span class="badge bg-light text-dark border px-3 py-2">
                                                        <i class="bi bi-cpu me-1"></i>{{ $variant->processor }}
                                                    </span>
                                                    <span class="badge bg-light text-dark border px-3 py-2">
                                                        <i class="bi bi-memory me-1"></i>{{ $variant->ram }}
                                                    </span>
                                                    <span class="badge bg-light text-dark border px-3 py-2">
                                                        <i class="bi bi-device-hdd me-1"></i>{{ $variant->storage }}
                                                    </span>
                                                </div>
                                            @else
                                                <span class="badge bg-warning text-dark px-3 py-2">
                                                    <i class="bi bi-exclamation-triangle me-1"></i>Variant not found
                                                </span>
                                            @endif
                                        </td>
                                        <td class="text-center py-4">
                                            <span class="badge bg-primary bg-opacity-10 text-primary fs-6 px-3 py-2 rounded-pill">
                                                {{ $item->pivot->quantity }}x
                                            </span>
                                        </td>
                                        <td class="text-end py-4">
                                            <span class="text-muted fw-semibold">Rs. {{ number_format($item->pivot->price_at_purchase, 2) }}</span>
                                        </td>
                                        <td class="text-end pe-4 py-4">
                                            <span class="fw-bold text-dark fs-5">Rs. {{ number_format($subtotal, 2) }}</span>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Order Footer with Total -->
                <div class="card-footer border-0 bg-light bg-gradient">
                    <div class="row align-items-center py-3">
                        <div class="col-md-6 mb-3 mb-md-0">
                            <div class="d-flex align-items-center text-muted">
                                <i class="bi bi-info-circle me-2"></i>
                                <small>Order placed on {{ $order->created_at->format('l, F j, Y') }}</small>
                            </div>
                        </div>
                        <div class="col-md-6">
                            @php
                                $sellerTotal = $sellerItems->sum(function($item) {
                                    return $item->pivot->quantity * $item->pivot->price_at_purchase;
                                });
                            @endphp
                            <div class="bg-white rounded-3 shadow-sm p-3 d-flex justify-content-between align-items-center">
                                <span class="text-uppercase small fw-bold text-muted">Your Total:</span>
                                <span class="display-6 fw-bold text-primary mb-0">Rs. {{ number_format($sellerTotal, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    @empty
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card border-0 shadow-lg text-center py-5">
                    <div class="card-body">
                        <div class="bg-primary bg-opacity-10 rounded-circle d-inline-flex p-4 mb-4">
                            <i class="bi bi-inbox display-1 text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3">No Orders Yet</h3>
                        <p class="text-muted mb-4">You haven't received any orders. When customers purchase your products, they'll appear here.</p>
                        <a href="#" class="btn btn-primary btn-lg px-5 rounded-pill">
                            <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
</div>
