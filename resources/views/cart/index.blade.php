<x-navbar />

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

    /* Cards */
    .card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        overflow: hidden;
    }

    /* Cart Table Card */
    .cart-table-card {
        background: white;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        overflow: hidden;
        margin-bottom: 2rem;
    }

    /* Table Styling */
    .table {
        margin-bottom: 0;
    }

    .table thead {
        background: var(--primary-gradient);
        color: white;
    }

    .table thead th {
        border: none;
        padding: 1rem;
        font-weight: 600;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }

    .table tbody td {
        padding: 1.25rem 1rem;
        vertical-align: middle;
        border-bottom: 1px solid #e9ecef;
    }

    .table tbody tr:last-child td {
        border-bottom: none;
    }

    .table tbody tr {
        transition: all 0.3s ease;
    }

    .table tbody tr:hover {
        background: rgba(102, 126, 234, 0.03);
    }

    /* Product Name */
    .product-name {
        color: var(--secondary-color);
        font-weight: 700;
        font-size: 1.05rem;
    }

    .variant-info {
        color: #6c757d;
        font-size: 0.9rem;
        font-weight: 500;
    }

    /* Price Styling */
    .price-text {
        color: var(--primary-color);
        font-weight: 700;
        font-size: 1.05rem;
    }

    .subtotal-text {
        color: var(--secondary-color);
        font-weight: 700;
        font-size: 1.1rem;
    }

    /* Quantity Controls */
    .qty-control {
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }

    .qty-control .btn {
        width: 35px;
        height: 35px;
        padding: 0;
        border-radius: 0.5rem;
        font-weight: 700;
        font-size: 1.1rem;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s ease;
    }

    .qty-control .btn-secondary {
        background: #e9ecef;
        border: 2px solid #e9ecef;
        color: #495057;
    }

    .qty-control .btn-secondary:hover {
        background: var(--primary-gradient);
        border-color: transparent;
        color: white;
        transform: scale(1.1);
    }

    .qty-control input {
        width: 50px;
        height: 35px;
        text-align: center;
        border: 2px solid #e9ecef;
        border-radius: 0.5rem;
        font-weight: 700;
        color: var(--secondary-color);
    }

    /* Remove Button */
    .btn-remove {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        border: none;
        border-radius: 0.5rem;
        padding: 0.5rem 1rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 0.25rem 0.5rem rgba(220, 53, 69, 0.3);
    }

    .btn-remove:hover {
        transform: translateY(-2px);
        box-shadow: 0 0.5rem 1rem rgba(220, 53, 69, 0.4);
        color: white;
    }

    /* Cart Summary Card */
    .cart-summary {
        background: white;
        border-radius: 1rem;
        padding: 2rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem;
    }

    .cart-summary .summary-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 1rem 0;
        border-bottom: 2px solid #e9ecef;
    }

    .cart-summary .summary-row:last-child {
        border-bottom: none;
        padding-top: 1.5rem;
        margin-top: 0.5rem;
        border-top: 3px solid var(--primary-color);
    }

    .cart-summary .summary-label {
        font-size: 1.1rem;
        font-weight: 600;
        color: #495057;
    }

    .cart-summary .summary-value {
        font-size: 1.1rem;
        font-weight: 700;
        color: var(--secondary-color);
    }

    .cart-summary .total-label {
        font-size: 1.3rem;
        font-weight: 700;
        color: var(--secondary-color);
    }

    .cart-summary .total-value {
        font-size: 1.5rem;
        font-weight: 700;
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* Checkout Button */
    .btn-checkout {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        border: none;
        border-radius: 2rem;
        padding: 1rem 3rem;
        font-weight: 700;
        font-size: 1.1rem;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 0.5rem 1rem rgba(40, 167, 69, 0.3);
        text-transform: uppercase;
        letter-spacing: 0.5px;
    }

    .btn-checkout:hover {
        transform: translateY(-3px);
        box-shadow: 0 0.75rem 1.5rem rgba(40, 167, 69, 0.4);
        color: white;
    }

    .btn-checkout:active {
        transform: translateY(0);
    }

    /* Empty Cart */
    .empty-cart {
        background: white;
        border-radius: 1rem;
        padding: 4rem 2rem;
        text-align: center;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
    }

    .empty-cart i {
        font-size: 5rem;
        color: #cbd5e1;
        margin-bottom: 1.5rem;
    }

    .empty-cart h4 {
        color: #495057;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .empty-cart p {
        color: #6c757d;
        font-size: 1.05rem;
        margin-bottom: 2rem;
    }

    .btn-shop {
        background: var(--primary-gradient);
        border: none;
        border-radius: 2rem;
        padding: 0.75rem 2rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
        text-decoration: none;
        display: inline-block;
    }

    .btn-shop:hover {
        transform: translateY(-2px);
        box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.4);
        color: white;
    }

    /* Alert Styling */
    .alert-error {
        background: linear-gradient(135deg, #fee2e2 0%, #fecaca 100%);
        border: 2px solid #dc3545;
        border-radius: 1rem;
        padding: 1.25rem;
        margin-bottom: 2rem;
        color: #991b1b;
        font-weight: 600;
        box-shadow: 0 0.25rem 0.5rem rgba(220, 53, 69, 0.15);
    }

    .alert-error i {
        margin-right: 0.5rem;
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

    .cart-table-card, .cart-summary {
        animation: fadeInUp 0.6s ease-out;
    }
</style>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="mb-3">
                    <i class="bi bi-cart3 me-3"></i>Shopping Cart
                </h1>
                <p class="lead mb-0">Review your items and proceed to checkout</p>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">

    @if (session('error'))
        <div class="alert-error">
            <i class="bi bi-exclamation-triangle-fill"></i>
            {{ session('error') }}
        </div>
    @endif

    @php
        $totalQty = 0;
        $totalPrice = 0;
    @endphp

    @if (count($items) === 0)
        <div class="empty-cart">
            <i class="bi bi-cart-x"></i>
            <h4>Your Cart is Empty</h4>
            <p>Looks like you haven't added any items to your cart yet.</p>
            <a href="{{ route('home') }}" class="btn-shop">
                <i class="bi bi-shop me-2"></i>Continue Shopping
            </a>
        </div>
    @else

        <div class="cart-table-card">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Variant</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($items as $key => $item)

                            @php
                                // Fetch latest variant price (runtime calculation)
                                $variant = App\Models\Variant::find($item['variant_id']);
                                $latestPrice = $variant ? $variant->price : $item['price'];

                                $subtotal = $latestPrice * $item['qty'];
                                $totalQty += $item['qty'];
                                $totalPrice += $subtotal;
                            @endphp

                            <tr>
                                <td>
                                    <div class="product-name">{{ $item['name'] }}</div>
                                </td>

                                <td>
                                    <div class="variant-info">{{ $item['variant'] }}</div>
                                </td>

                                <td>
                                    <span class="price-text">Rs. {{ number_format($latestPrice) }}</span>
                                </td>

                                <td>
                                    <form action="{{ route('cart.update', $key) }}" method="POST" class="qty-control">
                                        @csrf
                                        @method('PUT')

                                        <button type="submit" name="action" value="decrease" class="btn btn-secondary">−</button>

                                        <input type="text" name="qty" value="{{ $item['qty'] }}" class="form-control" readonly>

                                        <button type="submit" name="action" value="increase" class="btn btn-secondary">+</button>
                                    </form>
                                </td>

                                <td>
                                    <span class="subtotal-text">Rs. {{ number_format($subtotal) }}</span>
                                </td>

                                <td>
                                    <form action="{{ route('cart.remove', $key) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-remove">
                                            <i class="bi bi-trash me-1"></i>Remove
                                        </button>
                                    </form>
                                </td>
                            </tr>

                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Cart Summary -->
        <div class="row">
            <div class="col-lg-6 ms-auto">
                <div class="cart-summary">
                    <div class="summary-row">
                        <span class="summary-label">Total Items:</span>
                        <span class="summary-value">{{ $totalQty }}</span>
                    </div>
                    <div class="summary-row">
                        <span class="total-label">Total Amount:</span>
                        <span class="total-value">Rs. {{ number_format($totalPrice) }}</span>
                    </div>
                </div>

                <!-- Checkout Button -->
                <div class="text-end">
                    <form action="{{ route('orders.place') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn-checkout">
                            <i class="bi bi-check-circle me-2"></i>Place Order
                        </button>
                    </form>
                </div>
            </div>
        </div>

    @endif

</div>

<x-footer/>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>