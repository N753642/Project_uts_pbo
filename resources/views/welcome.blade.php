<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Penjualan Pakaian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container d-flex justify-content-center align-items-center" style="height:100vh;">
        <div class="text-center">
            <h1 class="fw-bold mb-3">Aplikasi Penjualan Pakaian</h1>
            <p class="lead mb-4">Sistem manajemen produk, transaksi, dan laporan berbasis Laravel.</p>

            @auth
                <a href="{{ url('/dashboard') }}" class="btn btn-primary btn-lg">Masuk ke Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="btn btn-dark btn-lg">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-dark btn-lg">Register</a>
            @endauth
        </div>
    </div>

</body>

</html>
