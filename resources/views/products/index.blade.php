<x-navbar />

<div class="container mt-5">
    <h1 class="mb-4">Products</h1>

    <div class="row">
        @forelse ($products as $product)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $product->brand }} - {{ $product->model }}</h6>
                    <p class="card-text">{{ $product->description }}</p>
                    <ul class="list-group list-group-flush mb-2">
                        @foreach ($product->variants as $variant)
                        <h5 class="mt-1">Variant: </h5>
                        <div class="card-body">
                            
                            <li class="list-group-item">
                                <strong>Processor:</strong> {{ $variant->processor }} |
                            </li>
                            <li class="list-group-item">
                                <strong>RAM:</strong> {{ $variant->ram }} |
                            </li>
                            <li class="list-group-item">
                                <strong>Storage:</strong> {{ $variant->storage }} |
                            </li>
                            <li class="list-group-item">
                                <strong>Display:</strong> {{ $variant->display }} |
                            </li>
                            <li class="list-group-item">
                                <strong>Graphics:</strong> {{ $variant->graphics }} |
                            </li>
                            <li class="list-group-item">
                                <strong>Price:</strong> ${{ $variant->price }} |
                            </li>
                            <li class="list-group-item">
                                <strong>Stock:</strong> {{ $variant->stock }}
                            </li>
                        </div>
                            <a href="{{ route('products.variants.edit', ['product' => $product->id, 'variant' => $variant->id]) }}" class="btn btn-primary">Edit Variant</a>
                        @endforeach
                    </ul>
                </div>
                <div class="card-footer text-end">
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">
                            Delete Product
                        </button>
                    </form>
                </div>
            </div>
        </div>
        @empty
        <p>No products found.</p>
        @endforelse
    </div>
</div>