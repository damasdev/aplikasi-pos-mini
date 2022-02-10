<?php

namespace Database\Seeders;

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
                'deskripsi' => 'Paket desktop premium'
            ],
            [
                'kategori' => 'Paket Starter Lite',
                'nama' => 'Majoo Lifestyle',
                'harga' => 3550000,
                'deskripsi' => 'Paket ekonomis untuk mulai maju'
            ],
            [
                'kategori' => 'Paket Advance Galaxy',
                'nama' => 'Majoo Advance',
                'harga' => 5850000,
                'deskripsi' => 'Paket terbaik bisnis makin maju'
            ],
            [
                'kategori' => 'Paket Starter Sprinter',
                'nama' => 'Majoo Pro',
                'harga' => 25500000,
                'deskripsi' => 'Paket all-in-one modern'
            ],
        ];

        foreach ($items as $item) {
            $kategori_id = Kategori::where('nama', $item['kategori'])->value('id');
            Produk::updateOrCreate([
                'kategori_id' => $kategori_id
            ], [
                'harga' => $item['harga'],
                'nama' => $item['nama'],
                'deskripsi' => $item['deskripsi'],
            ]);
        }
    }
}
