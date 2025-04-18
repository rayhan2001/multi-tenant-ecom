<?php

namespace Database\Seeders;

use App\Models\SSLCommerzCredential;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SSLCommerzSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        SSLCommerzCredential::updateOrCreate([
            'id' => 1,
        ], [
            'store_id' => 'test',
            'store_password' => 'test',
            'currency' => 'BDT',
            'success_url' => 'http://localhost:8000/success',
            'fail_url' => 'http://localhost:8000/fail',
            'cancel_url' => 'http://localhost:8000/cancel',
            'ipn_url' => 'http://localhost:8000/ipn',
            'init_url' => 'http://sandbox.sslcommerz.com/gwprocess/v4/api.php',
        ]);
    }
}
