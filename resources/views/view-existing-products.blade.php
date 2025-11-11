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
                            <li class="list-group-item"><strong>Processor:</strong> {{ $product->processor }}</li>
                            <li class="list-group-item"><strong>RAM:</strong> {{ $product->ram }}</li>
                            <li class="list-group-item"><strong>Storage:</strong> {{ $product->storage }}</li>
                            <li class="list-group-item"><strong>Display:</strong> {{ $product->display }}</li>
                            <li class="list-group-item"><strong>Graphics:</strong> {{ $product->graphics }}</li>
                        </ul>
                        <p class="card-text"><strong>Price:</strong> ${{ $product->price }}</p>
                    </div>
                    <div class="card-footer text-end">
                        <a href="{{ url('users/'.$product->id) }}" class="btn btn-primary">Edit</a>
                        <a href="#" class="btn btn-danger">Delete</a>
                    </div>
                </div>
            </div>
        @empty
            <p>No products found.</p>
        @endforelse
    </div>
</div>
