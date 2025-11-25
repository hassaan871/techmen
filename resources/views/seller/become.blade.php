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
        padding: 3rem 0 4rem;
        margin-bottom: -2rem;
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
        font-size: 1.1rem;
    }

    /* Main CTA Card */
    .cta-card {
        border: none;
        border-radius: 1.5rem;
        box-shadow: 0 1rem 3rem rgba(102, 126, 234, 0.2);
        transition: all 0.4s ease;
        overflow: hidden;
        position: relative;
        background: white;
    }

    .cta-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 5px;
        background: var(--primary-gradient);
    }

    .cta-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1.5rem 4rem rgba(102, 126, 234, 0.25);
    }

    .cta-card .card-body {
        padding: 3rem 2rem;
    }

    /* Icon Circle */
    .icon-circle {
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.1) 0%, rgba(118, 75, 162, 0.1) 100%);
        width: 100px;
        height: 100px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-bottom: 1.5rem;
        transition: all 0.3s ease;
        position: relative;
    }

    .icon-circle::before {
        content: '';
        position: absolute;
        inset: -5px;
        border-radius: 50%;
        padding: 5px;
        background: var(--primary-gradient);
        -webkit-mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        mask: linear-gradient(#fff 0 0) content-box, linear-gradient(#fff 0 0);
        -webkit-mask-composite: xor;
        mask-composite: exclude;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .cta-card:hover .icon-circle::before {
        opacity: 1;
    }

    .cta-card:hover .icon-circle {
        transform: scale(1.1) rotate(10deg);
    }

    .icon-circle i {
        font-size: 3rem;
        background: var(--primary-gradient);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }

    /* CTA Button */
    .btn-cta {
        background: var(--primary-gradient);
        border: none;
        border-radius: 3rem;
        padding: 1rem 3rem;
        font-weight: 700;
        font-size: 1.1rem;
        transition: all 0.3s ease;
        box-shadow: 0 0.5rem 1rem rgba(102, 126, 234, 0.4);
        color: white;
        position: relative;
        overflow: hidden;
    }

    .btn-cta::before {
        content: '';
        position: absolute;
        top: 0;
        left: -100%;
        width: 100%;
        height: 100%;
        background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
        transition: left 0.5s ease;
    }

    .btn-cta:hover::before {
        left: 100%;
    }

    .btn-cta:hover {
        transform: translateY(-3px);
        box-shadow: 0 0.75rem 1.5rem rgba(102, 126, 234, 0.5);
        color: white;
    }

    .btn-cta:active {
        transform: translateY(-1px);
    }

    /* Benefits Cards */
    .benefit-card {
        border: none;
        border-radius: 1rem;
        box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.08);
        transition: all 0.4s ease;
        overflow: hidden;
        height: 100%;
        background: white;
        position: relative;
    }

    .benefit-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 3px;
        background: var(--primary-gradient);
        transform: scaleX(0);
        transition: transform 0.3s ease;
    }

    .benefit-card:hover::before {
        transform: scaleX(1);
    }

    .benefit-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 1rem 2rem rgba(102, 126, 234, 0.15);
    }

    .benefit-icon {
        width: 70px;
        height: 70px;
        display: inline-flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        margin-bottom: 1rem;
        transition: all 0.3s ease;
    }

    .benefit-card:hover .benefit-icon {
        transform: scale(1.15) rotate(5deg);
    }

    .benefit-icon.primary {
        background: linear-gradient(135deg, rgba(102, 126, 234, 0.15) 0%, rgba(118, 75, 162, 0.15) 100%);
    }

    .benefit-icon.success {
        background: linear-gradient(135deg, rgba(25, 135, 84, 0.15) 0%, rgba(32, 201, 151, 0.15) 100%);
    }

    .benefit-icon.info {
        background: linear-gradient(135deg, rgba(13, 202, 240, 0.15) 0%, rgba(11, 136, 170, 0.15) 100%);
    }

    .benefit-card h5 {
        color: var(--secondary-color);
        font-weight: 700;
        margin-bottom: 0.75rem;
    }

    .benefit-card p {
        color: #6c757d;
        line-height: 1.6;
    }

    /* Info Text */
    .info-text {
        color: #6c757d;
        font-size: 0.9rem;
        margin-top: 1.5rem;
    }

    .info-text i {
        color: var(--primary-color);
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInScale {
        from {
            opacity: 0;
            transform: scale(0.9);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    .cta-card {
        animation: fadeInScale 0.6s ease-out;
    }

    .benefit-card:nth-child(1) {
        animation: fadeInUp 0.6s ease-out;
        animation-delay: 0.2s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .benefit-card:nth-child(2) {
        animation: fadeInUp 0.6s ease-out;
        animation-delay: 0.3s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    .benefit-card:nth-child(3) {
        animation: fadeInUp 0.6s ease-out;
        animation-delay: 0.4s;
        opacity: 0;
        animation-fill-mode: forwards;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .page-header {
            padding: 2rem 0 3rem;
        }

        .cta-card .card-body {
            padding: 2rem 1.5rem;
        }

        .icon-circle {
            width: 80px;
            height: 80px;
        }

        .icon-circle i {
            font-size: 2.5rem;
        }

        .btn-cta {
            padding: 0.875rem 2.5rem;
            font-size: 1rem;
        }

        .benefit-icon {
            width: 60px;
            height: 60px;
        }
    }
</style>

<div class="page-header">
    <div class="container">
        <div class="row justify-content-center text-center">
            <div class="col-lg-8">
                <h1 class="mb-3">
                    <i class="bi bi-shop-window me-3"></i>Become a Seller
                </h1>
                <p class="mb-0">Start your selling journey with us and reach thousands of potential customers</p>
            </div>
        </div>
    </div>
</div>

<div class="container py-5">
    <!-- Call to Action -->
    <div class="row justify-content-center mb-5">
        <div class="col-lg-7">
            <div class="card cta-card">
                <div class="card-body text-center">
                    <div class="icon-circle">
                        <i class="bi bi-rocket-takeoff"></i>
                    </div>
                    <h3 class="fw-bold mb-3">Ready to Start Selling?</h3>
                    <p class="text-muted mb-4 px-lg-5">Join our platform today and start your journey as a seller. It only takes a few minutes to get started and unlock endless opportunities!</p>
                    
                    <form action="/seller/become" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-cta">
                            <i class="bi bi-bag-check me-2"></i>Let's Start Selling
                        </button>
                    </form>

                    <p class="info-text mb-0">
                        <i class="bi bi-shield-check me-1"></i>
                        By becoming a seller, you agree to our terms and conditions
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Benefits Section -->
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="text-center mb-5">
                <h2 class="fw-bold mb-3" style="color: var(--secondary-color);">Why Sell With Us?</h2>
                <p class="text-muted">Discover the benefits of joining our seller community</p>
            </div>

            <div class="row g-4">
                <div class="col-md-4">
                    <div class="card benefit-card">
                        <div class="card-body text-center p-4">
                            <div class="benefit-icon primary">
                                <i class="bi bi-graph-up-arrow fs-2" style="color: var(--primary-color);"></i>
                            </div>
                            <h5>Grow Your Business</h5>
                            <p class="mb-0">Reach a wider audience and increase your sales potential with our extensive customer base</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card benefit-card">
                        <div class="card-body text-center p-4">
                            <div class="benefit-icon success">
                                <i class="bi bi-speedometer2 text-success fs-2"></i>
                            </div>
                            <h5>Easy Management</h5>
                            <p class="mb-0">Manage your products and orders with our intuitive and user-friendly dashboard</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card benefit-card">
                        <div class="card-body text-center p-4">
                            <div class="benefit-icon info">
                                <i class="bi bi-shield-check text-info fs-2"></i>
                            </div>
                            <h5>Secure Platform</h5>
                            <p class="mb-0">Your transactions and data are protected with top-tier security measures</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<x-footer/>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>