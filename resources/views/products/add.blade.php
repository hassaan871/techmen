<x-navbar />

<div class="container mt-5 mb-5">
    <h1 class="mb-4">Add New Product</h1>

    <form class="row g-3" method="POST" action="/product">
        @csrf

        {{-- Seller ID (hidden if current user is seller) --}}
        <input type="hidden" name="seller_id" value="{{ Auth::user()->id }}">

        {{-- Name --}}
        <div class="col-md-6">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Macbook Air M4" required>
        </div>

        {{-- Brand --}}
        <div class="col-md-6">
            <label for="brand" class="form-label">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" placeholder="Apple" required>
        </div>

        {{-- Model --}}
        <div class="col-md-6">
            <label for="model" class="form-label">Model</label>
            <input type="text" class="form-control" id="model" name="model" placeholder="M4" required>
        </div>

        {{-- Processor --}}
        <div class="col-md-6">
            <label for="processor" class="form-label">Processor</label>
            <input type="text" class="form-control" id="processor" name="processor" placeholder="Apple M4" required>
        </div>

        {{-- RAM --}}
        <div class="col-md-6">
            <label for="ram" class="form-label">RAM</label>
            <input type="text" class="form-control" id="ram" name="ram" placeholder="16GB" required>
        </div>

        {{-- Storage --}}
        <div class="col-md-6">
            <label for="storage" class="form-label">Storage</label>
            <input type="text" class="form-control" id="storage" name="storage" placeholder="512GB SSD" required>
        </div>

        {{-- Display --}}
        <div class="col-md-6">
            <label for="display" class="form-label">Display</label>
            <input type="text" class="form-control" id="display" name="display" placeholder="13.3 inch Retina" required>
        </div>

        {{-- Graphics --}}
        <div class="col-md-6">
            <label for="graphics" class="form-label">Graphics</label>
            <input type="text" class="form-control" id="graphics" name="graphics" placeholder="Apple GPU" required>
        </div>

        {{-- Description --}}
        <div class="col-12">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" placeholder="The MacBook Air M4 features..." required></textarea>
        </div>

        {{-- Price, Stock, and Category in one row --}}
        <div class="col-md-4">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" placeholder="999.99" step="0.01" required>
        </div>

        <div class="col-md-4">
            <label for="stock" class="form-label">Stock</label>
            <input type="number" class="form-control" id="stock" name="stock" placeholder="10" min="0" required>
        </div>

        <div class="col-md-4">
            <label for="category" class="form-label">Category</label>
            <select class="form-select" id="category" name="category" required>
                <option value="laptop" selected>Laptop</option>
            </select>
        </div>

        {{-- Submit Button --}}
        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100">Add Product</button>
        </div>
    </form>
</div>
