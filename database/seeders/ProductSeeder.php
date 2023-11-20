<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // Data produk awal
        $products = [
            [
                'image'=> 'merah.png',
                'nama' => 'Bunga Mawar Merah',
                'deskripsi' => 'Bunga mawar merah segar.',
                'jumlah'=> '21',
                'harga' => 2000,
            ],
            [
                'image'=> 'putih.jpg',
                'nama' => 'Bunga lily putih',
                'deskripsi' => 'Bunga lily bersinar.',
                'jumlah'=> '22',
                'harga' => 1200,   
            ],
            [
                'image'=> 'kuning.jpg',
                'nama' => 'Bunga anggrek',
                'deskripsi' => 'Bunga anggrek baru.',
                'jumlah'=> '20',
                'harga' => 2500,   
            ],
        ];

        // Masukkan data produk ke dalam tabel produk
        foreach ($products as $product) {
            DB::table('products')->insert([
                'image'=> $product['image'],
                'nama' => $product['nama'],
                'deskripsi' => $product['deskripsi'],
                'jumlah'=> $product['jumlah'],
                'harga' => $product['harga'],
            ]);
        }
    }
}
