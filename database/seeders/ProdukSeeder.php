<?php

namespace Database\Seeders;

use App\Models\Gambar;
use App\Models\Kategori;
use App\Models\Produk;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            [
                'kategori' => 'Paket Desktop',
                'nama' => 'Majoo Desktop',
                'harga' => 11600000,
                'deskripsi' => 'Paket desktop premium',
                'gambar' => 'paket-advance.png'
            ],
            [
                'kategori' => 'Paket Starter Lite',
                'nama' => 'Majoo Lifestyle',
                'harga' => 3550000,
                'deskripsi' => 'Paket ekonomis untuk mulai maju',
                'gambar' => 'paket-desktop.png'
            ],
            [
                'kategori' => 'Paket Advance Galaxy',
                'nama' => 'Majoo Advance',
                'harga' => 5850000,
                'deskripsi' => 'Paket terbaik bisnis makin maju',
                'gambar' => 'paket-lifestyle.png'
            ],
            [
                'kategori' => 'Paket Starter Sprinter',
                'nama' => 'Majoo Pro',
                'harga' => 25500000,
                'deskripsi' => 'Paket all-in-one modern',
                'gambar' => 'paket-standard.png'
            ],
        ];

        foreach ($items as $item) {
            $kategori_id = Kategori::where('nama', $item['kategori'])->value('id');
            $gambar_id = Gambar::where('nama', $item['gambar'])->value('id');
            Produk::updateOrCreate([
                'kategori_id' => $kategori_id,
                'nama' => $item['nama']
            ], [
                'harga' => $item['harga'],
                'deskripsi' => $item['deskripsi'],
                'gambar_id' => $gambar_id,
            ]);
        }
    }
}
