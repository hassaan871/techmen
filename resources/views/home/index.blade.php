<x-navbar />

<div class="container mt-5">
    <h1 class="mb-4">Just For You</h1>

    {{-- Search + Per-page selector --}}
    <form method="GET" action="{{ route('home') }}" class="mb-4 d-flex align-items-center gap-2">
        <div class="input-group flex-grow-1">
            <input type="text" name="search" value="{{ request('search') }}" class="form-control" placeholder="Search products...">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>

        <select name="per_page" class="form-select w-auto" onchange="this.form.submit()">
            <option value="6" {{ request('per_page') == 6 ? 'selected' : '' }}>6 per page</option>
            <option value="12" {{ request('per_page') == 12 ? 'selected' : '' }}>12 per page</option>
            <option value="24" {{ request('per_page') == 24 ? 'selected' : '' }}>24 per page</option>
            <option value="48" {{ request('per_page') == 48 ? 'selected' : '' }}>48 per page</option>
        </select>
    </form>

    <div class="row">
        @forelse($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <h6 class="card-subtitle mb-2 text-muted">{{ $product->brand }} - {{ $product->model }}</h6>
                        <p class="card-text">{{ Str::limit($product->description, 100) }}</p>

                        @if($product->variants->count())
                            @php
                                // Get the cheapest variant
                                $variant = $product->variants->sortBy('price')->first();
                            @endphp

                            <ul class="list-group list-group-flush mb-2">
                                <li class="list-group-item"><strong>Processor:</strong> {{ $variant->processor }}</li>
                                <li class="list-group-item"><strong>RAM:</strong> {{ $variant->ram }}</li>
                                <li class="list-group-item"><strong>Storage:</strong> {{ $variant->storage }}</li>
                                <li class="list-group-item"><strong>Display:</strong> {{ $variant->display }}</li>
                                <li class="list-group-item"><strong>Graphics:</strong> {{ $variant->graphics }}</li>
                                <li class="list-group-item"><strong>Price:</strong> ${{ $variant->price }}</li>
                                <li class="list-group-item"><strong>Stock:</strong> {{ $variant->stock }}</li>
                            </ul>
                        @else
                            <p>No variants available.</p>
                        @endif

                        <a href="{{ route('cart.add', [$product->id, $variant->id]) }}" class="btn btn-primary w-100 mt-2">Add to Cart</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No products found.</p>
        @endforelse
    </div>

    {{-- Pagination links --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $products->links() }}
    </div>
</div>
