<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Order::create([
            'name' => 'robby',
            'kendaraan_id' => 1,
            'supir_id' => 3,
            'divisi_id' => 2,
            'tanggal_ambil' => 20231202,
            'tanggal_kembali' => 20231223,
        ]);
        Order::create([
            'name' => 'sugara',
            'kendaraan_id' => 3,
            'supir_id' => 2,
            'divisi_id' => 3,
            'tanggal_ambil' => 20230302,
            'tanggal_kembali' => 20231223,
        ]);
        Order::create([
            'name' => 'hildan',
            'kendaraan_id' => 3,
            'supir_id' => 3,
            'divisi_id' => 2,
            'tanggal_ambil' => 20231002,
            'tanggal_kembali' => 20231223,
        ]);
        Order::create([
            'name' => 'dandi',
            'kendaraan_id' => 2,
            'supir_id' => 1,
            'divisi_id' => 1,
            'tanggal_ambil' => 20230202,
            'tanggal_kembali' => 20231223,
        ]);
        Order::create([
            'name' => 'bintang',
            'kendaraan_id' => 2,
            'supir_id' => 3,
            'divisi_id' => 1,
            'tanggal_ambil' => 20231002,
            'tanggal_kembali' => 20231223,
        ]);
        Order::create([
            'name' => 'ania',
            'kendaraan_id' => 3,
            'supir_id' => 2,
            'divisi_id' => 1,
            'tanggal_ambil' => 20230102,
            'tanggal_kembali' => 20231223,
        ]);
        Order::create([
            'name' => 'ais',
            'kendaraan_id' => 1,
            'supir_id' => 2,
            'divisi_id' => 3,
            'tanggal_ambil' => 20230402,
            'tanggal_kembali' => 20231223,
        ]);
        Order::create([
            'name' => 'danang',
            'kendaraan_id' => 1,
            'supir_id' => 2,
            'divisi_id' => 1,
            'tanggal_ambil' => 20230402,
            'tanggal_kembali' => 20231223,
        ]);
        Order::create([
            'name' => 'ade',
            'kendaraan_id' => 2,
            'supir_id' => 2,
            'divisi_id' => 1,
            'tanggal_ambil' => 20230202,
            'tanggal_kembali' => 20231223,
        ]);
    }
}
