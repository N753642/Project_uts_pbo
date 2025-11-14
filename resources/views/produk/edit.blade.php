@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <div class="card shadow-sm border-0">
        <div class="card-header bg-warning text-white">
            <h4 class="mb-0">✏️ Edit Produk</h4>
        </div>

        <div class="card-body">

            <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row g-3">

                    <!-- Kolom Kiri -->
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kode Produk</label>
                            <input type="text" name="kode_produk" value="{{ $produk->kode_produk }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Kategori ID</label>
                            <input type="number" name="kategori_id" value="{{ $produk->kategori_id }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Harga</label>
                            <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control" required>
                        </div>

                    </div>

                    <!-- Kolom Kanan -->
                    <div class="col-md-6">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Produk</label>
                            <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Ukuran</label>
                            <select name="ukuran" class="form-select">
                                <option {{ $produk->ukuran == 'S' ? 'selected' : '' }}>S</option>
                                <option {{ $produk->ukuran == 'M' ? 'selected' : '' }}>M</option>
                                <option {{ $produk->ukuran == 'L' ? 'selected' : '' }}>L</option>
                                <option {{ $produk->ukuran == 'XL' ? 'selected' : '' }}>XL</option>
                                <option {{ $produk->ukuran == 'XXL' ? 'selected' : '' }}>XXL</option>
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Stok</label>
                            <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control" required>
                        </div>

                    </div>

                </div>

                <div class="d-flex justify-content-end mt-4">
                    <a href="{{ route('produk.index') }}" class="btn btn-secondary me-2">
                        Kembali
                    </a>
                    <button class="btn btn-warning text-white">
                        Simpan Perubahan
                    </button>
                </div>

            </form>
        </div>
    </div>

</div>
@endsection
