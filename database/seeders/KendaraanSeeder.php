<?php

namespace Database\Seeders;

use App\Models\Kendaraan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kendaraan::create([
            'name' => 'Al-phard',
            'plat' => 'N123A',
            'bbm' => '20 km/L',
            'service' => 20230223,
            'riwayat' => '23-03-23 malang',
            'status' => true,
        ]);
        Kendaraan::create([
            'name' => 'Mercy',
            'plat' => 'N1A',
            'bbm' => '20 km/L',
            'service' => 20231123,
            'riwayat' => '23-03-23 malang',
            'status' => true,
        ]);
        Kendaraan::create([
            'name' => 'Civik',
            'plat' => 'N3A',
            'bbm' => '20 km/L',
            'service' => 20231223,
            'riwayat' => '23-03-23 malang',
            'status' => true,
        ]);
        Kendaraan::create([
            'name' => 'Velfire',
            'plat' => 'N2A',
            'bbm' => '20 km/L',
            'service' => 20230523,
            'riwayat' => '23-03-23 malang',
            'status' => true,
        ]);
    }
}