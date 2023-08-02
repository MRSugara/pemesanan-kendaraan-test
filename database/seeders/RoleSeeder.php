<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Admin
        Role::create([
            'name' => 'Admin',
        ]);

        //User
        Role::create([
            'name' => 'Kabag',
        ]);
    }
}
