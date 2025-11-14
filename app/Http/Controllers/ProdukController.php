<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Tampil semua produk
    public function index()
    {
        $produk = Produk::all();
    
        return view('produk.index', compact('produk'));
    }

    // Form tambah
    public function create()
    {
        return view('produk.create');
    }

    // Simpan data baru
    public function store(Request $request)
    {
        $request->validate([
            'kode_produk' => 'required',
            'nama_produk' => 'required',
            'kategori_id' => 'required|integer',
            'ukuran' => 'required',
            'harga' => 'required|integer',
            'stok' => 'required|integer',
        ]);

        Produk::create($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan');
    }

    // Form edit
    public function edit($id)
    {
        $produk = Produk::findOrFail($id);

        return view('produk.edit', compact('produk'));
    }

    // Update data
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $produk->update($request->all());

        return redirect()->route('produk.index')->with('success', 'Produk berhasil diperbarui');
    }

    // Hapus data
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);

        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus');
    }
}
