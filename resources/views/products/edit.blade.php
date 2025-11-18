<x-navbar />

@if (session('failure'))
<div class="alert alert-danger">
    {{ session('failure') }}
</div>
@endif

<div class="container mt-5 mb-5">
    <h1 class="mb-4">Edit Product</h1>

    <form class="row g-3" method="POST" action="/product/{{ $product->id }}">
        @csrf
        {{-- For updating a product --}}
        @method('PUT')

        {{-- Seller ID (hidden) --}}
        <input type="hidden" name="seller_id" value="{{ Auth::user()->id }}">
        {{-- Variant ID (hidden) --}}
        <input type="hidden" name="variant_id" value="{{ $product->variant->id }}">

        {{-- Name --}}
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
        </div>

        {{-- Brand --}}
        <div class="col-md-6">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}" required>
        </div>

        {{-- Model --}}
        <div class="col-md-6">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" value="{{ $product->model }}" required>
        </div>

        {{-- Description --}}
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required>{{ $product->description }}</textarea>
        </div>

        {{-- Variants --}}
        <div class="col-md-6">
            <label for="processor" class="form-label">Processor</label>
            <input type="text" class="form-control" name="processor" value="{{ $product->variant->processor }}" required>
        </div>

        <div class="col-md-6">
            <label for="ram" class="form-label">RAM</label>
            <input type="text" class="form-control" name="ram" value="{{ $product->variant->ram }}" required>
        </div>

        <div class="col-md-6">
            <label for="storage" class="form-label">Storage</label>
            <input type="text" class="form-control" name="storage" value="{{ $product->variant->storage }}" required>
        </div>

        <div class="col-md-6">
            <label for="display" class="form-label">Display</label>
            <input type="text" class="form-control" name="display" value="{{ $product->variant->display }}" required>
        </div>

        <div class="col-md-6">
            <label for="graphics" class="form-label">Graphics</label>
            <input type="text" class="form-control" name="graphics" value="{{ $product->variant->graphics }}" required>
        </div>

        <div class="col-md-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" name="price" value="{{ $product->variant->price }}" step="0.01" required>
        </div>

        <div class="col-md-3">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" name="stock" value="{{ $product->variant->stock }}" min="0" required>
        </div>

        {{-- Category --}}
        <div class="col-md-4">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category" required>
                <option value="laptop" selected>Laptop</option>
            </select>
        </div>

        {{-- Submit Button --}}
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Update Product</button>
        </div>
    </form>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif
    @if (session('failure'))
    <div class="alert alert-danger">
        {{ session('failure') }}
    </div>
    @endif
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

</div>