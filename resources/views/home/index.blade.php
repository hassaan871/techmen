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
        height: 100%;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(102, 126, 234, 0.15);
    }

    .card-title {
        color: var(--secondary-color);
        font-weight: 700;
        font-size: 1.25rem;
    }

    .card-subtitle {
        color: #6c757d;
        font-weight: 500;
        font-size: 0.95rem;
    }

    .card-text {
        color: #495057;
        line-height: 1.6;
    }

    /* List Group */
    .list-group-item {
        border: none;
        padding: 0.5rem 0;
        background: transparent;
        color: #495057;
        font-size: 0.9rem;
    }

    .list-group-item strong {
        color: var(--secondary-color);
        font-weight: 600;
    }

    /* Form Styling */
    .form-control, .form-select {
        border: 2px solid #e9ecef;
        border-radius: 0.75rem;
        padding: 0.75rem 1rem;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .form-control:focus, .form-select:focus {
        border-color: var(--primary-color);
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.15);
    }

    .form-control:hover, .form-select:hover {
        border-color: #cbd5e1;
    }

    /* Search Form */
    .search-wrapper {
        background: white;
        border-radius: 1rem;
        padding: 1.5rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        margin-bottom: 2rem;
    }

    /* Buttons */
    .btn-primary {
        background: var(--primary-gradient);
        border: none;
        border-radius: 0.75rem;
        padding: 0.75rem 1.5rem;
        font-weight: 600;
        transition: all 0.3s ease;
        box-shadow: 0 0.25rem 0.5rem rgba(102, 126, 234, 0.3);
    }

    .btn-primary:hover {
        transform: translateY(-2px);
        box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.4);
    }

    .btn-primary:active {
        transform: translateY(0);
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

    .col-md-4:nth-child(1) .card {
        animation-delay: 0s;
    }

    .col-md-4:nth-child(2) .card {
        animation-delay: 0.1s;
    }

    .col-md-4:nth-child(3) .card {
        animation-delay: 0.2s;
    }

    .col-md-4:nth-child(4) .card {
        animation-delay: 0.3s;
    }

    .col-md-4:nth-child(5) .card {
        animation-delay: 0.4s;
    }

    .col-md-4:nth-child(6) .card {
        animation-delay: 0.5s;
    }

    /* Pagination */
    .pagination {
        margin-top: 2rem;
    }

    .pagination .page-link {
        border: 2px solid #e9ecef;
        border-radius: 0.5rem;
        color: var(--primary-color);
        font-weight: 600;
        margin: 0 0.25rem;
        transition: all 0.3s ease;
    }

    .pagination .page-link:hover {
        background: var(--primary-gradient);
        border-color: transparent;
        color: white;
        transform: translateY(-2px);
    }

    .pagination .page-item.active .page-link {
        background: var(--primary-gradient);
        border-color: transparent;
    }

    /* Product Badge */
    .price-badge {
        background: var(--primary-gradient);
        color: white;
        padding: 0.5rem 1rem;
        border-radius: 0.5rem;
        font-weight: 700;
        font-size: 1.1rem;
        display: inline-block;
        margin: 0.5rem 0;
    }

    .stock-badge {
        display: inline-block;
        padding: 0.25rem 0.75rem;
        border-radius: 0.5rem;
        font-size: 0.85rem;
        font-weight: 600;
    }

    .stock-in {
        background: #d1fae5;
        color: #065f46;
    }

    .stock-low {
        background: #fef3c7;
        color: #92400e;
    }

    .stock-out {
        background: #fee2e2;
        color: #991b1b;
    }

    /* Empty State */
    .empty-state {
        text-align: center;
        padding: 4rem 2rem;
        color: #6c757d;
    }

    .empty-state i {
        font-size: 4rem;
        color: #cbd5e1;
        margin-bottom: 1rem;
    }
</style>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="mb-3">
                    <i class="bi bi-laptop me-3"></i>Just For You
                </h1>
                <p class="lead mb-0">Discover our premium collection of laptops tailored to your needs</p>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    {{-- Search + Per-page selector --}}
    <div class="search-wrapper">
        <form method="GET" action="{{ route('home') }}" class="d-flex align-items-center gap-2 flex-wrap">
            <div class="input-group flex-grow-1">
                <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search products...">
                <button class="btn btn-primary" type="submit">
                    <i class="bi bi-search me-1"></i>Search
                </button>
            </div>

            <select name="per_page" class="form-select w-auto" onchange="this.form.submit()">
                <option value="6" {{ request('per_page') == 6 ? 'selected' : '' }}>6 per page</option>
                <option value="12" {{ request('per_page') == 12 ? 'selected' : '' }}>12 per page</option>
                <option value="24" {{ request('per_page') == 24 ? 'selected' : '' }}>24 per page</option>
                <option value="48" {{ request('per_page') == 48 ? 'selected' : '' }}>48 per page</option>
            </select>
        </form>
    </div>

    <div class="row g-4">
        @forelse($products as $product)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body p-4">
                        <h5 class="card-title mb-2">{{ $product->name }}</h5>
                        <h6 class="card-subtitle mb-3">{{ $product->brand }} - {{ $product->model }}</h6>
                        <p class="card-text mb-3">{{ Str::limit($product->description, 100) }}</p>

                        @if($product->variants->count())
                            @php
                                // Get the cheapest variant
                                $variant = $product->variants->sortBy('price')->first();
                            @endphp

                            <ul class="list-group list-group-flush mb-3">
                                <li class="list-group-item"><strong>Processor:</strong> {{ $variant->processor }}</li>
                                <li class="list-group-item"><strong>RAM:</strong> {{ $variant->ram }}</li>
                                <li class="list-group-item"><strong>Storage:</strong> {{ $variant->storage }}</li>
                                <li class="list-group-item"><strong>Display:</strong> {{ $variant->display }}</li>
                                <li class="list-group-item"><strong>Graphics:</strong> {{ $variant->graphics }}</li>
                            </ul>

                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="price-badge">${{ number_format($variant->price, 2) }}</span>
                                <span class="stock-badge {{ $variant->stock > 10 ? 'stock-in' : ($variant->stock > 0 ? 'stock-low' : 'stock-out') }}">
                                    {{ $variant->stock > 0 ? $variant->stock . ' in stock' : 'Out of stock' }}
                                </span>
                            </div>
                        @else
                            <p class="text-muted">No variants available.</p>
                        @endif

                        <a href="{{ route('cart.add', [$product->id, $variant->id]) }}" class="btn btn-primary w-100">
                            <i class="bi bi-cart-plus me-2"></i>Add to Cart
                        </a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="empty-state">
                    <i class="bi bi-inbox"></i>
                    <h4>No Products Found</h4>
                    <p>Try adjusting your search criteria or browse all products</p>
                </div>
            </div>
        @endforelse
    </div>

    {{-- Pagination links --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>