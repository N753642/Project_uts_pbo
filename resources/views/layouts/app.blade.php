<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan Pakaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm mb-4">
    <div class="container d-flex justify-content-between align-items-center">

        <!-- Nama Aplikasi -->
        <a class="navbar-brand fw-bold" href="{{ url('/') }}">
            Aplikasi Penjualan
        </a>

        <!-- Menu Kanan -->
        <div class="d-flex align-items-center gap-2">

            <!-- Dashboard -->
            <a href="{{ url('/dashboard') }}" class="btn btn-outline-light btn-sm px-3 d-flex align-items-center gap-1">
                <i class="bi bi-speedometer2"></i> Dashboard
            </a>

            <!-- Logout -->
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
               class="btn btn-danger btn-sm px-3 d-flex align-items-center gap-1">
                <i class="bi bi-box-arrow-right"></i> Logout
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>

        </div>

    </div>
</nav>


<div class="container">
    @yield('content')
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
