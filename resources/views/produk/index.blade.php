@extends('layouts.sbadmin')
@section('content')

<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="fw-bold">Daftar Produk</h2>
    <a href="{{ route('produk.create') }}" class="btn btn-primary">
        + Tambah Produk
    </a>
</div>

@if (session('success'))
<div class="alert alert-success">
    {{ session('success') }}
</div>
@endif

<div class="card shadow-sm">
    <div class="card-body">
        <table class="table table-hover table-bordered align-middle">
            <thead class="table-dark">
                <tr>
                    <th style="width: 60px">ID</th>
                    <th>Kode Produk</th>
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th>Ukuran</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th style="width: 150px">Aksi</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($produk as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->kode_produk }}</td>
                    <td>{{ $p->nama_produk }}</td>

                    <td>
                        <span class="badge bg-info text-dark">
                            {{ $p->kategori_id }}
                        </span>
                    </td>

                    <td>
                        <span class="badge bg-secondary">{{ $p->ukuran }}</span>
                    </td>

                    <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>

                    <td>
                        <span class="badge bg-success">{{ $p->stok }}</span>
                    </td>

                    <td>
                    
                        <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <button
                            class="btn btn-danger btn-sm"
                            data-bs-toggle="modal"
                            data-bs-target="#deleteModal"
                            onclick="setDeleteUrl('{{ route('produk.destroy', $p->id) }}')">
                            Delete
                        </button>
                    </td>


                    </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="8" class="text-center text-muted">Belum ada produk</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        <!-- Modal Konfirmasi Delete -->
        <div class="modal fade" id="deleteModal" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">

                    <div class="modal-header bg-danger text-white">
                        <h5 class="modal-title">Konfirmasi Hapus</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>

                    <div class="modal-body">
                        <p class="mb-1">Apakah Anda yakin ingin menghapus produk ini?</p>
                        <small class="text-muted">Tindakan ini tidak dapat dibatalkan.</small>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>

                        <form id="deleteForm" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<script>
    function setDeleteUrl(url) {
        document.getElementById('deleteForm').action = url;
    }
</script>

@endsection