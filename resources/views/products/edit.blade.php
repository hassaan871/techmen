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

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 1rem 2rem rgba(102, 126, 234, 0.15);
    }

    /* Form Styling */
    .form-label {
        font-weight: 600;
        color: #495057;
        margin-bottom: 0.5rem;
    }

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

    textarea.form-control {
        resize: vertical;
    }

    /* Buttons */
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

    .btn-primary:active {
        transform: translateY(0);
    }

    /* Required field asterisk */
    .text-danger {
        color: #dc3545 !important;
    }

    /* Alerts */
    .alert {
        border: none;
        border-radius: 0.75rem;
        padding: 1rem 1.25rem;
        margin-bottom: 1.5rem;
        box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.1);
        animation: slideInDown 0.5s ease-out;
    }

    .alert-success {
        background: linear-gradient(135deg, #28a745 0%, #20c997 100%);
        color: white;
        border-left: 4px solid #1e7e34;
    }

    .alert-danger {
        background: linear-gradient(135deg, #dc3545 0%, #c82333 100%);
        color: white;
        border-left: 4px solid #bd2130;
    }

    .alert ul {
        margin-bottom: 0;
        padding-left: 1.25rem;
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

    @keyframes slideInDown {
        from {
            opacity: 0;
            transform: translateY(-20px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .card {
        animation: fadeInUp 0.6s ease-out;
    }

    /* Section Headers */
    .section-header {
        color: var(--secondary-color);
        font-weight: 700;
        font-size: 1.1rem;
        margin-top: 2rem;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 2px solid #e9ecef;
        position: relative;
    }

    .section-header::before {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 60px;
        height: 2px;
        background: var(--primary-gradient);
    }

    .section-header i {
        margin-right: 0.5rem;
        color: var(--primary-color);
    }
</style>

<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="mb-3">
                    <i class="bi bi-pencil-square me-3"></i>Edit Product
                </h1>
                <p class="lead mb-0">Update your product information and variant details</p>
            </div>
        </div>
    </div>
</div>

<div class="container pb-5">
    @if (session('success'))
    <div class="alert alert-success">
        <i class="bi bi-check-circle-fill me-2"></i>{{ session('success') }}
    </div>
    @endif

    @if (session('failure'))
    <div class="alert alert-danger">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>{{ session('failure') }}
    </div>
    @endif

    @if ($errors->any())
    <div class="alert alert-danger">
        <i class="bi bi-exclamation-triangle-fill me-2"></i>
        <strong>Please fix the following errors:</strong>
        <ul class="mb-0 mt-2">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-body p-4 p-md-5">
                    <form class="row g-3" method="POST" action="/product/{{ $product->id }}">
                        @csrf
                        @method('PUT')

                        {{-- Hidden Fields --}}
                        <input type="hidden" name="seller_id" value="{{ Auth::user()->id }}">
                        <input type="hidden" name="variant_id" value="{{ $product->variant->id }}">

                        {{-- Basic Information --}}
                        <div class="col-12">
                            <h5 class="section-header">
                                <i class="bi bi-info-circle"></i>Basic Information
                            </h5>
                        </div>

                        {{-- Name --}}
                        <div class="col-md-6">
                            <label for="name" class="form-label">Product Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
                        </div>

                        {{-- Brand --}}
                        <div class="col-md-6">
                            <label for="brand" class="form-label">Brand <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="brand" name="brand" value="{{ $product->brand }}" required>
                        </div>

                        {{-- Model --}}
                        <div class="col-md-6">
                            <label for="model" class="form-label">Model <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="model" name="model" value="{{ $product->model }}" required>
                        </div>

                        {{-- Category --}}
                        <div class="col-md-6">
                            <label for="category" class="form-label">Category <span class="text-danger">*</span></label>
                            <select class="form-select" id="category" name="category" required>
                                <option value="laptop" selected>Laptop</option>
                            </select>
                        </div>

                        {{-- Description --}}
                        <div class="col-12">
                            <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
                            <textarea class="form-control" id="description" name="description" rows="5" required>{{ $product->description }}</textarea>
                        </div>

                        {{-- Technical Specifications --}}
                        <div class="col-12">
                            <h5 class="section-header">
                                <i class="bi bi-cpu"></i>Technical Specifications
                            </h5>
                        </div>

                        {{-- Processor --}}
                        <div class="col-md-6">
                            <label for="processor" class="form-label">Processor <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="processor" value="{{ $product->variant->processor }}" required>
                        </div>

                        {{-- RAM --}}
                        <div class="col-md-6">
                            <label for="ram" class="form-label">RAM <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="ram" value="{{ $product->variant->ram }}" required>
                        </div>

                        {{-- Storage --}}
                        <div class="col-md-6">
                            <label for="storage" class="form-label">Storage <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="storage" value="{{ $product->variant->storage }}" required>
                        </div>

                        {{-- Display --}}
                        <div class="col-md-6">
                            <label for="display" class="form-label">Display <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="display" value="{{ $product->variant->display }}" required>
                        </div>

                        {{-- Graphics --}}
                        <div class="col-12">
                            <label for="graphics" class="form-label">Graphics <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="graphics" value="{{ $product->variant->graphics }}" required>
                        </div>

                        {{-- Pricing & Inventory --}}
                        <div class="col-12">
                            <h5 class="section-header">
                                <i class="bi bi-currency-dollar"></i>Pricing & Inventory
                            </h5>
                        </div>

                        {{-- Price --}}
                        <div class="col-md-6">
                            <label for="price" class="form-label">Price (PKR) <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="price" value="{{ $product->variant->price }}" step="0.01" required>
                        </div>

                        {{-- Stock --}}
                        <div class="col-md-6">
                            <label for="stock" class="form-label">Stock Quantity <span class="text-danger">*</span></label>
                            <input type="number" class="form-control" name="stock" value="{{ $product->variant->stock }}" min="0" required>
                        </div>

                        {{-- Submit Button --}}
                        <div class="col-12 mt-4">
                            <button type="submit" class="btn btn-primary btn-lg px-5">
                                <i class="bi bi-check-circle me-2"></i>Update Product
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>