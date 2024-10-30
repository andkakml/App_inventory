<?php

namespace Database\Seeders;

use App\Models\Barang;
use App\Models\User;
use App\Models\Jenis;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'superadmin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
        ]);

        Barang::create([
            'gambar' => '',
            'nama_barang' => 'sepatu',
            'id_jenis' => '1',
            'harga_beli' => '120000',
            'harga_jual' => '125000',
            'stok' => '20'
        ]);
        
        Jenis::create([
            'nama_jenis' => 'sepatu'
        ]);
    }
}
