<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Techmen</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    
    <style>
        .navbar-gradient {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
        }

        .navbar-brand {
            font-size: 1.5rem;
            font-weight: 700;
            letter-spacing: 0.5px;
            transition: all 0.3s ease;
        }

        .navbar-brand:hover {
            transform: translateY(-2px);
        }

        .nav-link {
            font-weight: 500;
            transition: all 0.3s ease;
            position: relative;
            padding: 0.5rem 1rem !important;
            border-radius: 0.5rem;
        }

        .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            transform: translateY(-1px);
        }

        .nav-link.active {
            background: rgba(255, 255, 255, 0.2);
            font-weight: 600;
        }

        .dropdown-menu {
            border: none;
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
            border-radius: 0.75rem;
            padding: 0.5rem;
            margin-top: 0.5rem;
        }

        .dropdown-item {
            border-radius: 0.5rem;
            padding: 0.5rem 1rem;
            transition: all 0.2s ease;
            font-weight: 500;
        }

        .dropdown-item:hover {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            transform: translateX(5px);
        }

        .user-greeting {
            background: rgba(255, 255, 255, 0.2);
            padding: 0.5rem 1rem;
            border-radius: 2rem;
            margin-right: 0.75rem;
            font-weight: 500;
            backdrop-filter: blur(10px);
        }

        .btn-logout {
            border: 2px solid rgba(255, 255, 255, 0.3);
            color: white;
            font-weight: 600;
            padding: 0.5rem 1.5rem;
            border-radius: 2rem;
            transition: all 0.3s ease;
            background: transparent;
        }

        .btn-logout:hover {
            background: rgba(255, 255, 255, 0.2);
            border-color: white;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.2);
        }

        .role-badge {
            display: inline-block;
            background: rgba(255, 255, 255, 0.2);
            padding: 0.25rem 0.75rem;
            border-radius: 1rem;
            font-size: 0.85rem;
            margin-left: 0.5rem;
            font-weight: 600;
        }

        .navbar-toggler {
            border: 2px solid rgba(255, 255, 255, 0.3);
            padding: 0.5rem 0.75rem;
        }

        .navbar-toggler:focus {
            box-shadow: 0 0 0 0.25rem rgba(255, 255, 255, 0.25);
        }

        .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-gradient sticky-top">
        <div class="container-fluid px-4">
            <a class="navbar-brand d-flex align-items-center" href="/home">
                <i class="bi bi-shop-window me-2"></i>
                Techmen
                @if ( Auth::user()->role == 'seller')
                    <span class="role-badge">
                        <i class="bi bi-bag-check me-1"></i>Seller
                    </span>
                @elseif ( Auth::user()->role == 'admin' )
                    <span class="role-badge">
                        <i class="bi bi-shield-check me-1"></i>Admin
                    </span>
                @endif
            </a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navCollapse">
                <ul class="navbar-nav me-auto ms-lg-4">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('home') ? 'active' : '' }}" href="/home">
                            <i class="bi bi-house-door me-1"></i>Home
                        </a>
                    </li>

                    @if (Auth::user()->role == 'seller')
                    <!-- Dropdown -->
                   <li class="nav-item">
                        <a class="nav-link {{ request()->is('product/add') ? 'active' : '' }}" href="/product/add">
                            <i class="bi bi-plus-circle me-1"></i>Add Product
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('product/view') ? 'active' : '' }}" href="/product/view">
                            <i class="bi bi-list-ul me-1"></i>View Products
                        </a>
                    </li>

                    <!-- Sibling nav items -->
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('orders/manage') ? 'active' : '' }}" href="/orders/manage">
                            <i class="bi bi-receipt-cutoff me-1"></i>Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/user/switch">
                            <i class="bi bi-arrow-left-right me-1"></i>Switch to User
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contactus">
                            <i class="bi bi-envelope me-1"></i>Contact Us
                        </a>
                    </li>
                    @endif

                    @if (Auth::user()->role == 'user')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('orders') ? 'active' : '' }}" href="/orders">
                            <i class="bi bi-receipt-cutoff me-1"></i>Orders
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('cart') ? 'active' : '' }}" href="/cart">
                            <i class="bi bi-cart3 me-1"></i>Cart
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('seller/become') ? 'active' : '' }}" href="/seller/become">
                            <i class="bi bi-shop me-1"></i>Become a Seller
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('contactus') ? 'active' : '' }}" href="/contactus">
                            <i class="bi bi-envelope me-1"></i>Contact Us
                        </a>
                    </li>
                    @endif

                    @if (Auth::user()->role == 'admin')
                    <li class="nav-item">
                        <a class="nav-link {{ request()->is('orders/manage') ? 'active' : '' }}" href="/orders/manage">
                            <i class="bi bi-receipt-cutoff me-1"></i>Orders
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="usersDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi bi-people me-1"></i>Users
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="usersDropdown">
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-person-plus me-2"></i>Create New User
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="bi bi-list-ul me-2"></i>View Users
                                </a>
                            </li>
                        </ul>
                    </li>
                    @endif
                </ul>

                <div class="d-flex align-items-center">
                    <span class="user-greeting d-none d-lg-inline-block">
                        <i class="bi bi-person-circle me-1"></i>
                        Hello, {{ Auth::user()->name }}
                    </span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="btn btn-logout">
                            <i class="bi bi-box-arrow-right me-1"></i>Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>