<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailPenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 6,
                'harga' => 11000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 8000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 1,
                'barang_id' => 4,
                'harga' => 5,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 1,
                'harga' => 11000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 12500,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 6,
                'harga' => 11000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 5,
                'harga' => 12500,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 8000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 5,
                'harga' => 12500,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 12500,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 2,
                'harga' => 12500,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 6,
                'harga' => 11000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 2,
                'harga' => 12500,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 6,
                'barang_id' => 2,
                'harga' => 12500,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 6,
                'harga' => 11000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 7,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 2,
                'harga' => 12500,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 8,
                'barang_id' => 6,
                'harga' => 11000,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 3,
                'harga' => 8000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 5,
                'harga' => 12500,
                'jumlah' => 2,
            ],
            [
                'penjualan_id' => 9,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 4,
                'harga' => 10000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 6,
                'harga' => 11000,
                'jumlah' => 1,
            ],
            [
                'penjualan_id' => 10,
                'barang_id' => 3,
                'harga' => 8000,
                'jumlah' => 3,
            ],
    
        ];
        DB::table('t_penjualan_detail')->insert($data);
    }
}
