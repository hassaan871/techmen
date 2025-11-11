<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Navbar Test</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Techmen
                @if ( Auth::user()->role == 'seller')
                    Seller
                @elseif ( Auth::user()->role == 'admin' )
                    Admin
                @endif
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navCollapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="">Home</a>
                    </li>

                    @if (Auth::user()->role == 'seller')
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Products
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item" href="/product/add">Add new Product</a></li>
                            <li><a class="dropdown-item" href="/product/view">View existing Products</a></li>
                        </ul>
                    </li>

                    <!-- Sibling nav items -->
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Switch to User Account</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    @endif

                    @if (Auth::user()->role == 'user')
                    <li class="nav-item">
                        <a class="nav-link" href="#">Orders</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cart</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Become a Seller</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact Us</a>
                    </li>
                    @endif

                    @if (Auth::user()->role == 'admin')
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="productsDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Users
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="productsDropdown">
                            <li><a class="dropdown-item" href="#">Create new User</a></li>
                            <li><a class="dropdown-item" href="#">View existing Users</a></li>
                        </ul>
                    </li>
                    @endif
                </ul>

                <div class="d-flex align-items-center">
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" />
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>

                    <form method="POST" action="{{ route('logout') }}" class="ms-2">
                        @csrf
                        <button type="submit" class="btn btn-outline-danger">Logout</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>