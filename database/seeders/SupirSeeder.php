<?php

namespace Database\Seeders;

use App\Models\Supir;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SupirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Supir::create([
            'name' => 'Hildan',
            'status' => true,
        ]);
        Supir::create([
            'name' => 'Dandi',
            'status' => false,
        ]);
        Supir::create([
            'name' => 'Sugara',
            'status' => true,
        ]);
    }
}