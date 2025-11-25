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

    /* Product Cards */
    .product-card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        transition: all 0.3s ease;
        overflow: hidden;
        height: 100%;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 1rem 2rem rgba(102, 126, 234, 0.2);
    }

    .product-card .card-body {
        flex: 1;
        padding: 1.5rem;
    }

    .product-card .card-title {
        color: var(--secondary-color);
        font-weight: 700;
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
    }

    .product-card .card-subtitle {
        color: #6c757d;
        font-weight: 600;
        font-size: 0.95rem;
        margin-bottom: 1rem;
    }

    .product-card .card-text {
        color: #495057;
        font-size: 0.9rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    /* Variant Section */
    .variant-header {
        background: var(--primary-gradient);
        color: white;
        padding: 0.75rem 1rem;
        border-radius: 0.75rem;
        font-weight: 600;
        font-size: 1rem;
        margin-bottom: 1rem;
        display: flex;
        align-items: center;
        box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
    }

    .variant-header i {
        margin-right: 0.5rem;
    }

    .variant-details {
        background: #f8f9fa;
        border-radius: 0.75rem;
        padding: 1rem;
        margin-bottom: 1rem;
    }

    .variant-item {
        display: flex;
        justify-content: space-between;
        padding: 0.5rem 0;
        border-bottom: 1px solid #e9ecef;
    }

    .variant-item:last-child {
        border-bottom: none;
    }

    .variant-item strong {
        color: var(--secondary-color);
        font-weight: 600;
        font-size: 0.9rem;
    }

    .variant-item span {
        color: #495057;
        font-size: 0.9rem;
    }

    .price-badge {
        background: var(--primary-gradient);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 2rem;
        font-weight: 700;
        font-size: 1.1rem;
        display: inline-block;
        box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
    }

    .stock-badge {
        background: #28a745;
        color: white;
        padding: 0.25rem 0.75rem;
        border-radius: 1rem;
        font-weight: 600;
        font-size: 0.85rem;
        display: inline-block;
    }

    .stock-badge.low-stock {
        background: #ffc107;
    }

    .stock-badge.out-of-stock {
        background: #dc3545;
    }

    /* Buttons */
    .btn-edit {
        background: var(--primary-gradient);
        border: none;
        border-radius: 0.75rem;
        padding: 0.5rem 1.5rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
        width: 100%;
        margin-bottom: 0.5rem;
    }

    .btn-edit:hover {
        transform: translateY(-2px);
        box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.4);
        color: white;
    }

    .btn-delete {
        background: #dc3545;
        border: none;
        border-radius: 0.75rem;
        padding: 0.5rem 1.5rem;
        font-weight: 600;
        color: white;
        transition: all 0.3s ease;
        box-shadow: 0 0.25rem 0.5rem rgba(220, 53, 69, 0.3);
    }

    .btn-delete:hover {
        background: #c82333;
        transform: translateY(-2px);
        box-shadow: 0 0.5rem 1rem rgba(220, 53, 69, 0.4);
        color: white;
    }

    .card-footer {
        background: white;
        border-top: 2px solid #f8f9fa;
        padding: 1rem 1.5rem;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        background: white;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
    }

    .empty-state i {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 1.5rem;
    }

    .empty-state h3 {
        color: var(--secondary-color);
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .empty-state p {
        color: #6c757d;
        margin-bottom: 1.5rem;
    }

    .btn-add-product {
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

    .btn-add-product:hover {
        transform: translateY(-2px);
        box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.4);
        color: white;
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

    .product-card {
        animation: fadeInUp 0.6s ease-out;
    }

    .product-card:nth-child(2) {
        animation-delay: 0.1s;
    }

    .product-card:nth-child(3) {
        animation-delay: 0.2s;
    }

    .product-card:nth-child(4) {
        animation-delay: 0.3s;
    }
</style>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="mb-3">
                    <i class="bi bi-box-seam me-3"></i>Your Products
                </h1>
                <p class="lead mb-0">Manage your product listings and track inventory</p>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    <div class="row">
        @forelse ($products as $product)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card product-card">
                <div class="card-body">
                    <h5 class="card-title">
                        <i class="bi bi-laptop me-2"></i>{{ $product->name }}
                    </h5>
                    <h6 class="card-subtitle">
                        <i class="bi bi-tag me-1"></i>{{ $product->brand }} - {{ $product->model }}
                    </h6>
                    <p class="card-text">{{ $product->description }}</p>

                    @foreach ($product->variants as $variant)
                    <div class="variant-header">
                        <i class="bi bi-gear"></i>Variant Specifications
                    </div>

                    <div class="variant-details">
                        <div class="variant-item">
                            <strong><i class="bi bi-cpu me-2"></i>Processor:</strong>
                            <span>{{ $variant->processor }}</span>
                        </div>
                        <div class="variant-item">
                            <strong><i class="bi bi-memory me-2"></i>RAM:</strong>
                            <span>{{ $variant->ram }}</span>
                        </div>
                        <div class="variant-item">
                            <strong><i class="bi bi-device-hdd me-2"></i>Storage:</strong>
                            <span>{{ $variant->storage }}</span>
                        </div>
                        <div class="variant-item">
                            <strong><i class="bi bi-display me-2"></i>Display:</strong>
                            <span>{{ $variant->display }}</span>
                        </div>
                        <div class="variant-item">
                            <strong><i class="bi bi-gpu-card me-2"></i>Graphics:</strong>
                            <span>{{ $variant->graphics }}</span>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <div class="price-badge">
                            <i class="bi bi-currency-dollar me-1"></i>{{ $variant->price }}
                        </div>
                        <div class="stock-badge {{ $variant->stock < 5 ? 'low-stock' : '' }} {{ $variant->stock == 0 ? 'out-of-stock' : '' }}">
                            <i class="bi bi-box me-1"></i>Stock: {{ $variant->stock }}
                        </div>
                    </div>

                    <a href="{{ route('products.variants.edit', ['product' => $product->id, 'variant' => $variant->id]) }}" class="btn btn-edit">
                        <i class="bi bi-pencil-square me-2"></i>Edit Variant
                    </a>
                    @endforeach
                </div>

                <div class="card-footer">
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this product?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete w-100">
                            <i class="bi bi-trash me-2"></i>Delete Product
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <div class="col-12">
            <div class="empty-state">
                <i class="bi bi-inbox"></i>
                <h3>No Products Found</h3>
                <p>You haven't added any products yet. Start by adding your first product!</p>
                <a href="/product/add" class="btn-add-product">
                    <i class="bi bi-plus-circle me-2"></i>Add Your First Product
                </a>
            </div>
        </div>
        @endforelse
    </div>
</div>

<x-footer/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>