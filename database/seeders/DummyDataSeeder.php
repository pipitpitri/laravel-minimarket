<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Seeder;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Data Dummy Produk
        Product::insert([
            ['name' => 'Beras Pandan Wangi 5kg', 'price' => 75000, 'stock' => 20, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Minyak Goreng 2L', 'price' => 34000, 'stock' => 50, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Gula Pasir 1kg', 'price' => 16500, 'stock' => 35, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Kopi Kapal Api Special', 'price' => 12000, 'stock' => 40, 'created_at' => now(), 'updated_at' => now()],
        ]);

        // 2. Data Dummy Transaksi (dihubungkan ke user admin atau kasir)
        $user = User::first(); // Mengambil user pertama dari UserSeeder

        if ($user) {
            Transaction::insert([
                ['user_id' => $user->id, 'invoice_number' => 'INV-20261001-001', 'total_amount' => 125500, 'created_at' => now(), 'updated_at' => now()],
                ['user_id' => $user->id, 'invoice_number' => 'INV-20261001-002', 'total_amount' => 75000, 'created_at' => now(), 'updated_at' => now()],
                ['user_id' => $user->id, 'invoice_number' => 'INV-20261002-003', 'total_amount' => 34000, 'created_at' => now(), 'updated_at' => now()],
            ]);
        }
    }
}
