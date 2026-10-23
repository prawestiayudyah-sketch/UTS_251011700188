<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - ElectroStore</title>

    <link rel="stylesheet" href="{{ asset('Bootstrap/css/bootstrap.min.css') }}">

    <style>
        body {
            background: linear-gradient(135deg, #f3e8ff 0%, #ede4ff 50%, #e9d5ff 100%);
            min-height: 100vh;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        .navbar-brand {
            font-weight: 700;
            letter-spacing: 1px;
            font-size: 1.4rem;
        }
        .card {
            border: none;
            border-radius: 16px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.92);
            backdrop-filter: blur(8px);
        }
        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 30px rgba(139, 92, 246, 0.25);
        }
        .product-img {
            height: 220px;
            object-fit: contain;
            background: #ffffff;
            padding: 15px;
            border-radius: 16px 16px 0 0;
        }
        footer {
            background: #4c1d95;
            color: #e9d5ff;
            padding: 25px 0;
            margin-top: 60px;
        }
        .btn-outline-dark {
            border-radius: 50px;
            padding: 8px 20px;
        }
        .btn-primary {
            background: #7c3aed;
            border-color: #7c3aed;
            border-radius: 50px;
        }
        .btn-primary:hover {
            background: #6d28d9;
            border-color: #6d28d9;
        }
        .btn-secondary {
            border-radius: 50px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background: #4c1d95;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            ⚡ ElectroStore
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('electronics.index') }}">Produk</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cart') }}">Keranjang</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
        

    <main class="py-5">
        @yield('content')
    </main>

    <footer class="text-center">
        <div class="container">
            <p class="mb-1 fw-semibold">&copy; {{ date('Y') }} ElectroStore - Toko Elektronik</p>
            <small>UTS Rekayasa Web • Sistem Informasi</small>
        </div>
    </footer>

    <script src="{{ asset('Bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>