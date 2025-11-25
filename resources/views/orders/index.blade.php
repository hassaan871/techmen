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
        padding: 2.5rem 0;
        margin-bottom: 2.5rem;
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

    .page-header h2 {
        position: relative;
        z-index: 1;
        font-weight: 700;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 0.5rem;
    }

    .page-header p {
        position: relative;
        z-index: 1;
        opacity: 0.95;
        margin-bottom: 0;
    }

    /* Order Cards */
    .order-card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        overflow: hidden;
        margin-bottom: 2rem;
    }

    .order-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(102, 126, 234, 0.15);
    }

    .order-card-header {
        background: var(--primary-gradient) !important;
        border: none;
        padding: 1.5rem;
        color: white;
    }

    .order-card-header h5 {
        font-weight: 700;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        margin-bottom: 0.25rem;
    }

    .order-card-header small {
        opacity: 0.9;
    }

    /* Status Badges */
    .status-badge {
        font-size: 0.9rem;
        font-weight: 600;
        padding: 0.5rem 1.25rem;
        border-radius: 2rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.15);
        transition: all 0.3s ease;
    }

    .status-badge:hover {
        transform: scale(1.05);
    }

    /* Table Styling */
    .table-responsive {
        border-radius: 0;
    }

    .table {
        margin-bottom: 0;
    }

    .table thead th {
        background: #f8f9fa;
        color: var(--secondary-color);
        font-weight: 700;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
        border-bottom: 2px solid #dee2e6;
        padding: 1rem;
    }

    .table tbody tr {
        transition: all 0.3s ease;
    }

    .table tbody tr:hover {
        background: rgba(102, 126, 234, 0.05);
        transform: scale(1.01);
    }

    .table tbody td {
        padding: 1rem;
        vertical-align: middle;
        border-bottom: 1px solid #f0f0f0;
    }

    .product-name {
        font-weight: 600;
        color: #2d3748;
    }

    /* Variant Badge */
    .variant-badge {
        background: #f8f9fa;
        border: 2px solid #e9ecef;
        color: #495057;
        padding: 0.35rem 0.75rem;
        border-radius: 0.5rem;
        font-weight: 600;
        font-size: 0.85rem;
        transition: all 0.3s ease;
    }

    .variant-badge:hover {
        border-color: var(--primary-color);
        background: rgba(102, 126, 234, 0.1);
    }

    /* Quantity Badge */
    .quantity-badge {
        background: var(--primary-gradient);
        color: white;
        padding: 0.35rem 0.75rem;
        border-radius: 0.5rem;
        font-weight: 600;
        box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
    }

    /* Card Footer */
    .order-card-footer {
        background: #f8f9fa;
        border: none;
        padding: 1.25rem 1.5rem;
    }

    .order-total {
        color: var(--secondary-color);
        font-weight: 700;
        font-size: 1.25rem;
    }

    .order-date {
        color: #6c757d;
        font-weight: 500;
    }

    /* Empty State */
    .empty-orders {
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        border: 2px solid rgba(102, 126, 234, 0.2);
        border-radius: 1rem;
        padding: 3rem 2rem;
        text-align: center;
        animation: fadeInUp 0.6s ease-out;
    }

    .empty-orders i {
        font-size: 4rem;
        color: var(--primary-color);
        margin-bottom: 1rem;
        display: block;
    }

    .empty-orders h4 {
        color: var(--secondary-color);
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .empty-orders p {
        color: #6c757d;
        margin-bottom: 0;
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

    .order-card {
        animation: fadeInUp 0.6s ease-out;
    }

    .order-card:nth-child(2) {
        animation-delay: 0.1s;
    }

    .order-card:nth-child(3) {
        animation-delay: 0.2s;
    }

    .order-card:nth-child(4) {
        animation-delay: 0.3s;
    }

    /* Icon Styling */
    .bi {
        vertical-align: -0.125em;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .page-header {
            padding: 2rem 0;
        }

        .order-card-header {
            padding: 1.25rem;
        }

        .status-badge {
            font-size: 0.8rem;
            padding: 0.4rem 1rem;
        }

        .table thead th {
            font-size: 0.75rem;
            padding: 0.75rem 0.5rem;
        }

        .table tbody td {
            padding: 0.75rem 0.5rem;
            font-size: 0.9rem;
        }
    }
</style>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col">
                <h2 class="mb-2">
                    <i class="bi bi-receipt-cutoff me-2"></i>My Orders
                </h2>
                <p>View and track your order history</p>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    @forelse ($orders as $order)
        <div class="card order-card">
            <div class="card-header order-card-header d-flex justify-content-between align-items-center flex-wrap gap-3">
                <div>
                    <h5>
                        <i class="bi bi-hash"></i>Order {{ $order->id }}
                    </h5>
                    <small>
                        <i class="bi bi-clock me-1"></i>{{ $order->created_at->format('d M Y - h:i A') }}
                    </small>
                </div>
                <div class="text-end">
                    <span class="status-badge
                        @if($order->status === 'completed') bg-success
                        @elseif($order->status === 'pending') bg-warning text-dark
                        @elseif($order->status === 'processing') bg-info
                        @elseif($order->status === 'cancelled') bg-danger
                        @else bg-secondary
                        @endif">
                        <i class="bi 
                            @if($order->status === 'completed') bi-check-circle-fill
                            @elseif($order->status === 'pending') bi-hourglass-split
                            @elseif($order->status === 'processing') bi-arrow-repeat
                            @elseif($order->status === 'cancelled') bi-x-circle-fill
                            @else bi-question-circle-fill
                            @endif me-1"></i>
                        {{ ucfirst($order->status) }}
                    </span>
                </div>
            </div>

            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th scope="col">
                                    <i class="bi bi-box-seam me-1"></i>Product
                                </th>
                                <th scope="col">
                                    <i class="bi bi-tag me-1"></i>Variant
                                </th>
                                <th scope="col" class="text-center">
                                    <i class="bi bi-123 me-1"></i>Quantity
                                </th>
                                <th scope="col" class="text-end">
                                    <i class="bi bi-cash me-1"></i>Price
                                </th>
                                <th scope="col" class="text-end">
                                    <i class="bi bi-calculator me-1"></i>Subtotal
                                </th>
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
                                        <strong class="product-name">{{ $item->name }}</strong>
                                    </td>
                                    <td>
                                        <span class="variant-badge">
                                            {{ $variant->name ?? 'N/A' }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <span class="quantity-badge">{{ $item->pivot->quantity }}</span>
                                    </td>
                                    <td class="text-end">
                                        <strong>Rs. {{ number_format($item->pivot->price_at_purchase) }}</strong>
                                    </td>
                                    <td class="text-end">
                                        <strong class="text-primary">Rs. {{ number_format($subtotal) }}</strong>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="card-footer order-card-footer d-flex justify-content-between align-items-center flex-wrap gap-3">
                <span class="order-date">
                    <i class="bi bi-calendar-event me-1"></i>
                    Ordered on {{ $order->created_at->format('d M Y') }}
                </span>
                <h5 class="order-total mb-0">
                    <i class="bi bi-currency-rupee me-1"></i>
                    Total: Rs. {{ number_format($order->total_price) }}
                </h5>
            </div>
        </div>

    @empty
        <div class="empty-orders">
            <i class="bi bi-cart-x"></i>
            <h4>No Orders Yet</h4>
            <p>Start shopping to see your orders here!</p>
        </div>
    @endforelse
</div>

<x-footer/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>