<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Produk;

class ProdukSeeder extends Seeder
{
    public function run(): void
    {
        Produk::create([
            'kode_produk' => "TSHIRT001",
            'nama_produk' => "Kaos Polos Hitam",
            'kategori_id' => 1,
            'ukuran' => "L",
            'harga' => 75000,
            'stok' => 25,
            'deskripsi' => "Kaos polos hitam cotton combed 30s."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT002",
            'nama_produk' => "Kaos Polos Putih",
            'kategori_id' => 1,
            'ukuran' => "M",
            'harga' => 75000,
            'stok' => 30,
            'deskripsi' => "Kaos polos putih cotton combed 30s."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT003",
            'nama_produk' => "Kaos Oversize Navy",
            'kategori_id' => 1,
            'ukuran' => "XL",
            'harga' => 85000,
            'stok' => 20,
            'deskripsi' => "Kaos oversize warna navy dengan bahan premium."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT004",
            'nama_produk' => "Kaos Sablon Graphic",
            'kategori_id' => 1,
            'ukuran' => "L",
            'harga' => 95000,
            'stok' => 18,
            'deskripsi' => "Kaos sablon graphic style streetwear."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT005",
            'nama_produk' => "Kaos Polos Abu",
            'kategori_id' => 1,
            'ukuran' => "M",
            'harga' => 70000,
            'stok' => 28,
            'deskripsi' => "Kaos polos abu bahan catton combed lembut."
        ]);

        Produk::create([
            'kode_produk' => "KEMEJA006",
            'nama_produk' => "Kemeja Flanel Merah",
            'kategori_id' => 2,
            'ukuran' => "L",
            'harga' => 120000,
            'stok' => 15,
            'deskripsi' => "Kemeja flanel motif kotak merah."
        ]);

        Produk::create([
            'kode_produk' => "KEMEJA007",
            'nama_produk' => "Kemeja Flanel Biru",
            'kategori_id' => 2,
            'ukuran' => "M",
            'harga' => 120000,
            'stok' => 20,
            'deskripsi' => "Kemeja flanel motif kotak biru."
        ]);

        Produk::create([
            'kode_produk' => "KEMEJA008",
            'nama_produk' => "Kemeja Formal Putih",
            'kategori_id' => 2,
            'ukuran' => "L",
            'harga' => 140000,
            'stok' => 12,
            'deskripsi' => "Kemeja formal putih bahan oxford."
        ]);

        Produk::create([
            'kode_produk' => "KEMEJA009",
            'nama_produk' => "Kemeja Batik Parang",
            'kategori_id' => 2,
            'ukuran' => "XL",
            'harga' => 150000,
            'stok' => 10,
            'deskripsi' => "Kemeja batik motif parang premium."
        ]);

        Produk::create([
            'kode_produk' => "KEMEJA010",
            'nama_produk' => "Kemeja Denim Biru",
            'kategori_id' => 2,
            'ukuran' => "M",
            'harga' => 160000,
                       'stok' => 8,
            'deskripsi' => "Kemeja denim biru tebal dan stylish."
        ]);

        Produk::create([
            'kode_produk' => "JAKET011",
            'nama_produk' => "Jaket Bomber Hitam",
            'kategori_id' => 3,
            'ukuran' => "L",
            'harga' => 180000,
            'stok' => 14,
            'deskripsi' => "Jaket bomber hitam bahan parasut premium."
        ]);

        Produk::create([
            'kode_produk' => "JAKET012",
            'nama_produk' => "Jaket Jeans Biru",
            'kategori_id' => 3,
            'ukuran' => "XL",
            'harga' => 200000,
            'stok' => 10,
            'deskripsi' => "Jaket jeans biru dengan desain klasik."
        ]);

        Produk::create([
            'kode_produk' => "JAKET013",
            'nama_produk' => "Jaket Varsity Hitam Putih",
            'kategori_id' => 3,
            'ukuran' => "L",
            'harga' => 220000,
            'stok' => 12,
            'deskripsi' => "Jaket varsity dengan kombinasi warna hitam putih."
        ]);

        Produk::create([
            'kode_produk' => "JAKET014",
            'nama_produk' => "Jaket Hoodie Zipper",
            'kategori_id' => 3,
            'ukuran' => "M",
            'harga' => 170000,
            'stok' => 16,
            'deskripsi' => "Jaket hoodie zipper bahan fleece hangat."
        ]);

        Produk::create([
            'kode_produk' => "JAKET015",
            'nama_produk' => "Jaket Kulit Sintetis",
            'kategori_id' => 3,
            'ukuran' => "XL",
            'harga' => 250000,
            'stok' => 7,
            'deskripsi' => "Jaket kulit sintetis premium."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE016",
            'nama_produk' => "Hoodie Hitam Oversize",
            'kategori_id' => 4,
            'ukuran' => "XL",
            'harga' => 160000,
            'stok' => 20,
            'deskripsi' => "Hoodie hitam oversize bahan fleece lembut."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE017",
            'nama_produk' => "Hoodie Abu Premium",
            'kategori_id' => 4,
            'ukuran' => "L",
            'harga' => 170000,
            'stok' => 18,
            'deskripsi' => "Hoodie abu premium nyaman dan hangat."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE018",
            'nama_produk' => "Hoodie Maroon Thick",
            'kategori_id' => 4,
            'ukuran' => "XL",
            'harga' => 175000,
            'stok' => 15,
            'deskripsi' => "Hoodie tebal warna maroon."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE019",
            'nama_produk' => "Hoodie Camo Army",
            'kategori_id' => 4,
            'ukuran' => "L",
            'harga' => 180000,
            'stok' => 10,
            'deskripsi' => "Hoodie motif army keren."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE020",
            'nama_produk' => "Hoodie Coral Pink",
            'kategori_id' => 4,
            'ukuran' => "M",
            'harga' => 165000,
            'stok' => 14,
            'deskripsi' => "Hoodie warna coral pink lembut."
        ]);

        Produk::create([
            'kode_produk' => "CELANA021",
            'nama_produk' => "Celana Jeans Slimfit",
            'kategori_id' => 5,
            'ukuran' => "32",
            'harga' => 150000,
            'stok' => 25,
            'deskripsi' => "Celana jeans slimfit biru."
        ]);

        Produk::create([
            'kode_produk' => "CELANA022",
            'nama_produk' => "Celana Chino Cream",
            'kategori_id' => 5,
            'ukuran' => "34",
            'harga' => 140000,
            'stok' => 20,
            'deskripsi' => "Celana chino warna cream."
        ]);

        Produk::create([
            'kode_produk' => "CELANA023",
            'nama_produk' => "Celana Training Hitam",
            'kategori_id' => 5,
            'ukuran' => "L",
            'harga' => 90000,
            'stok' => 30,
            'deskripsi' => "Celana training bahan adem."
        ]);

        Produk::create([
            'kode_produk' => "CELANA024",
            'nama_produk' => "Celana Jogger Navy",
            'kategori_id' => 5,
            'ukuran' => "M",
            'harga' => 95000,
            'stok' => 22,
            'deskripsi' => "Celana jogger warna navy."
        ]);

        Produk::create([
            'kode_produk' => "CELANA025",
            'nama_produk' => "Celana Pendek Hitam",
            'kategori_id' => 5,
            'ukuran' => "L",
            'harga' => 65000,
            'stok' => 40,
            'deskripsi' => "Celana pendek hitam bahan katun."
        ]);

        Produk::create([
            'kode_produk' => "ROK026",
            'nama_produk' => "Rok Span Hitam",
            'kategori_id' => 6,
            'ukuran' => "M",
            'harga' => 70000,
            'stok' => 12,
            'deskripsi' => "Rok span hitam elegan."
        ]);

        Produk::create([
            'kode_produk' => "ROK027",
            'nama_produk' => "Rok Plisket Cream",
            'kategori_id' => 6,
            'ukuran' => "L",
            'harga' => 85000,
            'stok' => 20,
            'deskripsi' => "Rok plisket bahan flowy."
        ]);

        Produk::create([
            'kode_produk' => "ROK028",
            'nama_produk' => "Rok Midi Hitam",
            'kategori_id' => 6,
            'ukuran' => "M",
            'harga' => 90000,
            'stok' => 10,
            'deskripsi' => "Rok midi hitam simple."
        ]);

        Produk::create([
            'kode_produk' => "ROK029",
            'nama_produk' => "Rok A-Line Navy",
            'kategori_id' => 6,
            'ukuran' => "L",
            'harga' => 95000,
            'stok' => 15,
            'deskripsi' => "Rok A-Line warna navy."
        ]);

        Produk::create([
            'kode_produk' => "ROK030",
            'nama_produk' => "Rok Denim Pendek",
            'kategori_id' => 6,
            'ukuran' => "S",
            'harga' => 85000,
            'stok' => 18,
            'deskripsi' => "Rok denim model pendek."
        ]);

        Produk::create([
            'kode_produk' => "AKSES031",
            'nama_produk' => "Topi Bucket Hitam",
            'kategori_id' => 7,
            'ukuran' => "-",
            'harga' => 45000,
            'stok' => 35,
            'deskripsi' => "Topi bucket warna hitam."
        ]);

        Produk::create([
            'kode_produk' => "AKSES032",
            'nama_produk' => "Topi Baseball Navy",
            'kategori_id' => 7,
            'ukuran' => "-",
            'harga' => 50000,
            'stok' => 30,
            'deskripsi' => "Topi baseball warna navy."
        ]);

        Produk::create([
            'kode_produk' => "AKSES033",
            'nama_produk' => "Sabuk Kulit Coklat",
            'kategori_id' => 7,
            'ukuran' => "-",
            'harga' => 60000,
            'stok' => 25,
            'deskripsi' => "Sabuk kulit warna coklat."
        ]);

        Produk::create([
            'kode_produk' => "AKSES034",
            'nama_produk' => "Kacamata Hitam",
            'kategori_id' => 7,
            'ukuran' => "-",
            'harga' => 35000,
            'stok' => 40,
            'deskripsi' => "Kacamata hitam fashion."
        ]);

        Produk::create([
            'kode_produk' => "AKSES035",
            'nama_produk' => "Gelang Kayu",
            'kategori_id' => 7,
            'ukuran' => "-",
            'harga' => 25000,
            'stok' => 50,
            'deskripsi' => "Gelang kayu sederhana."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT036",
            'nama_produk' => "Kaos Polos Merah",
            'kategori_id' => 1,
            'ukuran' => "L",
            'harga' => 74000,
            'stok' => 22,
            'deskripsi' => "Kaos polos warna merah cerah."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT037",
            'nama_produk' => "Kaos Hitam Premium",
            'kategori_id' => 1,
            'ukuran' => "XL",
            'harga' => 85000,
            'stok' => 17,
            'deskripsi' => "Kaos hitam premium bahan tebal."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT038",
            'nama_produk' => "Kaos Polos Hijau Botol",
            'kategori_id' => 1,
            'ukuran' => "M",
            'harga' => 72000,
            'stok' => 20,
            'deskripsi' => "Kaos polos hijau botol cotton combed."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT039",
            'nama_produk' => "Kaos Sablon Typography",
            'kategori_id' => 1,
            'ukuran' => "L",
            'harga' => 90000,
            'stok' => 15,
            'deskripsi' => "Kaos sablon typography modern."
        ]);

        Produk::create([
            'kode_produk' => "TSHIRT040",
            'nama_produk' => "Kaos Oversize Coklat",
            'kategori_id' => 1,
            'ukuran' => "XL",
            'harga' => 88000,
            'stok' => 12,
            'deskripsi' => "Kaos oversize coklat bahan premium."
        ]);

        Produk::create([
            'kode_produk' => "CELANA041",
            'nama_produk' => "Celana Cargo Cream",
            'kategori_id' => 5,
            'ukuran' => "34",
            'harga' => 145000,
            'stok' => 15,
            'deskripsi' => "Celana cargo warna cream stylish."
        ]);

        Produk::create([
            'kode_produk' => "CELANA042",
            'nama_produk' => "Celana Kulot Hitam",
            'kategori_id' => 5,
            'ukuran' => "L",
            'harga' => 85000,
            'stok' => 18,
            'deskripsi' => "Celana kulot hitam panjang."
        ]);

        Produk::create([
            'kode_produk' => "CELANA043",
            'nama_produk' => "Celana Kain Slimfit",
            'kategori_id' => 5,
            'ukuran' => "32",
            'harga' => 120000,
            'stok' => 10,
            'deskripsi' => "Celana kain slimfit rapi."
        ]);

        Produk::create([
            'kode_produk' => "CELANA044",
            'nama_produk' => "Celana Highwaist Wanita",
            'kategori_id' => 5,
            'ukuran' => "M",
            'harga' => 110000,
            'stok' => 14,
            'deskripsi' => "Celana wanita highwaist modern."
        ]);

        Produk::create([
            'kode_produk' => "CELANA045",
            'nama_produk' => "Celana Olahraga Stretch",
            'kategori_id' => 5,
            'ukuran' => "L",
            'harga' => 95000,
            'stok' => 25,
            'deskripsi' => "Celana olahraga bahan lentur."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE046",
            'nama_produk' => "Hoodie Beige",
            'kategori_id' => 4,
            'ukuran' => "M",
            'harga' => 165000,
            'stok' => 12,
            'deskripsi' => "Hoodie warna beige kalem."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE047",
            'nama_produk' => "Hoodie Green Army",
            'kategori_id' => 4,
            'ukuran' => "L",
            'harga' => 170000,
            'stok' => 14,
            'deskripsi' => "Hoodie warna green army."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE048",
            'nama_produk' => "Hoodie Peach Soft",
            'kategori_id' => 4,
            'ukuran' => "M",
            'harga' => 160000,
            'stok' => 11,
            'deskripsi' => "Hoodie peach warna lembut."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE049",
            'nama_produk' => "Hoodie Hitam Zipper",
            'kategori_id' => 4,
            'ukuran' => "XL",
            'harga' => 175000,
            'stok' => 16,
            'deskripsi' => "Hoodie hitam zipper stylish."
        ]);

        Produk::create([
            'kode_produk' => "HOODIE050",
            'nama_produk' => "Hoodie Biru Navy",
            'kategori_id' => 4,
            'ukuran' => "L",
            'harga' => 170000,
            'stok' => 10,
            'deskripsi' => "Hoodie biru navy bahan tebal."
        ]);
    }
}
