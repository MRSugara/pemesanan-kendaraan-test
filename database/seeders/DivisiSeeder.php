<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Divisi::create([
            'name' => 'administrasi',
        ]);
        Divisi::create([
            'name' => 'keuangan',
        ]);
        Divisi::create([
            'name' => 'marketing',
        ]);
    }
}
