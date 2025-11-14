@extends('layouts.app')

@section('content')
<div class="container mt-4">

    <h2 class="mb-4">Edit Produk</h2>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Kode Produk</label>
            <input type="text" name="kode_produk" value="{{ $produk->kode_produk }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Nama Produk</label>
            <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Kategori ID</label>
            <input type="number" name="kategori_id" value="{{ $produk->kategori_id }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Ukuran</label>
            <select name="ukuran" class="form-select">
                <option {{ $produk->ukuran == 'S' ? 'selected' : '' }}>S</option>
                <option {{ $produk->ukuran == 'M' ? 'selected' : '' }}>M</option>
                <option {{ $produk->ukuran == 'L' ? 'selected' : '' }}>L</option>
                <option {{ $produk->ukuran == 'XL' ? 'selected' : '' }}>XL</option>
                <option {{ $produk->ukuran == 'XXL' ? 'selected' : '' }}>XXL</option>
            </select>
        </div>

        <div class="mb-3">
            <label class="form-label">Harga</label>
            <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Stok</label>
            <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control" required>
        </div>

        <button class="btn btn-warning">Update</button>
        <a href="{{ route('produk.index') }}" class="btn btn-secondary">Kembali</a>
    </form>

</div>
@endsection
