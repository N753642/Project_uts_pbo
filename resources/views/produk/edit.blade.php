@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">

        <div class="card shadow-sm border-0">
            <div class="card-header bg-warning text-white">
                <h5 class="m-0">✏️ Edit Produk</h5>
            </div>

            <div class="card-body">

                <form action="{{ route('produk.update', $produk->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="form-group mb-3">
                        <label class="form-label fw-bold">Nama Produk</label>
                        <input 
                            type="text" 
                            name="nama" 
                            class="form-control" 
                            value="{{ $produk->nama }}" 
                            placeholder="Contoh: Kaos Polos Lengan Pendek"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label fw-bold">Kategori</label>
                        <input 
                            type="text" 
                            name="kategori" 
                            class="form-control" 
                            value="{{ $produk->kategori }}" 
                            placeholder="Contoh: Kaos, Kemeja, Jaket"
                            required>
                    </div>

                    <div class="form-group mb-3">
                        <label class="form-label fw-bold">Harga</label>
                        <input 
                            type="number" 
                            name="harga" 
                            class="form-control" 
                            value="{{ $produk->harga }}" 
                            placeholder="Contoh: 75000"
                            required>
                    </div>

                    <div class="form-group mb-4">
                        <label class="form-label fw-bold">Stok</label>
                        <input 
                            type="number" 
                            name="stok" 
                            class="form-control" 
                            value="{{ $produk->stok }}" 
                            placeholder="Contoh: 50"
                            required>
                    </div>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('produk.index') }}" class="btn btn-secondary px-4">
                            ← Kembali
                        </a>

                        <button type="submit" class="btn btn-warning px-4 text-white fw-bold">
                            Simpan Perubahan
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection
