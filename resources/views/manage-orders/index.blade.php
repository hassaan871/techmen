<x-navbar/>

<style>
    :root {
        --primary-gradient: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        --primary-color: #667eea;
        --secondary-color: #764ba2;
    }

    body {
        background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
        min-height: 100vh;
    }

    /* Page Header */
    .page-header {
        background: var(--primary-gradient);
        color: white;
        padding: 3rem 0;
        margin-bottom: 3rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        position: relative;
        overflow: hidden;
    }

    .page-header::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: url("data:image/svg+xml,%3Csvg width='60' height='60' viewBox='0 0 60 60' xmlns='http://www.w3.org/2000/svg'%3E%3Cg fill='none' fill-rule='evenodd'%3E%3Cg fill='%23ffffff' fill-opacity='0.05'%3E%3Cpath d='M36 34v-4h-2v4h-4v2h4v4h2v-4h4v-2h-4zm0-30V0h-2v4h-4v2h4v4h2V6h4V4h-4zM6 34v-4H4v4H0v2h4v4h2v-4h4v-2H6zM6 4V0H4v4H0v2h4v4h2V6h4V4H6z'/%3E%3C/g%3E%3C/g%3E%3C/svg%3E");
        opacity: 0.3;
    }

    .page-header h1 {
        position: relative;
        z-index: 1;
        font-weight: 700;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .page-header p {
        position: relative;
        z-index: 1;
        opacity: 0.95;
    }

    .stats-badge {
        background: rgba(255, 255, 255, 0.2);
        backdrop-filter: blur(10px);
        border-radius: 1rem;
        padding: 1.5rem;
        position: relative;
        z-index: 1;
    }

    /* Cards */
    .card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(102, 126, 234, 0.15);
    }

    /* Order Header */
    .order-header {
        background: white;
        padding: 1.5rem;
        border-bottom: 2px solid #f8f9fa;
    }

    .order-id-badge {
        background: rgba(102, 126, 234, 0.1);
        border-radius: 50%;
        width: 50px;
        height: 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .order-title {
        color: var(--secondary-color);
        font-weight: 700;
        margin-bottom: 0.25rem;
    }

    /* Status Badges */
    .status-badge {
        padding: 0.5rem 1.5rem;
        border-radius: 2rem;
        font-weight: 600;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .status-badge:hover {
        transform: scale(1.05);
    }

    /* Form Controls */
    .form-select {
        border: 2px solid #e9ecef;
        border-radius: 0.75rem;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        font-weight: 600;
    }

    .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.15);
    }

    .input-group-text {
        border: 2px solid #e9ecef;
        border-right: none;
        border-radius: 0.75rem 0 0 0.75rem;
        background: #f8f9fa;
    }

    .input-group .form-select {
        border-left: none;
        border-radius: 0 0.75rem 0.75rem 0;
    }

    /* Table Styling */
    .table-responsive {
        border-radius: 0.5rem;
    }

    .table thead th {
        background: #f8f9fa;
        color: #6c757d;
        font-weight: 700;
        font-size: 0.75rem;
        text-transform: uppercase;
        letter-spacing: 0.5px;
        padding: 1rem;
        border: none;
    }

    .table tbody tr {
        transition: all 0.3s ease;
        border-bottom: 1px solid #f0f0f0;
    }

    .table tbody tr:hover {
        background: rgba(102, 126, 234, 0.03);
    }

    .table tbody td {
        padding: 1.25rem 1rem;
        vertical-align: middle;
        border: none;
    }

    .product-icon {
        background: rgba(102, 126, 234, 0.1);
        border-radius: 0.5rem;
        width: 45px;
        height: 45px;
        display: flex;
        align-items: center;
        justify-content: center;
        color: var(--primary-color);
    }

    .spec-badge {
        background: white;
        border: 2px solid #e9ecef;
        color: #495057;
        padding: 0.4rem 0.75rem;
        border-radius: 0.5rem;
        font-size: 0.85rem;
        font-weight: 600;
        transition: all 0.3s ease;
    }

    .spec-badge:hover {
        border-color: var(--primary-color);
        background: rgba(102, 126, 234, 0.05);
    }

    .quantity-badge {
        background: rgba(102, 126, 234, 0.1);
        color: var(--primary-color);
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-weight: 700;
        font-size: 0.95rem;
    }

    /* Order Footer */
    .order-footer {
        background: linear-gradient(to bottom, #f8f9fa 0%, #ffffff 100%);
        padding: 1.5rem;
        border-top: 2px solid #f0f0f0;
    }

    .total-box {
        background: white;
        border: 2px solid #e9ecef;
        border-radius: 0.75rem;
        padding: 1rem 1.5rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.05);
    }

    .total-label {
        color: #6c757d;
        font-size: 0.85rem;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .total-amount {
        color: var(--primary-color);
        font-size: 1.75rem;
        font-weight: 700;
    }

    /* Empty State */
    .empty-state {
        padding: 4rem 2rem;
    }

    .empty-icon {
        background: rgba(102, 126, 234, 0.1);
        width: 120px;
        height: 120px;
        border-radius: 50%;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-bottom: 2rem;
    }

    .btn-primary {
        background: var(--primary-gradient);
        border: none;
        border-radius: 2rem;
        padding: 0.75rem 2rem;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.4);
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card {
        animation: fadeInUp 0.6s ease-out;
    }

    .card:nth-child(2) {
        animation-delay: 0.1s;
    }

    .card:nth-child(3) {
        animation-delay: 0.2s;
    }
</style>

<div class="page-header">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <h1 class="mb-3">
                    <i class="bi bi-box-seam me-3"></i>Order Management
                </h1>
                <p class="lead mb-0">Track and manage all your orders in one place</p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
                <div class="stats-badge">
                    <h2 class="display-6 fw-bold mb-0">{{ $orders->count() }}</h2>
                    <small class="text-uppercase opacity-75">Total Orders</small>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    @forelse ($orders as $order)
        @php
            // Filter only items that belong to this seller
            $sellerItems = $order->products->filter(function($item) use ($sellerVariantIds) {
                return in_array($item->pivot->variant_id, $sellerVariantIds);
            });
        @endphp

        @if($sellerItems->isNotEmpty())
            <div class="card">
                <!-- Order Header -->
                <div class="order-header">
                    <div class="row align-items-center g-3">
                        <div class="col-lg-4">
                            <div class="d-flex align-items-center">
                                <div class="order-id-badge me-3">
                                    <i class="bi bi-receipt-cutoff text-primary fs-4"></i>
                                </div>
                                <div>
                                    <h5 class="order-title mb-1">Order #{{ $order->id }}</h5>
                                    <small class="text-muted">
                                        <i class="bi bi-calendar3 me-1"></i>
                                        {{ $order->created_at->format('d M Y') }} at {{ $order->created_at->format('h:i A') }}
                                    </small>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-lg-4 text-lg-center">
                            <span class="status-badge
                                @if($order->status === 'delivered') bg-success text-white
                                @elseif($order->status === 'processing') bg-warning text-dark
                                @elseif($order->status === 'processed') bg-info text-white
                                @elseif($order->status === 'out for delivery') bg-primary text-white
                                @else bg-danger text-white
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

                        <div class="col-lg-4">
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="input-group">
                                    <span class="input-group-text">
                                        <i class="bi bi-arrow-repeat text-primary"></i>
                                    </span>
                                    <select name="status" class="form-select" onchange="this.form.submit()">
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

                <!-- Order Items Table -->
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th>Product Details</th>
                                <th>Specifications</th>
                                <th class="text-center">Quantity</th>
                                <th class="text-end">Unit Price</th>
                                <th class="text-end">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sellerItems as $item)
                                @php
                                    $variant = \App\Models\Variant::find($item->pivot->variant_id);
                                    $subtotal = $item->pivot->quantity * $item->pivot->price_at_purchase;
                                @endphp
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="product-icon me-3">
                                                <i class="bi bi-laptop fs-5"></i>
                                            </div>
                                            <div>
                                                <h6 class="mb-0 fw-bold">{{ $item->name }}</h6>
                                                <small class="text-muted">SKU: PRD-{{ $item->id }}</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        @if($variant)
                                            <div class="d-flex flex-wrap gap-2">
                                                <span class="spec-badge">
                                                    <i class="bi bi-cpu me-1"></i>{{ $variant->processor }}
                                                </span>
                                                <span class="spec-badge">
                                                    <i class="bi bi-memory me-1"></i>{{ $variant->ram }}
                                                </span>
                                                <span class="spec-badge">
                                                    <i class="bi bi-device-hdd me-1"></i>{{ $variant->storage }}
                                                </span>
                                            </div>
                                        @else
                                            <span class="badge bg-warning text-dark">
                                                <i class="bi bi-exclamation-triangle me-1"></i>Variant not found
                                            </span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <span class="quantity-badge">
                                            {{ $item->pivot->quantity }}x
                                        </span>
                                    </td>
                                    <td class="text-end">
                                        <span class="text-muted fw-semibold">Rs. {{ number_format($item->pivot->price_at_purchase, 2) }}</span>
                                    </td>
                                    <td class="text-end">
                                        <span class="fw-bold text-dark fs-5">Rs. {{ number_format($subtotal, 2) }}</span>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <!-- Order Footer -->
                <div class="order-footer">
                    <div class="row align-items-center">
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
                            <div class="total-box d-flex justify-content-between align-items-center">
                                <span class="total-label">Your Total:</span>
                                <span class="total-amount">Rs. {{ number_format($sellerTotal, 2) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

    @empty
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body empty-state text-center">
                        <div class="empty-icon">
                            <i class="bi bi-inbox display-1 text-primary"></i>
                        </div>
                        <h3 class="fw-bold mb-3">No Orders Yet</h3>
                        <p class="text-muted mb-4">You haven't received any orders. When customers purchase your products, they'll appear here.</p>
                        <a href="#" class="btn btn-primary btn-lg px-5">
                            <i class="bi bi-arrow-left me-2"></i>Back to Dashboard
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforelse
</div>

<x-footer/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>