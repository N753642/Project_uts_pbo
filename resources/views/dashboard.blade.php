@extends('layouts.app')

@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h3 class="fw-bold">Dashboard</h3>
        <p class="text-muted">Selamat datang, {{ Auth::user()->name }} 👋</p>

        <hr>

        <div class="row">

            <!-- Produk -->
            <div class="col-md-4 mb-3">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Kelola Produk</h5>
                        <p class="card-text">Tambah, edit, dan hapus data produk pakaian.</p>
                        <a href="{{ route('produk.index') }}" class="btn btn-primary">Masuk</a>
                    </div>
                </div>
            </div>

            <!-- Tambahkan menu lain jika ingin -->
            <div class="col-md-4 mb-3">
                <div class="card border-success">
                    <div class="card-body">
                        <h5 class="card-title">Laporan</h5>
                        <p class="card-text">Melihat statistik dan laporan penjualan.</p>
                        <a href="#" class="btn btn-success">Lihat</a>
                    </div>
                </div>
            </div>

            <!-- contoh master lainnya -->
            <div class="col-md-4 mb-3">
                <div class="card border-warning">
                    <div class="card-body">
                        <h5 class="card-title">Kategori</h5>
                        <p class="card-text">Manajemen kategori produk (opsional).</p>
                        <a href="#" class="btn btn-warning text-white">Kelola</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection
