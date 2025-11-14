@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">Tambah Produk</h2>
    <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
</div>

<div class="card shadow-sm">
    <div class="card-body">

        {{-- Error Validation --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Terjadi kesalahan:</strong>
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>- {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('produk.store') }}" method="POST">
            @csrf

            <div class="row">
                <!-- Kode Produk -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Kode Produk</label>
                    <input type="text" name="kode_produk" class="form-control" placeholder="KPR001" required>
                </div>

                <!-- Nama Produk -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Nama Produk</label>
                    <input type="text" name="nama_produk" class="form-control" placeholder="Nama pakaian" required>
                </div>

                <!-- Kategori -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Kategori</label>
                    <input type="number" name="kategori_id" class="form-control" placeholder="Contoh: 1" required>
                </div>

                <!-- Ukuran -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Ukuran</label>
                    <select name="ukuran" class="form-select" required>
                        <option value="" selected disabled>Pilih ukuran</option>
                        <option value="S">S (Small)</option>
                        <option value="M">M (Medium)</option>
                        <option value="L">L (Large)</option>
                        <option value="XL">XL</option>
                        <option value="XXL">XXL</option>
                    </select>
                </div>

                <!-- Harga -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Harga</label>
                    <input type="number" name="harga" class="form-control" placeholder="200000" required>
                </div>

                <!-- Stok -->
                <div class="col-md-6 mb-3">
                    <label class="form-label">Stok</label>
                    <input type="number" name="stok" class="form-control" placeholder="10" required>
                </div>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-primary px-4">Simpan</button>
            </div>

        </form>

    </div>
</div>

@endsection
